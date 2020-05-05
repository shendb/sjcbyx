<?php
error_reporting(E_ALL ^ E_NOTICE);
function creatCon()
{
    $conn = mysqli_connect("localhost", "sjcbyx", "4rfv3edc", "sjcbyx", 3306);

    #判断是否连接成功
    if (!$conn) {
        echo ("数据库连接失败！" . mysqli_connect_error());
    }

    //选择数据库
    mysqli_select_db($conn, "sjcbyx");
    return $conn;
}

function selectUserInfo($name, $age, $sex)
{
    $conn = creatCon();
    $sql = "select * from userinfo where name=" . $name . " and age=" . $age . " and sex=" . $sex;
    $result = mysqli_query($conn, $sql);

    if (is_resource($result)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}

function updateUserInfo($name, $age, $sex, $userinfo)
{
    $conn = creatCon();
    $sql = "update userinfo set userinfo='" . $userinfo . "' where name=" . $name . " and age=" . $age . " and sex=" . $sex;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

function insertUserInfo($name, $age, $sex, $userinfo)
{
    $conn = creatCon();
    $sql = "insert into userinfo (name,age,sex,userinfo) values(" . $name . "," . $age . "," . $sex . "," . $userinfo . "')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
