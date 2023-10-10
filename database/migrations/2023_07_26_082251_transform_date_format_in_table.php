<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class TransformDateFormatInTable extends Migration
{
    public function up()
    {
        // Récupérer les enregistrements de la table
        $data = DB::table('domaines')->get();

        foreach ($data as $item) {
            // Transformez le format de date avec Carbon
            $nouvelleDate = Carbon::createFromFormat('Y-m-d', $item->date_expiration)->format('d/m/Y');

            // Mettez à jour la colonne "date" avec la nouvelle date
            DB::table('domaines')
                ->where('id', $item->id) // Supposons que "id" est la clé primaire de domaines
                ->update(['date_expiration' => $nouvelleDate]);
        }
    }

    // Méthode "down" pour rollback en cas de besoin
    public function down()
    {
        // Remettez les dates au format "AAAA-MM-JJ" en cas de rollback
        $data = DB::table('domaines')->get();

        foreach ($data as $item) {
            // Transformez le format de date avec Carbon
            $ancienneDate = Carbon::createFromFormat('d/m/Y', $item->date_expiration)->format('Y-m-d');

            // Mettez à jour la colonne "date" avec l'ancienne date
            DB::table('domaines')
                ->where('id', $item->id) // Supposons que "id" est la clé primaire de domaines
                ->update(['date_expiration' => $ancienneDate]);
        }
    }
}
