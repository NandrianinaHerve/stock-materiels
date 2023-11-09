
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo_blason_fianarantsoa.gif" type="image/ico" />
    <title>Gestion du stock Materiel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>

</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('location:index.php');
    }
?>
<div class="text">
<p ><center><h1>CUF </h1></center></p>
</div>
<div class="container">
    <div class="row">
        <div id="myalert" style="display:none;">
            <div class="alert alert-info">
                <center><span id="alerttext"></span></center>
            </div>
        </div>
    </div>
     
    <div class="row loginreg" id="loginform">
    <center> <img src="images/logo_blason_fianarantsoa.gif"  class="img"></center>
        <form role="form" id="logform"><br><br>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                <input class="form-control" placeholder="Username" name="username" id="username" type="text" autofocus>
            </div><br>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa fa-key icon"></i></span>
                <input class="form-control" placeholder="Password" name="password" id="password" type="password">
            </div>
            
            <div>
                <button type="button" id="loginbutton" class="btn btn-lg btn-primary btn-block"><i class="fa fa-lock" aria-hidden="true"></i> <span id="logtext">Login</span></button>
            </div>
             
            <center><div style="border:1px solid black;height:1px;width:300px;margin-top:20px;"></div></center>
              
            <div class="footer">
                <p>Pas de compte! <a href="#" id="signup">S'inscrire</a></p>
               
            </div>
        </form>
    </div>    
     
    <div class="row loginreg" id="signupform" style="display:none;">
        <p><h1><i class="fas fa-user-tie"></i> S'inscrire</h1></p>
        <form role="form" id="signform">
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                <input class="form-control" placeholder="Username" name="susername" id="susername" type="text" autofocus>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa fa-key icon"></i></span>
                <input class="form-control" placeholder="Password" name="spassword" id="spassword" type="password">
            </div>
            <div>
                <button type="button" id="signupbutton" class="btn btn-lg btn-info btn-block"><i class="fa fa-lock" aria-hidden="true"></i> <span id="signtext">S'inscrire</span></button>
            </div>
             
            <center><div style="border:1px solid black;height:1px;width:300px;margin-top:20px;"></div></center>
              
            <div class="footer">
                <p>Avoir un compte! <a href="#" id="login">Login</a></p>
               
            </div>
        </form>
    </div>
</div>
<script src="custom.js"></script>
<style>
  .container{
        border:2px solid #2c3b64;
        text-align:center;
         
        height:500px;
        width:400px;
        box-shadow:  20px 20px 15px rgba(0, 0, 0, 0.5);;

    }
    body{
        padding:70px;
    }
    .loginreg {
        height:90px;
        width:396px;
        background-color:#2c3b64;
    }
    .row p { 
        padding-top:10px;
    }
    
    .img{
   
        width: 90px;
        height: 90px;
        border-radius: 60%; /* Crée un cercle en utilisant un rayon de 50% */
        overflow: hidden;
    }
    .text{
         color: #2c3b64;
        
    }
</style>  

<script>

$(document).ready(function(){
    //bind enter key to click button
    $(document).keypress(function(e){
        if (e.which == 13){
            if($('#loginform').is(":visible")){
                $("#loginbutton").click();
            }
            else if($('#signupform').is(":visible")){
                $("#signupbutton").click();
            }
        }
    });
 
    $('#signup').click(function(event){
        event.preventDefault();
        $('#loginform').slideUp();
        $('#signupform').slideDown();
        $('#myalert').slideUp();
        $('#signform')[0].reset();
    });
 
    $('#login').click(function(event){
        event.preventDefault();
        $('#loginform').slideDown();
        $('#signupform').slideUp();
        $('#myalert').slideUp();
        $('#logform')[0].reset();
    });
 
    $(document).on('click', '#signupbutton', function(){
        if($('#susername').val()!='' && $('#spassword').val()!=''){
            $('#signtext').text('Signing up...');
            $('#myalert').slideUp();
            var signform = $('#signform').serialize();
            $.ajax({
                method: 'POST',
                url: '../backend/signup.php',
                data: signform,
                success:function(data){
                    setTimeout(function(){
                    $('#myalert').slideDown();
                    $('#alerttext').html(data);
                    $('#signtext').text('Sign up');
                    $('#signform')[0].reset();
                    }, 2000);
                } 
            });
        }
        else{
            swal({
title: "Erreur",
text: "Veuillez remplir le(s) champ(s) vide(s)!",
icon: "warning",
buttons: true,
dangerMode: false,
})
        }
    });
 
    $(document).on('click', '#loginbutton', function(){
        if($('#username').val()!='' && $('#password').val()!=''){
            $('#logtext').text('Logging in...');
            $('#myalert').slideUp();
            var logform = $('#logform').serialize();
            setTimeout(function(){
                $.ajax({
                    method: 'POST',
                    url: '../backend/login.php',
                    data: logform,
                    success:function(data){
                        if(data==''){
                            $('#myalert').slideDown();
                            $('#alerttext').text('Login avec succès!');
                            $('#logtext').text('Login');
                            $('#logform')[0].reset();
                            setTimeout(function(){
                                location.reload();
                            }, 2000);
                        }
                        else{
                            $('#myalert').slideDown();
                            $('#alerttext').html(data);
                            $('#logtext').text('Login');
                            $('#logform')[0].reset();
                        }
                    } 
                });
            }, 2000);
        }
        else{
            swal({
title: "Erreur",
text:  "Veuillez remplir le(s) champ(s) vide(s)!",
icon: "warning",
buttons: true,
dangerMode: false,
})
        }
    });
});

</script>
<script src="js/sweetalert.min.js"></script>

</body>
</html>