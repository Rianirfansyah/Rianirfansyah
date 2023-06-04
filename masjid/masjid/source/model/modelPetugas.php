<?php
class modelPetugas extends koneksiDB{

    public function __construct(){
        $this->hubungkanDatabase();
    }

    public function HapusDataPetugas($varnik){
        try {
            $crud =$this->databasenya;
            $query=$crud->prepare("DELETE FROM petugas WHERE nik= :nik");
            $query->bindParam("nik",$varnik);
            $query->execute(); 
            $hasil[0]=true;
            $hasil[1]="Data berhasil dihapus";  
        } catch (PDOException $pesan) {
            $hasil[0]=false;
            $hasil[1]=$pesan->getMessage();
        }

        return $hasil;

    }

    public function UbahDataPetugas($varnik, $varnama, $vartmpt, $vartgl, $vartelp, $varalmt){
       try {
          // Area Kode Ubah Data
          $crud =$this->databasenya;
          $query=$crud->prepare("UPDATE petugas SET nama= :nama, tempat_lahir= :tempat, tanggal_lahir= :tanggal,
                              telp= :telp, alamat= :alamat WHERE nik= :nik");
          $query->bindParam("nama",$varnama);
          $query->bindParam("tempat",$vartmpt);
          $query->bindParam("tanggal",$vartgl);
          $query->bindParam("telp",$vartelp);
          $query->bindParam("alamat",$varalmt);
          $query->bindParam("nik",$varnik);
          $query->execute();
          $hasil[0]=true;
          $hasil[1]="Data berhasil diubah";
       } catch (PDOException $pesan) {
        $hasil[0]=false;
        $hasil[1]=$pesan->getMessage();
       }
       return $hasil;
    }
    
    public function SimpanDataPetugas($varnik, $varnama, $vartmpt, $vartgl, $vartelp, $varalmt)
    {
         try {
            // area kode benar/berhasil dieksekusi
            $crud=$this->databasenya;
            $query=$crud->prepare("SELECT*FROM petugas WHERE nik= :paramNIK");
            $query->bindParam("paramNIK",$varnik);
            $query->execute();
            if ($query->rowCount()>0){
                $hasil[0]=true;
                $hasil[1]="NIK Sudah Terdaftar"; 
            }else{
                $query=$crud->prepare("INSERT INTO petugas VALUES(:paramNIK, :paramNAMA, :paramTEMPAT, :paramTANGGAL, :paramTELP, :paramALAMAT)");
                $query->bindParam("paramNIK",$varnik);
                $query->bindParam("paramNAMA",$varnama);
                $query->bindParam("paramTEMPAT",$vartmpt);
                $query->bindParam("paramTANGGAL",$vartgl);
                $query->bindParam("paramTELP",$vartelp);
                $query->bindParam("paramALAMAT",$varalmt);
                $query->execute();
                $hasil[0]=true;
                $hasil[1]="Data Berhasil Disimpan";
            }
           
         } catch (PDOException $err) {
            //area kode gagal atau error dieksekusi
            $hasil[0]=false;
            $hasil[1]=$err->getMessage();
         }
         return $hasil;
         
    }


    public function CariDataPetugas($varnik){

        try {
            $crud=$this->databasenya;
            $query=$crud->prepare("SELECT*FROM petugas WHERE nik= :paramNIK");
            $query->bindParam("paramNIK",$varnik);
            $query->execute();
            $hasil[0]=true;
            $hasil[1]=$query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            $hasil[0]=false;
            $hasil[1]=$err->getMessage();
        }

        return $hasil;

    }

    public function DataPetugas(){

        try {
            $crud=$this->databasenya;
            $query=$crud->prepare("SELECT*FROM petugas");
            $query->execute();
            $hasil[0]=true;
            $hasil[1]=$query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            $hasil[0]=false;
            $hasil[1]=$err->getMessage();
        }

        return $hasil;

    }

    public function LaporanDataPetugas(){

        try {
            $crud=$this->databasenya;
            $query=$crud->prepare("SELECT*FROM petugas");
            $query->execute();
            $hasil[0]=true;
            $hasil[1]=$query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {

            $hasil[0]=false;
            $hasil[1]=$err->getMessage();
        }

        return $hasil;

    }

}



?>