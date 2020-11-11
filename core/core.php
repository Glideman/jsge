<?php

// core files
include 'core/model.php';
include 'core/view.php';
include 'core/controller.php';
include 'core/request.php';
include 'core/application.php';

// start of the app
$App = new Application();
$App->start();