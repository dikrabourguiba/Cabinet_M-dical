<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h4 class="card-header text-center bg-primary text-white">Modifier le patient</h4>
                <div class="card-body">
                    <form method="POST" action="/enregisreModPatient">
                        @csrf
                        <div class="mb-3">
                            <label for="idP" class="form-label">Id :</label>
                            <input type="text" name="idP" id="idP" value="{{$patients[0]->Id}}" class="form-control form-control-sm"/>
                        </div>
                        <div class="mb-3">
                            <label for="nomP" class="form-label">Nom :</label>
                            <input type="text" name="nomP" id="nomP" value="{{$patients[0]->Nom}}" class="form-control form-control-sm"/>
                        </div>
                        <div class="mb-3">
                            <label for="prenomP" class="form-label">Prénom :</label>
                            <input type="text" name="prenomP" id="prenomP" value="{{$patients[0]->Prénom}}" class="form-control form-control-sm"/>
                        </div>
                        <div class="mb-3">
                            <label for="cinP" class="form-label">Cin :</label>
                            <input type="text" name="cinP" id="cinP"  value="{{$patients[0]->Cin}}"class="form-control form-control-sm"/>
                        </div>
                        <div class="mb-3">
                            <label for="numeroP" class="form-label">Numéro De Dossier :</label>
                            <input type="text" name="numeroP" id="numeroP" value="{{$patients[0]->NuméroDossier}}" class="form-control form-control-sm"/>
                        </div>
                        <div class="mb-3">
                            <label for="telP" class="form-label">Téléphone :</label>
                            <input type="text" name="telP" id="telP" value="{{$patients[0]->Téléphone}}" class="form-control form-control-sm"/>
                        </div>
                        <div class="mb-3">
                            <label for="datanP" class="form-label">Date De Naissance :</label>
                            <input type="text" name="datanP" id="datanP" value="{{$patients[0]->DateNaiss}}" class="form-control form-control-sm"/>
                        </div>
                        <div class="mb-3">
                            <label for="daterP" class="form-label">Date De Reception :</label>
                            <input type="text" name="daterP" id="daterP"  value="{{$patients[0]->DateReception}}" class="form-control form-control-sm"/>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 text-center">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



       
    
</body>
</html>