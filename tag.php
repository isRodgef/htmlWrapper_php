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
	private $body = [];
	public function __construct($name,$hasCloseTag){
		$this->OpeningTag = "<" .$name;
		
		if ($hasCloseTag)
			$this->closingTag = "</".$name .">";
	}
	public function add_body($text, $type=false){
		if (!$type)
			array_push($this->body,array(false,$text));
		else
				array_push($this->body,array(true,$text));
		
	}
	public function add_attr($attr){
		array_push($this->attr_dict,$attr);
	}	
	public function display(){
		return $this->to_str . $this->closingTag;
		 
	}
	
	public function rm_attr($attr){
			$len = count($this->attr_dict); 
			for ($j=0;$j < $len;$j++)
			{
				if( $this->attr_dict[$j] == $attr)
					unset($this->attr_dict[$j]);
			}
			array_values($this->attr_dict);
	}
	
	public function commit(){
		$tmp = '';
		$len = count($this->attr_dict); 
		$this->to_str = "";
		$this->to_str = $this->to_str. $this->OpeningTag;
		for($i =0; $i < $len; $i++){
				foreach ($this->attr_dict[$i] as $key  => $value) {
					$tmp = ($key . "=" . $value);
			}
		}
		$len2 =  count($this->body);
		for ($i =0; $i < $len2; $i++){	
			if (!$this->body[$i][0])
				$this->to_str = $this->to_str . " " .$tmp . ">" . $this->body[$i][1];
			else //($this->body[$i][0])
				$this->to_str = $this->to_str . " " .$tmp . ">" . $this->body[$i][1]->display();
		}
	}
	
	public function __destruct()
	{
	}

}

?>
