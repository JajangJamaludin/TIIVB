<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->
    <script language="javascript">
function check_all()
{
    var chk = document.getElementsByName('check_list[]');
    for (i = 0; i < chk.length; i++)
    chk[i].checked = true ;
}

function uncheck_all()
{
    var chk = document.getElementsByName('check_list[]');
    for (i = 0; i < chk.length; i++)
    chk[i].checked = false ;
}
</script>

    <section id="services">
        <div class="container">
            <div class="box first">
            <marquee behavior="scroll" ></marquee>
                <div class="row">
                   
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3 align="center"> Data Supplier </h3><br>
                         
 

   
         <br>
          <form class="form-horizontal form-label-left" novalidate action="?page=supplier/data_supplier" method="POST" name="cari">
    <div class="row">
        <div class="col-md-12">
         
            <div class="col-md-4 col-sm-4 col-xs-12" >
                <input type="text" class="search form-control" align="right" name="search" id="searchid" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;" placeholder="Search for people" name="nama_supplier" />  
                <div     id="result"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" align="left">
                
                              <button class="btn btn-default" name="submit" type="submit "><i class="fa fa-search"></i> Cari</button> <a href="?page=supplier/input_supplier" class="btn btn-success"> Tambah Data</a> <a href="supplier/supplierxls.php" class="btn btn-default" >Simpan Excel</a>
            </div>
        </div>
    </div>   
</form>
         <hr>
         <form method="post" action="?page=supplier/deleteallsupplier">
        
<section class="panel">       
    <table class="table table-striped   table-hover">
        <thead>
        <tr>
            <th width="10">&nbsp;</th>
            <th width="10">NO</th>
     
            <th class="hidden-phone"><i class=></i> KODE SUPPLIER </th>
            <th><i class=></i> NAMA SUPPLIER</th>   
            <th><i class=></i> ALAMAT SUPPLIER</th> 
            <th><i class=></i> NO TELEPON SUPPLIER</th>  
             <th><i class=></i> KOTA SUPPLIER</th>  
              <th class="hidden-phone">Aksi</th>                
        </tr>
        </thead>
        <tbody align="left">
         <?php
         error_reporting(0);
           include "config/koneksi.php";    
        if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
        {
         $search = $_POST['search'];
         $sql1 = $mysqli->query("SELECT * FROM supplier WHERE nama_supplier LIKE '%$search%' or nama_supplier LIKE '$search'");
         }
         else{
             $sql1 = $mysqli->query("SELECT * FROM supplier order by nama_supplier asc LIMIT 5");
         }
         $jumlah1 = mysqli_num_rows($sql1);
           {
           $no=0;
           while ($tampil = $sql1->fetch_array(MYSQLI_ASSOC)){
            $Nomor ++;
    
    ?>
        
        <tr>
        <td><input type="checkbox" name="check_list[]" value="<?php echo $tampil['kode_supplier'];?>" /></td>
            <td><?php echo $Nomor ?> </td>
            
            <td class="hidden-phone"><?php echo $tampil['kode_supplier']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['nama_supplier']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['alamat_supplier']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['telp_supplier']; ?> </td>
                 <td class="hidden-phone"><?php echo $tampil['kota_supplier']; ?> </td>
            
            <td class="hidden-phone"> <a href="?page=supplier/ubah_supplier&Token=<?php echo $tampil['kode_supplier']; ?>" class="btn btn-secondary btn-xs">Edit</i></a></td>
               <td class="hidden-phone">  <a href="?page=supplier/hapus_supplier&Token=<?php echo $tampil['kode_supplier']; ?>"  onClick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-default btn-xs">Hapus</i></a>       </td>                       
                                     
          
        </tr>     
        <?php } }?>             
        <tr>
            <td>Jumlah Data</td>
            <td>: <?php echo $jumlah1 ?> </td>
        </tr>  
        <tr>
  
      <td style="padding-bottom:30px;"><a href="#" onClick="check_all()">Chek all</a></td>&nbsp;&nbsp;<td> <a href="#" onClick="uncheck_all()">Unchek all</a></td>
        <td><input type="submit" name="hapus" value="HAPUS" onClick="return confirm('Hapus yang ditandai?')" />
        &nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>         
        </tbody>
    </table>
</section>                                                                                    
 


                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
