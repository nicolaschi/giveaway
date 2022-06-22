<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\register;

class RegisterController extends Controller
{
    public function adduser(Request $request){

        $request->validate([
            'fname'=>'required|string',
            'lname'=>'required|string',
            'day'=>'required',
            'month'=>'required',
            'year'=>'required',
            'email'=>'email|unique:registers,email',
            'lga'=>'required|string',
            'lcda'=>'required|string',
            'address'=>'required|string',
            'phone_number'=>'required|numeric|min:11',
            'nin'=>'required|min:11'
                ]);

        $dat=new Register;

        $dat->fname=$request->fname;
        $dat->lname=$request->lname;
        $dat->day=$request->day;
        $dat->month=$request->month;
        $dat->year=$request->year;
        $dat->email=$request->email;
        $dat->lga=$request->lga;
        $dat->lcda=$request->lcda;
        $dat->phone_number=$request->phone_number;
        $dat->address=$request->address;
        $dat->gender=$request->gender;
        $dat->status=$request->status;
        $dat->work=$request->work;
        $dat->nin=$request->nin;


        $dat->save();

         return redirect()->back()->with('message', 'Registration was successful');


    }

}
