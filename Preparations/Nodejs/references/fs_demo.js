const fs = require('fs');
const path = require('path');

// Create folder

fs.mkdir(path.join(__dirname,'/test'), {}, (err)=>{  //function(err){
    if(err){
        console.log("Folder Exists");
    }
        
    console.log('Folder created..');
});

// Create and Write to file (Overwrites)

fs.writeFile(
    path.join(__dirname,'/test', 'hello.txt'), 
    'Hello World!', 
    (err)=> {  
        if(err) throw err;
        console.log('File Written to ..');
        
        // Append file
        fs.appendFile(
            path.join(__dirname,'/test', 'hello.txt'), 
            '\nI love Node.js!', 
            (err)=> {  
                if(err) throw err;
                console.log('File Appended to ..');
            }
        );


    }
);

// Read file

fs.readFile(path.join(__dirname,'/test', 'hello.txt'), 'utf-8', (err, data)=>{  //function(err){
    if(err) throw err;
    console.log(data);
});

// Rename file

fs.rename(
    path.join(__dirname,'/test', 'hello.txt'), 
    path.join(__dirname,'/test', 'helloWorld.txt'),  
    (err) => {  
    if(err) throw err;
    console.log("Renamed File");
});