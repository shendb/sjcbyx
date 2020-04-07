window.onload = function() {
    imgList();
}

function checkInput() {

}

function imgList() {
    var imgStr = "";
    var idStr = "";
    for (var i = 1; i <= 12; i++) {
        imgStr = "";
        idStr = "";
        switch (i) {
            case 1:
                idStr = "#imgStartBefore";
                break;
            case 2:
                idStr = "#img1";
                break;
            default:
                idStr = "#img" + (i - 1);
                break;
        }
        imgStr += "<tr><td>手术前</td><td>手术后一周</td></tr>";
        imgStr += "<tr><td><img src='./asset/img/" + i + "/1.jpg' width='100%'></td><td><img src='./asset/img/" + i + "/2.jpg' width='100%'></td></tr>";
        imgStr += "<tr><td style='text-align:left;' colspan='2'>" + i + "A<input type='range' name='imgRange_" + i + "_WEEK' min='1' max='10' defaultValue='5' ></td></tr>";
        imgStr += "<tr><td>手术前</td><td>手术后一个月</td></tr>";
        imgStr += "<tr><td><img src='./asset/img/" + i + "/1.jpg' width='100%'></td><td><img src='./asset/img/" + i + "/3.jpg' width='100%'></td></tr>";
        imgStr += "<tr id='img" + i + "'><td style='text-align:left;' colspan='2'>" + i + "B<input type='range' name='imgRange_" + i + "_MONTH' min='1' max='10' defaultValue='5' ></td></tr>";
        $(idStr).after(imgStr);
    }
}