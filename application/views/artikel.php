<div class="artikel">
  <div class="container">
    <div class="artikel-top heading">
      <h2>Artikel</h2>
    </div>
    <div class="artikel-bottom">
      <div class="container">
      <?php foreach ($record->result_array() as $list) { ?>
      <div class="row">
        <div class="col-lg-4">
          <img style="padding:20px 0 20px 0;" class="img-responsive" src="<?php echo base_url() ?>uploads/article/<?php echo $list['gambar_artikel']; ?>" />
        </div>
        <div class="col-lg-8">
          <h3><?php echo $list['judul_artikel']; ?></h3>
          <p>
            <?php echo $list['isi_artikel']; ?>
          </p>
          <div class="submit-btn">
            <input type="submit" value="Selengkapnya...">
          </div>
        </div>
      </div>
      <?php } ?>
      </div>
		</div>
	</div>
</div>
