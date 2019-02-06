<?php

 define("NEWLINE", "<br>" ); 
 define("NO_INFO","no extra") ; 
 define("DOCTYPE","<!DOCTYPE html>");

class htmlWrapper
{
		private $layout  = Array() ;
		 
		public function __construct()
		{
			$this->layout['DOCTYPE'] = DOCTYPE ;
			$this->layout['html'] = "<html>" ; 
			$this->layout['head'] = "<head>";
			$this->layout['title'] = "<title>" ; 
			$this->layout['titleclose'] = "</title>" ;
			$this->layout['headclose'] = "</head>";
			$this->layout['body'] = "<body>" ; 
			$this->layout['bodyclose'] = "</body>" ;  
			$this->layout['htmlclose'] = "</html>" ; 
		}
		public  function placeOnPage($value,$location)
		{
			$this->layout[$location] = $this->layout[$location] . $value ; 
	     }
	     
	    public function viewHtml()
	    {
				return $this->layout ; 
		}
		public function __destruct(){} 
}

$var = new htmlWrapper();
$page = $var->viewHtml();
foreach ($page as $key => $value)
{
	echo $value . "\n" ;
}

?>
