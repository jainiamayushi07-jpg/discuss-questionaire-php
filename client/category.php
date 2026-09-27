<div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" name="category">
        <option>Select category</option>
        <?php $query="select * from category";
        $cat_query=$conn->query($query);
        foreach($cat_query as $row){
           $id=$row['cat_id'];
            $cat_name=$row['category_name'];
            $category_name=ucfirst($cat_name);
            echo "<option value=$id>$category_name</option>";
        }
     ?>
    </select>
  </div>
  
