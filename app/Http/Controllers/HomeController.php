<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Applied_projects;
use Auth;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function viewpro()
    {
        $projects = DB::table('table_projects')->where('status', 'NC')->get();
        return view('project.view_projects', compact('projects'));
    }

    public function view_project($id){
        $project = DB::table('table_projects')->get()->where('id', $id)->first();
        return view('project.project', compact('project'));
    }

    public function view_projectt($name){
        $name1 = str_replace("%\%20%", " ", $name);
        $project = DB::table('table_projects')->get()->where('project_title', $name1)->first();
        return view('project.in_project', compact('project'));
    }


    public function project_complete(){
        $name = request('project_title');
       DB::table('applied_projects')
            ->where('project_title', "$name")
            ->update(['status' => "C"]);
        DB::table('table_projects')
            ->where('project_title', "$name")
            ->update(['status' => "C"]);
        return redirect('/project/view_projects');
    }

    public function apply_project(){
        

        Applied_projects::create([
            'creator_name' => request('creator_name'),
            'project_title' => request('project_title'),
            'applicant_id' => Auth::user()->id,
        ]);
        return redirect('/applied_projects');
    }

    public function generate_invoice(){
        $title = request('project_title');
        $cost = request('cost');
        return view('project.invoice', compact('title', 'cost'));
    }

    public function all_feedback(){
        $feedbacks = DB::table('feedback')->get();
        return view('all_feedback', compact('feedbacks'));
    }
}
