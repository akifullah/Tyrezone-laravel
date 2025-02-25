let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));





// IF CART IS EMPY
function isCartEmpt() {
    let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));

    if (cart != null) {
        if (cart.length == 0) {
            if (document.getElementById("checkout-table") != null) {
                document.getElementById("checkout-table").innerHTML = `<div class="text-center my-4"> 
            <i class="fa-solid fa-cart-plus"></i>
             <h6 class='text-center mt-2 '> Your Cart is Empty!</h6>
              </div>`

            }
            if (document.getElementById("mainCart") != null) {
                document.getElementById("mainCart").innerHTML = `<div class="text-center my-4"> 
            <i class="fa-solid fa-cart-plus"></i>
             <h6 class='text-center mt-2 '> Your Cart is Empty!</h6>
              </div>`

            }
            if (document.getElementById("cartItems") != null) {
                document.getElementById("cartItems").innerHTML = `<div class="text-center my-4"> 
            <i class="fa-solid fa-cart-plus"></i>
             <h6 class='text-center mt-2 '> Your Cart is Empty!</h6>
              </div>`

            }
            if (document.getElementById("sideCartBtnWrap") != null) {
                document.getElementById("sideCartBtnWrap").classList.add("d-none")

            }

        }
    }

}
isCartEmpt();


// TOTAL AMOUNT OF CART ITEM
function totalAmount() {
    let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
    let total = 0;
    let totalAmount = 0;

    cart.forEach(product => {
        total += ((parseFloat(product.price)) * product.qty);
        totalAmount += ((parseFloat(product.vat_price)) * product.qty);
    })

    document.querySelector("#totalAmount").innerText = "£" + total.toFixed(2);
    if (document.querySelector("#subTotal") != null) {
        document.querySelector("#subTotal").innerText = "£" + total.toFixed(2);
    }
    if (document.querySelector("#vatTotal") != null) {
        document.querySelector("#vatTotal").innerText = "£" + totalAmount.toFixed(2);
    }
    if (document.querySelector("#total") != null) {
        document.querySelector("#total").innerText = "£" + (parseFloat(total) + parseFloat(totalAmount)).toFixed(2);
    }
    if (document.querySelector("#totalPay") != null) {
        document.querySelector("#totalPay").innerText = "£" + total.toFixed(2);
    }
    if (document.querySelector("#totalPayAmount") != null) {
        document.querySelector("#totalPayAmount").value = total.toFixed(2);
    }

}

// INIT CART IF IT'S EMPTY 
if (cart != null) {
    let count = document.getElementById("count");
    count.innerHTML = cart.length;
} else {
    localStorage.setItem("tyreZoneCart", JSON.stringify([]));
}

// CART ITEM LENGTH 
function cartLength() {
    let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));

    let count = document.getElementById("count");
    count.innerHTML = cart.length;
}

//  GET SIDEBAR CART ITEMS WRAPPER WHERE ITEMS WILL BE DISPLAY 
let cartItemEle = document.getElementById("cartItems");

// GET AN ATTRIBUTE VALUE FOR BLADE TEMPLATE
let baseAssetUrl = document.getElementById('product-container').getAttribute('data-asset-base-url');

