<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;
use Alert;


class gestionCM extends Controller
{
    //Le table Patient
    public function getDataGestionCM(){
        //$g=DB::select('select*from Patient');
        $g=DB::table('Patient')->paginate(4);
        return view('PagesGestion.ReadData',["patients"=>$g]);

    }
    ///ajouter un patient 
    public function InsertData(Request $request){
        $request->validate([
            'idP'=>'required',
            'nomP'=>'required',
            'prenomP'=>'required',
            'cinP'=>'required',
            'numeroP'=>'required',
            'telP'=>'required',
            'datanP'=>'required',
            'daterP'=>'required'
        ]);
        $Id=$request->idP;
        $Nom=$request->nomP;
        $Prénom=$request->prenomP;
        $Cin=$request->cinP;
        $NuméroDossier=$request->numeroP;
        $Téléphone=$request->telP;
        $DateNaiss=$request->datanP;
        $DateReception=$request->daterP;
        $n=DB::insert('insert into Patient values (?,?,?,?,?,?,?,?)',[$Id,$Nom,$Prénom,$Cin,$NuméroDossier,$Téléphone,$DateNaiss,$DateReception]);
        Alert::success('Patient Ajoute Avec Succes');

        return redirect('/GestionCM'); 
    }
    public function updateData($id){
        $g=DB::select('select * from Patient where Id=?',[$id]);
        return view('PagesGestion.modifierP',["patients"=>$g]);
    }
    ///
    public function enregistreData(Request $request){
        $Id=$request->idP;
        $Nom=$request->nomP;
        $Prénom=$request->prenomP;
        $Cin=$request->cinP;
        $NuméroDossier=$request->numeroP;
        $Téléphone=$request->telP;
        $DateNaiss=$request->datanP;
        $DateReception=$request->daterP;
        DB::update('update Patient set Nom=?,Prénom=?,Cin=?,NuméroDossier=?,Téléphone=?,DateNaiss=?,DateReception=? where Id=?',[$Nom,$Prénom,$Cin,$NuméroDossier,$Téléphone,$DateNaiss,$DateReception,$Id]);
        return redirect("/GestionCM");

    }
    ///pour supprime
    public function deletPatient($id){
        $m=DB::delete('delete from Patient where Id=?',[$id]);
        return redirect('/GestionCM');
    }
    ////lire + affichier le table de diagnostique
    public function lireGestionCM($id) {
        //$diagno = DB::table('Diagnostique')->where('Idp',$id)->get();
        $diagno = DB::table('Diagnostique')->where('Idp',$id)->paginate(2);

        $patient = DB::table('Patient')->find($id);
        return view('PagesGestion.lire', ["patient" => $patient,"diagno"=>$diagno]);
    }
    
    ////pour recherche
    public function rechercherP(Request $request){
        $Id = $request->idP;
        $g=DB::table('Patient')->where('Id',$Id)->paginate(4);

        //$g = DB::select('select * from Patient where Id = ?', [$Id]);
        return view('PagesGestion.ReadData', ["patients" => $g]);
    }

