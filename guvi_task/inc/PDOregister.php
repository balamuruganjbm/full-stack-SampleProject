<?php require 'PDOconfig.php';?>

<?php
    if(isset($_POST['register']))
    {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $email = htmlspecialchars($_POST['email']);
        if(!empty($username)&&!empty($password)&&!empty($email)){
            if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
                header("Location: ../register.php");                 
            }    
            else{
            
                //PREPARED STATEMENTS USING NAMED PARAMS METHOD
                $sql = 'INSERT INTO userdata(username,email,password) VALUES (:username,:email,:password)';
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['username'=>$username,'email'=>$email,'password'=>$password]);
        
                header("Location: ../login.php");
            }
        }
        else{
            header("Location: ../register.php");
        }
    }
    else{
        header("Location: ../register.php");
    }
?>