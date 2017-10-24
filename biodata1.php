<?php
require_once 'biodata.php';

$orang1 =new orang('taufik','bandung','islam','pelajar','teroris');

echo "Namanya :".$orang1->get_nama().'<br>';
echo "Tempat Lahir :".$orang1->get_tempatlahir().'<br>';
echo "agama :".$orang1->get_agama().'<br>';
echo "Status :".$orang1->get_status().'<br>';
echo "Cita-cita :".$orang1->get_Cita_cita().'<br>';



?>