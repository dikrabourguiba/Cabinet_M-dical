@extends('PagesGestion.principale')
 @section('contenu')
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<style>
  .searchBox {
  display: flex;
  max-width: 230px;
  align-items: center;
  justify-content: space-between;
  gap: 8px;
  background: #2f3640;
  border-radius: 50px;
  position: relative;
}

.searchButton {
  color: white;
  position: absolute;
  right: 8px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: var(--gradient-2, linear-gradient(90deg, #2AF598 0%, #009EFD 100%));
  border: 0;
  display: inline-block;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
}
/*hover effect*/
button:hover {
  color: #fff;
  background-color: #1A1A1A;
  box-shadow: rgba(0, 0, 0, 0.5) 0 10px 20px;
  transform: translateY(-3px);
}
/*button pressing effect*/
button:active {
  box-shadow: none;
  transform: translateY(0);
}

.searchInput {
  border: none;
  background: none;
  outline: none;
  color: white;
  font-size: 15px;
  padding: 24px 46px 24px 26px;
  height: 2px;
}


    .recherch{
        margin-left:80%;
    }
    .ajout{
      margin-left:15%;
      margin-top:5%;
      margin-right:3%;

      
    }
    .affic{
      margin-right:3%;
      text-decoration: none;
      color: #000;
    }
    .para{
      margin-left:60%
    }
</style>
<body>



<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


@include('sweetalert::alert')
 
    
<!-- Button trigger modal -->

<button type="button" class="btn btn-primary mt-3 affic" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Ajouter Patient
</button>

<!-- Modal pour Ajoute -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Ajouter un patient</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/PatientSave">
          @csrf

          <div class="mb-3">
            <label for="idP" class="form-label">Id</label>
            <input type="text" name="idP" id="idP" class="form-control form-control-sm"/>
          </div>

          <div class="mb-3">
            <label for="nomP" class="form-label">Nom</label>
            <input type="text" name="nomP" id="nomP" class="form-control form-control-sm"/>
          </div>

          <div class="mb-3">
            <label for="prenomP" class="form-label">Prénom</label>
            <input type="text" name="prenomP" id="prenomP" class="form-control form-control-sm"/>
          </div>

          <div class="mb-3">
            <label for="cinP" class="form-label">Cin</label>
            <input type="text" name="cinP" id="cinP" class="form-control form-control-sm"/>
          </div>

          <div class="mb-3">
            <label for="numeroP" class="form-label">Numéro De Dossier</label>
            <input type="text" name="numeroP" id="numeroP" class="form-control form-control-sm"/>
          </div>

          <div class="mb-3">
            <label for="telP" class="form-label">Téléphone</label>
            <input type="text" name="telP" id="telP" class="form-control form-control-sm"/>
          </div>

          <div class="mb-3">
            <label for="datanP" class="form-label">Date De Naissance</label>
            <input type="text" name="datanP" id="datanP" class="form-control form-control-sm"/>
          </div>

          <div class="mb-3">
            <label for="daterP" class="form-label">Date De Reception</label>
            <input type="text" name="daterP" id="daterP" class="form-control form-control-sm"/>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


    <div>
        <a href="/AffichierPatient"  class="affic">Tous les patient</a>
    </div>

    <form action="/recherchePatient" method="get">
        @csrf
        <div class="recherch">
        <div class="searchBox">

<input class="searchInput" type="text" name="idP"placeholder="Search something">
<button class="searchButton" >
       
      

                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
<g clip-path="url(#clip0_2_17)">
<g filter="url(#filter0_d_2_17)">
<path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
</g>
</g>
<defs>
<filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
<feOffset dy="4"></feOffset>
<feGaussianBlur stdDeviation="2"></feGaussianBlur>
<feComposite in2="hardAlpha" operator="out"></feComposite>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
</filter>
<clipPath id="clip0_2_17">
<rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
</clipPath>
</defs>
</svg>
         

</button>
</div>



        </div>
    </form>

    
    <table border=2  class="table table-hover  mx-auto">
        <thead class="table table-light ">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Cin</th>
                <th>Numéro De Dossier</th>
                <th>Téléphone</th>
                <th>Date De Naissance</th>
                <th>Date De Reception</th>
                <th>Actions</th>
            </tr>
        </thead>
       
       
        @foreach($patients as $patient)
        <tr>
            <td>{{$patient->Id}}</td>
            <td>{{$patient->Nom}}</td>
            <td>{{$patient->Prénom}}</td>
            <td>{{$patient->Cin}}</td>
            <td>{{$patient->NuméroDossier}}</td>
            <td>{{$patient->Téléphone}}</td>
            <td>{{$patient->DateNaiss}}</td>
            <td>{{$patient->DateReception}}</td>
            <td><td><a href="/modifier/{{$patient->Id}}" ><img src="image/mod.png" alt="Modifier" width="20px"></a>
            <a href="/supprimeP/{{$patient->Id}}" data-bs-toggle="modal" data-bs-target="#modalSupp"><img src="image/supp.png" alt="Description de l'image" width="20px"></a>
            <a href="/lire/{{$patient->Id}}" ><img src="image/det.png" alt="Description de l'image"  class=""width="20px"></a></td>
        </tr>
       
        <!-- Modal pour supprimer -->
<div class="modal fade" id="modalSupp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer un patient</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Voulez-vous vraiment supprimer cette ligne ?</h4>
      </div>
      <div class="modal-footer">
        <form method="POST" action="/supprimeP/{{$patient->Id}}">
          @csrf
          @method('DELETE')
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
       
    </table>
   
    <div>{{$patients->links()}}</div>
    <form action="/logout" method="POST" class=" mt-5">
        @csrf
        <button type="submit" class="btn btn-info">Déconnexion</button>
    </form>
    @endsection
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
      table{
        width: 60px;
        margin-left:18%
      }
      
    </style>
</body>
</html>

 

