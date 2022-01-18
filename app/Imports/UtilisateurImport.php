<?php

namespace App\Imports;

use App\Utilisateur;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UtilisateurImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Utilisateur([
            'nomaffichage' =>$row['nomaffichage'],
            'addressemail' =>$row['addressemail'],
            'nom' =>$row['nom'],

        ]);
    }
}
