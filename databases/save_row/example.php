<?php require_once('tutorial-navigation.php') ?>

<?php require_once('../../assets/html/header.php');  ?>

<section id="tutorial">
    <?php
    //bring in our third party libraries
    require_once('../../vendor/autoload.php');
    //bring in our database class
    require_once('connect_database.php');
    //namespace our request object
    use Symfony\Component\HttpFoundation\Request;
    //create our request object
    $request = Request::createFromGlobals();
    //define our database connection
    $conn = new connect_database();
    //create a blank array to contain an empty user record
    $user = array( 'id' => '', 'name' => '', 'username' => '', 'email' => '', 'password' =>'');
    //has the user selected a specific user
    $id = (int) $request->query->filter('id', '', FILTER_SANITIZE_NUMBER_INT);
    //has the user submitted the form
    $action = (string) $request->request->filter('action', '');
    //if the user has selected a record use our connection to bring back that record
    if ($id){
        //Use db connection to provide SQL to bring back one user record
        $user = current($conn->fetchRows("SELECT * FROM `users` WHERE `id` = '" . $id ."';"));
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
        $isNew = ($id == 0);

        //first of all lets get filtered user information
        $name = $request->request->filter('name', '');
        $username = $request->request->filter('username', '');
        $email = $request->request->filter('email','');
        $password = $request->request->filter('password', '');

        //next up lets render it safe to store in the database
        $name = $conn->escape($name);
        $username = $conn->escape($username);
        $email = $conn->escape($email);
        $password = $conn->escape($password);

        //but we want to do more with a password at the very minimum MD5
        $password = md5($password);

        //next we will need to determine whether to insert a new row or update an existing one
        if ($isNew) {
            $sql = "INSERT INTO `users` (`name`, `username`, `email`, `password`) VALUES('$name', '$email', '$username', '$password')";
        } else {
            $sql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `username` = '$username', `password` = '$password' WHERE `id` = '$id'";
        }
        //provide this SQL to the database connection
        $conn->query($sql);
        //be sure to close the db connection
        $conn->close_connection();
    } ?>
</section>

<?php require_once('../../assets/html/footer.php'); ?>


