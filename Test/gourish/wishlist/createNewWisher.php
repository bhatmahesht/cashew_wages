<?php
  require_once("Includes/db.php");
  $userNameIsUnique = true;
  $passwordIsValid = true;
  $userIsEmpty = false;
  $passwordIsEmpty = false;
  $password2IsEmpty = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["user"]=="")
        $userIsEmpty = true;

    $db = new WishDb;
    $wisherID = $db->get_wisher_id_by_name($_POST["user"]);
    if ($wisherID) {
        $userNameIsUnique = false;        
    }

    if ($_POST["password"]=="") 
            $passwordIsEmpty = true;
    if ($_POST["password2"]=="")
            $password2IsEmpty = true;
    if ($_POST["password"]!=$_POST["password2"]) {
            $passwordIsValid = false;
    }
    if (!$userIsEmpty && $userNameIsUnique && !$passwordIsEmpty && !$password2IsEmpty && $passwordIsValid) {
        $db->create_wisher($_POST["user"], $_POST["password"]);

        header('Location: editWishList.php' );
        exit;
    }
  }
?>  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <body>
         Welcome!<br>
             <form action="createNewWisher.php" method="POST">
            Your name: <input type="text" name="user"/><br/>
            <?php
            if ($userIsEmpty) {
                echo ("Enter your name, please!");
                echo ("<br/>");
            }                
            if (!$userNameIsUnique) {
                echo ("The person already exists. Please check the spelling and try again");
                echo ("<br/>");
            }
            ?> 
              Password: <input type="password" name="password"/><br/>
            <?php
            if ($passwordIsEmpty) {
                echo ("Enter the password, please");
                echo ("<br/>");
            }              
            ?>  
            Please confirm your password: <input type="password" name="password2"/><br/>
               <input type="submit" value="Register"/>
        </form>      
                      
            <?php
            if ($password2IsEmpty) {
                echo ("Confirm your password, please");
                echo ("<br/>");    
            }                
            if (!$password2IsEmpty && !$passwordIsValid) {
                echo ("<div>The passwords do not match!</div>");
                echo ("<br/>");  
            }                 
            ?>
</body>
</html>
