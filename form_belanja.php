<!DOCTYPE html>
<html>

<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

      <div class="row">
            <div class="row">
                  <div class="col s12">
                        <h1>Belanja Online</h1>
                  </div>
            </div>
            <div class="row">
                  <div class="col s6">
                        <form method="GET" class="col s12">
                              <div class="row">
                                    <div class="input-field col s8 offset-s2">
                                          <input id="text" type="text" class="validate" name="nama">
                                          <label for="text">Masukkan Nama Anda</label>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col s8 offset-s2">
                                          <p>
                                                <label>
                                                      <input name="group1" type="radio" value="TV" checked />
                                                      <span>TV</span>
                                                </label>
                                          </p>
                                          <p>
                                                <label>
                                                      <input name="group1" type="radio" value="KULKAS" />
                                                      <span>KULKAS</span>
                                                </label>
                                          </p>
                                          <p>
                                                <label>
                                                      <input class="with-gap" name="group1" type="radio" value="MESIN CUCI" />
                                                      <span>MESIN CUCI</span>
                                                </label>
                                          </p>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="input-field col s8 offset-s2">
                                          <input id="jumlah" type="number" class="validate" name="jumlah">
                                          <label for="jumlah">Masukkan Jumlah Barang</label>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col s4 offset-s2">
                                          <button class="btn waves-effect waves-light" type="submit" name="proses">Submit
                                                <i class="material-icons right">send</i>
                                          </button>
                                    </div>
                              </div>

                        </form>
                  </div>
                  <div class="col s6">
                        <ul class="collection">
                              <li class="collection-item active">Daftar Harga</li>
                              <li class="collection-item">TV : 4.200.000</li>
                              <li class="collection-item">Kulkas : 3.100.000</li>
                              <li class="collection-item">Mesin Cuci : 3.800.000</li>
                              <li class="collection-item active">Harga Dapat Beubah Setiap Saat</li>
                        </ul>
                  </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                  <div class="col s12">
                        <?php
                        @$proses = $_GET['proses'];
                        @$nama_customer = $_GET['nama'];
                        @$produk = $_GET['group1'];
                        @$jumlah = $_GET['jumlah'];
                        $total_belanja = '';
                        if ($produk == 'TV') {
                              $total_belanja = $jumlah * 4200000;
                        } else if ($produk == 'KULKAS') {
                              $total_belanja = $jumlah * 3100000;
                        } else if ($produk == 'MESIN CUCI') {
                              $total_belanja = $jumlah * 3800000;
                        }
                        echo 'Proses : ' . $proses;
                        echo '<br/>Nama Customer : ' . $nama_customer;
                        echo '<br/>Produk Pilihan : ' . $produk;
                        echo '<br/>Jumlah Beli : ' . $jumlah;
                        echo '<br/>Total Belanja : ' . $total_belanja;
                        ?>
                  </div>
            </div>
      </div>



      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <script>
            $(document).ready(function() {
                  $('select').formSelect();
            });
      </script>

</body>

</html>