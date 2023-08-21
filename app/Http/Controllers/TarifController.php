<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
class TarifController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');

    }
    
    public function AllTarif()
    {
        $tarifs  = Tarif::paginate(4);
       return view('backend.tarifs.all-tarif', compact('tarifs'));
    }

    public function AddTarif()
    {
        return view('backend.tarifs.add-tarif');
    }


    public function InsertTarif(Request $request)
    {
        $tarif = new Tarif();
        $this->validate($request, [
            'avatar' => 'required',
            'permis' => 'required',
            'type' => 'required',
            'montant' => 'required',
            'description' => 'required',
            'tarifier' => 'required',
        
        ]);

        
        $uploadPath = 'uploads/tarif/';
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;

            $file->move('uploads/tarif/', $filename);
            $tarif->avatar = $uploadPath.$filename;
        }

        
        $tarif->permis = $request->permis;
        $tarif->type = $request->type;    
        $tarif->montant = $request->montant;
        $tarif->description = $request->description;
        $tarif->description = $request->description;
        $tarif->tarifier = $request->tarifier;

          
        
        $tarif->save();
        Alert::success('Tarif Ajouter', 'Succes');
        return redirect('/all-tarif')->with('status', 'Tarif ajouter avec succès');
    }

    // fonction pour la modification des depenses:
    public function EditTarif ($id)
    {
        $tarif = Tarif::find($id);
        return view('backend.tarifs.edit-tarif', compact('tarif'));
    }

    // fonction de traitement de modification des dépenses selon leur description
    public function UpdateTarif (Request $request)
    {
        $tarif = Tarif::find($request->id);
        $tarif->permis = $request->permis;
        $tarif->type = $request->type;    
        $tarif->montant = $request->montant;
        $tarif->description = $request->description;
        $tarif->tarifier = $request->tarifier;
        $tarif->update();
        Alert::success('Tarif Modifier', 'Succes');
        return redirect('/all-tarif')->with('status', 'depense ajouter avec succès');
    }

    public function DeleteTarif ($id)
    {
        $tarif = Tarif::find ($id);
        $tarif->delete();
        return redirect('/all-tarif');
    }
}
