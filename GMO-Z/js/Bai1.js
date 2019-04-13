// hàm validate email
function validateEmail() {
	var email = document.getElementById("email").value;
	var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (filter.test(email)) {
		document.getElementById("erremail").innerHTML="";
        localStorage.setItem('email', email);
        return true;
    }
    else {
      document.getElementById("erremail").innerHTML="Email không hợp lệ !";
      return false;
  }
}

// hàm validate password
function validatePassword() {
	var password = document.getElementById("password").value;
	var lowerCaseLetters = /[a-z]/g;
	var upperCaseLetters = /[A-Z]/g;
	var numbers = /[0-9]/g;
	if (password != '') {
		document.getElementById("errpassword").innerHTML="";
		return true;
	}
	if (password.match(lowerCaseLetters)) {
		document.getElementById("errpassword").innerHTML="Yếu !";
		return false;
	}
	if (password.match(upperCaseLetters)) {
		document.getElementById("errpassword").innerHTML="Trung bình !";
		return false;
	}
	else {
		document.getElementById("errpassword").innerHTML="Vui lòng nhập mật khẩu !";
		return false;
	}
}

// hàm validate repassword
function validateRePassword() {
	var password = document.getElementById("password").value;
	var repassword = document.getElementById("repassword").value;
	if (password == repassword) {
		if(repassword == ''){
			document.getElementById("errrepassword").innerHTML="Vui lòng nhập xác nhận mật khẩu !";
			return false;
		}else{
			document.getElementById("errrepassword").innerHTML="";
			return true;
		}
	}
	else {
		document.getElementById("errrepassword").innerHTML="Xác nhận mật khẩu không chính xác !";
		return false;
	}
}

