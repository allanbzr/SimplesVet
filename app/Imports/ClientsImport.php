<?php

namespace App\Imports;
use App\Models\Client;
use App\Models\People;
use App\Models\Contact;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClientsImport implements ToCollection
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
            
                Client::firstOrCreate([
                    'Id'     => $row[0],
                    'Nome'     => $row[1],
                    'Telefone1'    => $row[2],
                    'Telefone2' => $row[3],
                    'Email' => $row[4],
                ]);

            if ($row[4] != null) {
                People::create([
                    'Id'     => $row[0],
                    'Nome'     => $row[1],
                ]);

                Contact::create([
                    'IdCliente' => $row[0],
                    'Telefone1'    => $row[2],
                    'Telefone2' => $row[3],
                    'Email' => $row[4],
                ]);
            }

        }
    }

}
