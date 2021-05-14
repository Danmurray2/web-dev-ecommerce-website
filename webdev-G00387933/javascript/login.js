function login() {
    //Retrieving user input values from modal
    var emailAddress = $('#email').val();
    var password = $('#password').val();
    var name = $('#name').val();
    //retrieving doc elements by id
    var shop = document.getElementById('shop');
    var cart_button = document.getElementById('cart_button');
    var cart_display = document.getElementById('cart_display');
    const close = document.getElementById('closeLogin');

    //A regex expression to validate correct characters are present for valid email address
    var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    //The test() method returns true if the specified pattern exists in the given expression
    //Using jquery to select elements by id
    if (regex.test(emailAddress) == true && name =='user' && password === 'pass') {
        
        $('#msg').html(' valid details! Logging in..');
        $('#msg').css("color", "green"); //adding styling to affirm correct choice
        $('#welcome').html('Welcome: ' + name).css("color", "seagreen");
        //Once successful details entered, hidden attributes removed to reveal shop and cart
        //Timeout to mimic login 
        setTimeout(() => {
            close.click(); //closes modal
            shop.removeAttribute("hidden");
            cart_button.removeAttribute("disabled");
            cart_display.removeAttribute("hidden");
        }, 1500);

    } 
    //All of the below conditions will prompt the user to try again
    if(name !== 'user') {
        $('#msg2').html('Invalid details entered..try again');
        $('#msg2').css("color", "red");
    }

    if(password !== 'pass') {
        $('#msg2').html('Invalid details entered..try again');
        $('#msg2').css("color", "red");
    }

    if (regex.test(emailAddress) !== true) {
        $('#msg2').html('Invalid details entered..try again');
        $('#msg2').css("color", "red");
    }
}
