<?php
require('koneksi.php');

$result = mysqli_query($conn, "SELECT * FROM pembelian_sepatu");

$sepatu = [];

while ($row = mysqli_fetch_assoc($result)) {
    $sepatu[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="Foto/shoes.ico">
        <title> Website Penjualan Sepatu </title>
        <link rel="stylesheet" href="styleformulir.css">
        </style>
    </head>
    <body>
        <header class="head">
            <nav>
                <a> <img src="Foto/shoes.png"> </a>
                <div class="nav-links" align="center"> </div>
                <ul>
                    <li> <a href="index.php"> HOME </a> </li>
                    <li id="beli"> <a href = "buy.php"> BUY </a> </li>
                    <li> <a href="faqs.php"> FAQs </a> </li>
                    <li> <a href="tentang.php"> ABOUT ME </a> </li>
                </ul>
            </nav>
        </header>
        <div class="text-box">
            <h1 id="tema"> Website Penjualan Sepatu </h1>
            <p> Website Online Shop Terpercaya Sejak Dahulu Kala<br/>Beli Sepatu Impian Anda di Website Kami!
            </p>
        </div>
        <button>Dark Mode</button>
            <!-- <table border="0" width="80%">
                <tr class="judul">
                    <td colspan="4" align="center">
                        <strong>
                            <font size="5"> 
                            <h1 align="center"> Struk Pembelian! </h1>
                                <br> <hr color="black">
                            </font>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td> <br> Nama Costumer</td>
                    <td> <br> :</td>
                    <td> <br> <?php
                                $nama = $_POST['nama'];
                                echo $nama."<br>"; ?>
                    </td>
                </tr>
                <tr>
                    <td> <br> Email</td>
                    <td> <br> : </td>
                    <td> <br> <?php
                                $email = $_POST['email'];
                                echo $email."<br>";?> 
                    </td>
                </tr>
                <tr>
                    <td> <br> Ukuran Sepatu</td>
                    <td> <br> : </td>
                    <td> <br> <?php
                                $ukuran = $_POST['ukuran'];
                                echo $ukuran."<br>"; ?>
                    </td>
                </tr>
                <tr>
                    <td> <br> Barang</td>
                    <td> <br> :</td>
                    <td> <br> <?php
                                $barang = $_POST['barang'];
                                echo $barang."<br>"; ?>
                    </td>
                </tr>
                <tr>
                    <td> <br> Jumlah Pembelian</td>
                    <td> <br> : </td>
                    <td> <br> <?php
                                $jumlah = $_POST['jumlah'];
                                echo $jumlah."<br>"; ?>
                    </td>
                </tr>
                <tr>
                    <td> <br> Alamat Pemesan</td>
                    <td> <br> :</td>
                    <td> <br> <?php
                                $alamat = $_POST['alamat'];
                                echo $alamat."<br>"; ?>
                    </td>
                </tr>
                <tr>
                    <td> <br> Metode Pembayaran</td>
                    <td> <br> :</td>
                    <td> <br> <?php
                                $pembayaran = $_POST['pembayaran'];
                                echo $pembayaran." <br>"; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"> <br> <hr color="black"> <br> </td>
                </tr>
            </table> --->
        </div>
        <button><a href="buy.php" style="text-decoration: none; color: white;">BUY</a></button>
        <table border="0">
            <tr class="judul">
                <td colspan="11" align="center">
                    <strong>
                        <font size="5"> 
                        <h1 align="center"> Struk Pembelian! </h1>
                            <br> <hr color="black">
                        </font>
                    </strong>
                </td>
            </tr>
            <tr>
                <td>No.</td>
                <td>Nama</td>
                <td>E-mail</td>
                <td>Ukuran</td>
                <td>Barang</td>
                <td>Jumlah</td>
                <td>Alamat</td>
                <td>Metode Pembayaran</td>
                <td>Bukti Pembayaran</td>
                <td>Waktu</td>
                <td>Action</td>
            </tr>
            <?php $i = 1; foreach ($sepatu as $psn): ?>
            <tr>
                <td> <?php echo $i; ?> </td>
                <td> <?php echo $psn["Nama"]; ?> </td>
                <td> <?php echo $psn["Email"]; ?> </td>
                <td> <?php echo $psn["Ukuran"]; ?> </td>
                <td> <?php echo $psn["Barang"]; ?> </td>
                <td> <?php echo $psn["Jumlah"]; ?> </td>
                <td> <?php echo $psn["Alamat"]; ?> </td>
                <td> <?php echo $psn["Metode"]; ?> </td>
                <td> <img style="height:90px; width:80px;" src="Foto/bukti_pembayaran/<?=$psn['Nama_file']?>"> </td>
                <td> <?=$psn['Waktu'] ?> </td>
                <td> <a href="ubah.php?Nomor=<?php echo $psn['Nomor']; ?>" style="text-decoration: none; color: black;"><strong>Edit</strong></a> | 
                <a href="hapus.php?Nomor=<?php echo $psn['Nomor']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" style="text-decoration: none; color: black;"><strong>Hapus</strong></a> </td>
            </tr>
            <?php $i++; endforeach ?>
        </table>
        <script src="script.js"></script>
        <!-- footer -->
        <footer class="foot1">
            <div class="icon" align="center">
                <i> <img src="Foto/whatsapp.png"> 0896 9382 7183 &emsp; </i>
                <i> <img src="Foto/instagram.png"> ikhwan_whydi &emsp; </i>
                <i> <img src="Foto/email.png"> ikhwanw06@gmail.com &emsp; </i>
            </div>
            <p align="center"> <br> @Copyright 2022 - Ikhwan - Made with HTML - CSS </p>
        </footer>
    </body>
</html>