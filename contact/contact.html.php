<?php
    $contactcss=$_SERVER['HTTP_HOST'] . '/css/contact.css';
?>

<link rel="stylesheet" href="https://<?php echo $contactcss ?>">

</head>

<body class="purple-gradient text-white">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/nav.inc.html.php'?>
<hr>

<!-- Main -->
<main class="container-fluid text-center animated slideInRight">
    <div class="row">
        <div class="col">
            <p>
                I can be reached by email at
                <a href="mailto:omar.imam@kineticvortex.com">omar.imam@kineticvortex.com</a>
            </p>
        </div>

        <!-- Form -->
    </div>
    <!-- <div class="row"> <form action="submit"> <label for="name">Name:</label>
    <input type="text" id="name" class="animated slideInRight"> <br><br><br> <label
    for="email">Email:</label> <input type="text" id="email" class="animated
    slideInLeft"> <br><br><br> <label for="message">Message:</label> <textarea
    type="text" id="message" rows="5" cols="28" class="animated
    slideInUp"></textarea> <br><br> <input type="submit" class="btn btn-warning
    raised round yellow darken-3 animated bounceInUp"> </form> </div> -->
</main>

<!-- Footer -->
<div
    class="container-fluid text-center mt-4 animated slideInUp position-sticky p-3 pb-4">
    <div class="row">
        <footer class="jumbotron-fluid col-12">
            <small>Connect With Me</small>
            <br>
            <ul class="connect list-inline">
                <li class="list-inline-item">
                    <a href="https://github.com/flowmar">
                        <i class="fa fa-github fa-4x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://linkedin.com/in/flowmar">
                        <i class="fa fa-linkedin fa-4x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://instagram.com/kineticvortexflow">
                        <i class="fa fa-instagram fa-4x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://kineticvortexflow.com">
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
<script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
<script src="../js/mdb.min.js" type="text/javascript"></script>
<script src="../js/portfolio.js "></script>
</body>

</html>