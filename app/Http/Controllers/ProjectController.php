<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

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
        return view('projects.create');
    }

    public function store(Request $request)
    {
        Project::create($request->all());
        return redirect("/projects")->with("message", "Projeto criado com sucesso!");
    }
}
