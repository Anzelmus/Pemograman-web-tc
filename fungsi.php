<?php

class fungsi{
  function Db(){
    $connect = mysqli_connect(
      "localhost",
      "root",
      "",
      "negara"
    );
    // memastikan bahwa tidak ada error
    // connect_errno itu tanya ke databasenya
    if($connect->connect_errno == 1){
      return $connect->connect_error;
    }else{
      return $connect;
    }
  }
  function tampil($data){
    $query = "SELECT * FROM asia"; //perintah
    mysqli_query($this->Db(), $query); //fungsi db sql
    return $data; //memberikan nilai hasil semuanya
  }
}

// instasiansi

$x = new fungsi;
?>