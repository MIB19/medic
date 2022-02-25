<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jadwal RS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo $config->base_url()."";?>css/style.css" rel="stylesheet">
<script src="<?php echo $config->base_url();?>css/st.js"></script>
<style>
    label {
        margin: 40px;
    }
</style>
</head>
<body>
<a href="<?php echo $config->base_url();?>"><button class="text-weight-bold btn btn-primary">Kembali</button></a>
<h1 style="text-align: center;">JADWAL PRAKTEK DOKTER</h1>
<label>HARI : <?php $a=date("l"); if($a=='Sunday'){ echo 'Minggu';}elseif($a=='Monday'){echo 'Senin';}elseif($a=='Tuesday'){echo 'Selasa';}elseif($a=='Wednesday'){echo 'Rabu';}elseif($a=='Thursday'){echo 'Kamis';}elseif($a=='Friday'){echo "Jum'at";}else{echo 'Sabtu';} ?></label><br/><br/>
<label>TANGGAL : <?= $tgl; ?></label><br><br/>
<div class="layout-button-riwayat" style="background-color: grey;">
	<div style="color:white;padding:10px;overflow-y:auto;">
		<table id="myTable" style="font-size:13px;width:1500px;">		
			<thead>
				<tr onClick=""  class="border_black">
					<th style="width:4%">No</th>
					<th style="width:15%">Nama Dokter</th>
					<th style="width:10%;">Spesialis</th>
					<th style="width:10%">Mulai</th>
					<th style="width:10%">Akhir</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				<?php foreach( $jadwal as $row ) : ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $row['nama'] ?></td>
						<td><?= $row['spesialis'] ?></td>
						<td><?= $row['mulai'] ?></td>
						<td>22.00</td>
					</tr>
				<?php $no++ ?>
				<?php endforeach ?>
			</tbody>
		</table>
		
	</div>
	<div id="nav" style="float:right;margin-top:8px;" ></div>
</div>
<div style="clear:both;"></div>	
<script>
$(document).ready(function(){
    var rowsShown = 15;
    var rowsTotal = $('#myTable tbody tr').length;
	
    var numPages = rowsTotal/rowsShown;
    for(i = 0;i < numPages;i++) {
        var pageNum = i + 1;
        $('#nav').append('<a href="#" rel="'+i+'" class="paging-bt'+i+'">'+pageNum+'</a> ');
    }
    $('#myTable tbody tr').hide();
    $('#myTable thead tr').slice(0, rowsShown).show();
    $('#myTable tbody tr').slice(0, rowsShown).show();
    $('#nav a:first').addClass('active');
    $('#nav a').bind('click', function(){

        $('#nav a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#myTable tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
    });
    
        setInterval(function(){ 
            for(i = 0;i < numPages;i++) {
                $(".paging-bt"+i).click();
            }
         }, 10000);
    
});
</script>
</body>