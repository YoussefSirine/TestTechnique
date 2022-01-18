<?php

namespace App\Http\Controllers;
use App\Utilisateur;
use App\Group;
use Excel;
use Illuminate\Http\Request;
use App\Imports\UtilisateursImport;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function home()
    {
        $utilisateurs = Utilisateur::orderBy('nomaffichage')->get();
        $groups = Group::orderBy('nom')->get();
         return view('welcome', [
             'utilisateurs' => $utilisateurs,
             'groups' => $groups
         ]);

    }
    public function show($id)
    {
        $utilisateur = Utilisateur::find($id);

        return view('utilisateur', [
            'utilisateur' => $utilisateur
        ]);

    }
    public function showuser($id)
    {
        $group = Group::find($id);

        return view('groupdetail', [
            'group' => $group
            
        ]);
    }
    public function importForm()
    {
        return view('import-form');
    }
    public function import(Request $request)
    {
        Excel::import(new UtilisateurImport,$request->file);
        return "Record are imported successfully!";
    }
}
