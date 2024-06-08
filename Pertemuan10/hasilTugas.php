<!-- mengindikasi variabel -->
<?php
    $menu = $_POST['menu'];
    $nama = $_POST['nama'];
    $total = 0 ;
?>

<html>
    <head>
        <title>Hasil Pesanan</title>
    </head>

    <body>
        <!-- mencetak total harga pesanan yang sebelumnya sudah dipilih -->
        <h2>Total Harga :
            <?php
            /* menjalankan sintaks bila ada menu yang dipilih */
            if(!empty($menu)){
                foreach($menu as $value){
                    /* menghitung total harga pesanan */
                    $total += $value ;
                }
                /* mencetak hasil hitung total */
                echo"$total";
            }
            ?>
        </h2>

        <h3>
            <?php
                /* menyortir output dengan persoalan if */
                if($total<7000){
                    echo "Selamat Makan $nama, by Mamah Dedeh";
                }
                elseif($total<13000){
                    echo "Hi, $nama";
                    echo"<h2>Bonus : </h2>
                    <ul><li>Minuman Gratis : Teh Manis Dingin</li></ul>";
                }
                else{
                    /* menghitung harga potongan (diskon) */
                    $diskon = $total*10/100;
                    /* mengurangi total harga pesanan dengan harga diskon */
                    $hargaBaru = $total - $diskon ;
                    echo "Hi, $nama";
                    echo"<h2>Bonus : </h2>
                    <ul><li>Minuman Gratis : Teh Manis Dingin</li>
                    <li>Diskon : $diskon</li>
                    <li>Harga Sekarang : $hargaBaru</ul>";
                }
            ?>
        </h3>
    </body>
</html>