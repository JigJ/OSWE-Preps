const event = require('events');

// Create Class
class MyEmitter extends event {}

// Init Objext
const myEmitter = new MyEmitter();

// Event Listener
myEmitter.on('event', ()=> console.log("Event fired!"));

// Event Emit/ Init event
myEmitter.emit('event');
myEmitter.emit('event');
myEmitter.emit('event');
