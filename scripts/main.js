/*----- responsive nav bar ----------*/
var navlink = document.getElementById("navlink");
    function hidemenu(){
      navlink.style.right="-200px"
    }
    function showmenu(){
     navlink.style.right="0px"
    }
/*-----end responsine nav bar----------*/

/*---------START CATR PAGE----------*/
let carts = document.querySelectorAll('.add-cart');
let products = [
   {
       id: 0,
       name: 'Browm Dress', 
       img: 'img/new collection/dress1.jpg',
       price: 15,
       inCart: 0
   },
   {
       id:1,
       name: 'Black Dress', 
       img: 'img/new collection/dress2.jpg',
       price: 20,
       inCart: 0
   },
   {
       id:2,
       name: 'Nike Shoes', 
       img: 'img/new collection/shoes1.jpg',
       price: 15,
       inCart: 0
   },
   {
       id:3,
       name: 'White Jorden', 
       img: 'img/new collection/shoes 2.jpg',
       price: 15,
       inCart: 0
   },
   {
       id:4,
       name: 'White Bage', 
       img: 'img/new collection/bag1.jpg',
       price: 20,
       inCart: 0
   },
   {
       id:5,
       name: 'Gold Bag', 
       img: 'img/new collection/bag2.jpg',
       price: 20,
       inCart: 0
   },
   {
       id:6,
       name: 'Gold Ring', 
       img: 'img/new collection/acces1.jpg',
       price: 10,
       inCart: 0
   },
   {
       id:7,
       name: 'Flower Bracelet', 
       img: 'img/new collection/acces2.jpg',
       price: 5,
       inCart: 0
   },
   {
       id:8,
       name: 'Pink Dress', 
       img: 'img/clothes/dress1.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:9,
       name: 'Coffe Dress', 
       img: 'img/clothes/dress2.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:10,
       name: 'Red Dress', 
       img: 'img/clothes/dress3.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:11,
       name:'White Dress', 
       img: 'img/clothes/dress4.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:12,
       name: 'Black Top', 
       img: 'img/clothes/croptop1.jpg',
       price: 25,
       inCart: 0
   },
   {
       id:13,
       name: 'Green Top', 
       img: 'img/clothes/croptop2.jpg',
       price: 25,
       inCart: 0
   },
   {
       id:14,
       name: 'Coffe Top', 
       img: 'img/clothes/croptop3.jpg',
       price: 25,
       inCart: 0
   },
   {
       id:15,
       name: 'White Top', 
       img: 'img/clothes/croptop4.png',
       price: 25,
       inCart: 0
   },
   {
       id:16,
       name: 'Black Hoodie', 
       img: 'img/clothes/hoddie1.jpg',
       price: 40,
       inCart: 0
   },
   {
       id:17,
       name: 'Coffe Hoodie', 
       img: 'img/clothes/hoddie2.png',
       price: 40,
       inCart: 0
   },
   {
       id:18,
       name: 'Purple Hoodie', 
       img: 'img/clothes/hoddie3.jpg',
       price: 40,
       inCart: 0
   },
   {
       id:19,
       name: 'Gray Hoodie', 
       img: 'img/clothes/hoddie4.jpg',
       price: 40,
       inCart: 0
   },
   {
       id:20,
       name: 'Green&White Shoes', 
       img: 'img/shoes/shoes1.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:21,
       name: 'Pink Shoes', 
       img: 'img/shoes/shoes2.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:22,
       name: 'White Shoes', 
       img: 'img/shoes/shoes3.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:23,
       name: 'Green Shoes', 
       img: 'img/shoes/shoes4.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:24,
       name: 'Green Heels', 
       img: 'img/shoes/heels1.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:25,
       name: 'Selver Heels', 
       img: 'img/shoes/heels2.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:26,
       name: 'Black Heels', 
       img: 'img/shoes/heels3.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:27,
       name:'Gold Heels', 
       img: 'img/shoes/heels4.jpg',
       price: 35,
       inCart: 0
   },
   {
       id:28,
       name: 'Brown collection', 
       img: 'img/shoes/collection1.jpg',
       price: 100,
       inCart: 0
   },
   {
       id:29,
       name: 'White Collection', 
       img: 'img/shoes/collection2.jpg',
       price: 100,
       inCart: 0
   },
   {
       id:30,
       name: 'Gold Collection', 
       img: 'img/shoes/collection3.jpg',
       price: 100,
       inCart: 0
   },
   {
       id:31,
       name: 'Blue Collection', 
       img: 'img/shoes/collection4.jpg',
       price: 100,
       inCart: 0
   },
   { 
       id:32,
       name: 'White Bag', 
       img: 'img/bags/bag1.jpg',
       price: 45,
       inCart: 0
   },
   {
       id:33,
       name: 'Coffe Bag', 
       img: 'img/bags/bag2.jpg',
       price: 45,
       inCart: 0
   },
   {
       id:34,
       name: 'Green Bag', 
       img: 'img/bags/bag3.jpg',
       price: 45,
       inCart: 0
   },
   {
       id:35,
       name: 'Blue Bag', 
       img: 'img/bags/bag4.jpg',
       price: 45,
       inCart: 0
   },
   {
       id:36,
       name: 'Gold Bag', 
       img: 'img/bags/bag5.jpg',
       price: 45,
       inCart: 0
   },
   {
       id:37,
       name: 'Coffe&Gold Bag', 
       img: 'img/bags/bag6.jpg',
       price: 45,
       inCart: 0
   },
   {
       id:38,
       name: 'Purple Bag', 
       img: 'img/bags/bag7.jpg',
       price: 45,
       inCart: 0
   },
   {
       id:39,
       name: 'Black Bag', 
       img: 'img/bags/bag8.jpg',
       price: 45,
       inCart: 0
   },
   {
       id:40,
       name: 'Selver Bag', 
       img: 'img/bags/bag9.jpg',
       price: 45,
       inCart: 0
   },
   {
       id:41,
       name: 'Black&White Bag', 
       img: 'img/bags/bag10.jpg',
       price: 45,
       inCart: 0
   },
   {
       id:42,
       name: 'Gray Bag', 
       img: 'img/bags/bag11.jpg',
       price: 45,
       inCart: 0
   },
   {
       id:43,
       name: 'White&Gold Bag', 
       img: 'img/bags/bag12.png',
       price: 45,
       inCart: 0
   },
   {
       id:44,
       name: 'Butterfly Ring', 
       img: 'img/accessories/ring1.jpg',
       price: 10,
       inCart: 0
   },
   {
       id:45,
       name: 'TreeBranch Ring', 
       img: 'img/accessories/ring2.jpg',
       price: 10,
       inCart: 0
   },
   {
       id:46,
       name:'Rings', 
       img: 'img/accessories/ring3.jpg',
       price: 40,
       inCart: 0
   },
   {
       id:47,
       name: 'Moon Ring', 
       img: 'img/accessories/ring4.jpg',
       price: 10,
       inCart: 0
   },
   {
       id:48,
       name: 'Colorful Necklace', 
       img: 'img/accessories/nickles1.jpg',
       price: 15,
       inCart: 0
   },
   {
       id:49,
       name: 'Selver Necklace', 
       img: 'img/accessories/nickles2.jpg',
       price: 15,
       inCart: 0
   },
   {
       id:50,
       name: 'Butterfly Necklace', 
       img: 'img/accessories/nickles3.jpg',
       price: 15,
       inCart: 0
   },
   {
       id:51,
       name: 'Necklaces', 
       img: 'img/accessories/nickles4.jpg',
       price: 50,
       inCart: 0
   },
   {
       id:52,
       name: 'Gold Bracelet', 
       img: 'img/accessories/bracelet1.jpg',
       price: 25,
       inCart: 0
   },
   {
       id:53,
       name: 'Butterfly Bracelet', 
       img: 'img/accessories/bracelet2.jpg',
       price: 25,
       inCart: 0
   },
   {
       id:54,
       name: 'Flower Bracelet',
       img: 'img/accessories/bracelet3.jpg',
       price: 25,
       inCart: 0
   },
   {
       id:55,   
       name: 'SunFlower Bracelet', 
       img: 'img/accessories/bracelet4.jpg',
       price: 25,
       inCart: 0
   }
];

