function importImg(elem) {
	let that = elem;
	let input = document.createElement('input');
	input.type = 'file';
	input.accept ="image/png, image/gif, image/jpeg"
	input.onchange = () => {
		
		let files = Array.from(input.files);
		if (files && files[0]) {
			document.querySelector('.loader').style.display = "block";
			let formData = new FormData();
			formData.append("file", files[0]);
			let xhttp = new XMLHttpRequest();
			xhttp.open("POST", "ajaxFile.php", true);
			xhttp.onreadystatechange = function() {
			 	if (this.readyState == 4 && this.status == 200) {
				   	let response = this.responseText;
				   	if(!response == 0){
							that.src = response;
				   	}else{
				      alert("File not uploaded.");
				   	}
				   	document.querySelector('.loader').style.display = "none";
			 	}
			};
			xhttp.send(formData);						
		}
	}
	input.click()
}
function submitAction() {
	let html = document.querySelector('#wrapper').innerHTML;
	document.querySelector('#html').value = html;
	document.forms["hidden_form"].submit();
}
