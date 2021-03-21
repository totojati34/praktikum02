<?php
@$proses = $_POST['proses'];
@$nama_siswa = $_POST['nama'];
@$mata_kuliah = $_POST['matkul'];
@$nilai_uts = $_POST['nilai_uts'];
@$nilai_uas = $_POST['nilai_uas'];
@$nilai_tugas = $_POST['nilai_tugas'];

if (!empty($proses)) {
      echo 'Proses : ' . $proses;
      echo '<br/>Nama : ' . $nama_siswa;
      echo '<br/>Mata Kuliah : ' . $mata_kuliah;
      echo '<br/>Nilai UTS : ' . $nilai_uts;
      echo '<br/>Nilai UAS : ' . $nilai_uas;
      echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
}
require_once 'functions.php';
?>
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

      <?php
      $ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
      $ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
      $ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
      $ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

      $ar_nilai = [$ns1, $ns2, $ns3, $ns4, ['id' => 5, 'nim' => '01135', 'uts' => 70, 'uas' => 81, 'tugas' => 88]];

      if (isset($_POST['proses'])) {
            $nim = $_POST['nama'];
            $uts = $_POST['nilai_uts'];
            $uas = $_POST['nilai_uas'];
            $tugas = $_POST['nilai_tugas'];

            $ar_nilai[] = ['nim' => $nim, 'uts' => $uts, 'uas' => $uas, 'tugas' => $tugas];
      }
      ?>
      <div class="container">
            <h3>Daftar Nilai Siswa</h3>
            <table border="1" width="100%" class="highlight responsive-table striped cyan centered">
                  <thead>
                        <tr>
                              <th>No</th>
                              <th>NIM</th>
                              <th>UTS</th>
                              <th>UAS</th>
                              <th>Tugas</th>
                              <th>Nilai Akhir</th>
                              <th>Hasil Ujian</th>
                              <th>Grade</th>
                              <th>Predikat</th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($ar_nilai as $ns) {
                              echo '<tr><td>' . $nomor . '</td>';
                              echo '<td>' . $ns['nim'] . '</td>';
                              echo '<td>' . $ns['uts'] . '</td>';
                              echo '<td>' . $ns['uas'] . '</td>';
                              echo '<td>' . $ns['tugas'] . '</td>';
                              $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                              $hasil_ujian = kelulusan($nilai_akhir);
                              $grade = grade($nilai_akhir);
                              $predikat = predikat($grade);
                              echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                              echo '<td>' . $hasil_ujian . '</td>';
                              echo '<td>' . $grade . '</td>';
                              echo '<td>' . $predikat . '</td>';
                              echo '<tr/>';
                              $nomor++;
                        }
                        ?>
                  </tbody>
            </table>
      </div>
      <br />
      <div class="divider"></div>
      <br />
      <br />

      <div class="row">
            <div class="container">
                  <div class="row">
                        <div class="col s12">
                              <h1>Form Nilai Mahasiswa</h1>
                        </div>
                  </div>
                  <div class="row">
                        <form action="nilai_siswa.php" method="POST" class="col s12">
                              <div class="row">
                                    <div class="input-field col s8 offset-s2">
                                          <input id="text" type="text" class="validate" name="nama">
                                          <label for="text">Nama Lengkap</label>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="input-field col s8 offset-s2">
                                          <select name="matkul">
                                                <option value="ddp">Dasar - Dasar Pemrograman</option>
                                                <option value="bdi">Basis Data I</option>
                                                <option value="web1">Pemrograman Web</option>
                                          </select>
                                          <label>Mata Kuliah</label>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="input-field col s4 offset-s2">
                                          <input id="uts" type="text" class="validate" name="nilai_uts">
                                          <label for="uts">Nilai UTS</label>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="input-field col s4 offset-s2">
                                          <input id="uas" type="text" class="validate" name="nilai_uas">
                                          <label for="uas">Nilai UAS</label>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="input-field col s4 offset-s2">
                                          <input id="tugas" type="text" class="validate" name="nilai_tugas">
                                          <label for="tugas">Nilai Tugas/Praktikum</label>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col s4 offset-s1">
                                          <button class="btn waves-effect waves-light" type="submit" name="proses">Submit
                                                <i class="material-icons right">send</i>
                                          </button>
                                    </div>
                              </div>

                        </form>

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