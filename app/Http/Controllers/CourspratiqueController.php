<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Courspratique;
use App\Models\Moniteur;
use App\Models\Seance;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class CourspratiqueController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function AllPratique() {
        $Courspratiques = Courspratique::paginate(4);
        return view('backend.pratique.all-pratique', compact('Courspratiques'));
    }

    public function AddPratique()
    {
        $seances = Seance::all();
        $apprenants = Apprenant::all();
        $moniteurs = Moniteur::all();
        $vehicules=Vehicule::all();


        return view('backend.pratique.add-pratique', [

            'seances' =>$seances,
            'apprenants' =>$apprenants,
            'moniteurs'=>$moniteurs,
            'vehicules'=>$vehicules
        ]);
    }

    public function InsertPratique (Request $request)
    {
        $this->validate($request, [
            'seance_id' => 'required',
            'moniteur_id' => 'required',
            'dateCour' => 'required',
            'heureDebut' => 'required',
            'heureFin' => 'required',
            'vehicule_id' => 'required',
            'apprenant_id' => 'required',

        ]);

        $pratiques = new Courspratique();
        $pratiques->seance_id = $request->seance_id;
        $pratiques->moniteur_id = $request->moniteur_id;
        $pratiques->dateCour = $request->dateCour;
        $pratiques->heureDebut = $request->heureDebut;
        $pratiques->heureFin = $request->heureFin;
        $pratiques->vehicule_id = $request->vehicule_id; 
        $pratiques->apprenant_id = $request->apprenant_id;
        $pratiques->save();
        Alert::success('Cours Ajouter', 'avec Succes');
        return redirect('/all-pratique');

    }

    // mise en place de la methode de modification des seances:
    
    public function EditPratique($id) 
    {

        $seances = Seance::all();
        $apprenants = Apprenant::all();
        $moniteurs = Moniteur::all();
        $vehicules=Vehicule::all();
        $pratiques = Courspratique::find($id);

        return view('backend.pratique.edit-pratique',compact('pratiques','seances','apprenants','moniteurs', 'vehicules')         
        );

    }

    public function UpdatePratique (Request $request)
    {
        $pratiques = Courspratique::find($request->id);
        $pratiques->seance_id = $request->seance_id;
        $pratiques->moniteur_id = $request->moniteur_id;
        $pratiques->dateCour = $request->dateCour;
        $pratiques->heureDebut = $request->heureDebut;
        $pratiques->heureFin = $request->heureFin;
        $pratiques->vehicule_id = $request->vehicule_id; 
        $pratiques->apprenant_id = $request->apprenant_id;
        $pratiques->update();
        Alert::success('Cours Modifier', 'avec Succes');
        return redirect('/all-pratique');
    }


    public function DeletePratique($id)
    {
        $Courspratique = Courspratique::find($id);
        $Courspratique->delete();
        return redirect('/all-pratique')->with('status', ' Supprimer avec succès');
    }

}
