<?php
    include './class/classSalutation.php';
    $class_troi = new trois();

    $reponse = $_POST['reponse'];

    $res_phrase = $class_troi->salutation($reponse);

    echo $res_phrase;