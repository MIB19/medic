<?php
class percobaan{
	function show_tampilkan($conn, $no){
		$sql	= "
		SELECT
		 	*
		FROM
			sheet1
        WHERE
        	no_medic = '$no'
		";

		$result	= $conn->query($sql);
		$record	= array();
		if($result){
			if(!empty($result)){
				$rec	= $result->fetch_assoc();
				$record	= $rec;
			}
		}
		return $record;
	}
	function jadwal($conn, $jdwl){
		if($jdwl=='0'){
			$kd = "MG";
		}elseif($jdwl=='1'){
			$kd = "SN";
		}elseif($jdwl=='2'){
			$kd = "SL";
		}elseif($jdwl=='3'){
			$kd = "RB";
		}elseif($jdwl=='4'){
			$kd = "KM";
		}elseif($jdwl=='5'){
			$kd = "JM";
		}elseif($jdwl=='6'){
			$kd = "SB";
		}
		$sql	= "
		SELECT 
			jadwal_dokter.nm_paramedis as nama, 
			spesialisasi.nama_spesialisasi as spesialis, 
			m_jadwal.jdwl_jam as mulai
		FROM 
			jadwal_dokter, 
			spesialisasi, 
			m_jadwal
		WHERE 
			LEFT(jadwal_dokter.kd_jdwl, 2) = '$kd' 
		AND 
			jadwal_dokter.kd_spesialisasi = spesialisasi.kd_spesialisasi 
		AND 
			jadwal_dokter.kd_jdwl = m_jadwal.kd_jdwl
		";

		$result	= $conn->query($sql);
		$record	= array();
		if($result){
			if(!empty($result)){
				while($rec = $result->fetch_assoc()){
					$record[]	= $rec;
				}
			}
		}
		
		return $record;
	}
}
$percobaan	= new percobaan();
?>