<?php
    if(isset($_POST['email']))
    {
        $err=0;
        if(empty($_POST['email']))
        {
            $err=1;
        }else{
            $email = htmlspecialchars($_POST['email']);
        }


        if(empty($_POST['nom']))
        {
            $err=2;
        }else{
            $nom = htmlspecialchars($_POST['nom']);
        }

        if($err==0)
        {
            echo "<div>".$nom."</div>";
            echo "<div>".$email."</div>";
        }else{
            header("LOCATION:index.php?error=".$err);
        }


    }else{
        header("LOCATION:index.php");
    }
    
    // setcookie('nom', $nom, time() + 365*24*3600, null, null, false, true);
    // setcookie('email', $email, time() + 365*24*3600, null, null, false, true);
    // header("LOCATION:index.php");
?>