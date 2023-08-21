<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class ApprenantController extends Controller
{
    
   
    public function __construct()
    {
        $this->middleware('auth');

    }

    // public function allApprenant(){
    //     $apprenants = DB::table('apprenants');
    //     return view('backend.Apprenants.all-apprenant', compact('apprenants'));
    // }

    public function allApprenant()
    {
        $apprenants = Apprenant::paginate(10);
       
        return view ('backend.Apprenants.all-apprenant', [
            'apprenants' => $apprenants,
        ]);
    }

    public function AddApprenant()
    {
        $users =User::all();
        return view('backend.Apprenants.add-apprenant',[
            'users'=>$users
        ]);
    }

    public function InsertApprenant (Request $request)
    {
        $this->validate($request,[
            // 'nom' => 'required',
            // 'prenom' => 'required',
            // 'sexe' => 'required',
            // 'date' => 'required',
            // 'tel' => 'required',
            // 'user_id' => 'required',
            // 'adresse' => 'required'
          
        ]);

        $apprenant = new Apprenant();
        $apprenant->nom = $request->nom;
        $apprenant->prenom = $request->prenom;
        $apprenant->sexe = $request->sexe;
        $apprenant->date = $request->date;
        $apprenant->tel = $request->tel;
        $apprenant->adresse = $request->adresse;
        $apprenant->permis = $request->permis;
        $apprenant->etat = $request->etat;
        $apprenant->user_id = Auth::id();
        Alert::success('Apprenant Ajouter', 'Succes');
        $apprenant->save();
       return redirect('/all-apprenant');
        
    }

    public function EditApprenant($id)
    {
        $apprenant = Apprenant::find($id);
        return view('backend.Apprenants.edit-apprenant', compact('apprenant'));
    }

    public function UpdateApprenant(Request $request)
    {
        $apprenant = Apprenant::find($request->id);
        $apprenant->nom = $request->nom;
        $apprenant->prenom = $request->prenom;
        $apprenant->sexe = $request->sexe;
        $apprenant->date = $request->date;
        $apprenant->tel = $request->tel;
        $apprenant->adresse = $request->adresse;
        $apprenant->permis = $request->permis;
        $apprenant->etat = $request->etat;
        $apprenant->user_id = Auth::id();
        $apprenant->update();
        Alert::success('Apprenant Modifier', 'Succes');
        return redirect('/all-apprenant');

    }

    public function DeleteApprenant($id)
    {
        $apprenant = Apprenant::find($id);
        $apprenant->delete();
        return redirect('/all-apprenant');

    }
}
