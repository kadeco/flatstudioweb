<?php
session_start();
if(!isset($_SESSION['cimol'])){
header('Location:index.php');
}else{?>

<a href="team.php">Team</a>     <a href="portofolio.php"> Portfolio</a> <a href="logout.php"> Logout</a>


<h1>Team</h1>
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
            <tr><td>Nama :       </td><td><input type="text" name="nama"></td></tr>
            <tr><td>Jabatan :       </td><td><input type="text" name="jabatan"></td></tr>
            <tr><td>Foto:       </td><td><input type="file" name="gambar"></td></tr>
            <tr><td>Keterangan :       </td><td><textarea name="keterangan"></textarea></td></tr>
            <tr><td>facebook :       </td><td><input type="text" name="fb" value="https://www.facebook.com/" size="40"></td></tr>
            <tr><td>Twitter :       </td><td><input type="text" name="tw" value="https://twitter.com/" size="40"></td></tr>
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
            
            $query = "INSERT INTO team(kode,nama,jabatan,foto,keterangan,fb,tw) values (null,'$_POST[nama]','$_POST[jabatan]','".$gambar."','$_POST[keterangan]','$_POST[fb]','$_POST[tw]')";
            $sql = mysql_query($query); 
            if($sql){ 
             echo"<script>alert('Data Tersimpan');window.location='team.php'</script>";
            }else{
                echo "<center><b>Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.</b></center>";
            }


}



$hasil  =   mysql_query("SELECT * from team");
$i = 0;
echo "<table border='1'>";
while($data = mysql_fetch_array($hasil))
{
  echo "<tr>
  <td>".$data['kode']."</td>
  <td colspan=2>".$data['nama']."</td>
  <td colspan=2>".$data['jabatan']."</td>
  <td colspan=2><img src='images/".$data['foto']."' height='200' width='200'></td>
  <td colspan=2><p>".$data['keterangan']."</p></td>
  <td colspan=2>".$data['fb']."</td>
  <td colspan=2>".$data['tw']."</td>
  <td colspan=2><a href='hapus_team.php?kdunix=".$data['kode']."'>Hapus</a></td>
  </tr>";
  $i++;
}
echo "</table>";
echo "<input type='hidden' name='n' value='".$i."' />";


}?>