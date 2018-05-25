<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $list_projects = Project::all();
        return view('projects.index', [
            'projects' => $list_projects
        ]);
    }

    public function novoView()
    {
        return view('projects.welcomepage');
    }

    public function importView()
    {
        return view('projects.import_project');
    }

    public function import_projectView()
    {
        return view('projects.import');
    }

    public function store(Request $request)
    {
        date("d/M/Y", strtotime('started_date'));
        date("d/M/Y", strtotime('end_date'));
        Project::create($request->all());
        return redirect("/projects/novo");
    }

    public function show(Request $request)
    {
        $resultado = DB::table('projects')->where('name', $request->name)->first();
        #$name = $request->projeto;
        #$projeto = Project::find($name);
        #$data1 = $projeto['started_date'];
        #$data2 = $projeto['end_date'];
        #$id = $projeto['id'];
        #$nome = $projeto['name'];
        #echo $data;
        return view('projects.import')->with('resultado', $resultado);
    }

    #public function show(Request $request)
    #{
    #   $id = $request->projeto;
    #    $projeto = Project::find($id);
    #   $data = $projeto['started_date'];
    #    echo $data;
    #    //return view('project.show')->with('data', $data);
    #}


}
