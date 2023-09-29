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
  if(btn.innerText == 'ADD TO CART') {
      btn.innerText = 'ADDED TO CART';
  } else {
    btn.innerText = 'ADD TO CART';
  }
})
