<?php

//persiapan koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "lat_chatbot") or die("Database Error");

//ambil pesan dari ajax
$pesan = mysqli_real_escape__string($koneksi, $_POST['isi_pesan '])


//cek pertanyaan ke dalam tabel
$cek_data = mysqli_query($koneksi, "SELECT jawaban FROM")