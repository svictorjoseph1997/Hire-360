<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use DB;

class AdminController extends Controller
{
    public function index()
    {
  	  	if(Gate::allows('isAdmin')){
	    	return view('admin.index_admin');
  	  	}else{
  	  		return redirect('/user/login');
  	  	}
    }

    public function diff(){

      if (Gate::allows('isAdmin')) {
  	    return redirect ('/admin/index_admin');
      }elseif (Gate::allows('isHirer')) {
  	    return redirect ('/');
      }elseif (Gate::allows('isHireling')) {
  	    return redirect ('/');
      }
    }

    public function all_applied_projects(){
      if (Gate::allows('isAdmin')) {

        $projects = DB::table('applied_projects')->get();

        return view('project.admin_all_applied_projects', compact('projects'));
      }
    }


}
