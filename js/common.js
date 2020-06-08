var time = 0;
var Width = 0;
var toggleFlg = false;

window.onload = function() {
	imgList();
	sessionStorage.clear();
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
		imgStr += "<tr><td><img width='100%'  src='./asset/img/" + i
				+ "/1.jpg' ></td><td><img width='100%'  src='./asset/img/" + i
				+ "/2.jpg' ></td></tr>";
		imgStr += "<tr><td style='text-align:left;' colspan='2'>" + i
				+ "A:<input type='radio' name='imgWeek_" + i
				+ "' value='0'>0<input type='radio' name='imgWeek_" + i
				+ "' value='1'>1<input type='radio' name='imgWeek_" + i
				+ "' value='2'>2<input type='radio' name='imgWeek_" + i
				+ "' value='3'>3<input type='radio' name='imgWeek_" + i
				+ "' value='4'>4<input type='radio' name='imgWeek_" + i
				+ "' value='5'>5<input type='radio' name='imgWeek_" + i
				+ "' value='6'>6<input type='radio' name='imgWeek_" + i
				+ "' value='7'>7<input type='radio' name='imgWeek_" + i
				+ "' value='8'>8<input type='radio' name='imgWeek_" + i
				+ "' value='9'>9</td></tr>";
		imgStr += "<tr><td>手术前</td><td>手术后一个月</td></tr>";
		imgStr += "<tr><td><img width='100%'  src='./asset/img/" + i
				+ "/1.jpg' ></td><td><img width='100%'  src='./asset/img/" + i
				+ "/3.jpg' ></td></tr>";
		imgStr += "<tr id='img" + i
				+ "'><td style='text-align:left;' colspan='2'>" + i
				+ "B:<input type='radio' name='imgMonth_" + i
				+ "' value='0'>0<input type='radio' name='imgMonth_" + i
				+ "' value='1'>1<input type='radio' name='imgMonth_" + i
				+ "' value='2'>2<input type='radio' name='imgMonth_" + i
				+ "' value='3'>3<input type='radio' name='imgMonth_" + i
				+ "' value='4'>4<input type='radio' name='imgMonth_" + i
				+ "' value='5'>5<input type='radio' name='imgMonth_" + i
				+ "' value='6'>6<input type='radio' name='imgMonth_" + i
				+ "' value='7'>7<input type='radio' name='imgMonth_" + i
				+ "' value='8'>8<input type='radio' name='imgMonth_" + i
				+ "' value='9'>9</td></tr>";
		$(idStr).after(imgStr);
	}
}

function Cal(square) {
	if (sessionStorage.getItem("cal") != square) {
		sessionStorage.setItem("cal", square);
		time = 0;
		toggleFlg = 1;
	}

	if(time>=15){
		toggleFlg = 0;
	}
	if (time<=-15){
		toggleFlg = 1;
	}
	switch (toggleFlg) {
	case 1:
		time = time + 1;
		break;
	case 0:
		time = time - 1;
		break;
	default:
		break;
	}
	Width = 60 + time;
	switch (square) {
	case 1:

		$("#heng").hide();
		$("#hengDiv").hide();
		document.getElementById("heng").style.width = Width + "px";
		setTimeout(function (){
			
			$("#heng").show();
			$("#hengDiv").show();
		}, 500);
		break;
	case 2:
		$("#shu").hide();
		$("#shuDiv").hide();
		document.getElementById("shu").style.height = Width + "px";
		setTimeout(function (){
			 
			$("#shu").show();
			$("#shuDiv").show();
		}, 500);
		break;
	case 3:
		$("#fang").hide();
		$("#fangDiv").hide();
		document.getElementById("fang").style.width = Width + "px";
		document.getElementById("fang").style.height = Width + "px";
		setTimeout(function (){
			 
			$("#fang").show();
			$("#fangDiv").show();
		}, 500);
		break;
	case 4:
		$("#yuan").hide();
		$("#yuanDiv").hide();
		document.getElementById("yuan").style.width = Width + "px";
		document.getElementById("yuan").style.height = Width + "px";
		setTimeout(function (){
			 
			$("#yuan").show();
			$("#yuanDiv").show();
		}, 500);
		break;
	default:
		break;
	}
}

function CalToggle(square) {

	if(time>=15){
		toggleFlg = 1;
	}
	if (time<=-15){
		toggleFlg = 0;
	}
	switch (toggleFlg) {
	case 1:
		time = time - 1;
		break;
	case 0:
		time = time + 1;
		break;
	default:
		break;
	}
	Width = 60 + time;
	switch (square) {
	case 1:

		$("#heng").hide();
		$("#hengDiv").hide();
		document.getElementById("heng").style.width = Width + "px";
		setTimeout(function (){
			
			$("#heng").show();
			$("#hengDiv").show();
		}, 500);
		break;
	case 2:
		$("#shu").hide();
		$("#shuDiv").hide();
		document.getElementById("shu").style.height = Width + "px";
		setTimeout(function (){
			 
			$("#shu").show();
			$("#shuDiv").show();
		}, 500);
		break;
	case 3:
		$("#fang").hide();
		$("#fangDiv").hide();
		document.getElementById("fang").style.width = Width + "px";
		document.getElementById("fang").style.height = Width + "px";
		setTimeout(function (){
			 
			$("#fang").show();
			$("#fangDiv").show();
		}, 500);
		break;
	case 4:
		$("#yuan").hide();
		$("#yuanDiv").hide();
		document.getElementById("yuan").style.width = Width + "px";
		document.getElementById("yuan").style.height = Width + "px";
		setTimeout(function (){
			 
			$("#yuan").show();
			$("#yuanDiv").show();
		}, 500);
		break;
	default:
		break;
	}
}

function change2big(square){
	var Width = 60 + time;
	switch (square) {
	case 1:
		document.getElementById("hengB").value = Width;
		break;
	case 2:
		document.getElementById("shuB").value = Width;
		break;
	case 3:
		document.getElementById("fangB").value = Width;
		break;
	case 4:
		document.getElementById("yuanB").value = Width;
		break;
	default:
		break;
	}
}
function change2little(square){
	var Width = 60 + time;
	switch (square) {
	case 1:
		document.getElementById("hengL").value = Width;
		break;
	case 2:
		document.getElementById("shuL").value = Width;
		break;
	case 3:
		document.getElementById("fangL").value = Width;
		break;
	case 4:
		document.getElementById("yuanL").value = Width;
		break;
	default:
		break;
	}
}
