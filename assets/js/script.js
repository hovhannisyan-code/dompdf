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

function chooseColor(val) {
	document.querySelector(".intro__content").style.background = val;
}
function loadUserData() {
	fetch(apiUrl+'/api.php')
  	.then(response => response.json())
  	.then(json => {
  		const {data} = json;
  		document.querySelector("#companyName").innerText = data.company
  		document.querySelector("#count").innerText = data.count
  		document.querySelector("#pleace").innerText = data.pleace
  		document.querySelector("#subtitle").innerText = data.subtitle
  		document.querySelector("#guidName").innerText = data.guide_name;
  		document.querySelector("#email").innerText = data.email;
  		document.querySelector("#phone").innerText = data.phone;
  		//images
  		document.querySelector("#logo").src = data.logo;
  		document.querySelector("#background").src = data.background;
  		document.querySelector("#guide").src = data.guide_img;
	})
}
document.addEventListener('DOMContentLoaded', loadUserData);