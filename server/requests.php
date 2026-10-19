<?php 
include "../common/db.php";
session_start(); 

if(isset($_POST['signup'])){
    print_r($_POST);
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $user=$conn->prepare("INSERT INTO users(username,email,password,contact,address)VALUES('".$username."','".$email."','".$password."',$contact,'".$address."')");
    $result=$user->execute();
    header('Location: /discuss-php-practice');
    }// signup

    
    // SQL query template
//$sql = "INSERT INTO users(username,email,password,contact,address)VALUES('".$username."','".$email."','".$password."',$contact,'".$address."')";
//if ($conn->query($sql) === TRUE) {
 // $_SESSION['user']=['username'=>$username ,'email'=>$email];
  
   //header('Location: /discuss-php-practice');
  


elseif(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    print_r($_POST);
    $query="select * from users where email='".$email."' and password='".$password."'";
    $login_result=$conn->query($query);
    if($login_result->num_rows==1)
        {
        foreach($login_result as $row){
        $id=$row['id'];
        $username=$row['username'];                
        $_SESSION['user']=['username'=>$username ,'email'=>$email,'user_id'=>$id];
        //echo "user registered successfully";
        header('Location:/discuss-php-practice');
        }
       
    }
}
    
elseif(isset($_GET['logout'])){
       session_unset();
       header('Location:/discuss-php-practice');
    } //logout
    elseif(isset($_POST['ask'])){
        print_r($_SESSION['user']);
        $title=$_POST['title'];
        $description=$_POST['description'];
        $cat_id=$_POST['category'];
        $user_id=$_SESSION['user']['user_id'];
         $ask=$conn->prepare("INSERT INTO questions(title,description,user_id,category_id)VALUES('".$title."','".$description."','".$user_id."','".$cat_id."')");
         $result=$ask->execute();
        if($result){
        header('Location:/discuss-php-practice');
    }
}//ask
elseif(isset($_POST['submit-answer'])){
    $answer=$_POST['answer'];
    $question_id=$_POST['question_id'];
    $user_id=$_SESSION['user']['user_id'];
    $submit_answer=$conn->prepare("INSERT INTO answers(answer,question_id,user_id) VALUES('".$answer."','".$question_id."','".$user_id."')");
    $submit_answer->execute();
    header("Location:/discuss-php-practice");
    }
   
?>