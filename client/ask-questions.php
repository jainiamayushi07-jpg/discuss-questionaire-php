<?php include "./common/db.php";?>
<div class="container signup">
    <h1> Ask Question</h1>
<form method="post" action="./server/requests.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="enter your title here">
  </div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description" id="descritpion" rows="3" cols="6"></textarea>
  </div>
  
  <?php include "category.php" ?>
  <input type="submit" class="btn btn-primary" name="ask" value="Ask"/>
</form>
</div>
