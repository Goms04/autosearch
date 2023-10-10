<?php

namespace App\Imports;

use App\Models\Client;
use App\Models\Domaine;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MyImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
        foreach ($collection as $collection) {
            $table1Data = [
                'nom' => $collection[0],
                'telephone' => $collection[3],
                'email' => $collection[4],
            ];
            $table1Record = Client::create($table1Data);

            $dateExpiration = date('Y-m-d', strtotime($collection[2]));

            $table2Data = [
                'client_id' => $table1Record->id,
                'nom_domaine' => $collection[1],
                'date_expiration' => $dateExpiration,
            ];
            Domaine::create($table2Data);
        }
    }
}
