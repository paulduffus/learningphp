<?php

require_once('../../assets/html/header.php');

require_once('connect_database.php');
?>

<link type="text/css" rel="stylesheet" href="../../../assets/css/codemirror.css" />
<link type="text/css" rel="stylesheet" href="../../../assets/css/mergely.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="../../../assets/javascript/codemirror.min.js"></script>
<script type="text/javascript" src="../../../assets/javascript/mergely.js"></script>

<?php require_once('tutorial-navigation.php') ?>

<div class="container-fluid">
    <div class="row">
        <div id="compare"><div>
            </div>
        </div>
    </div>
</div>

<?php


$your_attempt = file_get_contents('DIY/index.php');

$example = file_get_contents('using_connection.php');

?>


<style>
    div.CodeMirror{
        height: 680px;
    }
</style>

<script type="text/javascript">
    $(document).ready(function () {
        $('#compare').mergely({
            editor_height: '700px',
            cmsettings: { readOnly: false, lineNumbers: true },
            lhs: function(setValue) {
                setValue(jQuery('#xcompare-1').html());
            },
            rhs: function(setValue) {
                setValue(jQuery('#xcompare-2').html());
            }
        });
    });
</script>

<div id="xcompare-1" class="hidden">
    <pre>
        <code>
                <?php echo $example ?>
        </code>
    </pre>

</div>

<div id="xcompare-2" class="hidden">
    <pre>
        <code>
                <?php echo $your_attempt ?>
        </code>
    </pre>

</div>
