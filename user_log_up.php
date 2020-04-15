<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <?php

    session_start();
    //Connect to database
    require 'connectDB.php';

    if (isset($_POST['log_date'])) {
      if ($_POST['date_sel'] != 0) {
        $_SESSION['seldate'] = $_POST['date_sel'];
      } else {
        $_SESSION['seldate'] = date("Y-m-d");
      }
    }

    if ($_POST['select_date'] == 1) {
      $_SESSION['seldate'] = date("Y-m-d");
    } else if ($_POST['select_date'] == 0) {
      $seldate = $_SESSION['seldate'];
    }

    $sql = "SELECT * FROM users_logs WHERE checkindate='$seldate' ORDER BY id DESC";
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
            <TD><?php echo $row['id']; ?></TD>
            <TD><?php echo $row['username']; ?></TD>
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
            <TD><?php echo $row['fingerprint_id']; ?></TD>
            <TD><?php echo $row['checkindate']; ?></TD>
            <TD><?php echo $row['timein']; ?></TD>

          </TR>
    <?php
        }
      }
    }
    ?>
  </tbody>
</table>