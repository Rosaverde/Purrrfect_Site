<?php
    session_start();
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
                    <li><a href="#"><i class="fas fa-user-plus"></i>Sign Up</a></li>
                    <li><a href=

                    
                        <?php
                        //Toggle login or log out file           
                            if((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true))
                                {
                                    echo 'logout';
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
    <div id="games">
        <div class="container">
            <div class="row justify-content-center">
                <div id="contactpadd" class="content ">
                    <div class="login mingame">
                        <h3>This site is the result of the skill development process</h3>
                        <h3>Special thanks to:</h3>
                        <p>Colt Steele - UDEMY <a href="https://www.udemy.com/user/coltsteele/" class="btn btn-default btn-lg" ><i class="far fa-arrow-alt-circle-left"></i> </a></p>
                        <p>Jonas Schmedtmann - UDEMY <a href="https://www.udemy.com/user/jonasschmedtmann/" class="btn btn-default btn-lg" ><i class="far fa-arrow-alt-circle-left"></i> </a></p>
                        <p>Angela Yu - UDEMY <a href="https://www.udemy.com/user/4b4368a3-b5c8-4529-aa65-2056ec31f37e/" class="btn btn-default btn-lg" ><i class="far fa-arrow-alt-circle-left"></i> </a></p>
                        <p>Brackeys - Youtube <a href="https://www.youtube.com/user/Brackeys" class="btn btn-default btn-lg" ><i class="far fa-arrow-alt-circle-left"></i> </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footerWrap">
        <p>Copyright © 2019 Asuna-Technologies.</p>
    </footer>

<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
