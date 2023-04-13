<?php
session_start();
$_SESSION['type'] = $_POST['type-of-order'];
$_SESSION['eat'] = $_POST['radio'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['email'] = $_POST['email'];
