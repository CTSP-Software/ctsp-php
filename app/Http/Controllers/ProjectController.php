<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function store(Request $request, $id)
    {
        date("d/M/Y", strtotime('started_date'));
        date("d/M/Y", strtotime('end_date'));
        Project::create($request->all());

        $user = User::find($id);
        $user->status = 1;
        $user->save();

        $resultado1 = $request->name;
        #return redirect("/projects/novo") -> with('resultado1', $resultado1);
        return view('projects.welcomepage')->with('resultado1', $resultado1);
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

    public function loginView()
    {
        return view('projects.login');
    }

    public function cadastroView()
    {
        return view('projects.register');
    }

    public function papeis($resultado2)
    {
        return view('projects.cadastro_papeis')->with('resultado2', $resultado2);
    }

    public function membros($resultado2)
    {
        return view('projects.team_members')->with('resultado2', $resultado2)->with('users', User::all());
    }

    #public function show(Request $request)
    #{
    #   $id = $request->projeto;
    #    $projeto = Project::find($id);
    #   $data = $projeto['started_date'];
    #    echo $data;
    #    //return view('project.show')->with('data', $data);
    #}

    public  function productBacklog($resultado2)
    {
        return view('projects.product_backlog')->with('resultado2', $resultado2);
    }
}
