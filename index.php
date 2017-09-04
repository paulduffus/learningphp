<?php require_once('assets/html/header.php') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php require_once('assets/html/sidebar.php') ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="table-responsive">
                <fieldset>
                    <legend>PHP</legend>
                </fieldset>
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
                            <a target="_blank" href="/databases/connect_database">
                                Connect to a database
                            </a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <?php require_once('databases/connect_database/menu.php') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <a target="_blank" href="/databases/classes">
                                Classes - reuse your code
                            </a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <?php require_once('databases/classes/menu.php') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <a target="_blank" href="/databases/save_row">
                                Save user information
                            </a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <?php require_once('databases/save_row/menu.php') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <a target="_blank" href="/databases/mvc">
                                Model, View, Controller
                            </a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <?php require_once('databases/mvc/menu.php') ?>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <fieldset>
                <legend>HTML</legend>
            </fieldset>
            <p>coming soon...</p>

            <fieldset>
                <legend>CSS</legend>
            </fieldset>
            <p>coming soon...</p>

            <fieldset>
                <legend>Javascript</legend>
            </fieldset>
            <p>coming soon...</p>
        </div>
    </div>
</div>

<?php require_once('assets/html/footer.php') ?>
