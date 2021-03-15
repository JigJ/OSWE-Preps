const http = require('http');

// Create Server Object
// Remeber Server is always a listener thus we have a callback function
http.createServer((req, res)=>{
    // Write response
    res.write('Hello World');
    res.end()
}).listen(5000, ()=> console.log('Server running ...'));