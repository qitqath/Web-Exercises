<!--
    Aqilah Qathrunnada Mumtaz
    2210511155
-->

<html>
    <head>
        <title>Kantin Mamah Dedeh</title>
    </head>

    <body>
        <h3>Daftar Menu di Kantin Mamah Dedeh</h3>

        <!-- menghubungkan file formTugas dengan file hasilTugas -->
        <form action="hasilTugas.php" method="POST">
            <!-- mencetak daftar menu dengan checkbox -->
            <input type="checkbox" name="menu[]" value="2000">Nasi ---> Rp.2000<br>
            <input type="checkbox" name="menu[]" value="3000">Ikan Bakar ---> Rp.3000<br>
            <input type="checkbox" name="menu[]" value="4000">Ayam Bakar ---> Rp.4000<br>
            <input type="checkbox" name="menu[]" value="2000">Sayur Lodeh ---> Rp.2000<br>
            <input type="checkbox" name="menu[]" value="2000">Tumis Kangkung ---> Rp.2000<br>
            <br>

            <!-- memasukan nama pelanggan -->
            <p>Nama Anda : <input type="text" name="nama"></p>

            <!-- tombol submit untuk melihat hasil pesanan -->
            <input type="submit" value="Bayar Sekarang">
        </form>
    </body>
</html>