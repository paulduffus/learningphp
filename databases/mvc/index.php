<?php require_once('tutorial-navigation.php') ?>

<?php require_once('../../assets/html/header.php'); ?>



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

<?php require_once('../../assets/html/footer.php'); ?>