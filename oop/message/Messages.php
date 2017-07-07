<?php

use Message\{Users\Person, Staff, Business};

$jane = new Person('Jane');
$staff = new Staff([$jane]);
$apple = new Business($staff);
$apple->hire(new Person('William'));

var_dump($apple->getStaffMembers());