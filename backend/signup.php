<?php
    include('db.php');
    if(isset($_POST['susername'])){
        $username=$_POST['susername'];
        $password=md5($_POST['spassword']);
 
        $query=$conn->query("SELECT * from user where username='$username'");
        
 
        if ($query->num_rows>0){
            ?>
                <span>Username déja existe.</span>
            <?php 
        }
 
        elseif (!preg_match("/^[a-zA-Z0-9_]*$/",$username)){
            ?>
                <span style="font-size:11px;">Invalid username. Space & Special Characters not allowed.</span>
            <?php 
        }
        elseif (!preg_match("/^[a-zA-Z0-9_]*$/",$password)){
            ?>
                <span style="font-size:11px;">Invalid password. Space & Special Characters not allowed.</span>
            <?php 
        }
        else{
            $mpassword=md5($password);
            $conn->query("INSERT INTO user (username, password) values ('$username', '$password')");
            ?>
                <span>inscription avec succes.</span>
            <?php 
        }
    }
?>