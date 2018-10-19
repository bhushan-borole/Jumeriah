// Initialize Firebase
var config = {
    apiKey: "AIzaSyDgWmw2vRn2N3KRHgdTtqZn0Oh5zl_i3K8",
    authDomain: "jumeriah-6fb6e.firebaseapp.com",
    databaseURL: "https://jumeriah-6fb6e.firebaseio.com",
    projectId: "jumeriah-6fb6e",
    storageBucket: "jumeriah-6fb6e.appspot.com",
    messagingSenderId: "322724513860"
};
firebase.initializeApp(config);

//Refererence messages collection
var messagesRef = firebase.database().ref('messages');

//Listen to the submit form
document.getElementById('contact').addEventListener('submit',submitform);


//Feedback Form
function submitform(e){
    e.preventDefault();

    var name = getinputvalue('name');
    var email = getinputvalue('email');
    var message = getinputvalue('message');


    //save message
    saveMessages(name, email, message);

    //show alert
    document.querySelector('.successinfo').style.display = 'block';

    //Alert should disappear in 3 seconds
    setTimeout(function(){
        document.querySelector('.successinfo').style.display = 'none';
    },3000);

    //reset form after message sent
    document.getElementById('contact').reset();

}

//Function to return values of field
function getinputvalue(id){
    return document.getElementById(id).value;
}

//to save inputs in firebase
function saveMessages(name, email, message){

    var newMessageRef = messagesRef.push();
    newMessageRef.set({
        name: name,
        email: email,
        message: message,
    })
}