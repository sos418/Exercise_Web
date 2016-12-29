
<?php session_start();

$_SESSION["account"]=$_GET["GetAccount"];
$_SESSION["passward"]=$_GET["GetPassward"];

if(isset($_SESSION["account"]) && $_SESSION["passward"] && $_SESSION["account"]=="abc" && $_SESSION["passward"] == "def")
{
    echo "登入成功";

}else{
    session_destroy();//清除
    echo "輸入錯誤，三秒後自動轉回輸入頁面";
    header("refresh:3; url=yzu1021803.html");
    exit();
}


?>