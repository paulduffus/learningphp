<?php require_once('../assets/html/header.php') ?>

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
                            <a target="_blank" href="send_email">
                                Send email
                            </a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <?php require_once('send_email/menu.php') ?>
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
