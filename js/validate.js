function check() {
    var checkin = document.getElementById('checkin_date').value;
    var checkout = document.getElementById('checkout_date').value;
    var expiryDate = document.getElementById('expiryDate').value;
    //var selectedin = new Date(checkin);
    // var selectedout = new Date(checkout);
    var now = new Date();
    if (checkin < now || checkout < now || checkin > checkout || expiryDate < now ) {
        alert("Date must be in the future");
        return false;

    } else {
        return true;
    }
}

$('.creditCard').keyup(function() {
    var foo = $(this).val().split(" ").join(""); // remove hyphens
    if (foo.length > 0) {
        foo = foo.match(new RegExp('.{1,4}', 'g')).join(" ");
    }
    $(this).val(foo);
});

