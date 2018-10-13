function sendmail(){
	var email = document.getElementById("email").value;
	console.log(email);
	Email.send( "borolebhushan8@gmail.com",
				String(email),
				"This is a subject",
				"this is the body",
				"smtp.elasticemail.com",
				"borolebhushan8@gmail.com",
				"fa1bf666-afd4-43ff-b9e2-152a536a71ff");
	console.log("Email sent.")
}