<!DOCTYPE html>
<html>
    <head>
        <title>Studi Kasus</title>
    </head>
<body>

<?php
    $json_string = file_get_contents("data.json");
    $json = json_decode($json_string,true);
?>
 
<table border="1" style="width: 1000px;" align="center">
        <tr>
            <th><b>No</b></th>
            <th><b>Nama</b></th>
            <th><b>Kelas</b></th>
            <th><b>Alamat</b></th>
            <th><b>Tanggal Lahir</b></th>
            <th><b>Umur</b></th>
            <th><b>Nilai</b></th>
            <th><b>Hasil</b></th>
        </tr>  
        <?php 
        $no = 1; 
        foreach ($json as $value) { ?>  
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $value["nama"] ?></td>
                <td><?php echo $value["kelas"] ?></td>
                <td><?php echo $value["alamat"] ?></td>
                <td><?php echo $value["tanggal_lahir"] ?></td>
                <td><?php echo $value["umur"] ?></td>
                <td><?php echo $value["nilai"] ?></td>
                <td>
                    <?php
                        switch ($value["nilai"]) {
                            case $value["nilai"] >= 90 && $value["nilai"] <= 100:
                                echo "A";
                                break;
                            case $value["nilai"] >= 80 && $value["nilai"] < 90:
                                echo "B";                                
                                break;
                            case $value["nilai"] >= 70 && $value["nilai"] < 80:
                                echo "C";                                
                                break;
                            case $value["nilai"] >= 0 && $value["nilai"] < 70:
                                echo "D";                                
                                break;
                            break;
                        }           
                    ?>
                </td>
            </tr>
        <?php  
            $no++;
        }
        ?>      
   </table>
</body>
</html>