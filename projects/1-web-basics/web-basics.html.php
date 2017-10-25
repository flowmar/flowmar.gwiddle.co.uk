<?php
    $webbasicscss=$_SERVER['HTTP_HOST'] . '/css/web-basics.css'
?>

<link rel="stylesheet" href="https://<?php echo $webbasicscss ?>">

<link href="../../css/web-basics.css" rel="stylesheet">
</head>

<body class="blue-gradient">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/nav.inc.html.php'?>

    <br>
    <br>

    <!-- Main -->
    <main class="">
        <br>

        <!-- Wireframing -->
        <div class="row text-center animated rubberBand">
            <div class="col-12">
                <button class="btn btn-secondary unique-color raised round animated bounceInLeft" id="wireframing" type="button" title="Wireframing">
                        <span class="wfbtnword">
                            Wireframing - HTML
                        </span>
                    </button>
                <div class="text-center col-12" id="button-area-1"></div>

                <!-- Basic Portfolio -->

                <a href="#" title="Basic Portfolio Live Link">
                    <button class="btn btn-yellow raised round blue darken-2 animated bounceInRight" id="basic" type="button">
                    <span class="cssbtnword">
                        Basic Portfolio - CSS
                    </span>
                </button>
                </a>
                <div class="text-center col-12" id="button-area-2"></div>

                <!-- Responsive Portfolio -->

                <a href="#" title="Responsive Portfolio Live Link">
                    <button class="btn btn-cyan raised round pink darken-2 animated bounceInDown" id="responsive" type="button">
                    <span class="mediabtnword">
                        Responsive Portfolio - Media Queries
                    </span>
                </button>
                </a>
                <div class="text-center col-12" id="button-area-3"></div>

                <!-- Bootstrap Portfolio -->

                <a href="#" title="Bootstrap Portfolio Live Link">
                    <button class="btn btn-deep-purple raised round cyan darken-4 animated bounceInDown" id="bootstrap" type="button">
                    <span class="bs4btnword">
                        Bootstrap 4 Responsive Portfolio
                    </span>
                </button>
                </a>
                <div class="text-center col-12" id="button-area-4"></div>

            </div>
        </div>
        <div class="container-fluid animated rollIn">
            <br><br>
            <div class="row animated fadeIn">
                <div class="col text-center">
                    <a href="../../code" title="Go Back">
                        <button class="btn btn-secondary purple-gradient raised animated fadeIn" type="button">
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
    <div class="container-fluid z-depth-3 position-sticky p-3">
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
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"
 sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
 anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="../../js/mdb.min.js"></script>
    <script src="../../js/portfolio.js"></script>
    <script src="../../js/web-basics.js">
    </script>
</body>

</html>