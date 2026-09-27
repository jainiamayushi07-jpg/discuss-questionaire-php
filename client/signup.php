<div class="container signup">
    <h1 class="col-6 offset-sm-3"> Sign Up </h1>
<form method="post" action="./server/requests.php">
  <div class="form-group col-6 offset-sm-3">
    <label for="exampleFormControlInput1">Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="enter your username here">
  </div>
  <div class="form-group col-6 offset-sm-3">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="enter your email here">
  </div>
  <div class="form-group col-6 offset-sm-3">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="enter your password here">
  </div>
<div class="form-group col-6 offset-sm-3">
    <label for="exampleFormControlInput1">Phone Number</label>
    <input type="number" name="contact" class="form-control" id="contact" placeholder="enter your contact number here">
</div>
<div class="form-group col-6 offset-sm-3">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" name="address" id="address" rows="2" cols="4"></textarea>
</div>
<div class="col-6 offset-sm-3 margin-bottom-20">
  <input type="submit" class="btn btn-primary" name="signup" value="Sign Up"/>
</div>
</form>
</div>
