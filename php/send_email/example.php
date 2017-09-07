<?php require_once('../../assets/html/header.php') ?>

<?php require_once('tutorial-navigation.php') ?>

<?php require_once('../../assets/html/body.php') ?>

<style>
    label.error{
        color: #a94442;
    }
</style>

<script type="text/javascript">
    $( document ).ready( function () {
        $("#send-email").validate({
        });
    });
</script>

<?php

require_once('../../vendor/autoload.php');

require_once('../../assets/html/header.php');

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$action = (string) $request->request->filter('action', '');

?>


            <div class="table-responsive">
                <?php
                if ($action == 'post'):
                    $name       = $request->request->filter('name', '');
                    $email      = $request->request->filter('email', '');
                    $message    = $request->request->filter('message','');

                    // Create the Transport
                    $transport = Swift_SmtpTransport::newInstance("localhost", 1025);

                    // Create the Mailer using your created Transport
                    $mailer = new Swift_Mailer($transport);

                    // Create a message
                    $message = (new Swift_Message('Somebody has contacted you'))
                    ->setFrom(['example@example.com' => 'Example sender'])
                    ->setTo(['paulosduffus@gmail.com' => 'Paul Duffus'])
                    ->setBody(htmlspecialchars($message));

                    // Send the message
                    $result = $mailer->send($message);
                   ?>

                    <h1><a href="http://joomla.box:1080/" target="_blank">Check your email:</a></h1>

                <?php else: ?>

                    <form name="send-email" id="send-email" action="" class="form-horizontal" method="post">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control" required value="" placeholder="Let us know your name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" id="email" class="form-control" required value="" placeholder="Let us know your email address"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea name="message" id="message" class="form-control required" required placeholder="Please say hi"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-primary"/>
                                <input type="hidden" name="action" value="post">
                            </div>
                        </div>
                    </form>

                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <pre>
                <code data-language="php"><?php echo htmlentities(file_get_contents(__FILE__)); ?></code>
            </pre>
        </div>
    </div>


<?php require_once('../../assets/html/footer.php'); ?>
