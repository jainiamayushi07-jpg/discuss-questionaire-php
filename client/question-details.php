<div class="container">
    <?php 
    include'./common/db.php';
    $question_id=$_GET['q-id'];//from index page
    $query="select * from questions where id=$question_id";
    $result=$conn->query($query);
    foreach($result as $row){
     $title=$row['title'];
     $description=$row['description'];
     echo "<h1 class='question-title'> Question : $title </h1>
     <p>$description</p>"; }?>
     <form method="post" action="./server/requests.php">
       <h4>Answers : </h4>
       <?php $select_answer ="select * from answers where question_id=$question_id";
       $query_answer=$conn->query($select_answer);
       foreach($query_answer as $row_answer){
         $answer=$row_answer['answer'];
        echo "<div class='row answer-wrapper'>$answer</div>";} ?>
    <input type="hidden" name="question_id" value="<?php echo $question_id; ?>"
    <div class="form-group col-6">
        <textarea name="answer" class="form-control offset-sm-1" cols="6" rows="6" placeholder="write your answer here"></textarea>
      </div>
    <div class="col-6">
      <input type="submit" class="btn btn-primary " name="submit-answer" value="Submit Answer"/>
    </div>
  </form>

</div>