<?php
session_start();
if( !isset($_SESSION["NameArr"]))
    $_SESSION["NameArr"] = array();

if( !isset($_SESSION["PriceArr"]))
    $_SESSION["PriceArr"] = array();

if( !isset($_SESSION["IdArr"]))
    $_SESSION["IdArr"] = array();

$id = $_GET["Id"];

switch ($id){
    case "book01":
        $_SESSION["Name"] = "超圖解 Arduino 互動設計入門 第3版";
        $_SESSION["Price"] = "680";
        $_SESSION["Id"] = "book01";
        break;
    case "book02":
        $_SESSION["Name"] = "第一次學 Python 就上手！";
        $_SESSION["Price"] = "480";
        $_SESSION["Id"] = "book02";
        break;
    case "cd01":
        $_SESSION["Name"] = "LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A)";
        $_SESSION["Price"] = "328";
        $_SESSION["Id"] = "cd01";
        break;
    case "cd02":
        $_SESSION["Name"] = "李千娜 / 愛 到站了";
        $_SESSION["Price"] = "459";
        $_SESSION["Id"] = "cd02";
        break;
    default:
        break;
}

header("Location: savecar.php");
?>