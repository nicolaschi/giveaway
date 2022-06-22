<?php

namespace App\Imports;

use App\Models\campaign;
use Maatwebsite\Excel\Concerns\ToModel;

class CampaignImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new campaign([
            'campaign_name' => $row[0],
            'user_name' => $row[1],
            'email' => $row[2],
            'phone_number' => $row[3],
            'nin' => $row[4],
            'amount' => $row[5],
            'unique_id' => $row[6],
        ]);
    }
}
