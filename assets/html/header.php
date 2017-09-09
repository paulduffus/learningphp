<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <title>Learning web development | Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for the dashboard -->
    <link href="/assets/css/dashboard.css" rel="stylesheet">

    <link href="/assets/css/shame.css" rel="stylesheet">

    <link href="/assets/css/rainbow-code/themes/css/github.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/javascripts/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/assets/javascript/jquery.js"></script>
    <script src="/assets/javascript/jquery.validate.min.js"></script>
    <script src="/assets/javascript/bootstrap.js"></script>
    <script src="/assets/javascript/rainbow-code/dist/rainbow.js"></script>
    <script src="/assets/javascript/rainbow-code/src/language/generic.js"></script>
    <script src="/assets/javascript/rainbow-code/src/language/php.js"></script>
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img class="logo" src="/assets/images/joomla-in-a-box.svg" alt="Joomla in a Box">Learning web development</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../../databases/connect_database">Connect to a database</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid" id="content-area">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php require_once('sidebar.php') ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">