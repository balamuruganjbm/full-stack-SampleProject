<?php require 'PDOconfig.php';?>

<?php
    if(isset($_POST['details']))
    {
        $fname = htmlspecialchars($_POST['fname']);
        $lname= htmlspecialchars($_POST['lname']);
        $email = htmlspecialchars($_POST['email']);
        $cname= htmlspecialchars($_POST['cname']);
        $designation = htmlspecialchars($_POST['designation']);
        $salary = htmlspecialchars($_POST['salary']);
        $phno = htmlspecialchars($_POST['phno']);

        
            if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
                header("Location: ../getdetails.php");                 
            } 
            elseif(filter_var($salary,FILTER_VALIDATE_INT)===false){
                header("Location: ../getdetails.php");                 
            }
            elseif(strlen($phno)!=10){
                header("Location: ../getdetails.php");                 
            }    
            else{
            
                //PREPARED STATEMENTS USING NAMED PARAMS METHOD
                $sql = 'INSERT INTO userdetails(firstname,lastname,email,companyname,designation,salary,phno) VALUES (:firstname,:lastname,:email,:companyname,:designation,:salary,:phno)';
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['firstname'=>$fname,'lastname'=>$lname,'email'=>$email,'companyname'=>$cname,'designation'=>$designation,'salary'=>$salary,'phno'=>$phno]);
                
                //INSERT TO JSON FILE
                if(file_exists('../userdetails.json')){
                    $current_data = file_get_contents('../userdetails.json');
                    $array_data = json_decode($current_data,true);
                    $extra = array(
                        'firstname'=>$fname,
                        'lastname'=>$lname,
                        'email'=>$email,
                        'companyname'=>$cname,
                        'designation'=>$designation,
                        'salary'=>$salary,
                        'phno'=>$phno
                    );
                    $array_data[]=$extra;
                    $final_data = json_encode($array_data);
                    if(file_put_contents('../userdetails.json',$final_data));
                    {
                        header("Location: ../showdetails.php");
                    }
                }
                else{
                    header("Location: ../getdetails.php");
                }          
            }
        
    }
    else{
        header("Location: ../getdetails.php");
    }
?>