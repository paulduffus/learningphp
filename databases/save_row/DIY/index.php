<?php

require_once('../../vendor/autoload.php');

require_once('../../assets/html/header.php');

//include the connect_database class

//import and user $request

//start your connection to the database

$user = array( 'id' => '', 'name' => '', 'username' => '', 'email' => '', 'password' =>'');

//grab necessary information from the request

?>

<?php require_once('tutorial-navigation.php') ?>

<div class="container-fluid margin-top">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php require_once('../../assets/html/sidebar.php') ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <form name="save-user" id="save-user" action="" class="form-horizontal" method="post">


                <!-- start to create your user interface -->

            </form>
        </div>
    </div>
</div>

<?php

require_once('../../assets/html/footer.php');

//determine whether you need to save

//grab all the required information


//render safe to store in the database

//determine whether to insert a new row or update existing one

//execute the query

//close the connection
?>