<!DOCTYPE html>
<html>
    <head>
        <title>Studi Kasus</title>
        <style type="text/css">
        
        body {
			margin: 0;
			padding: 0;
		}
		
		table {
			border-collapse: collapse;
			margin: 0 auto;
			border: 2px solid gray;
			width: 75%;	
		}

		th {
			background-color: #cfceca;
			color: black;
			padding: 8px;
			text-align: center;
			border: 2px solid gray;
		}

		td {
			padding: 8px;
			text-align: left;
			border: 2px solid gray;
		}

		h2 {	
			background-color: #e6b800;
			margin-top: 0px;
			margin-bottom: 50px;
			padding: 16px;
            text-align: center;
		}
        </style>
    </head>

    <body>
        <h2> Daftar Nilai </h2>
	    <table>
		    <tr>
			    <th>No</th>
			    <th>Nama</th>
			    <th>Tanggal Lahir</th>
			    <th>Umur</th>
			    <th>Alamat</th>
			    <th>Kelas</th>
			    <th>Nilai</th>
			    <th>Hasil</th>
		    </tr>

		    <?php 
			    $data = file_get_contents('data.json');
			    $json = json_decode($data, true);

			    $arraybulan = array(
				    1 => 'Januari',
				    2 => 'Februari',
				    3 => 'Maret',
				    4 => 'April',
				    5 => 'Mei',
				    6 => 'Juni',
				    7 => 'Juli',
				    8 => 'Augustus',
				    9 => 'September',
				    10 => 'Oktober',
				    11 => 'November',
				    12 => 'Desember'
				    );
			
			    $nomor = 1;
			    foreach ($json as $data) {
				    $jumlah_data = count($data);
				    $tanggal = date('d', strtotime($data['tanggal_lahir']));
				    $bulan = $arraybulan[date('n', strtotime($data['tanggal_lahir']))];
				    $tahun = date('Y', strtotime($data['tanggal_lahir']));
				    $tanggal_lahir = date_create($data['tanggal_lahir']);
				    $sekarang = date_create();
				    $umur = date_diff($tanggal_lahir, $sekarang)->y;
                    
				    if ($data['nilai'] >= 90) {
					    $hasil = 'A';
				    } elseif ($data['nilai'] >= 80) {
					    $hasil = 'B';
				    } elseif ($data['nilai'] >= 70) {
					    $hasil = 'C';
				    } else {
					    $hasil = 'D';
				    }
		    ?>
		    <tr>
			    <td><?php echo $nomor ?></td>
			    <td><?php echo $data['nama'] ?></td>
			    <td><?php echo $tanggal .' '. $bulan .' '. $tahun;?></td>
			    <td><?php echo $umur . " tahun" ?></td>
			    <td><?php echo $data['alamat'] ?></td>
			    <td><?php echo $data['kelas'] ?></td>
			    <td><?php echo $data['nilai'] ?></td>
			    <td><?php echo $hasil ?></td>
		    </tr>
		    <?php 
			    $nomor++;
			    } 
		    ?>
	    </table>
    </body>
</html>