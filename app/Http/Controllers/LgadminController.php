<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Register;
use App\Models\lga;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LgadminController extends Controller
{

    public function ldashboard(){


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

         $countR = DB::table('registers')
            ->where('lga','=', $user->lga)->count();


        $count = user::where('lga','=', $user->lga)->count();

    return view('ladmin.ldashboard', compact('count', 'single', 'married', 'widowed', 'employed', 'unemployed', 'countR'));

    }

    public function lagents(){

        $user = Auth::user();

        $data = user::where('lga','=', $user->lga)->get();

        return view('ladmin.lagents', ['data'=>$data]);

    }

    public function lprofile(){

        return view('ladmin.lprofile');

    }

    public function portfolio(){

        return view('ladmin.portfolio');

    }

    public function buy(){

        return view('ladmin.buy');

    }

    public function sell(){

        return view('ladmin.sell');

    }

    public function enti(){

        return view('ladmin.enti');

    }

    public function contact(){

        return view('ladmin.contact');

    }
 

    public function leditprofile(){

        return view('ladmin.leditprofile');

    }


    public function lcreateuser(){

        return view('ladmin.lcreateuser');

    }

    // public function lusers(){

    //     $data=User::all();

    //     return view('ladmin.lusers', ['data'=>$data]);

    // }


    public function lusers(){

        $user = Auth::user();

        $listproducts = register::where('lga','=', $user->lga)->get();




    return view('ladmin.lusers', compact('listproducts'));

    }


    public function adduser(Request $request){

        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'lga'=>'required',
            'password'=>'required'
                ]);

        $dat=new User;

        $dat->name=$request->name;
        $dat->email=$request->email;
        $dat->role=$request->role;
        $dat->lga=$request->lga;
        $dat->password=bcrypt ($request->password);

        $dat->save();

         return redirect()->back()->with('message', 'User successfully added');


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
