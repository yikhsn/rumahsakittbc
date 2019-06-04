function main (){

    function start_pilih (){
    // Input BTA harus dimulai dengan value input yang kosong
    document.getElementById("extra_paru_input").value ="";
    document.getElementById("bta_plus_input").value="";
    document.getElementById("bta_minus_input").value="";
    // Sembunyikan Form Kriteria
    document.getElementById("bta_positif").style.display = "none";
    document.getElementById("bta_negatif").style.display = "none";
    document.getElementById("ekstra_paru").style.display = "none";
}    

function bta_plus(){
    //Kosongkan input
    start_pilih();
    //input "BTA (+) untuk ke input"
    document.getElementById("bta_plus_input").value = "BTA (+)";
    document.getElementById("bta_minus_input").value = "";
    document.getElementById("extra_paru_input").value = "";
    //Tampilkan form kriteria BTA (+)
    document.getElementById("bta_positif").style.display = "";
    document.getElementById("bta_negatif").style.display = "none";
    document.getElementById("ekstra_paru").style.display = "none";

}

function bta_minus(){
    //Kosongkan input
    start_pilih();
    document.getElementById("bta_plus_input").value = "";
    document.getElementById("bta_minus_input").value = "BTA (-)";
    document.getElementById("extra_paru_input").value = "";
    //Tampilkan form kriteria BTA (-)
    document.getElementById("bta_positif").style.display = "none";
    document.getElementById("bta_negatif").style.display = "";
    document.getElementById("ekstra_paru").style.display = "none";
}

function extra_paru(){
    start_pilih();
    document.getElementById("bta_plus_input").value = "";
    document.getElementById("bta_minus_input").value = "";
    // 
    document.getElementById("extra_paru_input").value = "Ekstra Paru";
    document.getElementById("bta_positif").style.display = "none";
    document.getElementById("bta_negatif").style.display = "none";
    document.getElementById("ekstra_paru").style.display = "";
}




}
