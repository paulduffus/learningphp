<?php require_once('tutorial-navigation.php') ?>

<?php

require_once('../../assets/html/header.php');

require_once('../../assets/html/body.php');

/**
 * Way to connect to the database and bring back an array of users for example
 */
$creds = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'db' => 'sites_php'
);

//create a connection to the database based on credentials and assign to a variable called $conn
$conn = mysqli_connect($creds['host'], $creds['user'], $creds['password'], $creds['db']);

//with this open connection to the database pass in our SQL query
$result = $conn->query("SELECT * FROM `users`;");

//create an empty array to contain the information
$users = array();

//loop through the result of the database query
while($row = $result->fetch_assoc()) {

    //assigning the value of the user to our user array
    $users[] = $row;

//end the loop by providing the closing parenthesis
}

?>


            <div class="table-responsive">
                <table class="table table-striped table-dashboard">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>username</th>
                        <th>email</th>
                        <th>password</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?php echo $user['id'] ?></td>
                            <td>
                                <?php echo $user['name'] ?>
                            </td>
                            <td><?php echo $user['username'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['password'] ?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <pre>
                <code data-language="php"><?php echo htmlentities(file_get_contents(__FILE__)); ?></code>
            </pre>
        </div>

<?php
$conn->close();

require_once('../../assets/html/footer.php');
?>
