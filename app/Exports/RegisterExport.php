<?php

namespace App\Exports;

use App\Models\register;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegisterExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return register::all();
    }
}
