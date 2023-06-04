document.getElementById("btn-toggle").addEventListener("click", () => {

    // Ketika tombol id=btn_toggle kita akan menambah/mengjilakan class active-sidebar
    document.getElementById("sidebar").classList.toggle("active-sidebar");

    // Ketika tombol id=> diklik akan menambah/menjinglakan class active main-content
    document.getElementById("main-content").classList.toggle("active-main-content");

    
});

$(document).ready(function(){
    $('#btnModalPetugas').click(function() {
        $('#petugasModal').modal('show');
        $('#titlePetugasModal').text('Tambah Data');
        $('#btnPetugas').text('Simpan');
    
    });


});  
        
                                
  
