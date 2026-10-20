<?php include "./common/db.php"; ?>
<div class="container">
    <div class="row">
      <div class="col-8">
        <h2>Questions</h2>
           <?php      
          if(isset($_GET['category_id']) && $_GET['category_id']!=""){
            $category_id = $_GET['category_id'];
            $query="select * from questions where category_id=$category_id";
          }
          elseif(isset($_GET['uid'])){
            $userid=$_GET['uid'];
            $query="select * from questions where user_id=$userid";
          }
           elseif(isset($_GET['search'])){
            $search_questions=$_GET['search'];
            $query="select * from questions where title LIKE '%$search_questions%'";
          }
          elseif(isset($_GET['latest'])){
            $query="select * from questions ORDER BY id DESC";
          }           
          else{
          $query= "select * from questions";
          }
          $result=$conn->query($query);
          foreach($result as $row){
          $title=$row['title'];
          $question_id=$row['id'];
          $description=$row['description'];
           echo "<div class='question-list'>
           <h6 class='my-question'><a href='?q-id=$question_id'>$title</a>";
           if(isset($userid) && $userid){
               echo "<a href='./server/requests.php?myquestion-id=$question_id'>Delete</a>";
           } else {
               echo "None";
           }
           echo "</h6></div>";
          }?>
           
      </div>
      <div class="col-4"><h1> Categories </h1>
        <?php $category_query ="select * from category";
              $result_category=$conn->query($category_query);
              foreach($result_category as $row_category){
                $category_name=$row_category['category_name'];
                $cat_id=$row_category['cat_id'];
               echo "<div class='question-list'>
               <h4><a href='?category_id=$cat_id'>$category_name</a></h4>
               </div>";}?>
      </div>
    </div>
</div>

  
