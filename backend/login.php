<?php 
    include('db.php');
    session_start();
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $password=md5($_POST['password']);
 
        $query=$conn->query("SELECT * from user where username='$username' and password='$password'");
 
        if ($query->num_rows>0){
            $row=$query->fetch_array();
            $_SESSION['user']=$row['userid']; 
        }
        else{
            ?>
                <span>erreur de connexion. Utilisateur introuvable.</span>
            <?php 
        }
    }
?>