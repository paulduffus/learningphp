<?php $user = $this->user ?>

<form name="save-user" id="save-user" action="" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" id="name" value="<?php echo $user['name'] ?>" placeholder="" /></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" id="username" value="<?php echo $user['username'] ?>" /></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" id="email" value="<?php echo $user['email'] ?>"/></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" id="password" value="<?php echo $user['password'] ?>"</td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Submit" />


                <input type="hidden" name="_method" value="DELETE">

                <a href="/mvc">[ Cancel ]
            </td>
        </tr>
    </table>
</form>