<?php
error_reporting(E_ALL ^ E_NOTICE);

function creatCon()
{
    $conn = mysqli_connect("localhost", "root", "4rfv3edc", "sjcbyx", 3306);

    // 判断是否连接成功
    if (! $conn) {
        echo ("数据库连接失败！" . mysqli_connect_error());
    }

    // 选择数据库
    mysqli_select_db($conn, "sjcbyx");
    return $conn;
}

function selectUserInfo($name)
{
    $conn = creatCon();
    $sql = "select * from userinfo where name='" . $name . "'";
    $result = mysqli_query($conn, $sql);
    if (is_resource($result)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}

function updateUserInfo($name, $baseInfo, $table1, $table2, $table3, $table4, $hengB, $hengL, $shuB, $shuL, $fangB, $fangL, $yuanB, $yuanL)
{
    $conn = creatCon();
    $sql = "update userinfo set baseInfo='" . $baseInfo . "'" . ", table1='" . $table1 . "'" . ", table2='" . $table2 . "'" . ", table3='" . $table3 . "'" . ", table4='" . $table4 . "'" . ", hengB='" . $hengB . "'" . ", hengL='" . $hengL . "'" . ", shuB='" . $shuB . "'" . ", shuL='" . $shuL . "'" . ", fangB='" . $fangB . "'" . ", fangL='" . $fangL . "'" . ", yuanB='" . $yuanB . "'" . ", yuanL='" . $yuanL . "'" . " where name='" . $name . "'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

function insertUserInfo($name, $baseInfo, $table1, $table2, $table3, $table4, $hengB, $hengL, $shuB, $shuL, $fangB, $fangL, $yuanB, $yuanL)
{
    $conn = creatCon();
    $sql = "insert into userinfo (name,baseInfo,table1,table2,table3,table4,hengB,hengL,shuB,shuL,fangB,fangL,yuanB,yuanL) values('" . $name . "','" . $baseInfo . "','" . $table1 . "','" . $table2 . "','" . $table3 . "','" . $table4 . "','" . $hengB . "','" . $hengL . "','" . $shuB . "','" . $shuL . "','" . $fangB . "','" . $fangL . "','" . $yuanB . "','" . $yuanL . "')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
