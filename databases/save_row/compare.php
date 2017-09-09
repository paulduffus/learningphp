<?php require_once('../../vendor/autoload.php');?>

<?php use Masterminds\HTML5; ?>

<?php require_once('tutorial-navigation.php') ?>

<?php  require_once('../../assets/html/header.php'); ?>

<link type="text/css" rel="stylesheet" href="../../../assets/css/codemirror.css" />
<link type="text/css" rel="stylesheet" href="../../../assets/css/mergely.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="../../../assets/javascript/codemirror.min.js"></script>
<script type="text/javascript" src="../../../assets/javascript/mergely.js"></script>


<div class="container-fluid">
    <div class="row">
        <div id="compare"><div>
            </div>
        </div>
    </div>
</div>

<?php

$html = file_get_contents('example.php');
$html2 = file_get_contents('DIY/index.php');

$html5 = new HTML5();
$dom   = $html5->loadHTML($html);

$example = qp($dom, 'html')->find('section#tutorial');

$dom = $html5->loadHTML($html2);

$diy = qp($dom, 'html')->find('section#tutorial');
?>


<style>
    div.CodeMirror{
        height: 680px;
    }
</style>

<script type="text/javascript">
    $(document).ready(function () {

        $('.sidebar').toggle();

        $('.col-sm-9.col-sm-offset-3.col-md-10.col-md-offset-2.main').removeClass();

        $('#compare').mergely({
            editor_height: '700px',
            editor_width: '750px',
            cmsettings: { readOnly: false, lineNumbers: true },
            lhs: function(setValue) {
                setValue(jQuery('#compare-2').html());
            },
            rhs: function(setValue) {


                setValue(jQuery('#compare-1').html());
            }
        });
    });
</script>

<div class="hidden">
    <pre>
        <code id="compare-1" data-language="php"><?php echo $example->html() ?></code>
    </pre>

</div>

<div class="hidden">
    <pre>
        <code id="compare-2"  data-language="php"><?php echo $diy->html() ?></code>
    </pre>

</div>
