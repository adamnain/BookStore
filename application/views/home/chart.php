<div class="row">
  <div class="container">
      <?php foreach($pesanan as $u){ ?>
        <form action="<?php echo base_url().'home/update_chart'; ?>" method="post">
          <div class="isi-content">
              Nama Pesanan: <?php echo $u->nama_barang ?><br>
              Harga: Rp.<?php echo $u->harga ?><br>
              Jumlah Pesanan: <?php echo $u->jumlah ?><br><br>
              <input type="text" value="1" name="status" hidden>
          </div>
          <input id="" type="submit" class="btn-success" value="Order Now">
        </form>
      <?php } ?><br><br>

      <button class="btn btn-primary" id="simpan">Bayar</button>
  </div>
</div>
