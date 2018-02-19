<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>{{ $pageTitle }}</title>

<!-- Bootstrap core CSS -->
<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../assets/css/blog-post.css" rel="stylesheet">
<style>
  #success_message{
    display:none;
  }

</style>
</head>
<body>
  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../controllers/PostController.php">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            @if(!$uname)
              <li class="nav-item">
                <a class="nav-link" href="OperationController.php?op=signin">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="OperationController.php?op=signup">Sign Up</a>
              </li>
              
            @else
                  <li class="dropdown" style="margin-left:3px;margin-top:9px;">
                          <img class="img-fluid rounded" style="width:40px;height:40px;border-radius:20px;"src="../public/images/{{User::find_by_username($uname)->image}}" alt="">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             {{$uname}}  <span class="caret"></span>
                          </a>
                    
                <ul class="dropdown-menu" role="menu">
                <li><a href="RegisterController.php?logout">Logout</a></li>
                @if($role==1)
                   <li><a href="AdminController.php">Admin Panel</a></li>              
                @endif
                </ul>
                  </li>
            @endif
            
          </ul>
        </div>
      </div>
    </nav>
@yield('content')
 <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
@yield('scripts')
</body>
</html>