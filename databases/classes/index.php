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
                        <li role="presentation" class="active">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                Background
                            </a>
                        </li>
                        <li role="presentation">
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
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <img src="images/classes-containers.jpg" class="img img-responsive"
                                 alt="Introduction to classes" title="Introduction to classes"/>
                            <h1>Introduction to classes</h1>
                            <p>In our tutorial <a href="/databases/connect_database">connect to a database</a> we successfully
                            created a connection to the database and returned an array of users from the table.</p>
                            <p>In the next tutorial we will be developing a way of saving user details to the database. And the first step towards saving
                            information to the database, is to first retrieve the user record you'd wish to edit.</p>
                            <p>This means that the code we use to connect to the database would be used in two or more files:</p>
                            <pre>
                                <code data-language="php">
/**
 * Way to connect to the database and bring back an array of users for example
 */
$creds = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'db' => 'sites_php'
);

//create a connection to the database based on credentials and assign to a variable called $conn
$conn = mysqli_connect($creds['host'], $creds['user'], $creds['password'], $creds['db']);

                                </code>
                            </pre>
                            <p>A fundamental principle of web development is to keep your code D.R.Y. or put simply `Don't Repeat Yourself`. If you
                            find yourself cut copying and pasting code in order to make a connection to the database you are doing something wrong.</p>
                            <p>It would be far better if everything about interacting with a database was
                            contained in one location. This way if you had to update your code, you'd only need to update the code
                            in one place... as opposed to updating 50 files that connected to the database</p>
                            <p>This is where PHP Classes come into play. They allow you to create configurable code that can be used in many different places.</p>
                            <h2>What are classes</h2>
                            <p>Think of a class as a glass container. How would you describe the glass:</p>
                            <ul>
                                <li>By the type of liquid it contained... water vs tea</li>
                                <li>By the colour of the liquid... red or green</li>
                                <li>Whether the glass was half empty or half full</li>
                                <li>Whether the glass had a crack or not</li>
                            </ul>
                            <p>All of the bullet lists above would be described as the <strong>class properties</strong>... configurable things that describe what the class is like.</p>
                            <p><strong>Class methods</strong> are small chunks of reusable code that they take the class properties and can transform them into other things</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="code">
                            <h3>Our re-usable database class</h3>
                            <p>So in this tutorial we want to create a class or php file called <code>connect_database.php</code> that allows us to:</p>
                            <ul>
                                <li>Define connection details to the database <strong>(class property)</strong></li>
                                <li>Use these credentials in order to create the connection <strong>(__construct method)</strong></li>
                                <li>A way to set the SQL query to bring back records from the database <strong>(method)</strong></li>
                                <li>Bring or fetch rows from the database <strong>(method)</strong></li>
                                <li>When requested the database connection should be closed <strong>(method)</strong></li>
                            </ul>
                            <p>Defining a class is as simple as:</p>
                            <pre>
                                <code data-language="php">
class connect_database {

    /**
     * define your class properties here
     */
    public $creds = array();

    public $conn;

    /**
     * end class properties
     */
                                    
}                                </code>
                            </pre>
                            <p>Here we create a class called <code>connect_database</code> and we provide the class properties via <code>public $creds</code> or <code>public $conn</code></p>
                            <p>We already discussed that classes are defined by the properties you give it, however classes are also made up of methods.
                            Methods are small self contained pieces (or functions) of code that enable to you do something or transform the class into something else.</p>
                            <pre>
                                <code data-language="php">
class connect_database {
    ...
public function query($query)
{
    return $this->conn->query($query);
}
    ...
                                </code>
                            </pre>
                            <p>In the above example we define the query function... it will take the string $query that we pass to it and then take
                            the existing database connection and pass to it the SQL query.</p>
                            <h2 id="instantiate">Instantiate a class</h2>
                            <p>Once you have you class written... see <a href="example.php#using-your-class">example</a> you will need to instantiate or start to use it. This is
                            as simple as:</p>
                            <pre>
                                <code data-language="php">
$conn = new connect_database();
                                </code>
                            </pre>
                            <p>So we start of by defining a variable <code data-language="php">$conn =</code> and we assign the class to this variable. Notice that we start the class by calling <code data-language="php">`new`</code> followed by the name of the class. <strong>Note:</strong> by starting the class we will immediately run the <code data-language="php">`__construct`</code> function or the class. The construct function is
                            always the first method run for a class: </p>
                            <pre>
                                <code data-language="php">
public function __construct($creds = array())
{
    $creds = array_merge($this->creds, $creds);

    $this->conn = mysqli_connect($creds['host'], $creds['user'], $creds['password'], $creds['db']);
}
                                </code>
                            </pre>
                            <p>Which as you can see takes the class property <code data-language="php">`$this->conn`</code> and populates this variable with the connection made via <code data-language="php">`mysqli_connect`</code> so it can be resused elsewhere in the class</p>
                            <h2>Calling methods</h2>
                            <p>Calling methods is equally as simple, but it does depend on how you create your class... in our example however we can call a method by:</p>
                            <pre>
                                <code data-language="php">
$conn->query('SELECT * FROM `users`;');
                                </code>
                            </pre>
                            <p>You see that we take the <code data-language="php">`$conn`</code> variable created when we instantiated our class and provide the method <code data-language="php">`->query()`</code> with the sql we'd like to perform.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="further-reading">
                            <div class="margin-top">
                                <p>Below are a selection of links to further reading</p>
                                <ul>
                                    <li><a href="https://www.w3schools.com/php/php_datatypes.asp">W3schools - data types... scroll to php object</a></li>
                                    <li><a href="http://www.php5-tutorial.com/classes/introduction/">http://www.php5-tutorial.com/classes/introduction/</a></li>
                                    <li><a href="http://codular.com/introducing-php-classes">http://codular.com/introducing-php-classes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require_once('../../assets/html/footer.php'); ?>