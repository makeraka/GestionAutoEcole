<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parametre;

class ParametreController extends Controller
{
    //

    public function AllParametre ()
    {
        $parametres = Parametre::paginate(10);
        return  view('backend.parametre.all-parametre', compact('parametres'));
    }

    
}
