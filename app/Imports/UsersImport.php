<?php

namespace App\Imports;

use App\Customer;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Customer([
            'name'  => $row[1],
            'last_name'  => $row[2],
            'email'  => $row[3],
            'birth_date'  => $row[4],
        ]);
    }
}
