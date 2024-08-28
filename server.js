const express = require('express');
const mongoose = require("mongoose");
const path = require("path")
const app = express();
const port = 5000;


 app.use(express.static(__dirname));
 app.use(express.urlencoded({extended:true}))

 mongoose.connect('mongodb://localhost:27017/UserData', {
    useNewUrlParser: true,
    useUnifiedTopology: true,
}).then(() => {
    console.log("MongoDB connection successful");
}).catch((error) => {
    console.error("MongoDB connection error:", error);
});


const validator = require('validator');

const userSchema = new mongoose.Schema({
    exampleInputPassword1: {
        type: String,
        
    },
    exampleInputEmail1: {
        type: String,
        required: true,
        validate(value) {
            if (!validator.isEmail(value)) {
                throw new Error("Invalid email address");
            }
        }
    }
});


 const Users = mongoose.model("data",userSchema);

app.get("/", function(req, res){
    console.log(req);
    console.log(res);
    res.sendFile(__dirname + "/index.html");
});


app.post("/post", async (req, res) => {
    try {
    //                  console.log(req.body);
      const { exampleInputEmail1, exampleInputPassword1 } = req.body;
  
      if (!exampleInputEmail1 || !exampleInputPassword1) {
        return res.status(400).send("Both username and password are required.");
      }
  
      const User = new Users({
        exampleInputEmail1,
        exampleInputPassword1
      });
  
      await User.save();
      console.log(User);
  
      // Redirect to the index.html page after successful form submission
      res.redirect('./admin/index.html');
    } catch (error) {
      console.error("Error saving data:", error);
      res.status(500).send("Internal server error");
    }
  });


app.listen(port, function(){
    console.log("Server Started on Port 5000")
}); 