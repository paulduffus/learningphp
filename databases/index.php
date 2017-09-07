<?php require_once('../assets/html/header.php') ?>


<?php require_once('tutorial-navigation.php') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php require_once('../assets/html/sidebar.php') ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="table-responsive">
                <table class="table table-striped table-dashboard">
                    <thead>
                    <tr>
                        <th width="10">#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <a target="_blank" href="connect_database">
                                Connect to a database
                            </a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <?php require_once('connect_database/menu.php') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <a target="_blank" href="classes">
                                Classes - reuse your code
                            </a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <?php require_once('classes/menu.php') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <a target="_blank" href="save_row">
                                Save user information
                            </a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <?php require_once('save_row/menu.php') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <a target="_blank" href="mvc">
                                Model, View, Controller
                            </a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <?php require_once('mvc/menu.php') ?>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once('../assets/html/footer.php') ?>
