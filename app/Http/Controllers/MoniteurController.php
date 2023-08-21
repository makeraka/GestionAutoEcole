<?php

namespace App\Http\Controllers;

use App\Models\Moniteur;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MoniteurController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function AllMoniteur()
    {
        $moniteurs = Moniteur::paginate(4);
        return view('backend.moniteur.all-moniteur', compact('moniteurs'));
    }

    // ajout moniteur

    public function AddMoniteur()
    {
        return view('backend.moniteur.add-moniteur');

    }

    // traitement d'ajout
    public function InsertMoniteur(Request $request)
    {
       $this->validate($request,[

        'nom' => 'required',
       'prenom' => 'required',
        'sexe' => 'required',
        'adresse' => 'required',
       'tel' => 'required',
       'poste' => 'required',

       ]);

       $moniteur = new Moniteur();
       $moniteur->nom = $request->nom;
       $moniteur->prenom = $request->prenom;
       $moniteur->sexe = $request->sexe;
       $moniteur->adresse = $request->adresse;
       $moniteur->tel= $request->tel;
       $moniteur->poste = $request->poste;
       $moniteur->save();
       Alert::success('Moniteur Ajouter', 'Sucess');
       return redirect('/all-moniteur')->with('status', 'Moniteur ajouter avec succès');
    }

    // la modification de moniteur
    public function EditMoniteur($id)
    {
        $moniteurs = Moniteur::find($id);
        return view('backend.moniteur.edit-moniteur', compact('moniteurs'));
    }

     // **************************************** TRAITEMENT DE MODIFICATION DE Moniteur ******************************************************
    
     public function UpdateMoniteur(Request $request)
     {
        $moniteur = Moniteur::find($request->id);
       $moniteur->nom = $request->nom;
       $moniteur->prenom = $request->prenom;
       $moniteur->sexe = $request->sexe;
       $moniteur->adresse = $request->adresse;
       $moniteur->tel= $request->tel;
       $moniteur->poste = $request->poste;
       $moniteur->update();
       Alert::success('Moniteur Modifier', 'Sucess');
       return redirect('/all-moniteur')->with('status', 'Moniteur Modifier avec succès');
        
     }

     // **************************************** SUPPRESSION DE L'APPRENANT ******************************************************
     public function DeleteMoniteur($id)
     {
        $moniteur = Moniteur::find($id);
        $moniteur->delete();
        return redirect('/all-moniteur')->with('status', 'Moniteur Supprimer avec succès');
     }
}
