<?php
function creatCon(){
    $conn = mysqli_connect("localhost","root","PU5jYmEn34oeD5dn","sjcbyx",3306);

    #判断是否连接成功
    if(!$conn){
    echo ("数据库连接失败！". mysqli_connect_error());
    }

    //选择数据库
    mysqli_select_db($conn,"sjcbyx");
    return $conn;
}


function select($name,$age,$sex,$userinfo){
    $conn = creatCon();
    $sql = "select * from userinfo;"
    mysqli_close($conn);
}
function update($name,$age,$sex,$userinfo){
    $conn = creatCon();
    $sql = "insert into userinfo "
    mysqli_close($conn);
}
function insert($name,$age,$sex,$userinfo){
    $conn = creatCon();
    $sql = "insert into userinfo "
    mysqli_close($conn);
}
?>