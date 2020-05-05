var time = 0;
var Width = 0;
var toggleFlg = false;
var interval1 = '';
var interval2 = '';
var interval3 = '';
var interval4 = '';
window.onload = function() {
    imgList();
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

function Cal(square) {
    switch (time) {
        case 0:
            time = time + 3;
            toggleFlg = true;
            break;
        case 60:
            time = time - 3;
            toggleFlg = false;
            break;
        default:
            if (toggleFlg) {
                time = time + 3;
            } else {
                time = time - 3;
            }
            break;
    }
    Width = 60 + time;
    switch (square) {
        case 1:
            document.getElementById("heng").style.width = Width + "px";
            document.getElementById("heng").value = Width;
            break;
        case 2:
            document.getElementById("shu").style.height = Width + "px";
            document.getElementById("shu").value = Width;
            break;
        case 3:
            document.getElementById("fang").style.width = Width + "px";
            document.getElementById("fang").style.height = Width + "px";
            document.getElementById("fang").value = Width;
            break;
        case 4:
            document.getElementById("yuan").style.width = Width + "px";
            document.getElementById("yuan").style.height = Width + "px";
            document.getElementById("yuan").value = Width;
            break;
        default:
            break;
    }
}


function squareClick(square) {
    time = 0;
    switch (square) {
        case 1:
            interval1 = setInterval("Cal(1)", 1000);
            break;
        case 2:
            interval2 = setInterval("Cal(2)", 1000);
            break;
        case 3:
            interval3 = setInterval("Cal(3)", 1000);
            break;
        case 4:
            interval4 = setInterval("Cal(4)", 1000);
            break;
        default:
            break;
    }

}

function squareCancle(square) {
    switch (square) {
        case 1:
            clearInterval(interval1);
            break;
        case 2:
            clearInterval(interval2);
            break;
        case 3:
            clearInterval(interval3);
            break;
        case 4:
            clearInterval(interval4);
            break;
        default:
            break;
    }
}