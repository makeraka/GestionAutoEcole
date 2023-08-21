<?php

namespace App\Http\Controllers;

use App\Models\Theorie;
use App\Models\Moniteur;
use App\Models\Courstheorie;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CourstheorieController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function AllTheorie() {
        $Courstheories = Courstheorie::paginate(4);
        return view('backend.courstheorie.all-theorie', compact('Courstheories'));
    }

    public function AddTheorie ()
    {
        $theories = Theorie::all();
        $moniteurs = Moniteur::all();


        return view('backend.courstheorie.add-theorie', [
            'theories' =>$theories,
            'moniteurs'=>$moniteurs
        ]);
    }

    public function InsertTheorie (Request $request)
    {
        $this->validate($request, [
            'theorie_id' => 'required',
            'moniteur_id' => 'required',
            'dateCour' => 'required',
            'heureDebut' => 'required',
            'heureFin' => 'required'
        ]);

        $Courstheorie = new Courstheorie();
        $Courstheorie->theorie_id = $request->theorie_id;
        $Courstheorie->moniteur_id = $request->moniteur_id;
        $Courstheorie->dateCour = $request->dateCour;
        $Courstheorie->heureDebut = $request->heureDebut;
        $Courstheorie->heureFin = $request->heureFin;
        $Courstheorie->save();
        Alert::success('Cours Ajouter', 'avec Succes');
        return redirect('/all-theorie');

    }

    public function EditTheorie ($id)
    {
        $theories = Theorie::all();
        $moniteurs = Moniteur::all();

        $Courstheories = Courstheorie::find($id);
        return view('backend.courstheorie.edit-theorie', compact('Courstheories','theories','moniteurs')
           
        );
    }


    public function  UpdateTheorie(Request $request)
    {
        $Courstheorie = Courstheorie::find($request->id);
        $Courstheorie->theorie_id = $request->theorie_id;
        $Courstheorie->moniteur_id = $request->moniteur_id;
        $Courstheorie->dateCour = $request->dateCour;
        $Courstheorie->heureDebut = $request->heureDebut;
        $Courstheorie->heureFin = $request->heureFin;
        $Courstheorie->update();
        Alert::success('Cours Modifier', 'avec Succes');
        return redirect('/all-theorie');
    }
    
    public function DeleteTheorie($id)
    {
        $Courstheorie = Courstheorie::find($id);
        $Courstheorie->delete();
        return redirect('/all-theorie')->with('status', 'Dispense Supprimer avec succès');
    }
}
