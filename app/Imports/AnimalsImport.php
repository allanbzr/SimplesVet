<?php

namespace App\Imports;
use App\Models\Animal;
use App\Models\Species;
use App\Models\AnimalRegister;
use App\Models\Contact;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AnimalsImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Animal::create([
                'Id'                    => $row[0],
                'IdCliente'             => $row[1],
                'Nome'                  => $row[2],
                'Raca'                  => $row[3],
                'Especie'               => $row[4],
                'HistoricoClinico'      => $row[5],
                'Nascimento'            => $row[6],
            ]);

            $species = Species::firstOrCreate([
                'Especie'     => $row[4],
            ]);

            AnimalRegister::firstOrCreate([
                'Id'                    => $row[0],
                'IdCliente'             => $row[1],
                'IdEspecie'             => $species->id,
                'Nome'                  => $row[2],
                'Raca'                  => $row[3],
                'HistoricoClinico'      => $row[5],
                'Nascimento'            => $row[6],
            ]);

        }
    }

}