    /////authontification users
    public function login(Request $request){
        $NomU = $request->nomU;
        $EmailU = $request->emailU;
    
        // Vérification si l'email et le nom d'utilisateur sont vides
        if (empty($NomU) && empty($EmailU)) {
            return redirect('/ReadData')->with('error', 'Entrez un nom d\'utilisateur et une adresse e-mail valides');
        } 
        // Vérification si l'email ou le nom d'utilisateur est manquant
        else if (empty($NomU) || empty($EmailU)) {
            return redirect('/ReadData')->with('error', 'Entrez un nom d\'utilisateur et une adresse e-mail valides');
        } 
        // Vérification de l'utilisateur dans la base de données
        else {
            // Vérifiez si un utilisateur avec les informations fournies existe dans la table Users
            $user = DB::table('Users')->where('NomU', $NomU)->where('EmailU', $EmailU)->first();
    
            if($user){
                $request->session()->put('my_name', $NomU);
                return redirect('/GestionCM');
            } else {
                return redirect('/ReadData')->with('error', 'Nom d\'utilisateur ou e-mail incorrect');
            }
        }
    }
   //
   public function deleteSessionData(Request $request){
    $request->session()->forget('my_name');
    // Envoie un message flash pour informer l'utilisateur que la session a été fermée
    $request->session()->flash('success', 'Session fermée avec succès.');
    return redirect('/ReadData');
}

//////////////////////Users
public function getDataUsers(){
    $u=DB::select('select*from Users');
    //$g=DB::table('Patient')->paginate(4);
    return view('PagesGestion.ReadUser',["users"=>$u]);

}
////Ajoute user
public function AjouteUser(Request $request){
    $request->validate([
        'nomu'=>'required',
        'emailu'=>'required'
    ]);

    $NomU = $request->input('nomu');
    $EmailU = $request->input('emailu');
    
    $n = DB::insert('INSERT INTO Users (NomU, EmailU) VALUES (?, ?)', [$NomU, $EmailU]);
    Alert::success('Bravo , Users et ajoute avec success');
    return redirect('/dataUsere'); 
}
 ///pour supprime
 public function deletUsers($id){
    $m=DB::delete('delete from Users where IdU=?',[$id]);
    return redirect('/dataUsere');
}


  public function InsertDiagnostique($id ,Request $request){
       $IdD = $request->idp; // Récupérer l'ID du patient depuis la requête
       $Diagnostique = $request->diagnost;
       $Evolution = $request->evol;
      $DateDiagnostique = $request->dateD;
    
       $n = DB::table('Diagnostique')->insert([
           'Diagnostique' => $Diagnostique,
          'Evolution' => $Evolution,
          'DateDiagnostique' => $DateDiagnostique,
          'idp' => $IdD // Utiliser l'ID du patient récupéré depuis la requête
       ]);
       Alert::success('Bravo , Le Diagnostique et ajoute avec success');
   return redirect('/lire'.'/'.$IdD);}

   ////modifier Dagnostique

  public function enregistreDataDiagnostique($id,Request $request){
        $IdD = $request->idp; // Récupérer l'ID du patient depuis la requête
       $Diagnostique = $request->diagnost;
       $Evolution = $request->evol;
      $DateDiagnostique = $request->dateD;
    
    $n=DB::update('update Diagnostique set Diagnostique=?,Evolution=?,DateDiagnostique=? where IdD=?',[$Diagnostique,$Evolution,$DateDiagnostique,$id]);
    return redirect('/lire'.'/'.$IdD);

}
public function updateDiagnostique($id){
    $g = DB::select('select * from Diagnostique where IdD = ?', [$id]);
    if (!empty($g)) {
        $diag = $g[0];
        $diagno = DB::table('Diagnostique')->where('Idp',$id)->get();
        $patient = DB::table('Patient')->find($id);
        return view('PagesGestion.lire', ["patient" => $patient, "diagno" => $diagno, "diagnostic" => $diag]);
    } else {
        
        return ('/lire'.'/'.$id)->with('error', 'Diagnostique non trouvé');
    }
}
////pour Supprime
public function deletDiagnostique($id){
    $m=DB::delete('delete from Diagnostique where IdD=?',[$id]);
    return redirect('/GestionCM');
}
/////Pour recherche Diagnostique
public function rechercherDiagno(Request $request){
    $Id = $request->idP;
    if ($Id) {
        //$g = DB::table('Diagnostique')->where('IdD', $Id)->get();
        $g = DB::table('Diagnostique')->where('IdD', $Id)->paginate(3);
    } else {
        $g = DB::table('Diagnostique')->get();
    }
    // Récupérer les informations du patient si une recherche a été effectuée ou non
    $patient = null;
    if ($Id) {
        $patient = DB::table('Patient')->where('Id', $Id)->first();
    }

    return view('PagesGestion.lire', ["diagno" => $g, "patient" => $patient]);
}
 }

