<?php
  session_start();
  if((!isset($_SESSION['udanarejestracja'])))
        {
            header('Location:index.html');
            exit();
        }
    else
        {
            unset($_SESSION['udanarejestracja']);
        }
?>
 <!DOCTYPE html>
<html>
<head>
	<title>Purrfect Match</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="LOGIN.css">

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index">Purrfect Match</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class="active"><a href="https://media.giphy.com/media/xTiTno00tQF8TvJxhS/giphy.gif">Home</a></li>
        <li><a href="https://media.giphy.com/media/1AfLx8dLTVoHK/giphy.gif">About</a></li>
        <li><a href="https://media.giphy.com/media/7JmWIZnS8NTRuUfEUF/giphy.gif">Contact</a></li>
        <li><a href="games.php">Games</a></li>
        <?php
        // Adding Forex nav button after logging
            if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
                {
                    echo '<li><a href="forex.php">Forex</a></li>';
                }
        ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="SignUp.php"><i class="fas fa-user-plus"></i>Sign Up</a></li>
        <li><a href=
            <?php
            //Toggle login or log out file
            if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
                {
                    echo "logout.php";
                }
                else {
                    echo "LOGIN.php";
                }
            ?>>
       <i class="fas fa-user"></i>
          <?php
          // Adding lo out after loging
          if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
              {
                  echo "Witaj ".$_SESSION['user'].'! Log Out!';
              }
              else {
                  echo "Login";
              }
       ?>
    </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="content">
    <div class="login">
        <h1><i class="fas fa-paw"></i>  LOG IN</h1>
        <div class="welcome">You are registered. <br>Now you can log in.
        </div>
        <form action="zaloguj.php" method="post">
            <div class="tbox">
                <input type="text" placeholder="username" name="login">
            </div>
            <div class="tbox">
                <input type="password" placeholder="password" name="haslo">
            </div>
            <input class="btn_log" type="submit"  value="LOG IN">
        </form>
        <?php
        if(isset($_SESSION['error'])) echo $_SESSION['error'];  /*Your username or password is incorrect. */
          {
           
            unset($_SESSION['error']);
          }
        ?>
        <a class="b1" href="#">FORGOT PASSWORD ?</a>
        <a class="b2" href="#">CREATE AN ACCOUNT</a>
       
    </div>
</div> 

<!-- Latest compiled and minified JavaScript -->
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>