<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Register;
use App\Models\lga;
use Illuminate\Support\Facades\DB;

class CadminController extends Controller
{

    public function sdashboard(){

        $data=User::all();
        $count = User::all()->count();
        $countR = Register::all()->count();
        $single = Register::where('status', 'single')->count();
        $married = Register::where('status', 'married')->count();
        $widowed = Register::where('status', 'widowed')->count();
        $employed = Register::where('work', 'employed')->count();
        $unemployed = Register::where('work', 'unemployed')->count();

    return view('companyadmin.sdashboard', ['data'=>$data], compact('count','single','married','widowed', 'countR', 'employed','unemployed'));



    }

    public function screatecampaign(){

        return view('companyadmin.screatecampaign');

    }


    public function sprofile(){

        return view('companyadmin.sprofile');

    }


    public function seditprofile(){

        return view('companyadmin.seditprofile');

    }



    public function updateuser($id)
    {
            $data=user::find($id);
            return view('admin.updateuser', ['data'=>$data]);
    }

    public function updatua(Request $request, $id){

        $data = User::find($id);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->role=$request->role;
        $data->phone_number=$request->phone_number;

        $data->save();

        return redirect()->back();

    }

    public function sregisteeredusers(){

        $data=register::all();

        return view('companyadmin.sregisteeredusers',  ['data'=>$data]);


    }

}
