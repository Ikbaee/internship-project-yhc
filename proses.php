<?php
include 'config.php';

if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "add"){
    
        $pj_name = $_POST['pj_name'];
        $client = $_POST['client'];
        $pj_leader = $_POST['pj_leader'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $progress = $_POST['progress'];

$query = "INSERT INTO pj_monitoring VALUES(null,'$pj_name', '$client', '$pj_leader', '$start_date', '$end_date', '$progress')";
$sql = mysqli_query($conn, $query);
if($sql){
    header("location: index.php");
}else{
    echo $query;
}

    }else if($_POST['aksi'] == "edit"){
        $id_pj=$_POST['id_project'];
        $pj_name = $_POST['pj_name'];
        $client = $_POST['client'];
        $pj_leader = $_POST['pj_leader'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $progress = $_POST['progress'];

$query ="UPDATE `pj_monitoring` SET `pj_name` = '$pj_name', `client` = '$client', `pj_leader` = '$pj_leader', `start_date` = '$start_date', `end_date` = '$end_date', `progress` = '$progress' WHERE `pj_monitoring`.`id_project` = '$id_pj';";
$sql = mysqli_query($conn, $query);
header("location: index.php");
    }
}
if(isset($_GET['hapus'])){
    $id_pj = $_GET['hapus'];
    $query = "DELETE FROM `pj_monitoring` WHERE `id_project` = '$id_pj';";
    $sql = mysqli_query($conn, $query);
    if($sql){
        header("location: index.php");
    }else{
        echo $query;

}
}

?> 