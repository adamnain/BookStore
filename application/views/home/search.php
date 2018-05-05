<div class="row">
  <div class="container">
    <form action="<?php echo base_url().'home/search'; ?>" method="post">
        <div class="col-lg-8">
          <input placeholder="tuliskan judul" type="text" class="form-control" name="judul" id="search">
        </div>
        <div class="col-lg-4">
          <button class="btn btn-default" type="submit">Search</button>
        </div>
    </form>

    <!-- list barang -->
    <?php foreach($barang as $u){ ?>
      <div class="col-lg-3">
        <div class="isi-content">
          <form action="<?php echo base_url().'home/tambah_chart'; ?>" method="post">
            <h4><?php echo $u->nama ?></h4><br>
            <div class="cover-index">
              <img src="<?php echo base_url ('assets/images/'.$u->foto);?>" /><br>
            </div>
            Rp.<?php echo $u->harga ?><br>
            <!-- <?php echo $u->stock ?><br> -->
            <?php echo $u->kategori ?><br>
            <input type="text" value="<?php echo $u->nama ?>" name="nama" hidden>
            <input type="text" value="<?php echo $u->harga ?>" name="harga" hidden>
            <button class="btn btn-primary" type="submit">+keranjang</button>
            <!-- <input type="submit" value="+Keranjang" class="btn-primary"> -->
            <!-- <button class="btn-primary">+ Pesanan</button> -->
          </form>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
