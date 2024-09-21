<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include "nav.php" ?>

   <section class="courses">



      <h1 class="heading"> Our Courses<i class="fas fa-shopping-cart cart-icon" onclick="toggleCart()"></i></h1>

      <div class="box-container">

         <div class="box">
            <div class="tutor">
               <img src="images/teach2.jpeg" alt="">
               <div class="info">
                  <h3>emma still</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/chemistry.jpeg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Advance level chemistry</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
            <button class="inline-btn" onclick="addItem('Item 1', 10)">Add to Cart</button>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/teach3.jpeg" alt="">
               <div class="info">
                  <h3>Kami jung</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/ict.jpeg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Advance level chemistry</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
            <button class="inline-btn" onclick="addItem('Item 2', 15)">Add to Cart</button>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/teach4.jpeg" alt="">
               <div class="info">
                  <h3>john sool</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/food.jpeg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">food science complete</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
            <a href="playlist.php" class="inline-btn">view playlist</a>
            <button class="inline-btn" onclick="addItem('Item 3', 8)">Add to Cart</button>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/teach5.jpeg" alt="">
               <div class="info">
                  <h3>steve eack</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/fmaths.jpeg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Further mathematics complete</h3>
          
            <a href="playlist.php" class="inline-btn">view playlist</a>
            <button class="inline-btn" onclick="addItem('Item 4', 10)">Add to Cart</button>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/th-1073072570.jpeg" alt="">
               <div class="info">
                  <h3>shanki lone</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/math2.jpeg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">Mathematics complete</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
             <button class="inline-btn" onclick="addItem('Item 5', 20)">Add to Cart</button>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/teach4.jpeg" alt="">
               <div class="info">
                  <h3>samlam yinmg</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/physics.jpeg" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">physics complete</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
           
            <button class="inline-btn" onclick="addItem('Item 6', 10)">Add to Cart</button>
         </div>
<!--
         <div class="box">
            <div class="tutor">
               <img src="images/pic-8.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-7.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete PHP tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-9.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-8.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete MySQL tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/pic-1.jpg" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <span>21-10-2022</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/thumb-9.png" alt="">
               <span>10 videos</span>
            </div>
            <h3 class="title">complete react tutorial</h3>
            <a href="playlist.php" class="inline-btn">view playlist</a>
         </div>
-->
         <style>
            .cart {
               margin-top: 20px;
               border-top: 2px solid #000;
               padding-top: 20px;
               display: none;
               /* Initially hidden */
            }

            .total {
               font-weight: bold;
            }

            .cart-icon {
               font-size: 24px;
               color: #333;
               cursor: pointer;
               /* Change cursor to pointer */
            }

            .show-cart-button {
               margin-top: 20px;
               padding: 10px;
               background-color: #007bff;
               color: white;
               border: none;
               cursor: pointer;
               border-radius: 5px;
               width: 200px;
               height: 100px;
            
            }
           
         </style>
         <div class="was">
            <button class="show-cart-button" onclick="toggleCart()">CARD</button>

            <div class="cart" id="cart" style="color: #007bff; font-size:20px">
               <h2>Your Cart</h2>
               <div id="cartItems" style="color: #007bff; font-size:20px"></div>
               <div class="total" id="total" style="color: #007bff; font-size:20px">Total: $0</div>
            </div>
         </div>
      </div>


      </div>

   </section>

   <script>
      const cart = JSON.parse(localStorage.getItem('shoppingCart')) || {};

      function addItem(name, price) {
         if (!cart[name]) {
            cart[name] = {
               price: price,
               quantity: 0
            };
         }
         cart[name].quantity++;
         updateCart();
         saveCart();
      }

      function removeItem(name) {
         delete cart[name];
         updateCart();
         saveCart();
      }

      function updateQuantity(name, quantity) {
         if (quantity < 1) {
            removeItem(name);
         } else {
            cart[name].quantity = quantity;
            updateCart();
            saveCart();
         }
      }

      function updateCart() {
         const cartItems = document.getElementById('cartItems');
         cartItems.innerHTML = '';
         let total = 0;

         for (const name in cart) {
            const item = cart[name];
            total += item.price * item.quantity;
            cartItems.innerHTML += `
                <div>
                    ${name}: 
                    <input type="number" value="${item.quantity}" min="1" 
                           onchange="updateQuantity('${name}', this.value)" />
                    <button onclick="removeItem('${name}')">Remove</button>
                </div>
            `;
         }

         document.getElementById('total').innerText = `Total: $${total}`;
      }

      function toggleCart() {
         const cartElement = document.getElementById('cart');
         cartElement.style.display = cartElement.style.display === 'none' || cartElement.style.display === '' ? 'block' : 'none';
      }

      function saveCart() {
         localStorage.setItem('shoppingCart', JSON.stringify(cart));
      }

      // Initialize the cart display on page load
      updateCart();
   </script>











   <?php include "footer.php" ?>
   <!-- custom js file link  -->
   <script src="js/script.js"></script>


</body>

</html>