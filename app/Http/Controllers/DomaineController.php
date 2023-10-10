<?php

namespace App\Http\Controllers;

use App\Imports\MyImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Client;
use App\Models\Domaine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DomaineController extends Controller
{
    //

    public function accueil()
    {
        return view('accueil');
    }

    public function import()
    {

        return view('import');
    }

    public function query()
    {

        return view('result');
    }


    public function display()
    {
        $search = Domaine::all();
        $client = Client::all();
        //here I create the link with the stationnnement's name route
        return view('search', compact('search', 'client'));
    }

    //controller d'ajout a la base de données
    public function create(Request $request)
    {
        $request->validate([
            'nom' => 'string',
        ]);

        //Here I just create the person in order to recycle his id
        $client = Client::create([
            'nom' => $request->nom,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);


        Domaine::create([
            'nom_domaine' => $request->nom_domaine,
            'date_creation' => $request->date_creation,
            'date_expiration' => $request->date_expiration,
            'client_id' => $client->id,
        ]);

        return redirect()->route('search')->with('message', 'Domain name created successfully.');
    }

    //la fonction consistant a supprimer une entité de la base de données
    public function delete($id)
    {
        $dom = Domaine::find($id);
        $dom->destroy($id);
        return redirect()->route('search')->with('message', 'domaine supprimée avec succès');
    }



    public function update(Request $request, $id)
    {
        //
        $dom = $request->validate([
            'nom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'nom_domaine' => 'required',
            /* 'date_creation' => 'date', */
            'date_expiration' => 'required',
        ]);

        $st = Domaine::find($id);
        // dd($st);ù

        $st->update($dom);
        return redirect()->route('search')->with('success', 'Domain & customer updated successfully.');
    }


    public function result(Request $request)
    {
        $search = Domaine::all();
        $client = Client::all();
        $inputDate = $request->input('ladate');

        // Convertissez la date entrée en objet Carbon pour faciliter les manipulations
        $inputDate = Carbon::parse($inputDate);

        // Calculez la date limite supérieure en ajoutant 30 jours à la date entrée
        $upperLimitDate = $inputDate->copy()->addDays(30);

        // Calculez la date limite inférieure en soustrayant 30 jours à la date entrée
        $lowerLimitDate = $inputDate;

        $results = Domaine::join('clients', 'domaines.client_id', '=', 'clients.id')
            ->whereBetween('domaines.date_expiration', [$lowerLimitDate, $upperLimitDate])
            ->get();

        // Retournez les résultats à la vue
        return view('result', ['results' => $results], compact('client', 'search'));
    }


    public function importcsv(Request $request)
    {


        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('csv_file');

        Excel::import(new MyImport, $file);

        return redirect()->route('search')->with('success', 'Importation terminée avec succès.');

    }
}
