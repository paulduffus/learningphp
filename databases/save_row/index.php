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

                            <h1>Saving user input to the database</h1>
                            <p>Databases are your central source of information, they need to be properly managed and maintained</p>
                            <p>Imagine if your Customer Relationship Management (CRM) didn't allow you to edit any of the information, the database
                            would quickly become out of date and useless</p>
                            <p>The way the users can interact with your database is via Forms. Forms are HTML UX elements that enable a user to provide information
                            in the relevant format</p>

                        </div>
                        <div role="tabpanel" class="tab-pane active" id="code">

                            <h3 id="connect_db">Connecting to the database</h3>

                            <p>So as you have seen before in the databases/classes.php tutorial we connect into the database in the following way:</p>
                            <pre>
                                <code data-language="php">
require_once('connect_database.php');

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$creds = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'db' => 'sites_php'
);

$conn = new connect_database($creds);

$user = array( 'id' => '', 'name' => '', 'username' => '', 'email' => '', 'password' =>'');

$id = (int) $request->query->filter('id', '', FILTER_SANITIZE_NUMBER_INT);
$action = (string) $request->request->filter('action', '');

if ($id){
    $user = current($conn->query_db("SELECT * FROM `users` WHERE `id` = '$id'"));
}
                                </code>
                            </pre>
                            <p>We use an array called <code data-language="php">$creds = array()</code> to pass in our database credentials to our database class
                            <code data-language="php">$conn = new connect_database($creds);</code></p>
                            <p>We create an empty user array <code data-language="php">$user = array( 'id' => '', 'name' => '', 'username' => '', 'email' => '', 'password' =>'');</code>, this
                            simple means if the user is creating a new record, rather than updating a new record we won't get any errors. Should the user be editing a record
                            then you can see the array is updated <code data-language="php">$user = current($conn->query_db("SELECT * FROM `users` WHERE `id` = '$id'"));</code> with the information
                            brought back from the database.</p>
                            <p>What you won't have seen before is
                            <pre><code data-language="php">use Symfony\Component\HttpFoundation\Request;</code></pre>
                            This is where we bring a third party library to filer and make information received from the user safe.
                            <pre><code data-language="php">$request = Request::createFromGlobals();</code></pre>
                            Here we create an object called request that contains all the information from various sources (GET, POST, FILES)
                            <pre><code data-language="php">

$id = (int) $request->query->filter('id', '', FILTER_SANITIZE_NUMBER_INT);
$action = (string) $request->request->filter('action', '');
                                </code></pre>
                            And here you can see we safely access the user information. For get requests we look to the query and specify that the variable id and it should be filtered as an INTeger data type<br/>
                            Where as for action we go to the request and filter action as a string variable
                            </p>
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