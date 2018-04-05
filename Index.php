<!DOCTYPE html>
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


            $("#btn-send").click(function(e) {
               // alert($("#example").serialize());

                $.ajax({
                    type: "post",
                    url: "controller/littleserver.php",
                    data: $("#example").serialize(),
                    success: function(resp) {
                        //alert(resp);

                        if (resp == 1) {
                            $('#modal1').modal('open');
                            //alert("good");
                            
                        } else {
                            //alert(resp)
                            $('#modal2').modal('open');
                        }


                    }
                });



            });
        });

    </script>

    <div class="row">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo center">Logo</a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li class="active"><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>

        <div class="parallax-container">
            <div class="parallax"><img src="images/scott-umstattd-93198.jpg"></div>
        </div>


        <div class="section white">
            <div class="row container">
                <h2 class="header">Example form with AJAX and jQuery :)</h2>
                <p class="grey-text text-darken-3 lighten-3">Here's a little example of a form with AJAX and jQuery</p>

                <div class="row">
                    <form class="col s12" id="example" name="example">
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Placeholder" id="first_name" name="first_name" type="text" class="validate">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" name="last_name" type="text" class="validate">
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                                <label for="disabled">Disabled</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate" name="email">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col offset-s5"></div>
                            <a class="waves-effect waves-light btn" id="btn-send"><i class="material-icons left">send</i>Send!</a>

                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="images/photo-1495800474903-6980ebfe465a.jpg"></div>
        </div>


    </div>


    <!--modals-->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Registered!</h4>
            <p>Great!</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <h4>FATAL ERROR!</h4>
            <p>Try again</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
        </div>
    </div>





</body>

</html>