for (let i=0; i < carts.length; i++) {
    carts[i].addEventListener('click' , (e) => {
        e.preventDefault();
        cartNumbers(products[i]);
        totalcost(products[i]);
    })
}
function OnLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if(productNumbers) {
      document.querySelector('.carts span').innerHTML = productNumbers;
    }
}
/*------ adding products to cart using localstorage-----------*/
function cartNumbers(products){
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    if( productNumbers ){
        localStorage.setItem('cartNumbers' , productNumbers + 1);
        document.querySelector('.carts span').innerHTML= productNumbers + 1;
    }
    else {
      localStorage.setItem('cartNumbers' , 1);
      document.querySelector('.carts span').innerHTML = 1;
    }
    setItems(products);
}
/*--------- DETERMINE WHICH PRODUCT IS SELECT----------*/
function setItems(products) {
   let cartItem = localStorage.getItem('productsInCarts');
   /*json.parse داله ل تحويل ال object to string*/
   cartItem = JSON.parse(cartItem);
   if(cartItem != null) {
        if(cartItem[products.id] == undefined){
         cartItem = {
            ...cartItem,
            [products.id]: products
         }
        }
        cartItem[products.id].inCart += 1;
    } 
    else {
         products.inCart = 1;
         cartItem = {
         [products.id]: products
        }
    }
 localStorage.setItem("productsInCarts", JSON.stringify (cartItem));
}
/*--------calculating total cost of cart--------*/
function totalcost(products){
    let cartcost = localStorage.getItem('totalcost');
    if(cartcost != null) {
        cartcost = parseInt(cartcost);
        localStorage.setItem("totalcost", cartcost + products.price);
    }
    else {
         localStorage.setItem("totalcost", products.price);
    }
}
/*---------display product in cart page---------*/
function displayCartItem(){
    let cartItem = localStorage.getItem('productsInCarts');
    cartItem = JSON.parse(cartItem);
    let productContainer = document.querySelector('.product-container');
    let totalContainer = document.querySelector('.product-cont');
    let yourOrder = document.querySelector('.your-order');
    let cartcost = localStorage.getItem('totalcost');
   
    if(cartItem && productContainer ) {
        productContainer.innerHTML +=`
         <div class="product-header">
          <h5 class="product-title">PRODUCT</h5>
          <h5 class="price">PRICE</h5>
          <h5 class="quantity">QUANTITY</h5>
          <h5 class="total">TOTAL</h5>
         </div> `;
        Object.values(cartItem).map(item => {
        productContainer.innerHTML +=`
         <div class="product-item">
         <div class="product"> 
          <img src="./${item.img}" alt="">
          <span>${item.name}</span>
         </div>
         <div class="price"> $ ${item.price}.00
         </div>
         <div class="quantity">
          <p>${item.inCart}</p>
         </div>
         <div class="total">$ ${item.inCart * item.price }.00</div> 
         </div> `;
        })
        productContainer.innerHTML += `
         <div class="basketTotalContainer">
          <h4 class="basketTotal-title"> Total Price </h4>
          <h4 class="basket-total">$${cartcost}.00</h4>
         </div> `;
         totalContainer.innerHTML +=`
         <div class="subtotal">
         <h3>Order summery</h3>
         <table>
         <tr>
           <td>product Total</td>
           <td>$ ${cartcost}</td>
         </tr>
         <tr>
           <td>Shipping *(الشحن)*</td>
           <td>FREE</td>
         </tr>
         <tr>
           <td><strong>Total</strong></td>
           <td>$ ${cartcost}</td>
         </tr>
       </table>
       <br>
       <a href="checkout.php"><i>Checkout</i></a>
        `;
    }
    if( cartItem && yourOrder){
         yourOrder.innerHTML +=`
         <div class="order">               
         <table>
             <h2>Your order</h2>
             <hr>
             <br>
         <tr>
           <td><strong>Product</strong></td>
           <td><strong>Subtotal</strong></td>
         </tr>
         <tr>
           <td>products cost </td>
           <td>$ ${cartcost}</td>
         </tr>
         <tr>
           <td>Shipping  *(الشحن)* </td>
           <td>Free</td>
         </tr>
         <tr>
             <td><strong>Total</strong></td>
             <td>$ ${cartcost}</td>
           </tr>
       </table>
       <br>
       </div>
            `;
    } 
}
OnLoadCartNumbers();
displayCartItem();
