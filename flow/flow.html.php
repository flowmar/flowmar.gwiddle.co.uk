<?php
    $bendscss=$_SERVER['HTTP_HOST'] . '/css/bends.css';
    $flowcss=$_SERVER['HTTP_HOST'] . '/css/flow.css';
?>

<link rel="stylesheet" href="https://<?php echo $bendscss ?>">
<link rel="stylesheet" href="https://<?php echo $flowcss ?>">


</head>

    <body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/nav.inc.html.php'?>

        <!-- Main -->
        <div class="blue-gradient z-depth-3">
            <div class="container-fluid">
                <div class="animated slideInUp jumbotron-fluid">
                    <div class="text-right">
                        <h2 class="animated rollIn text-info "></h2>
                        <br><br><br>
                        <h1 class="animated lightSpeedIn mt-4 p-3" data-heading="Flow Life"><span class="animated
                    tada text-center" data-heading="Flow Life"></span></h1>
                    </div>
                </div>
            </div>

            <div class="container mt-3 mb-3 p-3">
                <div class="row animated text-center bounceInUp">
                    <div class="wrapper">
                        <h2 data-heading="Flow Life" contenteditable>Flow Life</h2>
                    </div>
                </div>
            </div>

            <br><br><br>

            <!-- Content Area -->
            <div class="mt-2 container animated flipInY p-4 mb-0">
                <div class="row justify-content-center text-center">
                    <div class="col"></div>
                    <div class="col-10">
                        <a class="btn btn-warning raised rounded" href="https://www.kineticvortexflow.com">Kinetic Vortex Flow</a>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <p class="h4 col">
                    I will have some updates on Flow stuff very soon... for now, here's a bunch of flowspam:
                    <iframe src="https://users.instush.com/collage/?cols=7&rows=7&sl=true&user_id=182556602&username=flowmarhoops&sid=-1&susername=-1&tag=-1&stype=mine&bg=transparent&space=true&rd=false&grd=false&gpd=6&drp=false&pin=true&t=999999ru8QJEpSAUsNK_C5m7HWvHmEoVVNxb-lPwmLxZqQhLYmBkFxJpNtNAGoaxJHTWHy1Uv_92AlMWY" allowtransparency="true" frameborder="0" scrolling="no" style="display:block;width:733px;height:733px;border:none;overflow:visible;"></iframe>
                </p>
                <div class="col"></div>
            </div>
            <br><br><br>
            <hr style="text-shadow: .1rem .1rem .1rem black">
        </div>
        <!-- Footer -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/footer.html.php';?>

        <!-- SCRIPTS -->

    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <script src="../js/mdb.min.js" type="text/javascript"></script>
        <script src="../js/portfolio.js"></script>
        <script src="../js/flow.js"></script>
    </body>

</html>