<?php
/*
 * tag.php
 * 
 * Copyright 2018 rodev <rodgef@ubuntu>
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

define("NEWLINE", "<br>" ); 

class tag
{
	private $OpeningTag;
	private $closingTag;
	private $attr_dict = [];
	private $to_str = '';
	private $tag_arr = [];
	private $body = "";
	public function __construct($name,$hasCloseTag){
		$this->OpeningTag = "<" .$name;
		$this->to_str = $this->to_str. $this->OpeningTag;
		if ($hasCloseTag)
			$this->closingTag = "</".$name .">";
	}
	public function add_body($text){
		$this->body =$text;
	}
	public function set_attr($attr){
		$this->attr_dict = $attr;
	}	
	public function display(){
		return $this->to_str . $this->closingTag;
		 
	}
	public function commit(){
		$tmp = '';
			foreach ($this->attr_dict as $key  => $value) {
				$tmp = ($key . "=" . $value);
		}
		$this->to_str = $this->to_str . " " .$tmp . ">" . $this->body;
	}
	public function __destruct()
	{
	}

}
$val = new tag("input",true);
$val->set_attr(array("type"=>"password"));
$val->add_body("Loser");
$val->commit();


echo $val->display();

?>
