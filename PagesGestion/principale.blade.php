<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  
<header>
  <nav>
    <ul>
      <li ><img src="/image/c.png" width="60px">Cabinet Médical</li>
      <li class="para"><a class="link-offset-1" href="/GestionCM">Patients</a></li>
      <li><a class="link-offset-2" href="/dataUsere">Users</a></li>
    </ul>
  </nav>
</header>
<style>
 
    body {
  margin: 0;
  font-family: Arial, sans-serif;
}

header {
  background-color: #333;
  color: #fff;
  padding: 10px 0;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline;
  margin-right: 20px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
}

nav ul li a:hover {
  text-decoration: underline;
  color:#1E90FF;
}

</style>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>




@yield('contenu') 


  
</body>
</html>