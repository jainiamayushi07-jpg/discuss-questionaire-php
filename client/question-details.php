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
    <h3 class='offset-sm-1'>Answer : </h3>
    <input type="hidden" name="question_id" value="<?php echo $question_id; ?>"
    <div class="form-group col-6">
        <textarea name="answer" class="form-control offset-sm-1" cols="6" rows="6" placeholder="write your answer here"></textarea>
      </div>
    <div class="col-6">
      <input type="submit" class="btn btn-primary " name="submit-answer" value="Submit Answer"/>
    </div>
  </form>

</div>