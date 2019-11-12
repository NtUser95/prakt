<?php
require_once './../users.php';

die(json_encode(Users::getRandomData()));