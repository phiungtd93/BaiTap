<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\UserMaster;
use App\Library;
//use notificationMgs;

class UserController extends Controller
{
    public function index() {
    	$users = UserMaster::all();
    	$libs = Library::where('library_id', '=', 1)->get();
    	return view('index')->with('libs', $libs)->with('users', $users);
    }
	// public	function delete(Request $req) {
    	
 //    }		
    public function save(Request $req) {
	    $this->validate($req, [
	        'userid' => 'required|unique:posts|max:255',
	        'shortname' => 'required',
	    ]);
        $user = new UserMaster;
    	//dd($req->file('fileimg'));
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
    	$user->save();
    	return redirect('/searchuser')->with('success','Craete User successfull');
    }

    

    public function search(Request $request) {
    	$key = $request->input('userid');
    	$libs = Library::where('library_id', '=', 1)->get();
    	$users = UserMaster::find($key);
    	//var_dump($users);
    	return response()->json([
    		'users' => $users,
		]);
    }

    public function searchuser(Request $req) {
    	$req->session()->flash('message.content', 'Task was successful!');
    	return view('searchuser');
    }
}
