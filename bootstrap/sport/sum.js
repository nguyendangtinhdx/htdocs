var day =["Chủ nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy"];
var x =setInterval(hour);
function hour()
{
	var d = new Date();
	document.getElementById('date').innerHTML = day[d.getDay()] + ", Ngày " + d.toLocaleDateString() + "<br>" + d.toLocaleTimeString();
}

function dangnhap()
{
	var x = document.forms["formLogin"];
	var y = "";
	for (var i = 0; i < x.length; i++) 
	{
		y = x.elements[i].value ;
		if (i==0) 
		{
			alert("Tài khoản của bạn là: " + y);
		}
		else if (i==1) 
		{
			alert("Mật khẩu của bạn là: " + y);
		}
		else if (i==2) 
		{
			alert("Đăng nhập thành công");
		}
		else
		{
			alert("Đăng nhập thất bại");
		}
	}
}

function dangky()
{
	var x = document.forms["formSignup"];
	var y;
	for (var i = 0; i < x.length; i++) 
	{
		if (i==0&&i==1&&i==2&&i==3&&i==4&&i==5&&i==6) 
		{
			alert("Đăng ký thành công ");
			break;
		}
		else
		{
			alert("Đăng ký thất bại ");
			break;
		}
	}
}

function giave()
{
	var x = document.forms["datve"];
	var y = "";
	for (var i = 0; i < x.length; i++) 
	{
		if(i==0&&i==1&&i==2)
		{
			alert("Đặt vé thành công");
			break;
		}
		else
		{
			alert("Đặt vé thất bại");
			break;
		}
	}
}

$(function() {
	$(window).scroll(function() // sự kiện lăn chuột
	{
		if ($(this).scrollTop() != 0) {
			$('#bttop').fadeIn();// khai báo 1 biến bttop
		} else {
			$('#bttop').fadeOut();
		}
	});
	$('#bttop').click(function()// bắt sự kiện khi click vào nút
	{ 
		$('body,html').animate({
			scrollTop: 0
		}, 800); // thời gian di chuyển về đầu trang
	});
});

function scroll1()
{
	window.scrollTo(1,0);
}

$(window).scroll(function(){
	$(".thanhtruot").each(function(){
		var pos = $(this).offset().top;
		var winTop = $(window).scrollTop();
		if(pos < winTop + 600)
		{
			$(this).addClass("truot");
		}
	});
});
