<?php
include "koneksi.php";


$jumlah = count($_POST["check_list"]);
for($i=0; $i < $jumlah; $i++) 
{
    $id_brg_keluar=$_POST["check_list"][$i];
	$myquery = "DELETE FROM keluar_barang WHERE id_brg_keluar = '$id_brg_keluar'  LIMIT 1";
	$hapus = mysql_query($myquery);
	?><script language="javascript">alert ("Data yang ditandai Berhasil dihapus !"); location.href="javascript:history.back();";</script><?php
}
 ?>