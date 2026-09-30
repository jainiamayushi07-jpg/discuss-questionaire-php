<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss | Ask Anything </title>
    <?php include "./client/commonFiles.php";?>
   <link rel="stylesheet" href="./public/style.css">
    
</head>
<body>
<?php include "./client/header.php"; ?>
<?php if(isset($_GET['signup']) && !isset($_SESSION['user'])){
 include "./client/signup.php";} 
 elseif(isset($_GET['login']) && !isset($_SESSION['user'])) {
include "./client/login.php";
}
else if(isset($_GET['ask']) && isset($_SESSION['user'])){
    include "./client/ask-questions.php";
}
elseif($_GET['q-id']){
    $question_id=$_GET['q-id'];
    include "./client/question-details.php";
}
else{
    include "./client/questions.php";
}

?>
</body>
</html>