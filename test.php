<?php
/*
 * test.php
 * 
 * Copyright 2019 rodgef <rodgef@rodgef-A21R>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
 
require("tag.php");

$var = new tag("p",true);
$val = new tag("input",true);
$val2 = new tag("div",true);

$val2->commit();


$val->add_attr(array("type"=>"password"));
$val->add_body("Loser");
$val->commit();
//echo $val->display();
echo "\n";
$val->rm_attr(array("type"=>"password"));
$val->commit();
echo $val->display();

$var->add_body("lalal");
$var->commit();
$val->add_body($var,true);
$val->add_attr($val2,true);
$val->commit();


echo "\n";
#echo $val->display();
//echo $var->display();



?>

