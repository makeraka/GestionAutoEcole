<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Payement;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PayementController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function allPayement()
    {
        $payements = Payement::paginate(8);
   
        return view ('backend.payement.all-payement', [
            'payements' => $payements,
        ]);
    }

    public function AddPayement()
    {
        $apprenants =Apprenant::all();
        return view('backend.payement.add-payement',[
            'apprenants'=>$apprenants
        ]);
    }

    public function InsertPayement (Request $request)
    {
        $this->validate($request,[
            'categorie' => 'required',
            'date' => 'required',
            'prix' => 'required',
            'montantpaye' => 'required',
            'montantrestant' => 'required',
            'apprenant_id' => 'required',
        ]);

        $payement = new Payement();
        $payement->categorie = $request->categorie;
        $payement->date=$request->date;
        $payement->prix=$request->prix;
        $payement->montantpaye=$request->montantpaye;
        $payement->montantrestant=$request->montantrestant;
        $payement->apprenant_id=$request->apprenant_id;
        $payement->save();
        Alert::success('Payement Ajouter', 'Succes');
       return redirect('/all-payement');
        
    }

    public function EditPayement($id)
    {
        $apprenants =Apprenant::all();
        $payement = Payement::find($id);
        return view('backend.payement.edit-payement', compact('payement','apprenants'));
    }

    public function UpdatePayement(Request $request)
    {
        $payement = Payement::find($request->id);
        $payement->categorie = $request->categorie;
        $payement->date=$request->date;
        $payement->prix=$request->prix;
        $payement->montantpaye=$request->montantpaye;
        $payement->montantrestant=$request->montantrestant;
        $payement->apprenant_id=$request->apprenant_id;
        $payement->update();
        Alert::success('Payement Modifier', 'Succes');
        return redirect('/all-payement');

    }

    public function DeletePayement($id)
    {
        $payement = Payement::find($id);
        $payement->delete();
        return redirect('/all-payement');

    }
}
