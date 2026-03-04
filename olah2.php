<?php

class kakulator{
  function cek_data($data){
      if(isset($_GET[$data]) ==  true){
        if($_GET[$data] == null){
          return null;
        }else{
          return $_GET[$data];
        }
      }
        return null;
        }
  function tambah(){
    return $this->cek_data('angka1') + $this->cek_data('angka2');
  }
  function kurang(){
    return $this->cek_data('angka1') - $this->cek_data('angka2');
  }
  function kali(){
    return $this->cek_data('angka1') * $this->cek_data('angka2');
  }
  function bagi(){
    if($this->cek_data('angka2') == 0){
        return "tidak bisa dibagi";
    }else{
    return $this->cek_data('angka1') / $this->cek_data('angka2');
  }
  }
    }
  $hasil = NULL;
  $ObjKal = new kakulator; 

  if($ObjKal->cek_data("dor") == "tambah"){
    $hasil = $ObjKal->tambah();
  }
  if($ObjKal->cek_data("dor") == "kurang"){
    $hasil = $ObjKal->kurang();
  }
  if($ObjKal->cek_data("dor") == "kali"){
    $hasil = $ObjKal->kali();
  }
  if($ObjKal->cek_data("dor") == "bagi"){
    $hasil = $ObjKal->bagi();
  }
  
?>