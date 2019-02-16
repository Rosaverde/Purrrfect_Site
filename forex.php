<?php
    session_start();
	    if((!isset($_SESSION['logIn'])) && ($_SESSION['logIn']==false))
        {
            header('Location: LOGIN');
            exit();
        }
        if((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true)&& ($_SESSION['VIP']==!1))
            {
                header('Location: LOGIN');
                exit();
            }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Purrfect Match</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="LOGIN.css">
</head>

<body>
  <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://purrrfect.online">Purrfect Match</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="http://purrrfect.online">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a href="games">Games</a></li>

                    <?php
                    // Adding Forex nav button after logging
                        if((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true))
                            {
                                echo '<li><a href="forex.php">Forex</a></li>';
                            }
                    ?>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="SignUp"><i class="fas fa-user-plus"></i>Sign Up</a></li>
                    <li><a href=
                    
                        <?php
                        //Toggle login or log out file           
                            if((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true))
                                {
                                    echo 'logout.php';
                                }
                                else
                                {
                                    echo 'LOGIN';
                                }
                        ?>>
                        <i class="fas fa-user"></i>
                        <?php
                        // Adding log out after loging
                        if((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true))
                            {
                            echo 'Welcome '.$_SESSION['user'].'! Log Out!';
                            }
                            else
                            {
                            echo 'Login';
                            }
                        ?>
                    </a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
  </nav>
  <h1>FOREX STRATEGIES</h1>
  <div id="for">
    <a href="/forex/MovingAverageEA" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>MovingAverageEA</a>
    <hr>
    <a href="/forex/Sure-Fire" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>Sure-Fire EA</a>
    <hr>
    <a href="/forex/SarEA" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>SarEA</a>
    <hr>
    <a href="/forex/Momentum_Trade" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>5 Min Momentum Trade</a>
    <hr>
    <a href="/forex/PivotPoint" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>PivotPoint</a>
    <hr>
    <a href="/forex/NewsEA" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>News</a>
    <hr>
    <a href="/forex/FraktalEA" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>Fraktale</a>
    <hr>
    <a href="/forex/FaleEliota" class="btn btn-default btn-lg" ><i class="fas fa-chart-line"></i>FaleEliota  </a>
    <hr>
<!--<a href="" class="btn btn-default btn-lg" ><i class="fas fa-paw"></i></a>
    <hr>
    <a href="" class="btn btn-default btn-lg" ><i class="fas fa-paw"></i></a>
    <hr>
    <a href="https://www.mql5.com/en/articles/1572?utm_campaign=articles.list&utm_medium=special&utm_source=mt5editor " class="btn btn-default btn-lg" ><i class="fas fa-paw"></i>Protect Yourselves, Developers! </a>
    <hr>
    <a href="" class="btn btn-default btn-lg" ><i class="fas fa-paw"></i></a>
    <hr>
    <a href="https://admiralmarkets.com/education/articles/forex-strategy/simple-forex-scalping-strategies-and-techniques " class="btn btn-default btn-lg" ><i class="fas fa-paw"></i>Simple Forex Scalping Strategies And Techniques <h3>Admiral Markets</h3>  </a>
    <hr>
    <a href="https://admiralmarkets.com/education/articles/forex-strategy/forex-1-minute-scalping-strategy-explained " class="btn btn-default btn-lg" ><i class="fas fa-paw"></i>Forex 1-Minute Scalping Strategy Explained <h3>Admiral Markets</h3> </a>
    <hr>
    <a href="https://admiralmarkets.pl/education/articles/forex-indicators/kanal-keltnera " class="btn btn-default btn-lg" ><i class="fas fa-paw"></i>Kanał Keltnera na Platformie MetaTrader [Poradnik Tradera] </a>
    <hr>
    <a href="https://www.mql5.com/en/code/12872" class="btn btn-default btn-lg" ><i class="fas fa-paw"></i> Angry Bird (Scalping)</a>
		<hr>
    <a href="https://www.mql5.com/en/forum/43518/page14 " class="btn btn-default btn-lg" ><i class="fas fa-paw"></i>Experts: Angry Bird (Scalping) </a> 
		<hr>-->
    </div>	

    <footer class="footerWrap">
        <p>Copyright © 2019 Asuna-Technologies.</p>
    </footer>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
