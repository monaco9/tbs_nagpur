const express = require("express");
const port = 8080;
const user_model = require("./menu_dbconn.js");
const cart_model = require("./cart_dbconn.js")
const contacts_model = require("./contacts_db.js")
//const user = require('./userSchema')
// const User = user_model.User

const app = express();
app.use(express.json());
var cors = require('cors');
app.use(cors());

//get method , api
app.get("/menu" , async(req,res) =>{
    let data = await user_model
    data = await data.find({})
    res.send(data);
    console.log(data)
})
//post method
app.post("/menu", async(req,res) =>{
    let u = new user_model(req.body);
    let result = await u.save();
    res.send(result)
});

//----post method for sending data in cart
app.post("/carts", async(req,res) =>{
    let c = new cart_model(req.body);
    let result = await c.save();
    res.send(result)
});

//post method contact page
app.post("/contacts", async(req,res) =>{
    let cont = new contacts_model(req.body);
    let result = await cont.save();
    res.send(result)
});

app.listen(process.env.PORT || port, () => {
    console.log(`Listening on port ${port}`);
    });