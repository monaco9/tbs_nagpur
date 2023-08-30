
 const api_url = "http://localhost:8080/carts"

 function sendToCart() {
    var dish = document.getElementById("dish").value;
    //console.log(name)
    var price = document.getElementById("price").value;
   
   
    
   data = {dish: dish, price: price};
   fetch(api_url, {
    method: "POST",
    headers: {
    'Accept': 'application/json',
    'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
    })
    .then((response) => response.json())
    .then((data) => {
    console.log(data);
   //  window.location.href = "main.html";
    })
    }