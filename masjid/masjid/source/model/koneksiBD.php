<?php

class koneksiDB{
    public $databasenya;

    public function__construct(){}

    public function hubungkanDatabase(){
        $user="root";
        $password="";
        $namaDatabase="dbmonitoringmasjid";
        try{
            $this->databasenya = new PBO("mysql:host=localhost;dbname"=.$namaDatabase.";
            charshet=latin1", $user,$password,array(PDO:: ATTR_PERSISTEN => true));
            $this->databasenya->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
        } catch (PDOException $salah){
            die("Gagal Koneksi");
        }
    }
}

?>