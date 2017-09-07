
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

                <h2>Creating your class</h2>
                <p>First of all you want to create the following class</p>
                <pre>
                    <code data-language="php"><?php echo htmlentities(file_get_contents('connect_database.php')); ?></code>
                </pre>
                <h2 id="using-your-class">Using you class</h2>
                <p>Once you've created your class you can then use it by: </p>
                <pre>
                    <code data-language="php"><?php echo htmlentities(file_get_contents('using_connection.php')); ?></code>
                </pre>

<?php
$conn->close();

require_once('../../assets/html/footer.php');
?>
