<?php require_once('../assets/html/header.php') ?>

<?php require_once('tutorial-navigation.php') ?>

<?php require_once('../assets/html/body.php') ?>

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


<?php require_once('../assets/html/footer.php') ?>
