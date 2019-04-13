var day =["Chủ nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy"];
var x =setInterval(date);
function date()
{
	var d = new Date();
	document.getElementById('date').innerHTML = day[d.getDay()] + ", ngày " + d.toLocaleDateString();

}