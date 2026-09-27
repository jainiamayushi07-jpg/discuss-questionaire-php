<div class="container">
    <h1> Questions </h1>
    <div class="col-8">
  <?php 
  include "./common/db.php";
  $query= "select * from questions";
  $result=$conn->query($query);
  foreach($result as $row){
    $title=$row['title'];
    $question_id=$row['id'];
    $description=$row['description'];
    echo "<div class='question-list'>
    <h4><a href='?q-id=$question_id'>$title</a></h4>
    <p>$description</p>
    </div>
    ";
 }
   ?>
   </div>
</div>