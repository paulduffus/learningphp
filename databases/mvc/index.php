<?php

require_once('../../assets/html/header.php'); ?>

    <link href="/assets/css/rainbow-code/themes/css/github.css" rel="stylesheet">

    <script src="/assets/javascript/rainbow-code/dist/rainbow.js"></script>
    <script src="/assets/javascript/rainbow-code/src/language/generic.js"></script>
    <script src="/assets/javascript/rainbow-code/src/language/php.js"></script>

<?php require_once('tutorial-navigation.php') ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <?php require_once('../../assets/html/sidebar.php') ?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: 50px">
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                Background
                            </a>
                        </li>
                        <li role="presentation" class="active">
                            <a href="#code" aria-controls="code" role="tab" data-toggle="tab">
                                Code required
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#further-reading" aria-controls="futher-reading" role="tab" data-toggle="tab">
                                Further reading
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="home">
                            <img src="images/example-db.png" class="img img-responsive"
                                 alt="View of database" title="View of database"/>

                            <h1>MVC - Seperation of concerns</h1>


                        </div>
                        <div role="tabpanel" class="tab-pane active" id="code">

                            <h3 id="connect_db">Connecting to the database</h3>


                        </div>
                        <div role="tabpanel" class="tab-pane" id="further-reading">
                            <div class="margin-top">
                                <p>Below are a selection of links to further reading</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require_once('../../assets/html/footer.php'); ?>