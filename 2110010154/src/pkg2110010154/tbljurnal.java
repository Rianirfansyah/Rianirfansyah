/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package pkg2110010154;

/**
 *
 * @author Asus
 */
public class tbljurnal {
   private int id_jurnal;
   private String notrans;
   private String no_ref;
   private String nama;
   private String debit;
   private String kredit;
   private String Fk_jurnal_trans;
   private String IXFK_jurnal_trans;
   private int PK_jurnal;
   
   public int getId_jurnal() {
        return id_jurnal;
    }

    public void setId_jurnal(int id_jurnal) {
        this.id_jurnal = id_jurnal;
    }

    public String getNotrans() {
        return notrans;
    }

    public void setNotrans(String notrans) {
        this.notrans = notrans;
    }

    public String getNo_ref() {
        return no_ref;
    }

    public void setNo_ref(String no_ref) {
        this.no_ref = no_ref;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getDebit() {
        return debit;
    }

    public void setDebit(String debit) {
        this.debit = debit;
    }

    public String getKredit() {
        return kredit;
    }

    public void setKredit(String kredit) {
        this.kredit = kredit;
    }

    public String getFk_jurnal_trans() {
        return Fk_jurnal_trans;
    }

    public void setFk_jurnal_trans(String Fk_jurnal_trans) {
        this.Fk_jurnal_trans = Fk_jurnal_trans;
    }

    public String getIXFK_jurnal_trans() {
        return IXFK_jurnal_trans;
    }

    public void setIXFK_jurnal_trans(String IXFK_jurnal_trans) {
        this.IXFK_jurnal_trans = IXFK_jurnal_trans;
    }

    public int getPK_jurnal() {
        return PK_jurnal;
    }

    public void setPK_jurnal(int PK_jurnal) {
        this.PK_jurnal = PK_jurnal;
    }
}
           
