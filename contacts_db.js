   //1-db connection
const mongoose = require("mongoose");
const conn_str = "mongodb+srv://mushmiir:mangodb@cluster0.1lp1fhx.mongodb.net/restraunt?retryWrites=true&w=majority"

mongoose.connect(conn_str, { useNewUrlParser: true, useUnifiedTopology: true })
.then(() => console.log("Connected successfully contacts..."))
.catch( (error) => console.log(error) );

//2
const userSchema = new mongoose.Schema({
    name: String,
    mobile: Number,
    email: String,
    address: String,
    message: String
})

 //3
 module.exports = mongoose.model("contacts",userSchema);
//  exports.User = UserObject;
