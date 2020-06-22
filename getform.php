<?php
header('Content-type: application/json;charset=utf-8');
require ('db.php');
require ('UserInfo.php');
error_reporting(E_ALL ^ E_NOTICE);
try {
    $name = $_POST['name'];
    $selectData = selectUserInfoForAjax($name);
    if ($selectData != null) {
        $userInfo = new UserInfo();
        // 输出数据
        $row = mysqli_fetch_assoc($selectData);
        $userInfo->name = $row["name"];
        $userInfo->baseInfo = $row["baseInfo"];
        $userInfo->table1 = $row["table1"];
        $userInfo->table2 = $row["table2"];
        $userInfo->table3 = $row["table3"];
        $userInfo->table4 = $row["table4"];
        $userInfo->table5 = $row["table5"];
        $userInfo->hengB = $row["hengB"];
        $userInfo->hengL = $row["hengL"];
        $userInfo->shuB = $row["shuB"];
        $userInfo->shuL = $row["shuL"];
        $userInfo->fangB = $row["fangB"];
        $userInfo->fangL = $row["fangL"];
        $userInfo->yuanB = $row["yuanB"];
        $userInfo->yuanL = $row["yuanL"];
        exit(json_encode($userInfo));
    } else {
        exit(null);
    }
} catch (Exception $e) {
    echo ($e->getMessage());
}