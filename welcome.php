<!DOCTYPE html>
<?php
    session_start();
    
?>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>




<body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- My own scripts -->
    <script>
        $(document).ready(function() {
            $('.parallax').parallax();

            $('.modal').modal();


        });

    </script>

    <div class="row">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo center">Logo</a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li class="active"><a href="collapsible.html">Log out</a></li>
                </ul>
            </div>
        </nav>

        <div class="parallax-container">
            <div class="parallax"><img src="images/tina-rolf-269345-unsplash.jpg"></div>
        </div>


        <div class="section white">
            <div class="row container">
                <h2 class="header center">Welcome <?php echo $_SESSION["test"][2]." ".$_SESSION["test"][3];?></h2>
                <div class="row">
                    <div class="col 6"><h4>Your email is: <?php echo $_SESSION["test"][4].""; ?> </h4></div>
                </div>
                <div class="row">
                    <div class="col 6"><h4>Your registration date was: <?php echo $_SESSION["test"][6].""; ?></h4></div>
                </div>

            </div>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="images/elisha-terada-249887-unsplash.jpg"></div>
        </div>


    </div>


    <!--modals-->

    <div id="modal2" class="modal">
        <div class="modal-content">
            <h4>Bad Credetials</h4>
            <p>Try again</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
        </div>
    </div>





</body>

</html>
