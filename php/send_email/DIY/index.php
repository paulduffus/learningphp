<link href="/assets/css/rainbow-code/themes/css/github.css" rel="stylesheet">

<script src="/assets/javascript/rainbow-code/dist/rainbow.js"></script>
<script src="/assets/javascript/rainbow-code/src/language/generic.js"></script>
<script src="/assets/javascript/rainbow-code/src/language/php.js"></script>

<?php require_once('tutorial-navigation.php') ?>

<?php

require_once('../../assets/html/header.php');

//start to connect to the database

?>
<div class="container-fluid margin-top">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php require_once('../../assets/html/sidebar.php') ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <div class="table-responsive">

            <?php //start to build up your html table here ?>


            <?php //when ready to loop through user records here ?>


            </div>
        </div>
    </div>
</div>
<?php

//close connection here

require_once('../../../assets/html/footer.php');
?>
