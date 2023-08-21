<?php

namespace App\Http\Controllers;

use App\Models\Moniteur;
use App\Models\Planing;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PlaningController extends Controller
{
    //

    //
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function AllPlaning()
    {
        $planings = Planing::paginate(8);
   
        return view ('backend.planing.all-planing', [
            'planing' => $planings,
        ]);
    }

    public function AddPlaning()
    {
        $moniteurs =Moniteur::all();
        return view('backend.planing.add-planing',[
            'moniteurs'=>$moniteurs
        ]);
    }

    public function InsertPlaning (Request $request)
    {
        $this->validate($request,[
            'jour' => 'required',
            'cours' => 'required',
            'heureDebut' => 'required',
            'heureFin' => 'required',
            'moniteur_id' => 'required',
            'etat' => 'required',
        ]);

        $planing = new Planing();
        $planing->jour=$request->jour;
        $planing->cours=$request->cours;
        $planing->heureDebut=$request->heureDebut;
        $planing->heureFin=$request->heureFin;
        $planing->moniteur_id=$request->moniteur_id;
        $planing->etat=$request->etat;

        $planing->save();
        Alert::success('Planing Ajouter', 'Succes');
       return redirect('/all-planing'); 
    }

    public function EditPlaning($id)
    {
        $moniteurs =Moniteur::all();
        $planing = Planing::find($id);
        return view('backend.planing.edit-planing', compact('planing','moniteurs'));
    }

    public function UpdatePlaning(Request $request)
    {
        $planing = Planing::find($request->id);
        $planing->jour=$request->jour;
        $planing->cours=$request->cours;
        $planing->heureDebut=$request->heureDebut;
        $planing->heureFin=$request->heureFin;
        $planing->moniteur_id=$request->moniteur_id;
        $planing->etat=$request->etat;
        $planing->update();
        Alert::success('Planing Modifier', 'Succes');
        return redirect('/all-planing');

    }

    public function DeletePlaning($id)
    {
        $planing = Planing::find($id);
        $planing->delete();
        return redirect('/all-planing');

    }
}
