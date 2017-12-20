<?php
session_start();
if(!isset($_SESSION['cimol'])){
header('Location:lock_screen.php');
}else{
?>


<?php
$kd =$_GET["kdunix"];
include"koneksi.php";          
		$a1="select * from team where kode='$kd'";//untuk melihat apa yang mw di hapus
		$a=mysqli_query($con, $a1);//untuk melihat apa yang mw di hapus
		$cek=mysqli_fetch_array($a);//untuk menampilkan apa yang ada pada $a
if(!$cek)
{
echo"<script>alert('Gagal Hapus');window.location='portofolio.php'</script>";
}else
{
 
$folder1="images/$cek[foto]";//nama folder dan nama foto yag akan di hapus
unlink($folder1);//di gunakan untuk menghapus data yang ada di dlam folder
		         
            $v="delete from team where kode='$kd'";
		
            $temu=mysqli_query($con, $v);
	        if(!$temu)
			{
				echo"gagal";
			}else
	         {
	         echo"<script>alert('Berhasil Hapus Data');window.location='index.php'</script>";
	         }
	     
}	
?>

<?php
}
?>