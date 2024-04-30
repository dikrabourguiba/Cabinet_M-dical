<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnostiqueController;



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

///////////////////authontification users
Route::view('/ReadData','PagesGestion.login');
Route::post('/sessionLogi','App\Http\Controllers\gestionCM@login');
Route::post('/logout', 'App\Http\Controllers\gestionCM@deleteSessionData')->name('logout');

///////////////////////////////////////////
Route::get('GestionCM','App\Http\Controllers\gestionCM@getDataGestionCM');
//ajouter
Route::post('/PatientSave','App\Http\Controllers\gestionCM@InsertData');
//modifier
Route::get('/modifier/{p}','App\Http\Controllers\gestionCM@updateData');
Route::post('/enregisreModPatient','App\Http\Controllers\gestionCM@enregistreData');
///supprime
Route::delete('/supprimeP/{p}','App\Http\Controllers\gestionCM@deletPatient');
///lire
 Route::get('/lire/{id}','App\Http\Controllers\gestionCM@lireGestionCM');

////recherche
Route::get('recherchePatient','App\Http\Controllers\gestionCM@rechercherP');
//affichier tous
Route::get('AffichierPatient','App\Http\Controllers\gestionCM@getDataGestionCM');
////////////////////////////////////////////////
///diagnostique ajoute
Route::post('/DiagnoSave/{id}','App\Http\Controllers\gestionCM@InsertDiagnostique');
//modifier diagnostique
Route::get('/modiDiagnostique/{id}', 'App\Http\Controllers\gestionCM@updateDiagnostique');
// Route pour enregistrer les modifications de la diagnostique
Route::post('/enregisreModi/{id}', 'App\Http\Controllers\gestionCM@enregistreDataDiagnostique');
//

///pour supprime Diagnostique
Route::delete('/suppDiagno/{id}','App\Http\Controllers\gestionCM@deletDiagnostique');
///pour recherche Diagnostique
Route::get('rechercheDiagno','App\Http\Controllers\gestionCM@rechercherDiagno');
///Users table
Route::get('/dataUsere','App\Http\Controllers\gestionCM@getDataUsers');
///ajoute users
Route::post('/userAjout','App\Http\Controllers\gestionCM@AjouteUser');
Route::view('/ajoutU','PagesGestion.ajouteUser');
//supprime users
Route::delete('/suppUser/{id}','App\Http\Controllers\gestionCM@deletUsers');






