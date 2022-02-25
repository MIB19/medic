<?php

require "config/config.php";
require "config/database.php";
require "models/percobaan.php";

$menu = "";
if(isset($_REQUEST['menu'])){
	$menu = $_REQUEST['menu'];
}
$menu	= isset($_REQUEST['fsa'])?$_REQUEST['fsa']:'';

switch($menu){

	case "hasil":
		$no = $_REQUEST['param1'];
		$data['norec']			= $percobaan->show_tampilkan($conn, $no);
		extract($data);
		if(!empty($norec)){
			require "views/hasil.php";
		}else{
			$dta = "KOSONG";
			require "views/landing.php";
		}
	break;

	case "card":
		$no = $_REQUEST['param1'];
		$data['norec']			= $percobaan->show_tampilkan($conn, $no);
		extract($data);
		require "views/card.php";
	break;

	case "jadwal":
		$tgl = date("d F Y");
		$jdwl = date("w"); 
		$data['jadwal']			= $percobaan->jadwal($conn, $jdwl);
		extract($data);
		require "views/jadwal.php";
	break;

	case "ecard":
		$halaman = "landing";
		require "views/index.php";
	break;

	default:
		require "views/awal.php";
	break;
}
?>