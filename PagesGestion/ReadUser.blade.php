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
    .ajout{
        margin-top:8%;
        margin-left:12%;
    }
</style>
<body>
@include('sweetalert::alert')

<div class="container">
   <a href="/ajoutU"> <button type="button" class="btn btn-primary mb-3 ajout" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajouter Secrétaire
    </button></a>

    <table border="2" class="table table-hover w-75 mx-auto">
        <thead class="table table-light">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->IdU}}</td>
                <td>{{$user->NomU}}</td>
                <td>{{$user->EmailU}}</td>
                <td> <a href="/suppUser/{{$user->IdU}}" data-bs-toggle="modal" data-bs-target="#modalSupp"><img src="image/supp.png" alt="Description de l'image" width="20px"></a></td>
            </tr>
               <!-- Modal pour supprimer -->
<div class="modal fade" id="modalSupp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer Un User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Voulez-vous vraiment supprimer cette ligne ?</h4>
      </div>
      <div class="modal-footer">
        <form method="POST" action="/suppUser/{{$user->IdU}}">
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
        </tbody>
    </table>
</div>

    <!-- Votre contenu ici -->
    
    <form action="/logout" method="POST" class=" mt-5">
        @csrf
        <button type="submit" class="btn btn-info">Déconnexion</button>
    </form>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
 @endsection

