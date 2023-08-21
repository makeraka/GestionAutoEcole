<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class VehiculeController extends Controller
{
    //

    public function AllVehicule ()
    {
        $vehicules = Vehicule::paginate(10);
        return  view('backend.vehicule.all-vehicule', compact('vehicules'));
    }

    public function AddVehicule()
    {
        return view('backend.vehicule.add-vehicule');
    }

    public function InsertVehicule(Request $request)
    {
        $this->validate($request,[
            'type' => 'required',
            'modele' => 'required',
            'marque' => 'required',
            'imatricule' => 'required',
            'etat' => 'required',

        ]);

        $vehicules = new Vehicule();
        $vehicules->type = $request->type;
        $vehicules->modele = $request->modele;
        $vehicules->marque = $request->marque;
        $vehicules->imatricule = $request->imatricule;
        $vehicules->etat = $request->etat;
        Alert::success('Vehicule Ajouter', 'Ajouter');
        $vehicules->save();
        return redirect('all-vehicule');
        
    }

    public function EditVehicule ($id)
    {
        $vehicules = Vehicule::find($id);
        return view('backend.vehicule.edit-vehicule', compact('vehicules'));

    }

    public function UpdateVehicule (Request $request)
    {
        $vehicules =  Vehicule::find($request->id);
        $vehicules->type = $request->type;
        $vehicules->modele = $request->modele;
        $vehicules->marque = $request->marque;
        $vehicules->imatricule = $request->imatricule;
        $vehicules->etat = $request->etat;
        $vehicules->update();
        return redirect('/all-vehicule')->with('status', 'Vehicule Modifier avec succès');
    }

    public function DeleteVehicule  ($id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->delete();
        return redirect('/all-vehicule');
    }
}


