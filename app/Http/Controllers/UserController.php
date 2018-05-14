<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckDataInput;
use Illuminate\Support\Facades\Input;
use App\UserMaster;
use App\Library;
//use notificationMgs/ Toastr;

class UserController extends Controller
{
    public function index() {
    	$users = UserMaster::all();
    	$libs = Library::where('library_id', '=', 1)->get();
    	return view('index')->with('libs', $libs)->with('users', $users);
    }
		
    public function save(CheckDataInput $req) {
        $user = new UserMaster;
        $id = $req->input('userid');
        $data = UserMaster::find($id);
        //dd($data->avatar);
        if (isset($data->user_cd)) {
            //$input = Input::all();
            if ($req->hasFile('fileimg')) {
                $file_name = time() . '-' .$req->file('fileimg')->getClientOriginalName();
                $user->avatar = $file_name;
                $req->file('fileimg')->move('Image', $file_name);
                $user->avatar = $file_name;
                //delete img
                $a = $data->avatar;
                $b = ('Image/'.$a);
                File::delete($b);
                // end delete
                $a = $file_name;
            }else
            {
                $data->avatar = $data->avatar;
            }
            $data->user_cd = $req->input('userid');
            $data->user_nm = $req->input('shortname');
            $data->user_ab = $req->input('kataname');
            $data->user_kn = $req->input('fullname');
            $data->password = $req->input('password');
            $data->user_ard = $req->input('address');
            $data->birth_day = $req->input('birthday');
            $data->gender = $req->input('gender');
            $data->note = $req->input('note');
            // dd($user);
            $data->save();
            return redirect('/')->with('success','Craete User successfull');
            
        }else {
            if ($req->hasFile('fileimg')) {
                $file_name = time() . '-' .$req->file('fileimg')->getClientOriginalName();
                $req->avatar = $file_name;
                $req->file('fileimg')->move('Image', $file_name);
                $user->avatar = $file_name;
            }else
            {
                $req->avatar = '';
            }
        	$user->user_cd = $req->input('userid');
        	$user->user_nm = $req->input('shortname');
        	$user->user_ab = $req->input('kataname');
        	$user->user_kn = $req->input('fullname');
        	$user->password = $req->input('password');
        	$user->user_ard = $req->input('address');
        	$user->birth_day = $req->input('birthday');
        	$user->gender = $req->input('gender');
        	$user->note = $req->input('note');
        	$req->session()->flash('message.content', 'Task was successful!');
            //dd($user);
        	$user->save();
        	return redirect('/')->with('success','Craete User successfull');
        }
    }

    public function search(Request $request) {
    	$key = $request->input('userid');
    	$libs = Library::where('library_id', '=', 1)->get();
    	$users = UserMaster::find($key);
    	//var_dump($users);
    	return response()->json([
    		'users' => $users,
            'libs' => $libs
		]);
    }

    public   function delete(Request $req) {
    public function deleted(Request $req) {
        $id = $req->input('userid');
        dd($id);
        return view('/');
    }    

    public function searchuser(Request $req) {
    	$req->session()->flash('message.content', 'Task was successful!');
    	return view('searchuser');
    }
}
