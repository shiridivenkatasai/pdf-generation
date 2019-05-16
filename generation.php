<?php
require_once __DIR__ . '/vendor/autoload.php';

$name  = $_POST['name'];
$email = $_POST['email'];

$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);   //create instance of PDF

$data = '';

$data .= '<h1>Hi,here your details</h1>';

$data .=  '<strong>Name:</strong>'  .  $name  .  '<br/>';           //adding data
$data .=  '<strong>E-Mail:</strong>' .  $email;

$mpdf->WriteHTML($data);                                   //writing pdf

$mpdf->Output('myfile.pdf','I');                    //output

