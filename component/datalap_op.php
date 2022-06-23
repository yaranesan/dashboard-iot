<?php
	
include "conn/koneksi.php";
include "conn/conn.php";

$hari = date("l");
$tanggal = date("Y-m-d");

//$dayofyear = 168;
$dayofyear = date("z")+1; 

$laporan_harian = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear");
if (mysqli_num_rows($laporan_harian) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($laporan_harian)) {
    //echo "Nama: " . $row["user_name"]. " - Mesin: " . $row["machine_id"]. " " . $row["product_ok"]. "<br>";
  }
} else {
  echo "Belum ada laporan";
}

$status_aditya = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear && user_name='Aditya' ");
if (mysqli_num_rows($status_aditya) > 0) {
  // output data of each row
  $stat_aditya = '<label class="badge badge-success">Sudah Melapor</label>';
 } else {
  //$stat_aditya = "Belum melapor";
  $stat_aditya = '<label class="badge badge-danger">Belum Melapor</label>';
 }

$status_anang = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear && user_name='Anang' ");
if (mysqli_num_rows($status_anang) > 0) {
  // output data of each row
  $stat_anang = '<label class="badge badge-success">Sudah Melapor</label>';
 } else {
  $stat_anang = '<label class="badge badge-danger">Belum Melapor</label>';
 }

$status_annisa = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear && user_name='Annisa' ");
if (mysqli_num_rows($status_annisa) > 0) {
  // output data of each row
  $stat_annisa = '<label class="badge badge-success">Sudah Melapor</label>';
 } else {
  $stat_annisa = '<label class="badge badge-danger">Belum Melapor</label> ';
 }
 
 $status_arya = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear && user_name='Arya' ");
if (mysqli_num_rows($status_arya) > 0) {
  // output data of each row
  $stat_arya = '<label class="badge badge-success">Sudah Melapor</label>';
 } else {
  $stat_arya = '<label class="badge badge-danger">Belum Melapor</label>';
 }
 
 $status_dayat = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear && user_name='Dayat' ");
if (mysqli_num_rows($status_dayat) > 0) {
  // output data of each row
  $stat_dayat = '<label class="badge badge-success">Sudah Melapor</label>';
 } else {
  $stat_dayat = '<label class="badge badge-danger">Belum Melapor</label> ';
 }
 
 $status_fachri = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear && user_name='Fachri' ");
if (mysqli_num_rows($status_fachri) > 0) {
  // output data of each row
  $stat_fachri = '<label class="badge badge-success">Sudah Melapor</label>';
 } else {
  $stat_fachri = '<label class="badge badge-danger">Belum Melapor</label> ';
 }
 
 //$status_faisal = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear && user_id=7 ");
 $status_faisal = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear && user_name='Faisal' ");
if (mysqli_num_rows($status_faisal) > 0) {
  // output data of each row
  $stat_faisal = '<label class="badge badge-success">Sudah Melapor</label>';
 } else {
  $stat_faisal = '<label class="badge badge-danger">Belum Melapor</label> ';
 }
 
 $status_ichsan = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear && user_name='Ichsan' ");
if (mysqli_num_rows($status_ichsan) > 0) {
  // output data of each row
  $stat_ichsan = '<label class="badge badge-success">Sudah Melapor</label>';
 } else {
  $stat_ichsan = '<label class="badge badge-danger">Belum Melapor</label> ';
 }
 
 $status_nanda = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear && user_name='Nanda' ");
if (mysqli_num_rows($status_nanda) > 0) {
  // output data of each row
  $stat_nanda = '<label class="badge badge-success">Sudah Melapor</label>';
 } else {
  $stat_nanda = '<label class="badge badge-danger">Belum Melapor</label> ';
 }
 
 $status_nindia = mysqli_query($conn,"SELECT * FROM daily_report_op where DAYOFYEAR(timestamp)=$dayofyear && user_name='Nindia' ");
if (mysqli_num_rows($status_nindia) > 0) {
  // output data of each row
  $stat_nindia = '<label class="badge badge-success">Sudah Melapor</label>';
 } else {
  $stat_nindia = '<label class="badge badge-danger">Belum Melapor</label>';
 }


$operator = [
	["1", "Aditya", $stat_aditya],
	["2", "Anang", $stat_anang, "<a href='form_lap_harian_op.html'>kirim laporan</a>"],
	["3", "Annisa", $stat_annisa, "<a href='form_lap_harian_op.html'>kirim laporan</a>"],
	["4", "Arya", $stat_arya, "<a href='form_lap_harian_op.html'>kirim laporan</a>"],
	["5", "Dayat", $stat_dayat, "<a href='form_lap_harian_op.html'>kirim laporan</a>"],
	["6", "Fachri", $stat_fachri, "<a href='form_lap_harian_op.html'>kirim laporan</a>"],	
	["7", "Faisal", $stat_faisal, "<a href='form_lap_harian_op.html'>kirim laporan</a>"],
	["8", "Ichsan", $stat_ichsan, "<a href='form_lap_harian_op.html'>kirim laporan</a>"],
	["9", "Nanda", $stat_nanda, "<a href='form_lap_harian_op.html'>kirim laporan</a>"],	
	["10", "Nindia", $stat_nindia, "<a href='form_lap_harian_op.html'>kirim laporan</a>"],	
];

?>
