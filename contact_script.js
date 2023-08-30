 //post method for contact us page
 const api_url = "http://localhost:8080/contacts"

 function postData() {
    var name = document.getElementById("name").value;
    //console.log(name)
    var mobile = document.getElementById("mobile").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var message = document.getElementById("message").value;

    //console.log(name)
   
    
    data = {name: name, mobile: mobile, email: email, address: address, message: message};
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