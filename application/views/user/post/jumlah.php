<!-- <form id="contactForm" method="POST" action="<?= base_url() ?>SiswaClient/jumlah_process/" class="contact-form">
            <h4><strong>Ulasan anda</strong></h4>
            <hr>
           
            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="floatingSelect">Angka 1</label>
              <input type="text"id="angka1" name="angka1" rows="7" placeholder="Ulasan" class="form-control" required data-error="Mohon tulis ulasan anda"></input>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="floatingSelect">Angka 2</label>
              <input id="angka2" name="angka2" rows="7" placeholder="Ulasan" class="form-control" required data-error="Mohon tulis ulasan anda"></input>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
              <button type="submit" id="submit" class="btn btn-primary">Jumlah</button>
              <div id="msgSubmit" class="h3 text-center hidden"></div>
              <div class="clearfix"></div>
            </div>
          </form> -->

          <form action="penjumlahan.php" method="post">
                Input Angka <input type="text" name="angka1">
                Input Angka <input type="text" name="angka2">
                <input type="submit">
            </form>       
            <?php  
            if (isset($_POST["angka1"])) {
                $angka1 = $_POST["angka1"];
                $angka2 = $_POST["angka2"];
                $hasil = $angka1 + $angka2;
                echo $hasil;                            
            }          
            ?>
