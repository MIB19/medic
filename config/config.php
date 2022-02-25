<?php

class config{
	public $base_url	= "http://localhost/framework/";

	function base_url(){
		return $this->base_url;
	}
	function base_gambar(){
		return $this->base_gambar;
	}
	function api_key(){
		return $this->apiKey;
	}
	function server(){
		return $this->database;
	}
}
$config	= new config();
?>