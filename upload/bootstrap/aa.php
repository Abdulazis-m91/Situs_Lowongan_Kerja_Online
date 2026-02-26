

<?PHP if (isset($_POST['edituploadgambar'])) {// UNTUK MENGEDIT
$id=$_GET['id'];
$nama=strip_tags($_POST['nama']);
$gambar=$_FILES['gambar']['name'];
$tgl=date("h:i:s-j-m-Y");
if($gambar == ""){
$edit=mysql_query("UPDATE tb_upload SET nama='$nama' WHERE id='$id'");
if(!$edit-portofolio){ echo '<script language="javascript" type="text/javascript">
alert("edit gambar berhasil !");</script>';
echo "<meta http-equiv='refresh' content='0; url=./'>";
} else
{ echo '<script language="javascript" type="text/javascript">
alert("edit berhasil !");</script>';
echo "<meta http-equiv='refresh' content='0; url=./'>";
}
}
else{
$cari=mysql_query("select * from tb_upload where id='$id'");
$dt=mysql_fetch_array($cari);
$gambar=$dt['gambar'];
$tmpfile = "./gambar/$gambar";

$typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['gambar']['type'],$typeGambar)){
echo' FORMAT GAMBAR SALAH';
}elseif($fileSize=$_FILES['gambar']['size']< 20000 || $fileError < 20000){
unlink ($tmpfile);
$edit2=mysql_query("UPDATE tb_upload SET nama='$nama',gambar='$gambar' WHERE id='$id'");
$move = move_uploaded_file($_FILES['gambar']['tmp_name'],'./gambar/'.$gambar);
if(!$edit2)
{ echo '<script language="javascript" type="text/javascript">
alert("edit gambar gagal !");</script>';
echo "<meta http-equiv='refresh' content='0; url=./'>";

} else
{ echo '<script language="javascript" type="text/javascript">
alert("edit gambar berhasil !");</script>';
echo "<meta http-equiv='refresh' content='0; url=./'>";

}
}
}
}
?>
