<html>
    <head>
    </head>
    <body>
            <h1><?php echo 'Hello, World!'; ?></h1>
    </body>
</html>
<?php
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();
?>