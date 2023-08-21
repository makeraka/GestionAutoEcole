<?php

namespace App\Http\Controllers;

use App\Models\Depense;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class DepenseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    
    public function AllDepense()
    {
        $depenses  = Depense::paginate(4);
       return view('backend.depense.all-depense', compact('depenses'));
    }

    public function AddDepense()
    {
        return view('backend.depense.add-depense');
    }

    public function InsertDepense(Request $request)
    {
        $this->validate($request, [
            'typedepense' => 'required',
            'libelle' => 'required',
            'aqui' => 'required',
            'montant' => 'required',
            'date' => 'required',
            'description' => 'required'
        ]);

        $depense = new Depense();
        $depense->typedepense = $request->typedepense;
        $depense->libelle = $request->libelle;
        $depense->aqui = $request->aqui;
        $depense->montant = $request->montant;
        $depense->date = $request->date;
        $depense->description = $request->description;
        $depense->save();
        Alert::success('Depense Ajouter', 'Succes');
        return redirect('/all-depense')->with('status', 'depense ajouter avec succès');
    }

    // fonction pour la modification des depenses:
    public function EditDepense ($id)
    {
        $depense = Depense::find($id);
        return view('backend.depense.edit-depense', compact('depense'));
    }

    // fonction de traitement de modification des dépenses selon leur description
    public function UpdateDepense (Request $request)
    {
        $depense = Depense::find($request->id);
        $depense->typedepense = $request->typedepense;
        $depense->libelle = $request->libelle;
        $depense->aqui = $request->aqui;
        $depense->montant = $request->montant;
        $depense->date = $request->date;
        $depense->description = $request->description;
        $depense->update();
        Alert::success('Depense Modifier', 'Succes');
        return redirect('/all-depense')->with('status', 'depense ajouter avec succès');
    }

    public function DeleteDepense ($id)
    {
        $depense = Depense::find ($id);
        $depense->delete();
        return redirect('/all-depense');
    }
}
