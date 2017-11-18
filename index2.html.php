<link href="css/rainbow.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body class="dark-gradient">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/nav.inc.html.php'; ?>
<hr>
<!-- Main -->

<div class="animated slideInUp jumbotron-fluid" id="jumb">
    <div class="text-left">
        <h2 class="animated rollIn mb-2 text-info font-weight-bold" id="hi">
            Hi, my name is
        </h2>
        <br>
        <br>
        <br>
        <h1
            class="animated lightSpeedIn"
            id="intro"
            data-heading="Omar."
            title="That's my name!">
            <span
                class="animated
                    tada text-center"
                data-heading="Omar.">Omar.</span></h1>
    </div>
</div>
<section class="container-fluid">
    <div class="row">
        <h4
            class="animated rollIn col-4 text-success pull-right"
            id="first"
            title="Pancake stacks!">I am a full-stack developer,</h4>
    </div>
    <br>
    <br>
    <div class="row">
        <div
            class="text-warning mr-1 animated slideInRight mt-2 pt-2"
            id="flow"
            title="I love Hoops! &lt;3">a flow artist,</div>
    </div>
    <br><br><br><br>
    <div class="row text-left mt-1 mb-3">
        <div
            class="text-danger animated rollIn col-4"
            id="toy"
            title="Shameless Self-Promotion">and a flow propsmith.</div>
    </div>
</section>
<article class="container justify-content-center mt-4">
    <div class="row bg-dark text-center text-white updates m-auto">

        <span class="display-3 text-center font-weight-bold">News and Updates</span>
        <hr class="white">
        <p class="mb-2" title="This is a tooltip, bruh.">
            <br>
            <span class="h3">October 17, 2017</span>
            <br>
            <ul class="p-2">
                <li>
                    My
                    <a href="https://github.com/flowmar/gifs-in-a-jiffy">Giphy API App</a>
                    and my back end project,
                    <a
                        href="https://flowmar.gwiddle.co.uk/projects/3-back-end/1-liri-bot-node/liri-screenshots.html">Liri</a>, are both posted!
                </li>
                <br>
                <li></li>
            </ul>
        </p>
    </div>
    <div class="col"></div>
</div>
</section>
<!-- Link Buttons to other pages -->
<section class="container-fluid text-center justify-content-center">
<ul class="col list-inline">
    <li class="list-inline-item" id="code-link">
        <a
            class="btn btn-success btn-default btn-lg light-green accent-4 raised round animated bounceInLeft"
            href="https://flowmar.gwiddle.co.uk/code"
            role="button">
            <span class="codebtnword">Code</span>
        </a>
    </li>
    <li class="list-inline-item" id="flow-link">
            <a
                class="btn btn-primary raised round light-blue accent-2 btn-lg animated bounceInRight"
                href="https://flowmar.gwiddle.co.uk/flow"
                role="button">
                <span class="flowbtnword">
                    Flow
                </span>
            </a>
        </li>
        <li class="list-inline-item" id="contact-link">
            <a
                class="btn btn-warning btn-lg raised round amber accent-4 animated bounceInDown"
                href="https://flowmar.gwiddle.co.uk/contact"
                role="button">
                <span class="contactbtnword">
                    Contact
                </span>
            </a>
        </li>
    </ul>
</div>
</article>
<hr class="white">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/footer.html.php';?>

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
<script src="js/mdb.min.js"></script>
<script src="js/portfolio.js"></script>
<script src="js/index.js"></script>
</body>

</html>