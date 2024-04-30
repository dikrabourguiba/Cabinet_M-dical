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
<body>
  
  <style>
     .searchBox {
      margin-left:80%;
      margin-bottom:1%;
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
  </style>
   @if ($patient)
     <h4>Les Informations Générales sur le patient <span class="text-info">{{ $patient->Nom }} {{ $patient->Prénom }}</span></h4>
  

     <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Les Informations Générales
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            ID
            <span class="badge badge-primary badge-pill text-dark">{{ $patient->Id }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Nom
            <span class="badge badge-primary badge-pill text-dark">{{ $patient->Nom }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Prénom
            <span class="badge badge-primary badge-pill text-dark">{{ $patient->Prénom }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Cin
            <span class="badge badge-primary badge-pill text-dark">{{ $patient->Cin }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Numéro de dossier
            <span class="badge badge-primary badge-pill text-dark">{{ $patient->NuméroDossier }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Téléphone
            <span class="badge badge-primary badge-pill text-dark">{{ $patient->Téléphone }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Date de naissance
            <span class="badge badge-primary badge-pill text-dark">{{ $patient->DateNaiss }}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Date de réception
            <span class="badge badge-primary badge-pill text-dark">{{ $patient->DateReception }}</span>
        </li>
    </ul> 
    @else
    <p>Aucune information de patient trouvée pour l'ID spécifié.</p>
@endif

    <hr>
    @include('sweetalert::alert')
    <button type="button" class="btn btn-primary mt-3 affic" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Ajouter Diagnostique
</button>
<!-- <hr> -->

<form action="/rechercheDiagno" method="get">
        @csrf
        <div class="recherch">
        <div class="searchBox">

    <input class="searchInput" type="text" name="idP"placeholder="Search something">
<button class="searchButton" >
  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none"><g clip-path="url(#clip0_2_17)"><g filter="url(#filter0_d_2_17)"><path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path></g></g><defs><filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix><feOffset dy="4"></feOffset><feGaussianBlur stdDeviation="2"></feGaussianBlur><feComposite in2="hardAlpha" operator="out"></feComposite><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend></filter><clipPath id="clip0_2_17"><rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect></clipPath></defs></svg>
</button>
</div>



        </div>
    </form>
<!-- <hr> -->

    <table border="2" class="table table-hover">
        <thead class="table table-light">
            <tr>
                <th>IdP</th>
                <th>Diagnostique</th>
                <th>Evolution</th>
                <th>DateDiagnostique</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($diagno as $diagnostic)
            <tr>
                <td>{{$diagnostic->IdD}}</td>
                <td>{{$diagnostic->Diagnostique}}</td>
                <td>{{$diagnostic->Evolution}}</td>
                <td>{{$diagnostic->DateDiagnostique}}</td>
                <td><a href="/suppDiagno/{{$diagnostic->IdD}}" data-bs-toggle="modal" data-bs-target="#modalSupp"><img src="/image/supp.png" alt="Description de l'image" width="20px"></a>
                
                <td> <a href="/modiDiagnostique/{{$diagnostic->IdD}}" data-bs-toggle="modal" data-bs-target="#{{$diagnostic->IdD}}"><img src="/image/mod.png" width="20"/></a></td>

            </td>
                 
            </tr>
            <div class="modal fade" id="modalSupp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer Un Diagnostique</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Voulez-vous vraiment supprimer cette ligne ?</h4>
      </div>
      <div class="modal-footer">
        <form method="POST" action="/suppDiagno/{{$diagnostic->IdD}}">
          @csrf
          @method('DELETE')
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
         



    <!-- Modal pour modifier -->
    <div class="modal fade" id={{$diagnostic->IdD}} tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">modifier un diagnostique</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/enregisreModi/{{$diagnostic->IdD}}">
          @csrf

          <label for="idP" class="form-label">ID</label>
            <input type="text" name="idp" id="idp" value="{{ $patient->Id }}" class="form-control" readonly>
          </div>
          <div class="mb-3">
            <label for="nomP" class="form-label">Diagnostique</label>
            <input type="text" name="diagnost" id="diagnost" value="{{ $diagnostic->Diagnostique }}" class="form-control">
          </div>
          <div class="mb-3">
            <label for="prenomP" class="form-label">Evolution</label>
            <input type="text" name="evol" id="evol" value="{{ $diagnostic->Evolution }}" class="form-control">
          </div>
          <div class="mb-3">
            <label for="cinP" class="form-label">Date</label>
            <input type="date" name="dateD" id="dateD" value="{{ $diagnostic->DateDiagnostique }}" class="form-control">
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
            @endforeach
        </tbody>
    </table> 
    <div>{{$diagno->links()}}</div>




    <!-- <hr> -->
    <!-- Modal pour Ajoute -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Ajouter un diagnostique</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/DiagnoSave/{{$diagnostic->IdD}}">
          @csrf

          <div class="mb-3">
            <label for="idP" class="form-label">Id</label>
            <input type="text"   id="idp"name="idp"value ={{ $patient->Id }} readonly class="form-control form-control-sm"/>
          </div>

          <div class="mb-3">
            <label for="nomP" class="form-label">Diagnostique</label>
            <textarea name="diagnost" id="diagnost" cols="55" rows="5"></textarea>
          </div>

          <div class="mb-3">
            <label for="prenomP" class="form-label">Evolution</label>
            <textarea name="evol" id="evol" cols="55" rows="5"></textarea>
          </div>

          <div class="mb-3">
            <label for="cinP" class="form-label">Date</label>
            <input type="date" name="dateD" id="dateD" class="form-control form-control-sm"/>
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
<!-- <hr> -->  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
@endsection
