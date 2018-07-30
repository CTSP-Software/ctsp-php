<?php

namespace App\Http\Controllers;

use App\Project;
use App\role;
use App\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;
use Session;
use Illuminate\Support\Facades\DB;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //public function __construct()
    //{
    //    $this->middleware('status');
    //}

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file')->store('uploads', 'public');
        var_dump($file);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = auth()->user();
        $data = $request->all();

        if($data['password'] != null)
            $data['password'] = bcrypt($data['password']);
        else
            unset($data['password']);

        $data['image'] = $user->image;
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            if($user->image)
                $name = $user->image;
            else
                $name = $user->id.kebab_case($user->name);

            $extension = $request->image->extension();
            $nameFile = "{$name}.{$extension}";

            $data['image'] = $nameFile;

            $upload = $request->image->storeAs('users', $nameFile);

            if(!$upload)
                return redirect()
                            -> back()
                            ->with('error', 'Falha ao fazer o upload da imagem');
        }

        $update = $user->update($data);

        if($update)
           return redirect()
                        ->route('perfil')
                        ->with('success', 'Sucesso ao atualizar!');

        return redirect()
                    ->back()
                    ->with('error', 'Falha ao atualizar!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function show_perfil() {
        return view('projects.meu_perfil');
    }

    public function status($id, $project) {
        $user = User::find($id);

        $user->status = 1;
        $user->save();

        $resultado6 = DB::table('projects')->where('name', $project)->first();
        $resultado7 = $resultado6->id;

        $role = new role;
        $role->project_id = $resultado7;
        $role->user_id = $id;
        $role->function = "Development team";
        $role->save();

        Session::flash('success', 'Succesfully Add for the team.');

        return redirect()->back();
    }

    public function not_status($id, $project) {
        $user = User::find($id);

        $user->status = 0;
        $user->save();

        $resultado8 = DB::table('projects')->where('name', $project)->first();
        $resultado9 = $resultado8->id;

        $resultado10 = DB::table('roles')->where('project_id', $resultado9)->where('user_id', $id)->first();
        $resultado11 = $resultado10->id;

        $role = role::find($resultado11);
        $role->delete();

        Session::flash('success', 'Succesfully Add for the team.');

        return redirect()->back();
    }

}
