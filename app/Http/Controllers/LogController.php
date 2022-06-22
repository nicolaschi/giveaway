<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Register;
use App\Models\lga;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    public function index(){



        if(!Auth::User()) {

            return view('auth.login');

            }

            elseif(Auth::User()->role=='admin'){

                $data=User::all();
                $count = User::all()->count();
                $countR = Register::all()->count();
                $single = Register::where('status', 'single')->count();
                $married = Register::where('status', 'married')->count();
                $widowed = Register::where('status', 'widowed')->count();
                $employed = Register::where('work', 'employed')->count();
                $unemployed = Register::where('work', 'unemployed')->count();

            return view('admin.dashboard', ['data'=>$data], compact('count','single','married','widowed', 'countR', 'employed','unemployed'));

            }  elseif (Auth::User()->role=='Cadmin'){

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
            elseif (Auth::User()->role =='LGadmin') {

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


        } elseif (Auth::User()->role =='LGagent') {

            $user = Auth::user();

        $listproducts = register::where('lga','=', $user->lga)->get();

        $count = user::where('lga','=', $user->lga)->count();

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



        return view('lagent.adashboard', compact('count', 'single', 'married', 'widowed', 'employed', 'unemployed'));

            }




}
}
