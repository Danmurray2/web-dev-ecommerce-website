<!-- To include the backend and header.php files. -->
<?php
include '../partials/header.php';
include '../BACKEND/backend.php';
?>

<!-- Purchase Modal -->
<div id="p_modal" class="purchase_modal">
  <!-- Modal content -->
  <div class="purchase_content">
    <span class="close_purchase" >&times;</span>
    <p id="purchase_text"></p>
  </div>
  <!-- End of purchase modal -->

</div>
</div>
<!-- Bootstrap jumbotron class -->
<div class="jumbotron" style="text-align: center">
    <h1 class="display-4">Welcome to the Shop </h1>
    <p class="lead"></p>
    <hr class="my-4">
    <p>Please login to browse the shop</p>
    <p class="lead">
        <!-- Button which triggers modal -->
        <button type="button" class="btn" data-toggle="modal" data-target="#login-modal">
            Login
        </button>
        <!-- To show/hide the cart -->
        <button type="button" class="btn" id="cart_button" disabled>
            Show/Hide Cart
        </button>

    </p>
    <!-- Custom shopping cart  -->
    <div class="row" id="toggle_cart">
        <div class="col-xs-12 mx-auto" id="cart_display" hidden>
            <!-- Using 'fontawesome' shopping cart icon -->
            <p id="welcome"></p>
            <h4> Your Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i> </h4>
            <div id="cart_list">
            </div>
            <br>
            <!-- button with onclick event to trigger clearCart() -->
            <button type="button" onclick="clearCart()" class="btn-danger btn-xs" id="clearCart">
                Clear Cart
            </button>
            <!-- Triggers the purchase() function -->
            <button id="purchase_button" type="button" onclick="purchase()" class="btn-xs p_btn" >
                Purchase
            </button>
            <br><br>
        </div>
    </div>
    <!-- End of Cart -->

<!-- Div container which will house the dynamically retrieved data -->
    <div class="row mx-auto container" id="shop" hidden>
    </div>

    <!-- Bootstrap v.4 modal -->
    <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Login Here</h4>
                    <!-- Button to dismiss modal using bootstrap close class -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!---Login form starts here-->
                    <form role="form">
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" required name="name" class="form-control" id="name" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" required name="email" class="form-control" id="email" placeholder="Enter Email">
                            <div id="msg"></div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                            <div id="msg2"></div>
                        </div>
                    </form>
                    <!-- End of login section -->
                </div>
                <!-- Modal footer which the user can dismiss, or trigger the login() function -->
                <div class="modal-footer">
                    <button type="button" id="closeLogin" class="btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn" onclick="login()">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Bootstrap Modal -->

<!-- Script for  -->
    <script type="text/javascript">
        var container = document.querySelector(".container");
        var items = <?php print json_encode($data); ?>; //assigning retrieved data to new variable
        var cartItems = [{}]; //Global object array to add items to cart
        var totalPrice = 0;
        var cartList = document.querySelector('#cart_list');

        //Responsible for dynamically creating new bootstrap cards with retrieved data.
        //Uses bootstrap card class 
        $(document).ready(function() {
            for (var i = 0; i < items.length; i++) {
                //create cart title and append item name. Repeated for each required variable
               //Utilizing the Bootstrap Card component 
                var name = ' <h4 class="card-title text-center">';
                name += items[i].NAME + '</h4>';

                var image = '<img class="card-img-top" id="image" ';
                image += 'src="' + items[i].URL + '">';

                var description = '<div class="card-body text-center"><p class="card-text">';
                description += items[i].DESCRIPTION + '</p>';

                var price = '<p id="price" class="card-text" >';
                price += 'Price: €' + items[i].PRICE;
                price += '</p></div>';
                //Passes the button to the addToCart() method allowing for item distinction
                var button = '<div class="text-center"><button type="button" onclick="addToCart(this)" id="button" class="btn" style="width: 20%">Add to Cart</button></div>';

                //appending all of the retrieved data to the element
                container.innerHTML += '<div class="card" style="width: 70rem;><div class="card-header">' +
                    name + image + description + price + button + '</div></div></div>';

                //now assigining unique id to each button to distinguish cart item selection
                var btn = document.getElementById('button');
                btn.setAttribute("id", 'button' + (i));
            }
        });
    </script>
    <script type="text/javascript" src="../javascript/login.js"></script>
    <script type="text/javascript" src="../javascript/cart.js"></script>
    <?php
    include '../partials/bootstrap-script.php'
    ?>
    </body>

    
<?php
include '../partials/footer.php'
?>
    <!-- https://www.stechies.com/validate-email-address-javascript/ -->

    <!-- jQuery(this).prev("button").attr("id", currentItemID); -->
    <!-- 
<script>
document.getElementById("clickme").addEventListener("click", clickMe);
</script> -->