<?php

define('DB_HOSTING', 'h56.hvosting.ua');
define('DB_DATABASE', 'flower_shop');
define('DB_USER', 'UzhKeksy');
define('DB_PASSWORD', '84FFKeW5');
define('DB_PORT', '3260');

//model
require_once "model/ContactInformation.php";
require_once "model/ContactInformationType.php";
require_once "model/Order.php";
require_once "model/OrderProduct.php";
require_once "model/OrderStatus.php";
require_once "model/Payment.php";
require_once "model/PaymentType.php";
require_once "model/Product.php";
require_once "model/ProductCategory.php";
require_once "model/ProductFeedback.php";
require_once "model/ProductImage.php";
require_once "model/User.php";
require_once "model/UserRool.php";

//control
require_once "control/DBConnection.php";
require_once "control/OrderControl.php";