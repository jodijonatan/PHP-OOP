<?php

require "namespace/Manager.php";
require "namespace/Admin.php";

$manager1 = new App\Staff\Manager();
$manager1->sayHello();

$manager2 = new App\Admin\Manager();
$manager2->sayHello();
