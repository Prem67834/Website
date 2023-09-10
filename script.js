// ---------Responsive-navbar-active-animation-----------
function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px", 
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top":itemPosNewAnimTop.top + "px", 
			"left":itemPosNewAnimLeft.left + "px",
			"height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});




// Add active class on another page linked
// ==========================================
// $(window).on('load',function () {
//     var current = location.pathname;
//     console.log(current);
//     $('#navbarSupportedContent ul li a').each(function(){
//         var $this = $(this);
//         // if the current path is like this link, make it active
//         if($this.attr('href').indexOf(current) !== -1){
//             $this.parent().addClass('active');
//             $this.parents('.menu-submenu').addClass('show-dropdown');
//             $this.parents('.menu-submenu').parent().addClass('active');
//         }else{
//             $this.parent().removeClass('active');
//         }
//     })
// });
function scrollToSection() {
    // Get a reference to the target section by its ID
    var targetSection = document.getElementById("#");

    if (targetSection) {
        // Scroll to the target section
        targetSection.scrollIntoView({ behavior: "smooth" }); // You can use "auto" for instant scrolling
    }
}
function scrollToSection() {
    // Get a reference to the target section by its ID
    var targetSection = document.getElementById("branches");

    if (targetSection) {
        // Scroll to the target section
        targetSection.scrollIntoView({ behavior: "smooth" }); // You can use "auto" for instant scrolling
    }
}
function scrollToSection() {
    // Get a reference to the target section by its ID
    var targetSection = document.getElementById("About");

    if (targetSection) {
        // Scroll to the target section
        targetSection.scrollIntoView({ behavior: "smooth" }); // You can use "auto" for instant scrolling
    }
}
function scrollToSection() {
    // Get a reference to the target section by its ID
    var targetSection = document.getElementById("event");

    if (targetSection) {
        // Scroll to the target section
        targetSection.scrollIntoView({ behavior: "smooth" }); // You can use "auto" for instant scrolling
    }
}


//
let mybutton = document.getElementById("#");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    // mybutton.style.display = "block";
  } else {
    // mybutton.style.display = "none";
  }
}


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
function togglePasswordVisibility() {
	const passwordInput = document.getElementById("logpass");
	const toggleIcon = document.getElementById("toggleIcon");

	if (passwordInput.type === "password") {
		passwordInput.type = "text";
		toggleIcon.innerText = "Hide";
	} else {
		passwordInput.type = "password";
		toggleIcon.innerText = "Show";
	}
}

function validatePassword() {
	const password = document.getElementById("password").value;
	const passwordError = document.getElementById("passwordError");

	const uppercaseRegex = /[A-Z]/;
	const numberRegex = /[0-9]/;
	const specialCharRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/;

	const hasUppercase = uppercaseRegex.test(password);
	const hasNumber = numberRegex.test(password);
	const hasSpecialChar = specialCharRegex.test(password);

	if (hasUppercase && hasNumber && hasSpecialChar) {
		passwordError.innerHTML = "";
		return true;
	} else {
		passwordError.innerHTML = "Password should contain at least one uppercase letter, one number, and one special character.";
		return false;
	}
}