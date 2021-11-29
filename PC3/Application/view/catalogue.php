<?php

require "../controler/AppRestController.php";
require "header.php";

$apicontroler = new AppRestController();

$apicontroler->createContenu();

require "footer.php";