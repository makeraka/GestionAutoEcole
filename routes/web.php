<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\MoniteurController;
use App\Http\Controllers\PlaningController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\CourspratiqueController;
use App\Http\Controllers\CourstheorieController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\ParametreController;
use App\Models\Courspratique;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route pour utilisateurs
Route::get('/all-user', [App\Http\Controllers\backend\UserController::class, 'AllUser'])->name('alluser');
Route::get('/add-user', [UserController::class, 'AddUser'])->name('AddUser');
Route::post('insert-user', [UserController::class, 'InsertUser'])->name('InsertUser');
Route::get('/edit-user/{id}', [UserController::class, 'EditUser'])->name('EditUser');
Route::post('/update-user', [UserController::class, 'UpdateUser'])->name('UpdateUser');
Route::get('/delete-user/{id}', [UserController::class, 'DeleteUser'])->name('DeleteUser');


//Route pour Apprenant
Route::get('/all-apprenant', [ApprenantController::class, 'AllApprenant'])->name('AllApprenant');
Route::get('/add-apprenant', [ApprenantController::class, 'AddApprenant'])->name('AddApprenant');
Route::post('insert-apprenant', [ApprenantController::class, 'InsertApprenant'])->name('InsertApprenant');
Route::get('/edit-apprenant/{id}', [ApprenantController::class, 'EditApprenant'])->name('EditApprenant');
Route::post('/update-apprenant', [ApprenantController::class, 'UpdateApprenant'])->name('UpdateApprenant');
Route::get('/delete-apprenant/{id}', [ApprenantController::class, 'DeleteApprenant'])->name('DeleteApprenant');

// Route pour Depense



Route::get('/delete-depense/{id}', [DepenseController::class, 'DeleteDepense'])->name('DeleteDepense');
Route::get('/edit-depense/{id}', [DepenseController::class, 'EditDepense'])->name('EditDepense');
Route::post('/update-depense', [DepenseController::class, 'UpdateDepense'])->name('UpdateDepense');

Route::get('/all-depense', [DepenseController::class, 'AllDepense'])->name('AllDepense');
Route::get('/add-depense', [DepenseController::class, 'AddDepense'])->name('AddDepense');
Route::post('/insert-depense', [DepenseController::class, 'InsertDepense'])->name('InsertDepense');


//Route pour Moniteur:
Route::get('/all-moniteur', [MoniteurController::class, 'AllMoniteur'])->name('AllMoniteur');
Route::get('/add-moniteur', [MoniteurController::class, 'AddMoniteur'])->name('AddMoniteur');
Route::post('/insert-moniteur', [MoniteurController::class, 'InsertMoniteur'])->name('InsertMoniteur');
Route::get('/edit-moniteur/{id}', [MoniteurController::class, 'EditMoniteur'])->name('EditMoniteur');
Route::post('/update-moniteur', [MoniteurController::class, 'UpdateMoniteur'])->name('UpdateMoniteur');
Route::get('/delete-moniteur/{id}', [MoniteurController::class, 'DeleteMoniteur'])->name('DeleteMoniteur');


//route pour vehicule
Route::get('/all-vehicule', [VehiculeController::class, 'AllVehicule'])->name('AllVehicule');
Route::get('/add-vehicule', [VehiculeController::class, 'AddVehicule'])->name('AddVehicule');
Route::post('/insert-vehicule', [VehiculeController::class, 'InsertVehicule'])->name('InsertVehicule');
Route::get('/edit-vehicule/{id}', [VehiculeController::class, 'EditVehicule'])->name('EditVehicule');
Route::post('/update-vehicule', [VehiculeController::class, 'UpdateVehicule'])->name('UpdateVehicule');
Route::get('/delete-vehicule/{id}', [VehiculeController::class, 'DeleteVehicule'])->name('DeleteVehicule');


// route pour payement
Route::get('/all-payement', [PayementController::class, 'AllPayement'])->name('AllPayement');
Route::get('/add-payement', [PayementController::class, 'AddPayement'])->name('AddPayement');
Route::post('/insert-payement', [PayementController::class, 'InsertPayement'])->name('InsertPayement');
Route::get('/edit-payement/{id}', [PayementController::class, 'EditPayement'])->name('EditPayement');
Route::post('/update-payement', [PayementController::class, 'UpdatePayement'])->name('UpdatePayement');
Route::get('/delete-payement/{id}', [PayementController::class, 'DeletePayement'])->name('DeletePayement');


