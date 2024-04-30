<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class=containerb>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- <h4>Se connecter</h4>
    Affichage du message d'erreur
    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif
    <form action="/sessionLogi" method="post">
        @csrf 
         Ajoutez cette ligne pour des raisons de sécurité 
        <input type="email" name="emailU">
        <input type="text" name="nomU">
        <input type="submit" value="Se connecter">
    </form> -->

<style>
    .container {
       
  max-width: 350px;
  background: #F8F9FD;
  background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
  border-radius: 40px;
  padding: 25px 35px;
  border: 5px solid rgb(255, 255, 255);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
  margin-left:290px;
  margin-top:3%;
}

.heading {
    
  text-align: center;
  font-weight: 900;
  font-size: 30px;
  color: rgb(16, 137, 211);
}

.form {
    
  margin-top: 20px;
}

.form .input {
  width: 100%;
  background: white;
  border: none;
  padding: 15px 20px;
  border-radius: 20px;
  margin-top: 15px;
  box-shadow: #cff0ff 0px 10px 10px -5px;
  border-inline: 2px solid transparent;
}

.form .input::-moz-placeholder {
  color: rgb(170, 170, 170);
}

.form .input::placeholder {
  color: rgb(170, 170, 170);
}

.form .input:focus {
  outline: none;
  border-inline: 2px solid #12B1D1;
}

.form .forgot-password {
  display: block;
  margin-top: 10px;
  margin-left: 10px;
}

.form .forgot-password a {
  font-size: 11px;
  color: #0099ff;
  text-decoration: none;
}

.form .login-button {
  display: block;
  width: 100%;
  font-weight: bold;
  background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
  color: white;
  padding-block: 15px;
  margin: 20px auto;
  border-radius: 20px;
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
  border: none;
  transition: all 0.2s ease-in-out;
}

.form .login-button:hover {
  transform: scale(1.03);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
}

.form .login-button:active {
  transform: scale(0.95);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
}

.social-account-container {
  margin-top: 25px;
}

.social-account-container .title {
  display: block;
  text-align: center;
  font-size: 10px;
  color: rgb(170, 170, 170);
  
}

.social-account-container .social-accounts {
  width: 100%;
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-top: 5px;
 
}

.social-account-container .social-accounts .social-button {
  background: linear-gradient(45deg, rgb(0, 0, 0) 0%, rgb(112, 112, 112) 100%);
  border: 5px solid white;
  padding: 5px;
  border-radius: 50%;
  width: 40px;
  aspect-ratio: 1;
  display: grid;
  place-content: center;
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 12px 10px -8px;
  transition: all 0.2s ease-in-out;
  
}

.social-account-container .social-accounts .social-button .svg {
  fill: white;
  margin: auto;
  
}

.social-account-container .social-accounts .social-button:hover {
  transform: scale(1.2);
  
}

.social-account-container .social-accounts .social-button:active {
  transform: scale(0.9);
}

.agreement {
  display: block;
  text-align: center;
  margin-top: 15px;
  
}

.agreement a {
  text-decoration: none;
  color: #0099ff;
  font-size: 9px;
}

.container1 {
  width: 100%;
  height: 100%;
  background: lightblue;
  position: relative;
  overflow: hidden;
}

.container1::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, #3498db 10%, transparent 20%),
    radial-gradient(circle, transparent 10%, #3498db 20%);
  background-size: 30px 30px; /* Adjust the size of the pattern */
  animation: moveBackground 8s linear infinite; /* Adjust the animation duration and timing function */
}

@keyframes moveBackground {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(20%, 20%);
  }
}
.img{
    margin-top:5%;
    margin-bottom:80%;
    margin-left:15% ;
    position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 70px;
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;

    
}

.containerI {
      display: flex;
      align-items: center; /* Pour aligner verticalement */
    }

    .containerI img {
      margin-right: 10px; /* Marge à droite pour séparer l'image du texte */
    }

</style>
<div class='containerI'>
   <img src="/image/c.png" width="70px" alt="Logo du cabinet médical"> <h2 class="text-dark">Cabinet Médical</h2>
</div>

<div class="container ml-3">
    <div class="heading">Se connecter</div>
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <form action="/sessionLogi" method="post" class="form">
    @csrf 
      <input required="" class="input" type="email" name="emailU" id="emailU" placeholder="E-mail">
      <input required="" class="input" type="password" name="nomU" id="nomU" placeholder="Password">
      <input class="login-button" type="submit" value="Se Connecter">
      <span class="forgot-password"><a href="#">Mot de passe oublié ?</a></span>
    </form>
</div>
  <img src="/image/2.jpg"  class="img" width="340" height="380">

</body>
</html>
