const express = require('express');
const app = express();
const port = 5000;
app.use(express.static(__dirname));

app.get("/", function(req, res){
    // console.log(req);
    // console.log(res);
    res.sendFile(__dirname + "/index.html");
});

app.listen(port, function(){
    console.log("Server Started on Port 5000")
});