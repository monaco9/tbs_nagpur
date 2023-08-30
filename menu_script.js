
const api_url = "http://localhost:8080/menu"
function loadData(records = []) {
var table_data = "";
for(let i=0; i<records.length; i++) {
    
table_data += `<tr>`;

table_data += `<td>${records[i].dish}</td>`;
table_data += `<td>${records[i].price}</td>`;
table_data += `<td>`;

table_data += `<input type="submit" id="input" value= "+"  onclick="add('(${records[i].dish})','(${records[i].price})')" onclick="sendToCart()">`;

table_data += `<input type="submit" value= "-" oonclick="minus('(${records[i].dish})','(${records[i].price})')">`;

table_data += '&nbsp;&nbsp;';
table_data += `</td>`;
table_data += `</tr>`;
}


//console.log(table_data);
document.getElementById("tbody").innerHTML = table_data;
}
function getData() {
fetch(api_url)
.then((response) => response.json())
.then((data) => {
console.table(data);
loadData(data);
});
}
function getDataById(id) {
fetch(`${api_url}/${id}`)
.then((response) => response.json())
.then((data) => {
console.log(data);
document.getElementById("dish").value = data._dish;
document.getElementById("price").value = data.price;

})
}





//post
function postData() {
    var dish = document.getElementById("dish").value;
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
    window.location.href = "menu.html";
    })
    }

 
