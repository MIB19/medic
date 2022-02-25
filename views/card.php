 <?php 
    if(empty($norec)){
 ?>  
    <div class="card bg-white" style="padding: 20px; border-radius:20px; width: 650px">
        <img class="card-img" src="<?php echo $config->base_url();?>icon/empty.jpg" style="width: 600px; height:350px" alt="Card image">
    </div>
    
    <h2 class="font-weight-bold text-info">Data Tidak Ditemukan</h2>
 <?php }else{?>
    
    <div class="card bg-white" style="padding: 20px; border-radius:20px; width: 650px">
        <img class="card-img" src="<?php echo $config->base_url();?>icon/card.png" style="width: 600px; height:350px" alt="Card image">
        <div class="card-img-overlay text-left" style="margin-top: 135px;">
            <label class="card-text" style="margin-left: 30px; font-size:18pt"><?= $norec['nama'];?></label></br>
            <label class="card-text" style="margin-left: 30px; width: 400px"><?= $norec['alamat'];?></label><br/>
            <img src="<?= $config->base_url();?>php-barcode-master/barcode.php?text=<?= $norec['no_medic'];?>" style="width: 130px; height:40px;margin-left:35px; margin-top: 42px" />
        </div>
    </div>
<?php } ?>