<?php require 'PDOconfig.php';?>
<?php
    if(isset($_POST['login']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        if(!empty($email)&&!empty($password)){    
            
            //PREPARED STATEMENTS USING NAMED PARAMS METHOD
            $sql = 'SELECT * FROM userdata where email=:email && password=:password';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['email'=>$email,'password'=>$password]);
            $row = $stmt->fetchAll();
            if($stmt->rowCount()>0)
            {
                //SESSION STARTS
                session_start();
                $_SESSION['name']=$row[0]->username;
                $_SESSION['email']=$row[0]->email;
                header("Location: ../getdetails.php");
            }
            else{
                header("Location: ../login.php");
            }
            
        }
        else{
            header("Location: ../login.php");
        }
    }
    else{
        header("Location: ../login.php");
    }
    
?>