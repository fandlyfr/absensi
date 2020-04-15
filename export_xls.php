<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Position</th>
			<th>Fingerprint Id</th>
            <th>Checkin Date</th>
            <th>Time In</th>
		</tr>
<?php
    require'connectDB.php';
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Absensi.xls");
    if ( empty($_POST['date_sel'])) {

        $Log_date = date("Y-m-d");
        }
        else if ( !empty($_POST['date_sel'])) {
        
        $Log_date = $_POST['date_sel']; 
        }
    $sql = "SELECT * FROM users_logs WHERE checkindate='$Log_date' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    $no = 1;
    while($d = mysqli_fetch_array($result)){   
    ?>
        <tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['username']; ?></td>
            <td><?php 
            if ($d['serialnumber'] = 1) {
                echo 'Ketua Umum';
            }elseif ($d['serialnumber'] = 2) {
                echo 'Sekretaris Umum';
            }elseif ($d['serialnumber'] = 3) {
                echo 'Bendahara Umum';
            }elseif ($d['serialnumber'] = 4) {
                echo 'Ketua 1';
            }elseif ($d['serialnumber'] = 5) {
                echo 'Ketua 2';
            }elseif ($d['serialnumber'] = 6) {
                echo 'Sekretaris 1';
            }elseif ($d['serialnumber'] = 7) {
                echo 'Sekretaris 2';
            }elseif ($d['serialnumber'] = 8) {
                echo 'Koord. Kompartemen Pengembangan Sumber Daya Mahasiswa';
            }elseif ($d['serialnumber'] = 9) {
                echo 'Koord. Kompartemen Pendidikan';
            }elseif ($d['serialnumber'] = 10) {
                echo 'Koord. Kompartemen Kesekretariatan';
            }elseif ($d['serialnumber'] = 11) {
                echo 'Koord. Kompartemen Kajian dan Aksi Strategis';
            }elseif ($d['serialnumber'] = 12) {
                echo 'Koord. Kompartemen Riset dan Teknologi';
            }elseif ($d['serialnumber'] = 13) {
                echo 'Koord. Kompartemen Sosial Masyarakat';
            }elseif ($d['serialnumber'] = 14) {
                echo 'Koord. Kompartemen Media Informasi';
            }
             ?></td>
			<td><?php echo $d['fingerprint_id']; ?></td>
            <td><?php echo $d['checkindate']; ?></td>
            <td><?php echo $d['timein']; ?></td>
		</tr>
     <?php 
	}?>
    </table>
</body>
</html>