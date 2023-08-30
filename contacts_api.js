const express = require("express");
const port = 8080;
const user_model = require("./contacts_db.js");

const app = express();
app.use(express.json());
var cors = require('cors');
app.use(cors());

//post method contact page
app.post("/contacts", async(req,res) =>{
    let u = new user_model(req.body);
    let result = await u.save();
    res.send(result)
});


app.listen(process.env.PORT || port, () => {
    console.log(`Listening on port ${port}`);
    });