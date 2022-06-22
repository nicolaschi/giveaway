<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Register;
use App\Models\lga;
use App\Models\campaign;
use App\Models\beneficiary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Helpers\Helper;



use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){

        $data=User::all();
        $count = User::all()->count();
        $countR = Register::all()->count();
        $single = Register::where('status', 'single')->count();
        $married = Register::where('status', 'married')->count();
        $widowed = Register::where('status', 'widowed')->count();
        $employed = Register::where('work', 'employed')->count();
        $unemployed = Register::where('work', 'unemployed')->count();

    return view('admin.dashboard', ['data'=>$data], compact('count','single','married','widowed', 'countR', 'employed','unemployed'));



    }

    public function single(){


        $data = Register::where('status', 'single')->get();

    return view('admin.single', ['data'=>$data]);


    }
    public function married(){

        $data = Register::where('status', 'married')->get();


    return view('admin.married', ['data'=>$data]);



    }
    public function widowed(){

        $data = Register::where('work', 'employed')->get();

    return view('admin.widowed', ['data'=>$data]);



    }
    public function employed(){


        $data = Register::where('work', 'employed')->get();

    return view('admin.employed', ['data'=>$data]);



    }

    public function unemployed(){


        $data = Register::where('work', 'unemployed')->get();

    return view('admin.unemployed', ['data'=>$data]);



    }

    public function createcampaign(){

        return view('admin.createcampaign');

    }

    public function campaign(){

        $data=campaign::all();

        return view('admin.campaign', ['data'=>$data]);

    }


    public function profile(){

        return view('admin.profile');

    }

    public function editprofile(){

        return view('admin.editprofile');

    }

    public function createuser(){

        return view('admin.createuser');

    }

    public function users(){


        $data = DB::table('users')->simplePaginate(5);

        return view('admin.users', ['data'=>$data]);

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

    public function createlga(){

        return view('admin.createlga');

    }

    public function lga(){

        $data=lga::all();

        return view('admin.lga', ['data'=>$data]);

    }

    public function addlga(Request $request){

        $request->validate([
            'name'=>'required|string',

                ]);

        $dat=new lga;

        $dat->name=$request->name;

        $dat->save();

         return redirect()->back()->with('message', 'lga successfully added');


    }

    public function approve($id){

        $data=User::find($id);

        $data->status='1';

        $data->save();

        return redirect()->back();

    }

    public function deny($id){

        $data=User::find($id);

        $data->status='0';

        $data->save();

        return redirect()->back();

    }


    public function registeeredusers(){

        $data=register::all();

        return view('admin.registeeredusers',  ['data'=>$data]);


    }

    public function camp(Request $request){

        $request->validate([
            'name'=>'required|string',
            'lga'=>'required',
                ]);

        $dat=new campaign();

        $dat->name=$request->name;
        $dat->lga=$request->lga;

        $dat->save();

         return redirect()->back()->with('message', 'User successfully added');


    }

    public function importt(Request $request)
    {

        // $nin= Register::select('nin')->get();

        $filee = $request->file('filee')->store('docs');

        $file =Storage::path($filee);

        $unique_id = Helper::IDGenerator(new beneficiary, 'unique_id', 6, 'GRB'); /** Generate id */

        $q = new beneficiary;


        if (($handle = fopen ($file, 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE )
            {


                if( DB::table('registers')->where('nin','=', $data[1]))
                {
                    $csv_data = new beneficiary();
                    $csv_data->amount = $data [0];
                    $csv_data->nin = $data[1];
                    $csv_data->unique_id = $data [2];
                    $csv_data->campaign_id=$request->campaign_id;
                    $csv_data->unique_id= $unique_id;

                    $csv_data->save ();

                    return redirect()->back()->with('message', 'File Uploaded successfully added');
                } else {
                    return redirect()->back()->with('message', 'File not Uploaded ploaded');

                }


            }
            fclose ( $handle );
        }

    }



}


