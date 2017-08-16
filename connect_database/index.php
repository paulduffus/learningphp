<?php

require_once('connect_database.php');
/**
 * Way to connect to the database and bring back an array of users for example
 */
$creds = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'db' => 'sites_php'
);

$conn = new connect_database($creds);
$users = $conn->query_db("SELECT * FROM `users`;");
?>


<table>
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
                <a href="../save_row/?id=<?php echo $user['id'] ?>">
                    <?php echo $user['name'] ?>
                </a>
            </td>
            <td><?php echo $user['username'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['password'] ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
<br /><br />
<a href="/save_row/">[Create new]</a>

<?php
echo "<pre>";
print_r($users);
echo "</pre>";

$conn->close_connection();
?>
