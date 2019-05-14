<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
use Auth;

class HirelingController extends Controller
{
     public function registerHireling()
    {
    	return view('register.hireling');
    }

    public function store()
    {
    	$user_type='hireling';
    	$password = request('password');
    	User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'user_type' => $user_type,
    		'password' => Hash::make($password),
    	]);
    	return redirect('user/login');
    }

    public function applied_projects(){

        $projects = DB::table('applied_projects')->where('applicant_id', Auth::user()->id)->where('status', 'NC')->get();
        $c_projects = DB::table('applied_projects')->where('applicant_id', Auth::user()->id)->where('status', 'C')->get();
        return view('project.hireling_applied_projects', compact('projects','c_projects'));

    }


}
