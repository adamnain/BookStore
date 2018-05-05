<div class="row">
  <div class="container">
      <?php foreach($pesanan as $u){ ?>
        <form action="<?php echo base_url().'home/selesai_bayar'; ?>" method="post">
          <div class="isi-content">
              Nama Pesanan: <?php echo $u->nama_barang ?><br>
              Harga: Rp.<?php echo $u->harga ?><br>
              Jumlah Pesanan: <?php echo $u->jumlah ?><br><br>
              <input type="text" value="2" name="status" hidden>
          </div>
          <input type="submit" class="order-btn btn-success" value="Invoice" hidden>
        </form>
      <?php } ?><br><br>
      <h4>Silahkan Transfer melalui Nomor Rekening 642635723829</h4>
      <button class="btn btn-primary" id="simpan">Selesai</button>

  </div>
</div>
<script>
$("#simpan").click(function(){
  $('.order-btn').click();
});
</script>
