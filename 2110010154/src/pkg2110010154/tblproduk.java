/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package pkg2110010154;

/**
 *
 * @author Asus
 */
public class tblproduk {
    private int id_produk;
    private String barcode;
    private String st_produk;
    private String nama_produk;
    private int id_kategori;
    private String warna;
    private int stok;
    private String img_produk;
    private int FK_produk_kategori;
    private int IXFK_produk_kategori;
    private int PK_produk;
    
    public int getId_produk() {
        return id_produk;
    }

    public void setId_produk(int id_produk) {
        this.id_produk = id_produk;
    }

    public String getBarcode() {
        return barcode;
    }

    public void setBarcode(String barcode) {
        this.barcode = barcode;
    }

    public String getSt_produk() {
        return st_produk;
    }

    public void setSt_produk(String st_produk) {
        this.st_produk = st_produk;
    }

    public String getNama_produk() {
        return nama_produk;
    }

    public void setNama_produk(String nama_produk) {
        this.nama_produk = nama_produk;
    }

    public int getId_kategori() {
        return id_kategori;
    }

    public void setId_kategori(int id_kategori) {
        this.id_kategori = id_kategori;
    }

    public String getWarna() {
        return warna;
    }

    public void setWarna(String warna) {
        this.warna = warna;
    }

    public int getStok() {
        return stok;
    }

    public void setStok(int stok) {
        this.stok = stok;
    }

    public String getImg_produk() {
        return img_produk;
    }

    public void setImg_produk(String img_produk) {
        this.img_produk = img_produk;
    }

    public int getFK_produk_kategori() {
        return FK_produk_kategori;
    }

    public void setFK_produk_kategori(int FK_produk_kategori) {
        this.FK_produk_kategori = FK_produk_kategori;
    }

    public int getIXFK_produk_kategori() {
        return IXFK_produk_kategori;
    }

    public void setIXFK_produk_kategori(int IXFK_produk_kategori) {
        this.IXFK_produk_kategori = IXFK_produk_kategori;
    }

    public int getPK_produk() {
        return PK_produk;
    }

    public void setPK_produk(int PK_produk) {
        this.PK_produk = PK_produk;
    }
}
    

