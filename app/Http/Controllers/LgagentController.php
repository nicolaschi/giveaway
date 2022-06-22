<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Register;
use App\Models\lga;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LgagentController extends Controller
{
    public function adashboard(){


        $user = Auth::user();

        $listproducts = register::where('lga','=', $user->lga)->get();

        $single = DB::table('registers')
            ->where('lga','=', $user->lga)
                ->where(function ($query){
                        $query->where('status', 'single');
                     })->count();

        $married = DB::table('registers')
            ->where('lga','=', $user->lga)
                ->where(function ($query){
                $query->where('status', 'married');
                                       })->count();

        $widowed = DB::table('registers')
             ->where('lga','=', $user->lga)
                ->where(function ($query){
                $query->where('status', 'widowed');
                                        })->count();


        $employed = DB::table('registers')
             ->where('lga','=', $user->lga)
                 ->where(function ($query){
                  $query->where('work', 'employed');
                                         })->count();

         $unemployed = DB::table('registers')
            ->where('lga','=', $user->lga)
                ->where(function ($query){
                 $query->where('work', 'unemployed');
                                     })->count();


        $count = user::where('lga','=', $user->lga)->count();


    return view('lagent.adashboard', compact('count', 'single', 'married', 'widowed', 'employed', 'unemployed'));

    }

    public function aprofile(){

        return view('lagent.aprofile');

    }

    public function aeditprofile(){

        return view('lagent.aeditprofile');

    }
   



    public function single(){

        $user = Auth::user();

        $data = DB::table('registers')
        ->where('lga','=', $user->lga)
            ->where(function ($query){
                    $query->where('status', 'single');
                 })->get();

        return view('lagent.single', ['data'=>$data]);

    }



    public function ausers(){

        $user = Auth::user();

        $listproducts = register::where('lga','=', $user->lga)->get();




    return view('lagent.ausers', compact('listproducts'));

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

}
