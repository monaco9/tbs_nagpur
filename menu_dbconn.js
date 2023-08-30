//1-db connection
const mongoose = require("mongoose");
const conn_str = "mongodb+srv://mushmiir:mangodb@cluster0.1lp1fhx.mongodb.net/restraunt?retryWrites=true&w=majority"

mongoose.connect(conn_str, { useNewUrlParser: true, useUnifiedTopology: true })
.then(() => console.log("Connected successfully menu..."))
.catch( (error) => console.log(error) );

//2
const userSchema = new mongoose.Schema({
    dish: String,
    price: Number
})
//3
 module.exports = mongoose.model("menus",userSchema);
//  exports.User = UserObject;
