<?php
header("Content-type: text/html;charset=utf-8");
require("db.php");
error_reporting(E_ALL ^ E_NOTICE);
try {
    $name = $_POST["name"];
    $baseInfo = $_POST["age"];
    $baseInfo .= "|" . $_POST["sex"];
    $baseInfo .= "|" . $_POST["career"];
    $baseInfo .= "|" . $_POST["zhengrongNum"];
    $baseInfo .= "|" . $_POST["edu"];
    $baseInfo .= "|" . $_POST["income"];
    $baseInfo .= "|" . $_POST["support"];
    $baseInfo .= "|" . $_POST["beautyInfo"];
    $baseInfo .= "|" . $_POST["expect"];
    $baseInfo .= "|" . $_POST["zhengrongReason"];
    // $table1----------------------------------------------------
    $table1 = $_POST["two1"];
    $table1 .= "|" . $_POST["two2"];
    $table1 .= "|" . $_POST["two3"];
    $table1 .= "|" . $_POST["two4"];
    $table1 .= "|" . $_POST["two5"];
    $table1 .= "|" . $_POST["two6"];
    $table1 .= "|" . $_POST["two7"];
    $table1 .= "|" . $_POST["two8"];
    $table1 .= "|" . $_POST["two9"];
    $table1 .= "|" . $_POST["two10"];
    $table1 .= "|" . $_POST["two11"];
    $table1 .= "|" . $_POST["two12"];
    $table1 .= "|" . $_POST["two13"];
    $table1 .= "|" . $_POST["two14"];
    $table1 .= "|" . $_POST["two15"];
    $table1 .= "|" . $_POST["two16"];
    $table1 .= "|" . $_POST["two17"];
    $table1 .= "|" . $_POST["two18"];
    $table1 .= "|" . $_POST["two19"];
    $table1 .= "|" . $_POST["two20"];
    $table1 .= "|" . $_POST["two21"];
    $table1 .= "|" . $_POST["two22"];
    $table1 .= "|" . $_POST["two23"];
    $table1 .= "|" . $_POST["two24"];
    $table1 .= "|" . $_POST["two25"];
    $table1 .= "|" . $_POST["two26"];
    $table1 .= "|" . $_POST["two27"];
    $table1 .= "|" . $_POST["two28"];
    $table1 .= "|" . $_POST["two29"];
    $table1 .= "|" . $_POST["two30"];
    $table1 .= "|" . $_POST["two31"];
    $table1 .= "|" . $_POST["two32"];
    $table1 .= "|" . $_POST["two33"];
    $table1 .= "|" . $_POST["two34"];
    $table1 .= "|" . $_POST["two35"];
    $table1 .= "|" . $_POST["two36"];
    $table1 .= "|" . $_POST["two37"];
    $table1 .= "|" . $_POST["two38"];
    $table1 .= "|" . $_POST["two39"];
    $table1 .= "|" . $_POST["two40"];
    $table1 .= "|" . $_POST["two41"];
    $table1 .= "|" . $_POST["two42"];
    $table1 .= "|" . $_POST["two43"];
    $table1 .= "|" . $_POST["two44"];
    $table1 .= "|" . $_POST["two45"];
    $table1 .= "|" . $_POST["two46"];
    $table1 .= "|" . $_POST["two47"];
    $table1 .= "|" . $_POST["two48"];
    $table1 .= "|" . $_POST["two49"];
    $table1 .= "|" . $_POST["two50"];
    $table1 .= "|" . $_POST["two51"];
    $table1 .= "|" . $_POST["two52"];
    $table1 .= "|" . $_POST["two53"];
    $table1 .= "|" . $_POST["two54"];
    $table1 .= "|" . $_POST["two55"];
    $table1 .= "|" . $_POST["two56"];
    $table1 .= "|" . $_POST["two57"];
    $table1 .= "|" . $_POST["two58"];
    $table1 .= "|" . $_POST["two59"];
    $table1 .= "|" . $_POST["two60"];
    $table1 .= "|" . $_POST["two61"];
    $table1 .= "|" . $_POST["two62"];
    $table1 .= "|" . $_POST["two63"];
    $table1 .= "|" . $_POST["two64"];
    $table1 .= "|" . $_POST["two65"];
    $table1 .= "|" . $_POST["two66"];
    $table1 .= "|" . $_POST["two67"];
    $table1 .= "|" . $_POST["two68"];
    $table1 .= "|" . $_POST["two69"];
    $table1 .= "|" . $_POST["two70"];
    $table1 .= "|" . $_POST["two71"];
    $table1 .= "|" . $_POST["two72"];
    $table1 .= "|" . $_POST["two73"];
    $table1 .= "|" . $_POST["two74"];
    $table1 .= "|" . $_POST["two75"];
    $table1 .= "|" . $_POST["two76"];
    $table1 .= "|" . $_POST["two77"];
    $table1 .= "|" . $_POST["two78"];
    $table1 .= "|" . $_POST["two79"];
    $table1 .= "|" . $_POST["two80"];
    $table1 .= "|" . $_POST["two81"];
    $table1 .= "|" . $_POST["two82"];
    $table1 .= "|" . $_POST["two83"];
    $table1 .= "|" . $_POST["two84"];
    $table1 .= "|" . $_POST["two85"];
    $table1 .= "|" . $_POST["two86"];
    $table1 .= "|" . $_POST["two87"];
    $table1 .= "|" . $_POST["two88"];
    // $table2----------------------------------------------------
    $table2 = $_POST["three1"];
    $table2 .= "|" . $_POST["three2"];
    $table2 .= "|" . $_POST["three3"];
    $table2 .= "|" . $_POST["three4"];
    $table2 .= "|" . $_POST["three5"];
    $table2 .= "|" . $_POST["three6"];
    $table2 .= "|" . $_POST["three7"];
    $table2 .= "|" . $_POST["three8"];
    $table2 .= "|" . $_POST["three9"];
    $table2 .= "|" . $_POST["three10"];
    $table2 .= "|" . $_POST["three11"];
    $table2 .= "|" . $_POST["three12"];
    $table2 .= "|" . $_POST["three13"];
    $table2 .= "|" . $_POST["three14"];
    $table2 .= "|" . $_POST["three15"];
    $table2 .= "|" . $_POST["three16"];
    $table2 .= "|" . $_POST["three17"];
    $table2 .= "|" . $_POST["three18"];
    $table2 .= "|" . $_POST["three19"];
    $table2 .= "|" . $_POST["three20"];
    $table2 .= "|" . $_POST["three21"];
    $table2 .= "|" . $_POST["three22"];
    $table2 .= "|" . $_POST["three23"];
    $table2 .= "|" . $_POST["three24"];
    $table2 .= "|" . $_POST["three25"];
    $table2 .= "|" . $_POST["three26"];
    $table2 .= "|" . $_POST["three27"];
    $table2 .= "|" . $_POST["three28"];
    $table2 .= "|" . $_POST["three29"];
    $table2 .= "|" . $_POST["three30"];
    $table2 .= "|" . $_POST["three31"];
    $table2 .= "|" . $_POST["three32"];
    $table2 .= "|" . $_POST["three33"];
    $table2 .= "|" . $_POST["three34"];
    $table2 .= "|" . $_POST["three35"];
    $table2 .= "|" . $_POST["three36"];
    $table2 .= "|" . $_POST["three37"];
    $table2 .= "|" . $_POST["three38"];
    $table2 .= "|" . $_POST["three39"];
    $table2 .= "|" . $_POST["three40"];
    $table2 .= "|" . $_POST["three41"];
    $table2 .= "|" . $_POST["three42"];
    $table2 .= "|" . $_POST["three43"];
    $table2 .= "|" . $_POST["three44"];
    $table2 .= "|" . $_POST["three45"];
    $table2 .= "|" . $_POST["three46"];
    $table2 .= "|" . $_POST["three47"];
    $table2 .= "|" . $_POST["three48"];
    $table2 .= "|" . $_POST["three49"];
    $table2 .= "|" . $_POST["three50"];
    $table2 .= "|" . $_POST["three51"];
    $table2 .= "|" . $_POST["three52"];
    $table2 .= "|" . $_POST["three53"];
    $table2 .= "|" . $_POST["three54"];
    $table2 .= "|" . $_POST["three55"];
    $table2 .= "|" . $_POST["three56"];
    $table2 .= "|" . $_POST["three57"];
    $table2 .= "|" . $_POST["three58"];
    $table2 .= "|" . $_POST["three59"];
    $table2 .= "|" . $_POST["three60"];
    $table2 .= "|" . $_POST["three61"];
    $table2 .= "|" . $_POST["three62"];
    $table2 .= "|" . $_POST["three63"];
    $table2 .= "|" . $_POST["three64"];
    $table2 .= "|" . $_POST["three65"];
    $table2 .= "|" . $_POST["three66"];
    $table2 .= "|" . $_POST["three67"];
    $table2 .= "|" . $_POST["three68"];
    $table2 .= "|" . $_POST["three69"];
    $table2 .= "|" . $_POST["three70"];
    $table2 .= "|" . $_POST["three71"];
    $table2 .= "|" . $_POST["three72"];
    $table2 .= "|" . $_POST["three73"];
    $table2 .= "|" . $_POST["three74"];
    $table2 .= "|" . $_POST["three75"];
    $table2 .= "|" . $_POST["three76"];
    $table2 .= "|" . $_POST["three77"];
    $table2 .= "|" . $_POST["three78"];
    $table2 .= "|" . $_POST["three79"];
    $table2 .= "|" . $_POST["three80"];
    $table2 .= "|" . $_POST["three81"];
    $table2 .= "|" . $_POST["three82"];
    $table2 .= "|" . $_POST["three83"];
    $table2 .= "|" . $_POST["three84"];
    $table2 .= "|" . $_POST["three85"];
    $table2 .= "|" . $_POST["three86"];
    $table2 .= "|" . $_POST["three87"];
    $table2 .= "|" . $_POST["three88"];
    $table2 .= "|" . $_POST["three89"];
    $table2 .= "|" . $_POST["three90"];
    // $table3----------------------------------------------------
    $table3 = $_POST["four1"];
    $table3 .= "|" . $_POST["four2"];
    $table3 .= "|" . $_POST["four3"];
    $table3 .= "|" . $_POST["four4"];
    $table3 .= "|" . $_POST["four5"];
    $table3 .= "|" . $_POST["four6"];
    $table3 .= "|" . $_POST["four7"];
    $table3 .= "|" . $_POST["four8"];
    $table3 .= "|" . $_POST["four9"];
    $table3 .= "|" . $_POST["four10"];
    $table3 .= "|" . $_POST["four11"];
    $table3 .= "|" . $_POST["four12"];
    $table3 .= "|" . $_POST["four13"];
    $table3 .= "|" . $_POST["four14"];
    $table3 .= "|" . $_POST["four15"];
    $table3 .= "|" . $_POST["four16"];
    $table3 .= "|" . $_POST["four17"];
    $table3 .= "|" . $_POST["four18"];
    $table3 .= "|" . $_POST["four19"];
    $table3 .= "|" . $_POST["four20"];

    $imgWeek = "imgWeek_1";
    $imgMonth = "imgMonth_1";
    $table4 = $_POST[$imgWeek];
    $table5 = $_POST[$imgMonth];
    for ($i = 2; $i <= 41; $i++) {
        $imgWeek = "imgWeek_" . $i;
        $imgMonth = "imgMonth_" . $i;
        $table4 .= "|" . $_POST[$imgWeek];
        $table5 .= "|" . $_POST[$imgMonth];
    }

    $hengB = $_POST["hengB"];
    $hengL = $_POST["hengL"];
    $shuB = $_POST["shuB"];
    $shuL = $_POST["shuL"];
    $fangB = $_POST["fangB"];
    $fangL = $_POST["fangL"];
    $yuanB = $_POST["yuanB"];
    $yuanL = $_POST["yuanL"];

    $selectFlg = selectUserInfo($name);
    if ($selectFlg) {
        updateUserInfo($name, $baseInfo, $table1, $table2, $table3, $table4, $table5, $hengB, $hengL, $shuB, $shuL, $fangB, $fangL, $yuanB, $yuanL);
    } else {
        insertUserInfo($name, $baseInfo, $table1, $table2, $table3, $table4, $table5, $hengB, $hengL, $shuB, $shuL, $fangB, $fangL, $yuanB, $yuanL);
    }
    echo ("保存成功！");
    echo "<script>alert('保存成功！');history.go(-1);</script>";
} catch (Exception $e) {
    echo ($e->getMessage());
}
