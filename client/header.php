
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="./public/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/discuss-php-practice">Home <span class="sr-only">(current)</span></a>
      </li>
     <?php
     session_start();
     //print_r($_SESSION['user']);
     if(isset($_SESSION['user'])){?>
       <li class="nav-item">
        <a class="nav-link" href="server/requests.php?logout=true">Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="?ask=true">Ask A Question</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?uid=$_SESSION['user']['user_id]">My Questions</a>
      </li>
     <?php } else {?>
       <li class="nav-item">
        <a class="nav-link" href="?signup=true">SignUp</a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="?login=true">Login</a>
      </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Latest Questions</a>
      </li>
    </ul>
  </div>
</nav>