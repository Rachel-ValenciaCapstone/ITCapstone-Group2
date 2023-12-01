// changes main image with small image when clicked 
var MainImg = document.getElementById("MainImg");
var SmallImg = document.getElementsByClassName("small-img");

SmallImg[0].onclick = function() {
  MainImg.src = SmallImg[0].src;
}
SmallImg[1].onclick = function() {
  MainImg.src = SmallImg[1].src;
}
SmallImg[2].onclick = function() {
  MainImg.src = SmallImg[2].src;
}
SmallImg[3].onclick = function() {
  MainImg.src = SmallImg[3].src;
}

// add to cart button
let btn = document.querySelector('.button-28');

btn.addEventListener("click",()=>{
  console.log("additemToCart")
  if(btn.innerText == 'ADD TO CART') {

    const queryString = window.location.search;   // Gets current URL (aka ID number)
    const urlParams = new URLSearchParams(queryString);  // Searches for all params that need to be passed in 
    const productId = urlParams.get('id');   // now finds param (in this case, id) 
    const price=document.getElementById("price"+productId).innerHTML;
    const prodName = document.getElementById("prodName"+productId).innerHTML;
    const mainImage = document.getElementById("mainImage").value;
    additemToCart({productId:parseInt(productId), price:parseFloat(price), quantity:1, prodName:prodName, mainImage:mainImage})
    
      btn.innerText = 'ADDED TO CART';
  } else {
    btn.innerText = 'ADD TO CART';
  }
})
