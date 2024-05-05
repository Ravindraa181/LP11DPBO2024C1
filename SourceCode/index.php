<?php

/******************************************
Asisten Pemrogaman 13
 ******************************************/

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");


$tp = new TampilPasien();

if(isset($_POST['add']))
{
    $tp->processAdd($_POST);
}
else if(isset($_POST['update']))
{
    $tp->processUpdate($_POST);
}
else if(isset($_GET['add'])){
    $tp->addForm();
}
else if(isset($_GET['edit'])){
    $tp->updateForm($_GET['edit']);
}
else if(isset($_GET['delete'])){
    $tp->processDelete($_GET['delete']);
}
else{
    $tp->tampil();
}