//route pour cours théorique
Route::get('/all-theorie', [CourstheorieController::class, 'AllTheorie'])->name('AllTheorie');
Route::get('/add-theorie', [CourstheorieController::class, 'AddTheorie'])->name('AddTheorie');
Route::post('/insert-theorie', [CourstheorieController::class, 'InsertTheorie'])->name('InsertTheorie');
Route::get('/edit-theorie/{id}', [CourstheorieController::class, 'EditTheorie'])->name('EditTheorie');
Route::post('/update-theorie', [CourstheorieController::class, 'UpdateTheorie'])->name('UpdateTheorie');
Route::get('/delete-theorie/{id}', [CourstheorieController::class, 'DeleteTheorie'])->name('DeleteTheorie');

// Route pour Examen
Route::get('/all-examen', [ExamenController::class, 'AllExamen'])->name('AllExamen');
Route::get('/add-examen', [ExamenController::class, 'AddExamen'])->name('AddExamen');
Route::post('/insert-examen', [ExamenController::class, 'InsertExamen'])->name('InsertExamen');
Route::get('/edit-examen/{id}', [ExamenController::class, 'EditExamen'])->name('EditExamen');
Route::post('/update-examen', [ExamenController::class, 'UpdateExamen'])->name('UpdateExamen');
Route::get('/delete-examen/{id}', [ExamenController::class, 'DeleteExamen'])->name('DeleteExamen');

//Route pour Pratique
// Route pour Examen
Route::get('/all-pratique', [CourspratiqueController::class, 'AllPratique'])->name('AllPratique');

Route::get('/add-pratique', [CourspratiqueController::class, 'AddPratique'])->name('AddPratique');
Route::post('/insert-pratique', [CourspratiqueController::class, 'InsertPratique'])->name('InsertPratique');
Route::get('/edit-pratique/{id}', [CourspratiqueController::class, 'EditPratique'])->name('EditPratique');
Route::post('/update-pratique', [CourspratiqueController::class, 'UpdatePratique'])->name('UpdatePratique');
Route::get('/delete-pratique/{id}', [CourspratiqueController::class, 'DeletePratique'])->name('DeletePratique');

// Route pour Tarif

Route::get('/all-tarif', [TarifController::class, 'AllTarif'])->name('AllTarif');
Route::get('/add-tarif', [TarifController::class, 'AddTarif'])->name('AddTarif');
Route::post('/insert-tarif', [TarifController::class, 'InsertTarif'])->name('InsertTarif');
Route::get('/edit-tarif/{id}', [TarifController::class, 'EditTarif'])->name('EditTarif');
Route::post('/update-tarif', [TarifController::class, 'UpdateTarif'])->name('UpdateTarif');
Route::get('/delete-tarif/{id}', [TarifController::class, 'DeleteTarif'])->name('DeleteTarif');


// Route pour le planing

Route::get('/all-planing', [PlaningController::class, 'AllPlaning'])->name('AllPlaning');
Route::get('/add-planing', [PlaningController::class, 'AddPlaning'])->name('AddPlaning');
Route::post('/insert-planing', [PlaningController::class, 'InsertPlaning'])->name('InsertPlaning');
Route::get('/edit-planing/{id}', [PlaningController::class, 'EditPlaning'])->name('EditPlaning');
Route::post('/update-planing', [PlaningController::class, 'UpdatePlaning'])->name('UpdatePlaning');
Route::get('/delete-planing/{id}', [PlaningController::class, 'DeletePlaning'])->name('DeletePlaning');


//  Route pour le Parametre

Route::get('/all-parametre', [ParametreController::class, 'AllParametre'])->name('AllParametre');
// Route::get('/add-planing', [PlaningController::class, 'AddPlaning'])->name('AddPlaning');
// Route::post('/insert-planing', [PlaningController::class, 'InsertPlaning'])->name('InsertPlaning');
// Route::get('/edit-planing/{id}', [PlaningController::class, 'EditPlaning'])->name('EditPlaning');
// Route::post('/update-planing', [PlaningController::class, 'UpdatePlaning'])->name('UpdatePlaning');
// Route::get('/delete-planing/{id}', [PlaningController::class, 'DeletePlaning'])->name('DeletePlaning');
