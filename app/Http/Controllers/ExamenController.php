<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Moniteur;
use App\Models\Examen;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ExamenController extends Controller
{
   

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function AllExamen() {
        $examens = Examen::paginate(4);
        return view('backend.examen.all-examen', compact('examens'));
    }

    public function AddExamen()
    {
        $apprenant = Apprenant::all();
        $moniteurs = Moniteur::all();
        $vehicules=Vehicule::all();


        return view('backend.examen.add-examen', [
            'apprenants' =>$apprenant,
            'moniteurs'=>$moniteurs,
            'vehicules'=>$vehicules
        ]);
    }

    public function InsertExamen (Request $request)
    {
        $this->validate($request, [
            'apprenant_id' => 'required',
            'moniteur_id' => 'required',
            'date' => 'required',
            'heureDebut' => 'required',
            'heureFin' => 'required',
            'typeExamen' => 'required',
            'vehicule_id' => 'required',
            'etat' => 'required',
            'resultat' => 'required',




        ]);

        $examen = new Examen();
        $examen->apprenant_id = $request->apprenant_id;
        $examen->moniteur_id = $request->moniteur_id;
        $examen->date = $request->date;
        $examen->heureDebut = $request->heureDebut;
        $examen->heureFin = $request->heureFin;
        $examen->typeExamen = $request->typeExamen;
        $examen->vehicule_id = $request->vehicule_id;
        $examen->etat = $request->etat;
        $examen->resultat = $request->resultat;
        $examen->save();
        Alert::success('Examen Ajouter', 'avec Succes');
        return redirect('/all-examen');

    }

    public function EditExamen ($id)
    {
     
        $apprenants = Apprenant::all();
        $moniteurs = Moniteur::all();
        $vehicules=Vehicule::all();
        $examens = Examen::find($id);
        return view('backend.examen.edit-examen',compact('examens','apprenants','moniteurs', 'vehicules') 
            
    );
    }


    public function  UpdateExamen(Request $request)
    {
        $examen = new Examen();
        $examen->apprenant_id = $request->apprenant_id;
        $examen->moniteur_id = $request->moniteur_id;
        $examen->date = $request->date;
        $examen->heureDebut = $request->heureDebut;
        $examen->heureFin = $request->heureFin;
        $examen->typeExamen = $request->typeExamen;
        $examen->vehicule_id = $request->vehicule_id;
        $examen->etat = $request->etat;
        $examen->resultat = $request->resultat;
        $examen->update();
        Alert::success('Examen Modifier', 'avec Succes');
        return redirect('/all-examen');
    }
    
    public function DeleteExamen($id)
    {
        $examen = Examen::find($id);
        $examen->delete();
        return redirect('/all-examen')->with('status',  ' Supprimer avec succès');
    }
}
