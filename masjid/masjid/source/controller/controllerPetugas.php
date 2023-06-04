<?php
 include ("../model/koneksiDB.php");
 include ("../model/modelPetugas.php");
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
  
    $method_perintah=$_POST['js_perintah'];
    $VARMODELPETUGAS=  new modelPetugas();

    if ($method_perintah=="Simpan_Data")
    {
      $tampungNIK=$_POST['js_nik'];
      $tampungNAMA=$_POST['js_nama'];
      $tampungTEMPAT=$_POST['js_tempat'];
      $tampungTGL=$_POST['js_tanggal'];
      $tampungTELP=$_POST['js_telp'];
      $tampungALAMAT=$_POST['js_alamat'];
      // komunikasi controller ke model (simpan data)
      $aksi=$VARMODELPETUGAS->SimpanDataPetugas($tampungNIK,$tampungNAMA,$tampungTEMPAT,$tampungTGL,$tampungTELP,$tampungALAMAT);
       $informasi['hasil']=$aksi[0];
       $informasi['pesan']=$aksi[1];
       echo json_encode($informasi);
    }

    if ($method_perintah=="Cari_Data")
    {
        $tampungNIK=$_POST['js_nik'];
        //komunikasi ke model cari data
        $aksi=$VARMODELPETUGAS->CariDataPetugas($tampungNIK);
        $informasi['hasil']=$aksi[0];
        $informasi['record']=$aksi[1];
        echo json_encode($informasi);
    }

    if ($method_perintah=="recordDataPetugas")
    {
        $aksi=$VARMODELPETUGAS->DataPetugas();
        $informasi['hasil']=$aksi[0];
        $informasi['data']=$aksi[1];
        echo json_encode($informasi);
    }

    if ($method_perintah=="Ubah_Data")
    {
        $tampungNIK=$_POST['js_nik'];
        $tampungNAMA=$_POST['js_nama'];
        $tampungTEMPAT=$_POST['js_tempat'];
        $tampungTGL=$_POST['js_tanggal'];
        $tampungTELP=$_POST['js_telp'];
        $tampungALAMAT=$_POST['js_alamat'];
        // komunikasi controller ke model (Ubah data)
        $aksi= $VARMODELPETUGAS->UbahDataPetugas($tampungNIK,$tampungNAMA,$tampungTEMPAT,
                $tampungTGL,$tampungTELP,$tampungALAMAT);
        $informasi['hasil']=$aksi[0];
        $informasi['pesan']=$aksi[1];
        echo json_encode($informasi);    

    }

    if ($method_perintah=="Hapus_Petugas")
    {
        $tampungNIK=$_POST['js_nik'];
        $aksi=$VARMODELPETUGAS->HapusDataPetugas($tampungNIK);
        $informasi['hasil']=$aksi[0];
        $informasi['pesan']=$aksi[1];
        echo json_encode($informasi);
    }

    
    if ($method_perintah=="Laporan")
    {
      
        $aksi=$VARMODELPETUGAS->LaporanDataPetugas();
        $informasi['hasil']=$aksi[0];
        $informasi['data']=$aksi[1];
        echo json_encode($informasi);
    }
    
}else{
    header("HTTP/1.1 401 Unautorized");
    exit;
}


?>