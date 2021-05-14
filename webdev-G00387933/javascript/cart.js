//Extracting button id's and adding to cart array
function addToCart(button) {
    var selection = button.id; //assigning the button id to new var
    //adding new item to cart depending on user selection and specific button id
    if (selection === 'button0') {
        var item = items[0];
        cartItems.push(item);
    }
    if (selection === 'button1') {
        var item = items[1];
        cartItems.push(item);
    }
    if (selection === 'button2') {
        var item = items[2];
        cartItems.push(item);
    }
    if (selection === 'button3') {
        var item = items[3];
        cartItems.push(item);
    }
    if (selection === 'button4') {
        var item = items[4];
        cartItems.push(item);
    }
    if (selection === 'button5') {
        var item = items[5];
        cartItems.push(item);
    }
    if (selection === 'button6') {
        var item = items[6];
        cartItems.push(item);
    }
    if (selection === 'button7') {
        var item = items[7];
        cartItems.push(item);
    };
    printCart();

}
//print cart items to the user
function printCart() {
    cartList.innerHTML = ''; //resetting the inner HTML & total price
    this.totalPrice = 0;

    //loop and display user selection
    for (var i = 1; i < cartItems.length; i++) {
        var p = ' <h5 class="text-center">';
        totalPrice += Number(cartItems[i].PRICE);
        p += cartItems[i].NAME + '- Price: €' + cartItems[i].PRICE + '</h5><hr>';
        cartList.innerHTML += p + '</div>';
    }
    var p2 = '<h5 class="text-center" style="color: red">'
    p2 += 'Total Price: €' + totalPrice + '</h5>';
    cartList.innerHTML += p2; //add this html to the cartList div
}

//toggles the cart display using the jquery toggle() function
$(document).ready(function () {
    $('#cart_button').on('click', function () {
        $('#toggle_cart').toggle();
    });
});

//Clears cart, resets html & total price
function clearCart() {
    this.totalPrice = 0;
    cartItems = [{}];
    cartList.innerHTML = '';
}
//Basic modal displays to mimic a purchase event
function purchase() {
    var modal = document.getElementById("p_modal");
    var span = document.getElementsByClassName("close_purchase")[0];
    //displaying relevant prompt to user depending on purchase state 
    if (this.totalPrice !== 0) {
        $('#purchase_text').html('Successful purchase. You were charged: ' + this.totalPrice);
        this.totalPrice = 0;
    } else {
        $('#purchase_text').html('Nothing added to cart yet!');
    }
    modal.style.display = "block";

    //onclick event to exit the modal
    span.onclick = () => {
        modal.style.display = "none";
    };
    //window click event to close modal if user clicks outside the modal
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    // clear cart on successful purchase
    clearCart();
}
