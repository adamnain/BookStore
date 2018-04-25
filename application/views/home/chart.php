<div class="row">
  <div class="container">
      <?php foreach($pesanan as $u){ ?>
          <div class="isi-content">
              Nama Pesanan: <?php echo $u->nama_barang ?><br>
              Harga: Rp.<?php echo $u->harga ?><br>
              Jumlah Pesanan: <?php echo $u->jumlah ?><br><br>
          </div>
      <?php } ?><br><br>
      <form action="<?php echo base_url().'home/update_chart'; ?>" method="post">
        <input type="submit" class="btn-success" value="Order Now">
      <form>



  </div>
</div>
