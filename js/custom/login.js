$( document ).ready(function() {
	var pathname = window.location.pathname;
    
    console.log(pathname);
    if (pathname=='/Login/'){
    	$('#logoutbutton').addClass('hidden');
    }
});

function onSignIn(googleUser) {
	var profile = googleUser.getBasicProfile();
	console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
	console.log('Name: ' + profile.getName());
	console.log('Image URL: ' + profile.getImageUrl());
	console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.

	if(profile.getEmail() !=''){
		params = "email="+profile.getEmail();
		
		var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log('User signed out.');
        });

		var httpc = new XMLHttpRequest(); // simplified for clarity
	    var url = window.location.href+'Login/log_in_email';
	    httpc.open("POST", url, true); // sending as POST

	    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	   

	    httpc.onreadystatechange = function() { //Call a function when the state changes.
	        if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
	            location.reload(); // some processing here, or whatever you want to do with the response
	        }
	    };
	    httpc.send(params);
	}
}


function onLoadCallback() {
        $('span[id^="not_signed_"]').html('Login com EMAIL CNEC - GOOGLE');
    }


