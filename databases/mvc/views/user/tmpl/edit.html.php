<?php require_once('../../assets/html/header.php'); ?>

<?php $user = $this->user ?>

<?php require_once(__DIR__ . '/../../../tutorial-navigation.php') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php require_once('../../assets/html/sidebar.php') ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: 50px">
            <form name="save-user" id="save-user" action="/databases/mvc/example.php?id=<?php echo $user['id'] ?>" class="form-horizontal" method="post">
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
                        <a href="/databases/mvc/example.php" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../../assets/html/footer.php'); ?>