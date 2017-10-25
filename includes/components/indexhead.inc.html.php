<!DOCTYPE html>
<html>
<?php include
            $_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php';
            $mdb='./css/mdb.min.css';
            $style='./css/style.css';
            ?>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="x-ua-compatible" content="ie=edge">

            <title><?php htmlout($pageTitle) ?></title>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Quicksand|Oswald|Press+Start+2P|Pacifico|Shadows+Into+Light+Two" rel="stylesheet">
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
            <link href="<?php htmlout($mdb) ?>" rel="stylesheet">
            <link href="<?php htmlout($style) ?>" rel="stylesheet">
