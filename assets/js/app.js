const userNavUl = document.getElementById("nav-mobile");
// nav user 
auth.onAuthStateChanged(function(user) {
if (user) {
	var url;
	if(user.photoURL == null){
		url = 'assets/img/default-avatar.png';
	} else {
		url = user.photoURL;
	}
	if(user.displayName == null){
		name = 'Update your profile';
	} else {
		name = user.displayName;
	}
	// string
	var  uString = '<li>';
	uString += '<div class="userView">';
	uString += '<div class="background">';
	uString += '<img src="assets/img/office.jpg">';
	uString += '</div>';
	uString += '<a href="#!user"><img class="circle" src="' + url + '"></a>';
	uString += '<a href="#!name"><span class="white-text name">' + name + '</span></a>';
	uString += '<a href="#!email"><span class="white-text email">' + user.email + '</span></a>';
	uString += '</div>';
	uString += '</li>';
	uString += '<li><a href="http://toolkit.co.nf">Website</a></li>';
	uString += '<li><a href="http://www.bgctmcwarriors.96.lt">BGCTMC WARRIORS</a></li>';
	uString += '<li><a href="http://www.facebook.com/forhad.fb">Facebook</a></li>';
			
	userNavUl.innerHTML = uString;
	
	
} else { 
	uString = '<li><a href="http://toolkit.co.nf">Website</a></li>';
	uString += '<li><a href="http://www.bgctmcwarriors.96.lt">BGCTMC WARRIORS</a></li>';
	uString += '<li><a href="http://www.facebook.com/forhad.fb">Facebook</a></li>';
	
	userNavUl.innerHTML = uString;
}
});
