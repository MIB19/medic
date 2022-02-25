<div class="container text-left" style="margin-top: 30px;">
    <div class="row">
    <label class="font-weight-bold" style="font-size: 18pt;margin-top:5px">No Rekam Medis : </label><input type="number" class="form-control bg-white" style="width: 400px; height: 35px; margin-left: 30px; margin-top:10px;" id="medic" value="<?= $norec['no_medic'];?>" name="medic" placeholder="Masukkan Medical Record" required> <button class="btn btn-primary btn-round" style="margin-left: 30px;" onclick="coba()" >Cari</button>
    </div>
    
</div>
<div id="card" class="container text-center" style="margin-top: 30px;">
    <div class="card bg-white" style="padding: 20px; border-radius:20px; width: 650px">
        <img class="card-img" src="<?php echo $config->base_url();?>icon/card.png" style="width: 600px; height:350px" alt="Card image">
        <div class="card-img-overlay text-left" style="margin-top: 135px;">
            <label class="card-text" style="margin-left: 30px; font-size:18pt"><?= $norec['nama'];?></label></br>
            <label class="card-text" style="margin-left: 30px; width: 400px"><?= $norec['alamat'];?></label><br/>
            <img src="<?= $config->base_url();?>php-barcode-master/barcode.php?text=<?= $norec['no_medic'];?>" style="width: 130px; height:40px;margin-left:35px; margin-top: 42px" />
        </div>
    </div>
</div>

<script>
    function coba(){
        var medic = document.getElementById('medic').value;
        if(medic.length == 14){
            if(confirm('Apakah Anda Yakin ?')){
                $('#card').html('Loading..');
		        $.post('<?= $config->base_url();?>card/'+medic+'.html',function(data){
			        $('#card').html(data);
		        });
		    }
        }else{
            alert('masukkan 14 digit angka rekam medis dengan benar !!!');
            
        }
    }
</script>