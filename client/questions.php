<div class="container">
    <div class="row">
      <div class="col-8">
        <h1> Questions </h1>
        <?php 
          include "./common/db.php";
          if(isset($_GET['category_id']) && $_GET['category_id']!=""){
             $category_id = $_GET['category_id'];
           echo  $query="select * from questions where category_id=$category_id";
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
           <h4><a href='?q-id=$question_id'>$title</a></h4>
           <p>$description</p>
           </div>";}?>
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

  
