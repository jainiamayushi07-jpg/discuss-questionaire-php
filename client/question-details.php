<div class="container">
  <div class="row">
   <div class="col-8">
    <?php 
    include'./common/db.php';
    echo $question_id=$_GET['q-id'];//from index page
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
        echo "<div class='answer-wrapper margin-bottom-20'>$answer</div>";} ?>
        <input type="hidden" name="question_id" value="<?php echo $question_id; ?>"
        <div class="form-group">
        <textarea name="answer" class="form-control offset-sm-1 margin-bottom-20" cols="6" rows="6" placeholder="write your answer here"></textarea>
        <input type="submit" class="btn btn-primary " name="submit-answer" value="Submit Answer"/> 
    </form>
   </div>
   <div class="col-4">
    <h1></h1>
    <?php $category_questions="select * from questions where id=$question_id";
    $result_questions=$conn->query($category_questions);
    foreach($result_questions as $row_questions){
       $category_id=$row_questions['category_id'];
       $query1="select * from questions where category_id=$category_id and id!=$question_id";
       $result1=$conn->query($query1);
       foreach($result1 as $row1){
        $questions1_id=$row1['id'];
        $title1=$row1['title'];
        echo "<a href='?q-id=$questions1_id'><h4>$title1</h4></a>";
       }

 }
   
    ?>
   </div>
 
  </div>
</div>