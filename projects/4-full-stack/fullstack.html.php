<?php
    $fullstack=$_SERVER['HTTP_HOST'] . '/css/fullstack.css'
?>

<link rel="stylesheet" href="https://<?php echo $fullstack ?>">
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/nav.inc.html.php'?>

    <br>
    <br>

    <!-- Main -->
    <main class="info-color-dark">
        <br>

        <!-- This Portfolio -->
        <div class="row text-center animated rubberBand">
            <div class="col-12">
                <button class="btn btn-primary unique-color raised round animated bounceInLeft" id="thisportfolio" type="button" title="Hangman" href="https://github.com/flowmar/flowmar.tech">
                        <span class="wfbtnword">This Portfolio - PHP & mySQL</span>
                    </button>
                <div class="text-center col-12" id="button-area-1"></div>


                <!-- <a href="#" title="Basic Portfolio Live Link">
                    <button class="btn btn-primary raised round blue darken-4 animated bounceInRight" id="basic" type="button">
                    <span class="cssbtnword">
                        (Project)
                    </span>
                </button>
                </a>
                <div class="text-center col-12" id="button-area-2"></div>



                <a href="#" title="Responsive Portfolio Live Link">
                    <button class="btn btn-danger raised round pink darken-2 animated bounceInDown" id="responsive" type="button">
                    <span class="mediabtnword">
                        (Project)
                    </span>
                </button>
                </a>
                <div class="text-center col-12" id="button-area-3"></div>



                <a href="#" title="Bootstrap Portfolio Live Link">
                    <button class="btn btn-default raised round cyan darken-4 animated bounceInDown" id="bootstrap" type="button">
                    <span class="bs4btnword">
                        (Project)
                    </span>
                </button>
                </a>
                <div class="text-center col-12" id="button-area-4"></div>

            </div> -->
        </div>






        <div class="container-fluid animated rollIn">
            <br><br>
            <div class="row animated fadeIn">
                <div class="col text-center">
                    <a href="../../code.html" title="Go Back">
                        <button class="btn btn-secondary raised animated fadeIn" type="button">
                    <i class="fa fa-arrow-left"></i>
                        Back
                    </button>
                    </a>
                </div>
            </div>
            <hr>
        </div>
    </main>
    <!-- Footer -->
    <div class="container-fluid z-depth-3">
        <div class="row card animated flipInX" style="background-color: transparent;">
            <footer class="jumbotron-fluid col-12">
                <small>Connect With Me</small>
                <br>
                <ul class="connect list-inline">
                    <li class="list-inline-item">
                        <a href="https://github.com/flowmar" title="Github">
                            <i class="fa fa-github fa-4x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://linkedin.com/in/flowmar" title="LinkedIn">
                            <i class="fa fa-linkedin fa-4x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://instagram.com/kineticvortexflow" title="Instagram">
                            <i class="fa fa-instagram fa-4x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://kineticvortexflow.com" title="Kinetic Vortex Flow">
                            <i class="fa fa-circle-o-notch fa-4x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <div class="copy col-xs-12">
                    ©Omar Imam 2017
                </div>
            </footer>
        </div>
    </div>
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="../../js/mdb.min.js"></script>
    <script src="../../js/portfolio.js"></script>
    <script src="../../js/fullstack.js">
    </script>
</body>

</html>