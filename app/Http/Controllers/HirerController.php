<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Table_projects;
use Auth;
use DB;
use App\Feedback;

class HirerController extends Controller
{
     public function registerHirer()
    {
    	return view('register.hirer');
    }

     public function store()
    {
    	$user_type='hirer';
    	$password = request('password');
    	User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'user_type' => $user_type,
    		'password' => Hash::make($password),
    	]);
    	return redirect('user/login');
    }

    public function createpost()
    {
        return view('project.post_a_project');
    }

    public function store_project()
    {
        $name = Auth::user()->name;
        Table_projects::create([
            'creator_name' => $name,
            'project_title' => request('project_title'),
            'project_body' => request('project_body'),
            'skills_required' => request('skills_required'),
            'cost_per_hour' => request('cost_per_hour'),
        ]);
        return redirect('/project/view_projects');
    }

     public function myproject()
    {

        $projects = DB::table('table_projects')->get()->where('creator_name', Auth::user()->name);


        return view('project.my_project', compact('projects'));
    }

    
    public function project_responces(){

        $projects = DB::table('applied_projects')
            ->select('applied_projects.creator_name','applied_projects.project_title','users.name')
            ->join('users','users.id','=','applied_projects.applicant_id')
            ->where(['applied_projects.status' => 'NC','creator_name'=> Auth::user()->name])
            ->get();

        $c_projects = DB::table('applied_projects')
            ->select('applied_projects.creator_name','applied_projects.project_title','users.name')
            ->join('users','users.id','=','applied_projects.applicant_id')
            ->where(['applied_projects.status' => 'C','creator_name'=> Auth::user()->name])
            ->get();

        // $projects = DB::table('applied_projects')->where('creator_name', Auth::user()->name)->where('status', 'NC')->get();

        return view('project.hirer_applied_projects', compact('projects','c_projects'));
    }

    public function feedback(){

        $hirelings = DB::table('users')->where('user_type', 'hireling')->get();

        return view('feedback', compact('hirelings'));
    }

    public function submit_feedback(){
        
        $name = Auth::user()->name;
        Feedback::create([
            'review_by' => $name,
            'name' => request('name'),
            'rate' => request('rate'),
            'review' => request('review'),
        ]);
        return redirect('/hirer/project_responces');
    }

}
