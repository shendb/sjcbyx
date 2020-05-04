var time = 0;
var Width = 0;
var toggleFlg = false;
window.onload = function() {
    imgList();
    window.setInterval("hengCal()", 1000);
}

function checkInput() {

}

function imgList() {
    var imgStr = "";
    var idStr = "";

    for (var i = 1; i <= 41; i++) {
        imgStr = "";
        idStr = "";
        switch (i) {
            case 1:
                imgStr += "<tr><td style='text-align: right;' colspan='2'><input type='submit' value='保存'></td></tr>";
                idStr = "#imgStartBefore";
                break;
            case 2:
                idStr = "#img1";
                break;
            default:
                idStr = "#img" + (i - 1);
                break;
        }
        imgStr += "<tr style='border-top:1px solid'><td>手术前</td><td>手术后一周</td></tr>";
        imgStr += "<tr><td><img width='100%'  src='./asset/img/" + i + "/1.jpg' ></td><td><img width='100%'  src='./asset/img/" + i + "/2.jpg' ></td></tr>";
        imgStr += "<tr><td style='text-align:left;' colspan='2'>" + i + "A:<input type='radio' name='imgWeek_" + i + "' value='1'>1<input type='radio' name='imgWeek_" + i + "' value='2'>2<input type='radio' name='imgWeek_" + i + "' value='3'>3<input type='radio' name='imgWeek_" + i + "' value='4'>4<input type='radio' name='imgWeek_" + i + "' value='5'>5<input type='radio' name='imgWeek_" + i + "' value='6'>6<input type='radio' name='imgWeek_" + i + "' value='7'>7<input type='radio' name='imgWeek_" + i + "' value='8'>8<input type='radio' name='imgWeek_" + i + "' value='9'>9<input type='radio' name='imgWeek_" + i + "' value='10'>10</td></tr>";
        imgStr += "<tr><td>手术前</td><td>手术后一个月</td></tr>";
        imgStr += "<tr><td><img width='100%'  src='./asset/img/" + i + "/1.jpg' ></td><td><img width='100%'  src='./asset/img/" + i + "/3.jpg' ></td></tr>";
        imgStr += "<tr id='img" + i + "'><td style='text-align:left;' colspan='2'>" + i + "B:<input type='radio' name='imgMonth_" + i + "' value='1'>1<input type='radio' name='imgMonth_" + i + "' value='2'>2<input type='radio' name='imgMonth_" + i + "' value='3'>3<input type='radio' name='imgMonth_" + i + "' value='4'>4<input type='radio' name='imgMonth_" + i + "' value='5'>5<input type='radio' name='imgMonth_" + i + "' value='6'>6<input type='radio' name='imgMonth_" + i + "' value='7'>7<input type='radio' name='imgMonth_" + i + "' value='8'>8<input type='radio' name='imgMonth_" + i + "' value='9'>9<input type='radio' name='imgMonth_" + i + "' value='10'>10</td></tr>";
        $(idStr).after(imgStr);
    }
}

function hengCal() {
    switch (time) {
        case 0:
            time = time + 2;
            toggleFlg = true;
            break;
        case 20:
            time = time - 2;
            toggleFlg = false;
            break;
        default:
            if (toggleFlg) {
                time = time + 2;
            } else {
                time = time - 2;
            }
            break;
    }
    Width = 40 + time;
    document.getElementById("heng").style.width = Width + "px";
}