$(document).ready(function(){
    $('.carousel').carousel({
			padding: 200
	});
	autoplay();
	function autoplay() {
		$('.carousel').carousel('next');
		setTimeout(autoplay, 4500);
	}
  });

const togglePassword = document
.querySelector('#toggle-password');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', () => {
  // Toggle the type attribute using
  // getAttribure() method
const type = password
	.getAttribute('type') === 'password' ?
	'text' : 'password';
password.setAttribute('type', type);
  // Toggle the eye and bi-eye icon
this.classList.toggle('bi-eye');
});

function password_show_hide() {
	var x = document.getElementById("password");
	var show_eye = document.getElementById("show_eye");
	var hide_eye = document.getElementById("hide_eye");
	hide_eye.classList.remove("d-none");
	if (x.type === "password") {
	  x.type = "text";
	  show_eye.style.display = "none";
	  hide_eye.style.display = "block";
	} else {
	  x.type = "password";
	  show_eye.style.display = "block";
	  hide_eye.style.display = "none";
	}
  }

  function password_show_hide2() {
	var x = document.getElementById("password");
	var show_eye = document.getElementById("show_eye");
	var hide_eye = document.getElementById("hide_eye");
	hide_eye.classList.remove("d-none");
	if (x.type === "password") {
	  x.type = "text";
	  show_eye.style.display = "none";
	  hide_eye.style.display = "block";
	} else {
	  x.type = "password";
	  show_eye.style.display = "block";
	  hide_eye.style.display = "none";
	}
  }

  $(document).ready(function() {
	// Initialize the carousel
	$('#myCarousel').carousel();

	// Handle slide next button click
	$('.carousel-control-next').click(function() {
	  $('#myCarousel').carousel('next');
	});

	// Handle slide previous button click
	$('.carousel-control-prev').click(function() {
	  $('#myCarousel').carousel('prev');
	});
  });

function changeColor(icon){
	icon.classList.toggle('clicked');
}