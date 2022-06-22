<?php

namespace App\Http\Controllers;

use App\Imports\CampaignImport;
use App\Models\campaign;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;



class campaignController extends Controller
{

    public function import(Request $request)
    {
            $file = $request->file('file');

            Excel::import(new CampaignImport, $file);


            return back() ->withStatus('Campaign Created Successfully');
    }
}
