<?php 
    if(!empty($dta)){
        echo "<script>alert('Data Kosong / belum terdaftar !!!')</script>";
    }
?>

<div class="container text-center" style="margin-top: 30px;">
    <h2 class="font-weight-bold text-info">Selamat Datang di RS. Delta Surya</h2>
    <div class="card" style="width: 20rem; border-radius: 30px; background-color: white;padding: 30px; color: black;">
        <img class="card-img-top" src="<?php echo $config->base_url();?>icon/hi.png" style="width: 250px; height: 250px" alt="Card image cap">
        <div class="card-body">
            <div class="form-group">
                <label for="nik">No. Rekam Medis</label>
                <input type="number" class="form-control" id="medic" name="medic" placeholder="Masukkan Medical Record" required> 
            </div>
            <button class="btn btn-primary btn-round" onclick="coba()" style="padding-right:70px; padding-left:70px;">Cari</button>
        </form>
    </div>
</div>
</div>
<script>
    function coba(){
        var medic = document.getElementById('medic').value;
        if(medic.length == 14){
            if(confirm('Apakah Anda Yakin ?')){
                $('#indiks').html('Loading..');
		        $.post('<?= $config->base_url();?>hasil/'+medic+'.html',function(data){
			        $('#indiks').html(data);
		        });
		    }
        }else{
            alert('masukkan 14 digit angka rekam medis dengan benar !!!');
            
        }
    }

</script>