<div class="container">
    <?php 
    include'./common/db.php';
    $query="select * from questions where id=$question_id";
    $result=$conn->query($query);
    foreach($result as $row){
     $title=$row['title'];
     $description=$row['description'];
     echo "<h1> Question : $title </h1>
     <h6>$description</h6>";
}?>
  <form method="post" action="./server/requests.php">
    <h3>Answer : </h3>
    <div class="form-group col-6">
        <textarea class="form-control" cols="6" rows="6" placeholder="write your answer here"></textarea>
      </div>
    <div class="col-6">
      <input type="submit" class="btn btn-primary " name="submit" value="Submit Answer"/>
    </div>
  </form>
</div>