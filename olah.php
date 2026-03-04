<?php
class Ambil {
    //method
function cek_data($data){
  if(isset($_GET[$data]) ==  true){
    if($_GET[$data] == null){
      return 0;
    }else{
      return $_GET[$data];
    }
  }else{
    return 0;
  }
}

function tampil_nama($nama){
    //$tthis buat refer method utama didalam class yang sama
    return $this->cek_data($nama);
    
}
function tampil_tgl($tgl){
    return $this->cek_data($tgl);

}
function tampil_hobi($hobi){
    return $this->cek_data($hobi);

}
}

//instansiasi
$a = new Ambil;

?>