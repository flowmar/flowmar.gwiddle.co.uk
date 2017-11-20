<!DOCTYPE html>
<html>
    <?php
    /**
    * Template for the Head section across the site
    */

    /**
     *  Require helper function
     */
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php';
            $mdb=$_SERVER['HTTP_HOST'] . '/css/mdb.min.css';
            $style=$_SERVER['HTTP_HOST'] . '/css/style.css';
            $portfoliojs=$_SERVER['HTTP_HOST']. '/js/portfolio.js';
            ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php htmlout($pageTitle) ?></title>
    <link
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Quicksand|Oswald|Press+Start+2P|Pacifico|Shadows+Into+Light+Two"
        rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://<?php echo $mdb ?>" rel="stylesheet">
    <link href="https://<?php echo $style ?>" rel="stylesheet">