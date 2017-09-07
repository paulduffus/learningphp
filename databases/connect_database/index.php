<?php require_once('../../assets/html/header.php'); ?>

<?php require_once('tutorial-navigation.php') ?>

<?php require_once('../../assets/html/body.php') ?>

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
                            <img src="images/example-db.png" class="img img-responsive"
                                 alt="View of database" title="View of database"/>

                            <h1>Connecting to a database and bringing back records</h1>
                            <p>PHP and databases are the cornerstone of CMS development used by all the major players in
                                the field:</p>
                            <ul>
                                <li><a href="https://www.joomla.org/">Joomla</a></li>
                                <li><a href="https://en-gb.wordpress.org/">Wordpress</a></li>
                                <li><a href="https://www.drupal.org/">Drupal</a></li>
                            </ul>
                            <p>PHP and databases are crucial for many electronic online shops</p>
                            <h2>Databases store information</h2>
                            <p>Databases is where user input or business data is stored... If you wanted to buy a
                                product from Amazon:<br/>
                                <a href="https://www.amazon.co.uk/Best-Sellers-Office-Products-Barcode-Scanners/zgbs/officeproduct/13017221">https://www.amazon.co.uk/Best-Sellers-Office-Products-Barcode-Scanners/zgbs/officeproduct/13017221</a>
                            </p>
                            <p>
                                Firstly all the information and products that relate to the category of 'Barcode
                                scanner' are stored in the database.
                                PHP connects to the database and brings back all the records related to this category.
                                The raw data from the database is then transformed by
                                PHP and HTML and the user interface is displayed the user
                            </p>
                            <p>Once a user has selected the product they are interested in, they next have to provide
                                information about themselves:</p>
                            <ul>
                                <li>Name</li>
                                <li>Address</li>
                                <li>Telephone number</li>
                                <li>Delivery time and address</li>
                                <li>Credit card information</li>
                            </ul>
                            <p>
                                This data can then be stored in the database, to be used by the various departments in
                                the organisation.
                            </p>
                            <h3>This tutorial...</h3>
                            <p>Deals exclusively with:</p>
                            <ul>
                                <li>Using php to connect to the database</li>
                                <li>Once a connection is established, Sequel (SQL) the database language is used to
                                    retreive records
                                </li>
                                <li>The raw data from the database is then combined with html in order to present the
                                    user with a list of choices from the database
                                </li>
                            </ul>
                            <h3>Follow on tutorial...</h3>
                            <p>Our tutorial on Saving information to a database, then deals with storing user
                                information back to the database... in our Amazon example this would be
                                where the user has provided personal contact information through the site</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="code">
                            <h3>Using php to connect to the database</h3>
                            <p>In order to connect to your database you are going to need credentials.
                                Where the database is hosted or `host`, the username for the database `user`, the
                                password `password`
                                and the name of the database you'd like to connect to `database`.
                            </p>
                            <p>We create an array to contain this information, so it can easily be accessed many times
                                if required.</p>
                            <p>Then we pass this information over to the database in order to create a connection via
                                <code data-language="php">`mysql_connect()`</code></p>

                            <pre>
                                <code data-language="php">
//create an array of connection details
$creds = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'db' => 'sites_php'
);

//pass the credentials to the database in order to connect
//further we create a variable called $conn
$conn = mysqli_connect($creds['host'], $creds['user'], $creds['password'], $creds['db']);
                                </code>
                            </pre>
                            <p>We further define <code data-language="php">$conn</code> as this connection so we can use
                                this later on.</p>
                            <h3>Once a connection is established, Sequel (SQL) the database language is used to retreive
                                records</h3>
                            <p>Our sql is defined as <code data-language="php">SELECT * FROM `users</code>... which
                                translated means:</p>
                            <ul>
                                <li><code data-language="php">SELECT *</code> == Bring back all records</li>
                                <li><code data-language="php">FROM `user</code> From the users table</li>
                            </ul>
                            <p>SELECT SQL statements are also capable of accepting a condition <code data-language="php">WHERE `id` = 1</code>. If this was appended
                                to the end of the SQL statement it would transform the statement to 'Bring back all user
                                details related to the first record</p>
                            <pre>
                                <code data-language="php">
//with our database connection we use SQL to bring back all users
$result = $conn->query("SELECT * FROM `users`;");

//create an empty array to be populated later
$users = array();

//loop through each of the records brought back
while($row = $result->fetch_assoc()) {
    //populate our user array the the information ($row)
    $users[] = $row;
//close our loop here
}
                                </code>
                            </pre>
                            <p>So after we have queried (brought back the requested data from the database via <code data-language="php">$result = $conn->query("SELECT * FROM `users`;");</code>
                                We create another blank array called users <code data-language="php"> $users = array();</code></p>
                            <p>We then loop through all the records brought back from the database <code data-language="php">while($row = $result->fetch_assoc()) {</code>
                                and we add each database row to the user's array <code data-language="php">$users[] = $row;</code></p>
                            <p>Lastly we finish the loop by providing the closing parenthisis <code data-language="php">}</code></p>

                            <h3>The raw data from the database is then combined with html in order to present the user
                                with a list of choices from the database</h3>
                            <p>So using our `$users` array that is populated with information from the database, we then
                                loop through each user via <code data-language="php">&#x3C;?php foreach($users as $user): ?&#x3E;</code></p>
                            <p>Then for each column of the table we output each piece of information about the user
                                <code data-language="php"> &#x3C;?php echo $user[&#x27;name&#x27;] ?&#x3E;</code></p>
                            <pre>
                                <code data-language="php">
//foreach user record we loop through
&#x3C;?php foreach($users as $user): ?&#x3E;
    &#x3C;tr&#x3E;
        &#x3C;td&#x3E;&#x3C;?php echo $user[&#x27;id&#x27;] ?&#x3E;&#x3C;/td&#x3E;
        &#x3C;td&#x3E;
            //outputting the screen the appropriate user information
            &#x3C;?php echo $user[&#x27;name&#x27;] ?&#x3E;
        &#x3C;/td&#x3E;
        &#x3C;td&#x3E;&#x3C;?php echo $user[&#x27;username&#x27;] ?&#x3E;&#x3C;/td&#x3E;
        &#x3C;td&#x3E;&#x3C;?php echo $user[&#x27;email&#x27;] ?&#x3E;&#x3C;/td&#x3E;
        &#x3C;td&#x3E;&#x3C;?php echo $user[&#x27;password&#x27;] ?&#x3E;&#x3C;/td&#x3E;
    &#x3C;/tr&#x3E;
&#x3C;?php endforeach ?&#x3E;
&#x3C;/tbody&#x3E;
                                </code>
                            </pre>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="further-reading">
                            <div class="margin-top">
                                <p>Below are a selection of links to further reading</p>
                                <ul>
                                    <li><a href="https://www.w3schools.com/php/func_mysqli_connect.asp">https://www.w3schools.com/php/func_mysqli_connect.asp</a></li>
                                    <li><a href="http://php.net/manual/en/function.mysqli-connect.php">http://php.net/manual/en/function.mysqli-connect.php</a></li>
                                    <li><a href="https://www.w3schools.com/php/php_arrays.asp">https://www.w3schools.com/php/php_arrays.asp</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>


<?php require_once('../../assets/html/footer.php'); ?>