// SHOW CART ITEM TO DOM
function callData() {
    cartItemEle.innerHTML = "";

    let tbody = document.querySelector("#tbody");
    if (tbody != null) {
        tbody.innerHTML = "";
    }

    let checkoutCart = document.getElementById("checkout-tbody");

    if (checkoutCart != null) {
        checkoutCart.innerHTML = "";
    }

    let cartItem = JSON.parse(localStorage.getItem("tyreZoneCart"));

    cartItem.forEach(product => {

        // SIDE CART
        let newEle = document.createElement("div");
        newEle.classList.add("cart-item");
        newEle.classList.add("d-flex");
        newEle.innerHTML = `
                <div class="img">
                    <img src="${baseAssetUrl}/${(product.images.length > 0) ? product.images[0].name : "11729762572.png"}" style="aspect-ratio: 1/1; width:50px; object-fit:cover; border-radius: 4px" alt="">
                </div>
                <div class="item-detail">
                    <p class="title">${product.name}</p>

                    <div class="d-flex  align-items-center justify-content-between">
                        <div class="qty-wrap d-flex align-items-center">
                            <button class="dec"><i class=" dec fa-solid fa-minus"></i></button>
                            <input class="qty" type="text" min="1" disabled value="${product.qty}">
                            <button class="inc"><i class="inc fa-solid fa-plus"></i></button>
                        </div>
                        <p class=" price">£ ${(product.price * product.qty).toFixed(2)}</p>
                    </div>

                </div>
                <a href="javascript:void(0)"  class="ms-auto remove-icon"><i id="" class="removeItem fa-solid fa-xmark"></i></a>
            `;

        cartItemEle.appendChild(newEle);

        newEle.addEventListener("click", (e) => {
            if (e.target.classList.contains("removeItem")) {
                removeFromCart(product.id);

            }
            if (e.target.classList.contains("inc")) {
                increaseQty(product.id);

            }
            if (e.target.classList.contains("dec")) {
                decreaseQty(product.id);

            }
        })


        // MAIN CART PAGE
        let tbody = document.querySelector("#tbody");
        if (tbody != null) {
            let tr = document.createElement("tr");

            tr.innerHTML = `<td class="text-center"><img src="${baseAssetUrl}/${(product.images.length > 0) ? product.images[0].name : "11729762572.png"}" alt="" class="serviceicon" width="65"></td>
                        <td data-th="Product Name:" class="text-left">${product.name}</td>
                        <td class="text-center">
                            <div class="quantity">
                                <div class="d-flex alig-items-center">
                                    <button class="main-btn dec"><i class="dec fa-solid fa-minus"></i></button>
                                    <input type="text" min="1" disabled  value="${product.qty}">
                                    <button class="main-btn inc"><i class="inc fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </td>
                        <td data-th="Unit Price:" class="text-right">£${(+product.price).toFixed(2)}</td>
                        <td data-th="Total:" class="text-right">£${(product.qty * product.price).toFixed(2)}</td>
                        <td class="text-start"><span class="input-group-btn">
                                <button type="button" class="remove removeItem "><i class="removeItem fa-solid fa-trash-can"></i></button>
                            </span></td>`;

            tbody.appendChild(tr);
            tr.addEventListener("click", (e) => {
                if (e.target.classList.contains("removeItem")) {

                    removeFromCart(product.id);

                }
                if (e.target.classList.contains("inc")) {
                    increaseQty(product.id);

                }
                if (e.target.classList.contains("dec")) {
                    decreaseQty(product.id);

                }
            })
        }

        // CHECKOUT PAGE CART 

        let checkoutCart = document.getElementById("checkout-tbody");

        if (checkoutCart != null) {
            let tr = document.createElement("tr");
            tr.innerHTML = `<td>
                                <div class="item-title">
                                    <p>${product.name}</p>
                                    <input type="hidden" name="product_id[]"  value="${product.id}">
                                    <input type="hidden" name="qty[]"  value="${product.qty}">

                                </div>
                            </td> 

                            <td>
                                <div class="qty-wrap d-flex align-items-center">
                                    <button type="button" class="dec"><i class="dec fa-solid fa-minus"></i></button>
                                    <input type="text" min="1" disabled name='qty' value="${product.qty}">
                                    <button type="button" class="inc"><i class="inc fa-solid fa-plus"></i></button>
                                </div>
                            </td>
                            <td>
                                <p class="price mb-0">£${((parseFloat(product.price)) * product.qty).toFixed(2)}</p>
                            </td>
                            <td>
                                <div class="text-end">
                                    <button type="button" class="remove-item removeItem">
                                        <i class="removeItem fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                            </td>`
            checkoutCart.appendChild(tr);

            tr.addEventListener("click", (e) => {
                if (e.target.classList.contains("removeItem")) {
                    removeFromCart(product.id);

                }
                if (e.target.classList.contains("inc")) {
                    increaseQty(product.id);

                }
                if (e.target.classList.contains("dec")) {
                    decreaseQty(product.id);

                }
            })

        }



    })

    totalAmount();
    isCartEmpt();

}
callData();



function removeFromCart(id) {
    let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
    let filterData = cart.filter(product => product.id != id);

    localStorage.setItem("tyreZoneCart", JSON.stringify(filterData));
    isCartEmpt();

    callData();
    cartLength()
}


function increaseQty(id) {
    let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
    let item = cart.findIndex(item => item.id == id);

    if (cart[item].qty >= cart[item].in_stock) {
        alert("Stock is limited!")
        cart[item].qty = cart[item].in_stock;
        localStorage.setItem("tyreZoneCart", JSON.stringify(cart));
        return;
    }
    cart[item].qty += 1;
    localStorage.setItem("tyreZoneCart", JSON.stringify(cart));

    callData();
    // cartLength()
}
function decreaseQty(id) {
    let cart = JSON.parse(localStorage.getItem("tyreZoneCart"));
    let item = cart.findIndex(item => item.id == id);

    if (cart[item].qty > 1) {

        cart[item].qty -= 1;
        localStorage.setItem("tyreZoneCart", JSON.stringify(cart));

        callData();
    }

    // cartLength()
}