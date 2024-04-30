<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
            <h4 class="mb-3">Ajouter un compte Secretaire :</h4>

                <form action="/userAjout" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            
                            
                            <label class="form-label">Nom :</label>
                            <input type="text" name="nomu" id="nomu" class="form-control mb-3" placeholder="Nom">
                            
                            <label class="form-label">Email :</label>
                            <input type="text" name="emailu" id="emailu" class="form-control mb-3" placeholder="Email">

                            <label class="form-label">Password :</label>
                            <input type="text" class="form-control mb-3" placeholder="Password">
                            <label class="form-label">PassWord confirmation :</label>
                            <input type="text" class="form-control mb-3" placeholder="PassWord confirmation">
                            
                            <button class="btn btn-info w-100">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