// hàm validate birthday
function validateBirthDay() {
	var birthday = document.getElementById("birthday").value;
	var pattern =/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/;
   	//ngày sinh được nhập
   	var comp = birthday.split('-');
   	var d = parseInt(comp[0], 10);
   	var m = parseInt(comp[1], 10);
   	var y = parseInt(comp[2], 10);
   	//ngày hệ thống
   	var d1 = new Date();
   	var year = parseInt(d1.getFullYear());
   	var month = d1.getMonth() + 1;  
   	var day = d1.getDate();

   	if (!pattern.test(birthday)) {
   		document.getElementById("errbirthday").innerHTML="Ngày không đúng định dạng !";
   		return false;
   	}
   	if (d > 31) {
   		document.getElementById("errbirthday").innerHTML="Ngày không đúng định dạng !";
   		return false;
   	}
   	if (m > 12) {
   		document.getElementById("errbirthday").innerHTML="Ngày không đúng định dạng !";
   		return false;
   	}
   	if (y > year) {
   		document.getElementById("errbirthday").innerHTML="Ngày không đúng định dạng !";
   		return false;
   	}
   	if (birthday != '') {
   		document.getElementById("errbirthday").innerHTML="";
        localStorage.setItem('birthday', birthday);
        return true;
    }
    else {
       document.getElementById("errbirthday").innerHTML="Ngày không đúng định dạng !";
       return false;
   }
}

   // hàm validate address
   function validateAddress() {
   	var address = document.getElementById("address").value;
   	if (address.length <= 60) {
   		document.getElementById("erraddress").innerHTML="";
        localStorage.setItem('address', address);
        return true;
    }
    else {
       document.getElementById("erraddress").innerHTML="Địa chỉ phải ít hơn 60 ký tự !";
       return false;
   }
}

   // hàm validate mobile
   function validateMobile() {
   	var flag = false;
   	var mobile = document.getElementById("mobile").value;
   	if (mobile != '') {
   		document.getElementById("errmobile").innerHTML="";
        localStorage.setItem('mobile', mobile);
        flag = true;
    }else {
       document.getElementById("errmobile").innerHTML="Vui lòng nhập số điện thoại !";
       flag = false;
   }
         var phone = mobile.trim(); // ID của trường Số điện thoại
         phone = phone.replace('(+84)', '0');
         phone = phone.replace('+84', '0');
         phone = phone.replace('0084', '0');
         phone = phone.replace(/ /g, '');
         if (phone != '') {
         	var firstNumber = phone.substring(0, 2);
         	if ((firstNumber == '09' || firstNumber == '08' || firstNumber == '07' || firstNumber == '06') && phone.length == 10) {
         		if (phone.match(/^\d{10}/)) {
         			document.getElementById("errmobile").innerHTML="";
                    localStorage.setItem('mobile', mobile);
                    flag = true;
                } else {
                    document.getElementById("errmobile").innerHTML="Số điện thoại không hợp lệ !";
                    flag = false;
                }
         	// } else if (firstNumber == '01' && phone.length == 11) {
         	// 	if (phone.match(/^\d{11}/)) {
         	// 		document.getElementById("errmobile").innerHTML="";
         	// 		flag = true;
         	// 	} else {
         	// 		document.getElementById("errmobile").innerHTML="Số điện thoại không hợp lệ !";
         	// 		flag = false;
         	// 	}
         } else {
             document.getElementById("errmobile").innerHTML="Số điện thoại không hợp lệ !";
             flag = false;
         }
     }   

     return flag;
 }

 //     // hàm validate checkbox
 //     function validateCheckbox() {
 //     	// document.getElementById('btnSubmit').onclick = function()
 //     	// {
	//         // Khai báo tham số
	//         var sports = document.getElementsByName('sports');
	//         var count = 0;
	//         // Lặp qua từng sports để lấy giá trị
	//         for (var i = 0; i < sports.length; i++){
	//         	if (sports[i].checked === true){
	//         		count++;
	//         	}
	//         }
	//         if (count < 2 || count > 4) {
	//         	document.getElementById("errsports").innerHTML = "Sports phải được chọn từ 2 - 4";
	//         	return false;
	//         }
	//         else{
	//         	document.getElementById("errsports").innerHTML = "";
	//         	return true;
	//         }
	//     // };
	// }

    function validateGender() {
        var gender = document.getElementsByName('gender');
        var result2 = "";

        for (var i = 0; i < gender.length; i++){
            if (gender[i].checked === true){
                result2 += gender[i].value;
            }
        }
        if (result2 == 1) {
            localStorage.setItem('gender','Nam');
            return true;
        }
        else {
            localStorage.setItem('gender','Nữ');
            return true;
        }
    }

    function validateSports() {
        var sports = document.getElementsByName('sports');
        var result = "";
        var count = 0;
        // Lặp qua từng sports để lấy giá trị
        for (var i = 0; i < sports.length; i++){
            if (sports[i].checked === true){
                result += ' [' + sports[i].value + ']';
                count++;
            }
        }
        if (count < 2 || count > 4) {
            document.getElementById("errsports").innerHTML = "Sports phải được chọn từ 2 - 4";
            return false;
        }
        else{
            document.getElementById("errsports").innerHTML = "";
            localStorage.setItem('sports',result);
            return true;
        }
    }

	// hàm validate lấy data
	// function getData() {
	// 	var email = document.getElementById("email").value;
	// 	var birthday = document.getElementById("birthday").value;
	// 	var address = document.getElementById("address").value;
	// 	var mobile = document.getElementById("mobile").value;

	// 	if (email != "" && birthday != "" && address != "" && mobile != "") {
	// 		document.getElementById("showEmail").innerHTML = email;
	// 		document.getElementById("showBirthDay").innerHTML = birthday;
	// 		document.getElementById("showAddress").innerHTML = address;
	// 		document.getElementById("showMobile").innerHTML = mobile;

 //            // Xử lý checkbox sports
 //            var sports = document.getElementsByName('sports');
 //            var result = "";
 //                // Lặp qua từng sports để lấy giá trị
 //                for (var i = 0; i < sports.length; i++){
 //                	if (sports[i].checked === true){
 //                		result += ' [' + sports[i].value + ']';
 //                	}
 //                }
 //                document.getElementById("showSports").innerHTML = result;

 //                // Khai báo tham số
 //                var gender = document.getElementsByName('gender');
 //                var result2 = "";

 //                for (var i = 0; i < gender.length; i++){
 //                    if (gender[i].checked === true){
 //                        result2 += gender[i].value;
 //                    }
 //                }
 //                if (result2 == 1) {
 //                    document.getElementById("showGender").innerHTML = "Nam";
 //                    return false;
 //                }
 //                else {
 //                    document.getElementById("showGender").innerHTML = "Nữ";
 //                    return false;
 //                }

 //                return false;
 //            }
 //        }

    // hàm check validate 
    function CheckValidate(){
        validateGender();
        if(!validateEmail() && !validatePassword() && !validateRePassword() && !validateBirthDay() && !validateSports()) {
            return false;
        }
        if(!validateEmail()){
            return false;
        }
        if(!validatePassword()){
            return false;
        }
        if(!validateRePassword()){
         return false;
     }
     if (!validateBirthDay()) {
        return false;
    }
    if (!validateAddress()) {
        return false;
    }
    if (!validateMobile()) {
        return false;
    }
    if (!validateSports()) {
        return false;
    }
    
    return true;
}



