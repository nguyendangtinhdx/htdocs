// select all checkbox
function selectAll(source) {
	checkboxes = document.getElementsByName('checkbox');
	for(var i in checkboxes)
		checkboxes[i].checked = source.checked;
}

// double click change data
window.onload = function() {
	var elements = getElementsByClassName('editInPlace', '*', document);
	var elements2 = getElementsByClassName('editInPlace2', '*', document);
	for(var i = 0; i < elements.length; i++) {
		elements[i].ondblclick = function() {
			this.setAttribute('oldText', this.innerHTML); 
			var textBox = document.createElement('INPUT');
			textBox.setAttribute('type', 'text');
			textBox.setAttribute('onmouseout', 'showMe(this)');
			textBox.setAttribute('class', 'form-control input-sm');
			textBox.value = this.innerHTML;

			textBox.onblur = function() {
				var newValue = this.value;
				this.parentNode.innerHTML = newValue;
			}

			this.innerHTML = '';

			this.appendChild(textBox);
		}
	}(i);
	for(var i = 0; i < elements2.length; i++) {
		elements2[i].ondblclick = function() {
			this.setAttribute('oldText', this.innerHTML); 
			var textBox = document.createElement('INPUT');
			textBox.setAttribute('type', 'number');
			textBox.setAttribute('onmouseout', 'showMe2(this)');
			textBox.setAttribute('class', 'form-control input-sm');
			textBox.value = this.innerHTML;

			textBox.onblur = function() {
				var newValue = this.value;
				this.parentNode.innerHTML = newValue;
			}

			this.innerHTML = '';

			this.appendChild(textBox);
		}
	}(i);
}
function getElementsByClassName(className, tag, elm){
	var testClass = new RegExp("(^|\\s)" + className + "(\\s|$)");
	var tag = tag || "*";
	var elm = elm || document;
	var elements = (tag == "*" && elm.all)? elm.all : elm.getElementsByTagName(tag);
	var returnElements = [];
	var current;
	var length = elements.length;
	for(var i=0; i<length; i++){
		current = elements[i];
		if(testClass.test(current.className)){
			returnElements.push(current);
		}
	}
	return returnElements;
}


function show_image()
{
	var img = document.createElement("img");
	img.src = 'img/loading.gif';
	img.width = '100';
	img.height = '100';
	document.getElementById('showimage').appendChild(img);

	setTimeout(function(){ img.parentNode.removeChild(img); }, 500);
}


function Add(tbClientes){

	var cliente = JSON.stringify({
		Name   : $("#txtName").val(),
		Price     : $("#txtPrice").val()
	});
	tbClientes.push(cliente);
	console.log("tbClientes - " + tbClientes);
	localStorage.setItem("tbClientes", JSON.stringify(tbClientes));
	return true;
}

function Edit(tbClientes,indice){
	tbClientes[indice] = JSON.stringify({
		Name   : $("#txtName").val(),
		Price     : $("#txtPrice").val()
	});
	localStorage.setItem("tbClientes", JSON.stringify(tbClientes));
	operacao = "A";
	return true;
}

function Save(tbClientes,indice){
	var name = sessionStorage.getItem("valueNameChange");
	var price = $("#txtPrice").val();
	if (sessionStorage.getItem("valuePriceChange") != null) {
		price = sessionStorage.getItem("valuePriceChange");
		name = $("#txtName").val();
	}
	if (sessionStorage.getItem("valueNameChange") != null && sessionStorage.getItem("valuePriceChange") != null) {
		name = sessionStorage.getItem("valueNameChange");
		price = sessionStorage.getItem("valuePriceChange");
	}
	tbClientes[indice] = JSON.stringify({
		Name   : name,
		Price     : price
	});
	localStorage.setItem("tbClientes", JSON.stringify(tbClientes));
	sessionStorage.removeItem("valueNameChange");
	sessionStorage.removeItem("valuePriceChange");
	operacao = "A";
	return true;
}

function Delete(tbClientes, indice){
	if (confirm('Bạn có chắc chắn muốn xóa không ?')) {
		tbClientes.splice(indice, 1);
		localStorage.setItem("tbClientes", JSON.stringify(tbClientes));
		show_image();
	}
}

function DeleteAll(tbClientes){
	if (localStorage.getItem("tbClientes") === null) {
		alert("Không có dữ liệu để xóa !");
	}else{
		if (confirm('Bạn có chắc chắn muốn xóa tất cả không ?')) {
			// checkboxes = document.getElementsByName('checkbox');
			if (document.getElementById("selectAll").checked == false) {
				alert("Vui lòng click vào checkbox !");
				document.getElementById("errcheckbox").style.display = "block";
			}else{
				document.getElementById("selectAll").checked = false;
				document.getElementById("errcheckbox").style.display = "none";
				tbClientes.splice(0); // Xóa tất cả phần tử sau vị trí 0
				localStorage.removeItem("tbClientes");
				show_image();
			}
		}
	}
}

function Read(tbClientes){
	$("#tbl").html("");
	$("#tbl").html(
		"<thead>"+
		"   <tr>"+
		"   </tr>"+
		"</thead>"+
		"<tbody>"+
		"</tbody>"
		);
	for(var i in tbClientes){
		var cli = JSON.parse(tbClientes[i]);
		$("#tbl tbody").append("<tr>");
		$("#tbl tbody").append("<td width='10%'><input type='checkbox' id='checkbox' name='checkbox' value='option1' class='form-check-input'></td>");
		$("#tbl tbody").append("<td width='40%' class='editInPlace' >"+cli.Name+"</td>");
		$("#tbl tbody").append("<td width='25%' class='editInPlace2' >"+cli.Price+"</td>");
		// $("#tbl tbody").append("<td width='20%'><img src='img/edit.png' alt='"+i+"'class='btnEdit' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo' />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='img/delete.png' alt='"+i+"' class='btnDelete' onclick='return confirm('Bạn có chắc muốn xóa không ?')' /></td>");
		$("#tbl tbody").append("<td width='25%'><input type='submit' class='btn btn-warning btn-sm btnSave' alt='"+i+"' value='Save' style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' alt='"+i+"' class='btn btn-primary btn-sm btnEdit' value='Edit' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo'><input type='button' alt='"+i+"' class='btn btn-danger btn-sm btnDelete' value='Delete' style='float: right;'></td>");
		$("#tbl tbody").append("</tr>");
	}
}

function showMe(e) {
	sessionStorage.setItem("valueNameChange", e.value); 
}
function showMe2(e) {
	sessionStorage.setItem("valuePriceChange", e.value); 
}