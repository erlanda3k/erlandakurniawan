<?php
	echo "Nama : Erlanda Kurniawan";
	echo "<br/>";
	echo "Nim  : 19510008";
	echo "<br/>";
	echo "Program Studi : Sistem Informasi";
	echo "<br/>";
	echo "<br/>";

$nilai = 87;
	echo "Nilai = $nilai";
if ($nilai >= 86) {
	echo "<br/> Selamat... proses belajarmu sangat baik, tingkatkan terus kemampuanmu...";
}elseif ($nilai >= 71) {
	echo "<br/> Selamat... anda sudah mulai memahami pemrograman PHP, tingkatkan terus skill koding anda...";
}elseif ($nilai >= 60) {
	echo "<br/> Upsss... skill kodingmu perlu diasah ini gaes, tetap semangat belajar dan eksplore kemampuan ya...";
}else {
	echo "<br/> Tolong lebih giat lagi ya belajarnya.....";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "FUNCTION PENGULANGAN <br/>";
for ($i= 1; $i<=11; $i++) {
	echo "<br/>Hallo... Nama saya Erlanda Kurniawan";
	echo "<br/> Saya adalah mahasiswa program studi sistem informasi";
	echo "<br/> Saya sangat tertarik mempelajari teknik informatika";
	echo "<br/>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "FUNCTION FAKTORIAL (REKURSIF)";
echo "<br/>";
function faktorial ($n=1) {
	$hasil = 1;
	for ($i=$n; $i >= 1;  $i--) { 
		$hasil = $hasil * $i;
	}
	return $hasil;
}
echo "<br/>4! = ".faktorial(4);
?>