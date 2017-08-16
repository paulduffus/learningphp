<?php

require_once('vendor/autoload.php');

require_once('../connect_database/connect_database.php');

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$creds = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'db' => 'sites_php'
);

$conn = new connect_database($creds);

$user = array( 'id' => '', 'name' => '', 'username' => '', 'email' => '', 'password' =>'');

$id = (int) $request->query->filter('id', '', FILTER_SANITIZE_NUMBER_INT);
$action = (string) $request->request->filter('action', '');

if ($id){
    $user = current($conn->query_db("SELECT * FROM `users` WHERE `id` = '$id'"));
}
?>

<form name="save-user" id="save-user" action="" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" id="name" required value="<?php echo $user['name'] ?>" placeholder="" /></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" id="username" required value="<?php echo $user['username'] ?>" /></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" id="email" required value="<?php echo $user['email'] ?>"/></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" id="password" value="<?php echo $user['password'] ?>"</td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Submit" />
                <a href="../connect_database/index.php">[ Cancel ]
            </td>
        </tr>
        <input type="hidden" name="action" id="action" value="post" />
    </table>
</form>

<?php

if (strlen($action))
{
    //first of all lets get filtered user information
    $isNew = ($id == 0);
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

    $conn->query($sql);

    $conn->close_connection();

    header("Location: /connect_database/index.php");
    die();
}
