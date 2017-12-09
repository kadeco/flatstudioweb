<?php
session_start();
if(!isset($_SESSION['cimol'])){
header('Location:index.php');
}else{?>

<a href="team.php">Team</a>     <a href="portofolio.php"> Portfolio</a>  <a href="logout.php"> Logout</a>
<h1>Portfolio</h1>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Form Upload
        </title>
    </head>
    <body>
     <table>
        <form enctype="multipart/form-data" method="post" action="">
            <tr><td>Judul :       </td><td><input type="text" name="judul"></td></tr>
            <tr><td>Alamat (url) :</td><td><input type="text" name="alamat" value="https://www."></td></tr>
            <tr><td>Gambar:       </td><td><input type="file" name="gambar"></td></tr>
            <tr><td>Judul :       </td><td><select name="tempat"> <option value="atas">atas</option><option value="bawah">bawah</option></select></td></tr>
            <tr><td><input type="submit" name="btn" value="Upload"/></td></tr>
        </form>
      </table>
    </body>
</html>



<?php
include"koneksi.php";
if(isset($_POST['btn']))
{

$gambar = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "images/".$gambar;


        move_uploaded_file($tmp_file, $path); 
            
            $query = "INSERT INTO portofolio(kode,gambar,nama,alamat,tempat) values (null,'".$gambar."','$_POST[judul]','$_POST[alamat]','$_POST[tempat]')";
            $sql = mysql_query($query); 
            if($sql){ 
             echo"<script>alert('Data Tersimpan');window.location='portofolio.php'</script>";
            }else{
                echo "<center><b>Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.</b></center>";
            }


}




$hasil  =   mysql_query("SELECT * from portofolio");
$i = 0;
echo "<table border='1'>";
while($data = mysql_fetch_array($hasil))
{
  echo "<tr>
  <td>".$data['kode']."</td>
  <td colspan=2>".$data['nama']."</td>
  <td colspan=2><img src='images/".$data['gambar']."' height='200' width='200'></td>
  <td colspan=2><p>".$data['alamat']."</p></td>
  <td colspan=2>".$data['tempat']."</td>
  <td colspan=2><a href='hapus_portofolio.php?kdunix=".$data['kode']."'>Hapus</a></td>
  </tr>";
  $i++;
}
echo "</table>";
echo "<input type='hidden' name='n' value='".$i."' />";



}?>