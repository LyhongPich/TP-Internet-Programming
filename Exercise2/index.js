const express = require('express');
const fs = require('fs');
const app = express();

app.get('/', (req,res)=>{
    fs.readFile('src/ListAndViewer.html', 'utf8', (err,data)=>{
        if(err) {
            console.error(err);
            return;
        }
        res.send(data);
    });
});

app.listen(3000, ()=>{
    console.log("The server is running on port 3000");
});