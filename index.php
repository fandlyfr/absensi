<?php include 'header.php'; ?>
  <!-- <script>
    $(window).on("load resize ", function() {
      var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
      $('.tbl-header').css({
        'padding-right': scrollWidth
      });
    }).resize();
  </script> -->


<div class="wrapper">
  <div class="container w-100">
    <div class="main my-5">
      <div class="card slideInDown animated">
        <div class="card-header">
          <h4 class="text-dark p-1">Daftar Pengurus</h4>
        </div>
        <div class="card-body">
          <!--User table-->
          <div class="table-responsive">
            <table class="table table-striped table-bordered text-center">
              <thead>
                <tr>
                  <th>ID | Name</th>
                  <th>Position</th>
                  <th>Gender</th>
                  <th>Finger ID</th>
                </tr>
              </thead>
              <tbody>
                <?php
                //Connect to database
                require 'connectDB.php';

                $sql = "SELECT * FROM users WHERE NOT username='' ORDER BY id DESC";
                $result = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($result, $sql)) {
                  echo '<p class="error">SQL Error</p>';
                } else {
                  mysqli_stmt_execute($result);
                  $resultl = mysqli_stmt_get_result($result);
                  if (mysqli_num_rows($resultl) > 0) {
                    while ($row = mysqli_fetch_assoc($resultl)) {
                ?>
                      <TR>
                        <TD><?php echo $row['id'];
                            echo " | ";
                            echo $row['username']; ?></TD>
                        <TD><?php 
                        if ($row['serialnumber']== 1) {
                          echo "Ketua Umum";
                      }elseif ($row['serialnumber'] == 2) {
                        echo 'Sekretaris Umum';
                      }elseif ($row['serialnumber'] == 3) {
                        echo 'Bendahara Umum';
                      }elseif ($row['serialnumber'] == 4) {
                        echo 'Ketua 1';
                      }elseif ($row['serialnumber'] == 5) {
                        echo 'Ketua 2';
                      }elseif ($row['serialnumber'] == 6) {
                        echo 'Sekretaris 1';
                      }elseif ($row['serialnumber'] == 7) {
                        echo 'Sekretaris 2';
                      }elseif ($row['serialnumber'] == 8) {
                        echo 'Koord. Kompartemen Pengembangan Sumber Daya Mahasiswa';
                      }elseif ($row['serialnumber'] == 9) {
                        echo 'Koord. Kompartemen Pendidikan';
                      }elseif ($row['serialnumber'] == 10) {
                        echo 'Koord. Kompartemen Kesekretariatan';
                      }elseif ($row['serialnumber'] == 11) {
                        echo 'Koord. Kompartemen Kajian dan Aksi Strategis';
                      }elseif ($row['serialnumber'] == 12) {
                        echo 'Koord. Kompartemen Riset dan Teknologi';
                      }elseif ($row['serialnumber'] == 13) {
                        echo 'Koord. Kompartemen Sosial Masyarakat';
                      }elseif ($row['serialnumber'] == 14) {
                        echo 'Koord. Kompartemen Media Informasi';
                      }
                ?></TD>
                        <TD><?php echo $row['gender']; ?></TD>
                        <TD><?php echo $row['fingerprint_id']; ?></TD>

                      </TR>
                <?php
                    }
                  }
                }
                ?>
            </tbody>
          </table>
        </div>
        </div>
      </div>
        
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
