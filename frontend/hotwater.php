<?php
include('Smarty.class.php');
session_start();

$smarty = new Smarty;

$smarty->display('hotwater.tpl');