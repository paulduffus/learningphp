<?php require_once('tutorial-navigation.php') ?>

<?php require_once('../../assets/html/header.php'); ?>

<section id="tutorial">
    <?php
    //bring in our third party libraries

    //bring in our database class

    //namespace our request object

    //create our request object

    //define our database connection

    //create a blank array to contain an empty user record

    //has the user selected a specific user

    //has the user submitted the form

    //if the user has selected a record use our connection to bring back that record
    if ($id){
        //Use db connection to provide SQL to bring back one user record

    }

    //now we start to build the form
    ?>
    <div>
        <form name="save-user" id="save-user" action="" class="form-horizontal" method="post">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" id="name" required value="<?php echo $user['name'] ?>" placeholder="" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" id="username" required value="<?php echo $user['username'] ?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" id="email" required value="<?php echo $user['email'] ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" id="password" value="<?php echo $user['password'] ?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary"/>
                    <input type="hidden" name="action" value="post">
                </div>
            </div>
        </form>
    </div>
    <?php
    //if the user has submitted the form we start to process it her
    if (strlen($action) && $action == 'post')
    {
        //lets determine if this a new record or not for later use


        //first of all lets get filtered user information





        //next up lets render it safe to store in the database





        //but we want to do more with a password at the very minimum MD5


        //next we will need to determine whether to insert a new row or update an existing one
        if ($isNew) {

        } else {

        }
        //provide this SQL to the database connection

        //be sure to close the db connection

    } ?>
</section>

<?php require_once('../../../assets/html/footer.php') ?>