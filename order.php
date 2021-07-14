<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order</title>
    <link rel="stylesheet" href="./order_style.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>
    <section class="order order-center">
        <form action="orderConnect.php" method="POST" class="form-input">
            <div class="main-heading">
                <div class="heading">
                    <h2 class="heading-text">Order summary</h2>
                </div>
                <div class="sub-heading">
                    <p class="sub-heading-text">Order with us and skip the hassle!</p>
                </div>
                <div class="input-section">
                    <div class="name">
                        <i class="fas fa-user fa-2x"></i>
                        <div class="first-name">
                            <label class="name-label name-label-1" for="name">Name</label>
                            <input type="text" name="firstName" class="input-area first-name-input" placeholder="first-name" id="name">
                        </div>
                        <div class="last-name">
                            <input class="input-area"  type="text" placeholder="last-name" name="lastName" id="">
                        </div>
                    </div>
                    <div  class="email">
                        <i class="fas fa-envelope fa-2x"></i>
                        <label class="name-label name-label-email" for="email">email</label>
                        <input  type="text" class="input-area email-input-area" name="email" placeholder="email" id="email">
                    </div>
                    <div class="contact-number">
                        <i class="fas fa-phone-square-alt fa-2x"></i>
                        <label class="name-label contact-number-label" for="contact-number">contact</label>
                        <input type="text" class="input-area contactinput-area" name="number" placeholder="contact-number" id="contact-number">
                    </div>
                    <div class="address">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                        <label class="name-label address-label" for="address">address</label>
                        <input type="text" class="input-area address-input-area" placeholder="address" name="address" id="address">
                    </div>
                    <div class="preference">
                        <div class="preference-menu">
                            <i class="fas fa-clipboard-list fa-2x"></i>
                            <label class="name-label preference-menu-list" for="preference">preference</label>
                            <select class="input-area preference-menu-list-optn"  name="preference" id="preference">
                                <optgroup label="Veg">

                                    <option class="text-center" value="Samosa">Samosa</option>
                                    <option class="text-center" value="Burger" >Burger</option>
                                    <option class="text-center" value="panner Lababdar" >panner Lababdar</option>
                                    <option class="text-center" value="Pasta" >Pasta</option>
                                </optgroup>
                                <optgroup label="Non-Veg" >

                                    <option class="text-center" value="Kathi Role">Kathi Role</option>
                                    <option class="text-center" value="Chicken Curry" >Chicken Curry</option>
                                </optgroup>
                                <optgroup label="Desert" >

                                    <option class="text-center" value="Black forest">Black forest</option>
                                    <option class="text-center" value="Choco lava Cake" >Choco lava Cake</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="dish">
                        <div class="dish-menu">
                            <label class="name-label " for="dish-menu">Dish</label>
                            <select name="dish" class="input-area " id="">
                                <option value="optn1">optn1</option>
                                <option value="optn1">optn1</option>
                                <option value="optn1">optn1</option>
                                <option value="optn1">optn1</option>
                                <option value="optn1">optn1</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="quantity">
                        <div class="quantity-optn">
                            <i class="fas fa-calculator fa-2x"></i>
                            <label class="name-label quantity-label" for="quantity">quantity</label>
                            <input type="number" name="quantity" class="input-area" placeholder="1" id="quantity">
                        </div>
                    </div>
                    <div class="suggestion">
                        <div class="suggestion-heading">
                            <h3  >Any note for the chef! (optional) </h3>
                        </div>
                        <div  class="suggestion-input ">
                            <input style="width: 90%; margin: 0 1rem;" type="text" class="input-area " name="suggestion" id="">
                        </div>
                    </div>
                </div>
            </div>
            <button  type="submit">Order</button>
        </form>
    </section>
</body>
</html>