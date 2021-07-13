<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 - Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>
<!-- <body> -->
<body>
    <div class="kalkulator">
        <h2 class="judul">K A L K U L A T O R</h2>
        <hr>
        <form  method="post" action="tugas6.php">
            <input type="text" name="bil1" class="bilangan" placeholder="Bilangan Pertama" autocomplete="off">
            <select class="penjumlahan" name="penjumlahan">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">/</option>
            </select>
            <input type="text" name="bil2" class="bilangan" placeholder="Bilangan Kedua" autocomplete="off">
            <input type="submit" name="hitung" value="H I T U N G" class="tombol">
        </form>	
        
        <?php 
            if(isset($_POST['hitung'])){
                $bil1 = $_POST['bil1'];
                $bil2 = $_POST['bil2'];
                $penjumlahan = $_POST['penjumlahan'];
                switch ($penjumlahan) {
                    case 'tambah':
                        $hasil = $bil1+$bil2;
                    break;
                    case 'kurang':
                        $hasil = $bil1-$bil2;
                    break;
                    case 'kali':
                        $hasil = $bil1*$bil2;
                    break;
                    case 'bagi':
                        $hasil = $bil1/$bil2;
                    break;			
                }
            }
        ?>

        <?php 
            if(isset($_POST['hitung'])){ 
        ?>
            <input type="text" value="<?php echo "$hasil" ; ?>" class="hasil">
        <?php 
            }else{ 
        ?>
            <input type="text" class="hasil" placeholder="Hasil Perhitungan">
        <?php } ?>
            <p>@FahmiInsanul</p>
    </div>   
</body>
</html>