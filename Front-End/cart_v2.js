let cart=getCart();
const USDollar = new Intl.NumberFormat('en-US', {
  style:'currency',
  currency:'USD'
});

showCart();
console.log("CART:", cart);
let confirmId=0;
async function checkout(userId)
{

    if (userId<0)
    {
     // alert("You must login first");
      return;
    }
    console.log ("CHECKOUT", userId);
    const data ={
      userId:userId,
      cart:cart
    }
    $.post("checkout.php", data, (resp)=>{
      console.log ("RESP",resp);

      if(resp>0)
      {
        confirmId=resp;
        sessionStorage.removeItem("cart");
        $("#mainForm").submit();
      }
    })

}
function getCart ()
{
  const temp=sessionStorage.getItem("cart");
  if (temp && temp!=null)
  {
    return JSON.parse(temp);
  }else
  {
    return [];
  }
}
function saveCart(){
    console.log ("Save cart:", cart);
  sessionStorage.setItem("cart", JSON.stringify(cart));
}
function getItemFromCart(productId)
{
  for (let c of cart)
  {
    if (c.productId===productId)
    {
      return c;
    }
  }
}
function additemToCart(item)
{
  console.log("additemToCart:", item);
  cart=getCart();
  for (let i in cart)
  {
    console.log("compare", cart[i], item);
    if (cart[i].productId===item.productId)
    {
      console.log("found", cart[i]);
      cart[i].quantity++;
      console.log(cart);
      saveCart();
      return;
    }
  }
  cart.push(item);
  saveCart();
  console.log("cart",cart);
}
function changeQuantity (idx, amt)
{
  cart=getCart();
  cart[idx].qty+=amt;
  saveCart();
}
function decrement(idx)
{
    console.log("decrement", cart[idx]);
    if(cart[idx].quantity<2)
    {
        return;
    }
    cart[idx].quantity--;
    saveCart();
    showCart();
        //alert(cart[idx].prodName);
}
function increment(idx)
{
    console.log("increment", cart[idx]);

    cart[idx].quantity++;
    saveCart();
    showCart();
}
function removeItemFromCart(idx)
{
    const temp=[];
    for (let i=0;i<cart.length;i++)
    {
        if (i!==idx)
        {
            temp.push(cart[i]);
        }else {
            console.log("remove item:", cart[i]);
        }
    }
    cart=temp;
    console.log("removeItemFromCart", idx, cart[idx])

    console.log(cart);
    saveCart()
}

function showCart ()
{

    let i=0;
    let content="";
    let total=0
    for (const item of cart)
    {
        console.log(item);
        total += (item.price*item.quantity);
        console.log("total", total);
        const temp = `
        <div class="product-card">
        <div class="card">
            <div class="img-box">
                <img src="img/products/${item.mainImage}" alt="${item.prodName}" class="summary-img">
            </div>

            <div class="detail">
                <h4 class="product-name">${item.prodName}</h4>
                <div class="wrapper">
                    <div class="product-qty">
                        <button id="decrement" onClick='decrement(${i})'>
                            <ion-icon name="remove-outline"></ion-icon>
                        </button>
                        <span id="quantity">${item.quantity}</span>
                        <button id="increment" onClick='increment(${i})'>
                            <ion-icon name="add-outline"></ion-icon>
                        </button>
                    </div>
                    <div class="price">
                         <span id="price">${USDollar.format(item.price*item.quantity)}</span>
                    </div>
                </div>
            </div>

            <button class="product-close-btn" id="remove" onClick='removeItemFromCart(${i})'>
                <ion-icon name="trash-outline"></ion-icon>
            </button>
        </div>
    </div>
        </div>
        `;
        ++i;
        content+=temp;
    }
    console.log("final total", total);

    $("#cartSummary").html(content);
    $("#subtotal").html(USDollar.format(total));
    $("#shipping").html(6.99);
    const tax = total * .065;
    $("#tax").html(USDollar.format(tax));
  $("#total").html(USDollar.format(total+tax+6.99));

}

// Confirms the submission of cart successfully went through by confirming a cart_id was created. 
function cartSubmit(frm)
{
  return confirmId>0;;
}

//Prevents cart from submitting on shipping.php page unless the user is logged in.
function shipSubmit(frm)
{
  if(userId<1)
  {
    alert("You must login first");
    return false;
  }
}