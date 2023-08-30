//Step 1: Database connection using connection string
const mongoose = require("mongoose");
//mongodb://127.0.0.1:27017/dbname
//const conn_str = "mongodb://localhost:27017/tcet";
// const conn_str = "mongodb+srv://user:passwd@cluster0.gp5lcta.mongodb.net/<DBNAME>?retryWrites=true&w=majority"
const conn_str = "mongodb+srv://mushmiir:mangodb@cluster0.1lp1fhx.mongodb.net/restraunt?retryWrites=true&w=majority";

mongoose.connect(conn_str, { useNewUrlParser: true, useUnifiedTopology: true })
.then(() => console.log("Connected successfully cart..."))
.catch( (error) => console.log(error) );



//Step 2: Create Schema (similar to Java Class)
const userSchema = new mongoose.Schema({
dish: String,
price: Number,

})
//Step 3: Create collection Object (model)
// MAPPING
const userObject = new mongoose.model("carts", userSchema);
exports.User = userObject;