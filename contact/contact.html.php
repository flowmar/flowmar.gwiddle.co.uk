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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/footer.html.php';?>

<!-- SCRIPTS -->
<script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="../js/mdb.min.js" type="text/javascript"></script>
<script src="../js/portfolio.js "></script>
</body>

</html>