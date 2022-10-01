<?php  
header("Access-Control-Allow-Origin: *");
include('biblioteca.php');

if($_POST){
    if(isset($_POST['login']) && isset($_POST['senha'])){
        echo Login($_POST['login'],$_POST['senha'],'json');
    }
}
?>