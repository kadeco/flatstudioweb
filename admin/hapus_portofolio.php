<?php
session_start();
if(!isset($_SESSION['cimol'])){
header('Location:index.php');
}else{?>


<?php
$kd =$_GET["kdunix"];
include"koneksi.php";          
$a=mysql_query("select * from portofolio where kode='$kd'");//untuk melihat apa yang mw di hapus
$cek=mysql_fetch_array($a);//untuk menampilkan apa yang ada pada $a
if(!$cek)
{
echo"<script>alert('Gagal Hapus');window.location='team.php'</script>";
}else
{
 
$folder1="images/$cek[gambar]";//nama folder dan nama foto yag akan di hapus
unlink($folder1);//di gunakan untuk menghapus data yang ada di dlam folder
		         
            $v="delete from portofolio where kode='$kd'";
		
            $temu=mysql_query($v);
	        if(!$temu)
			{
				echo"gagal";
			}else
	         {
	         echo"<script>alert('Berhasil Hapus Data');window.location='team.php'</script>";
	         }
	     
}	
?>

<?}?>