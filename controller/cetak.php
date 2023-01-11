<?php


$id_pembayaran = $_POST['id_pembayaran'];
$kios = $_POST['kios'];
$harga = $_POST['harga'];
$nik = $_POST['nik'];
$awal = $_POST['awal'];
$akhir = $_POST['akhir'];
$penyewa = $_POST['penyewa'];
$usaha = $_POST['usaha'];

$bukti = $_POST['bukti_bayar'];
$tgl_bayar = $_POST['tgl_bayar'];





// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("INVOICE.rtf");
// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#BAYAR", $id_pembayaran, $document);
$document = str_replace("#KIOS", $kios, $document);
$document = str_replace("#HARGA", $harga, $document);
$document = str_replace("#KTP", $nik, $document);
$document = str_replace("#NAMA", $penyewa, $document);
$document = str_replace("#AWAL", $awal, $document);
$document = str_replace("#AKHIR", $akhir, $document);
$document = str_replace("#USAHA", $usaha, $document);
$document = str_replace("#TGLBAYAR", $tgl_bayar, $document);

// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=invoice.doc");
header("Content-length: ".strlen($document));
echo $document;
?>