<?php require_once('../../assets/html/header.php'); ?>

<?php require_once(__DIR__ . '/../../../tutorial-navigation.php') ?>

<?php $user = $this->user ?>

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


<?php require_once('../../assets/html/footer.php'); ?>