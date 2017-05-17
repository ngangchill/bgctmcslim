const emailField = document.getElementById("email");
const passwordField = document.getElementById("password");
const loginBtn = document.getElementById("loginBtn");
const signUpBtn = document.getElementById("signUp");
const signOutBtn = document.getElementById("signOut");

const userNavUl = document.getElementById("nav-mobile");

loginBtn.addEventListener('click', e => {
	const email = emailField.value;
	const password = passwordField.value;
	
	if(password == ''){
		Materialize.toast('Please enter password.', 5000);
		return;
	}
	//sign in
	if(validateEmail(email) == false){
		Materialize.toast('Please provide an valid emaid adderss', 5000);
		//focus to email field
		emailField.focus();
	} else {
		//login user
		auth.signInWithEmailAndPassword(email, password)
		.catch(function(error) {
			// Handle Errors here.
			var errorCode = error.code;
			var errorMessage = error.message;
			//show tost
			Materialize.toast(errorCode + ' : ' + errorMessage, 5000);
			//Materialize.toast('I am a toast', 4000,'',function(){alert('Your toast was dismissed')
			
			console.log(errorCode);
			console.log(errorMessage);
			
		});
		
	}
	
});

signUpBtn.addEventListener('click', e => {
	Materialize.toast('New Sign up is not allowednow, try again later', 5000);
});

signOutBtn.addEventListener('click', e => {
	auth.signOut().then(function() { 
		Materialize.toast('Logout successfull', 5000);
	}).catch(function(error) {
		var errorCode = error.code;
		var errorMessage = error.message;
		//show toast
		Materialize.toast(errorCode + ' : ' + errorMessage, 5000);
		console.log(errorCode);
		console.log(errorMessage);
	});
});
			
// email validation
function validateEmail(email) {
	var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	return re.test(email);
}


