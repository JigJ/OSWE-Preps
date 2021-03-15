// const person = {
//     name:  'John',
//     age: 30
// }

class Person{
    constructor(name, age) {
       this.name = name;
       this.age = age;  
    }

    greetings(){
        console.log(`My name is ${this.name} and I am ${this.age}`);
    }
}

module.exports = Person;

// const Person = require('./person');

// const person1 = new Person('John Doe',30);
// person1.greetings();
// //console.log(person.name);
