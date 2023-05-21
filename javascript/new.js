let name = 'Himel'
console.log(name);

let teacher = {
    name: 'Kamal',
    age:30
}
console.log(teacher);
//remove falsy value
let addr = [
  'Dhaka',
  NaN,
  'Hili',
  'America',
  false
];
let check = addr.filter(Boolean);
console.log(check);
//Convert a value to boolean
// !! convert any type of data into boolean
console.log(!!"masrafee");

//Resizing an array
let animals  = [
    'Dhaka',
    'Hili',
    'London',
    'kaspit'
];
animals.length = 3 
console.log( animals);
// flat any array
let num = [1,[23,11],[1,34,45,[3,2]],6];
console.log(num.flat(Infinity));

//short conditionals
let captain = 'masrafee';
captain==='masrafee' && console.log("Love");
//Replace all occcurs of a string

const quote = "React is  a JS framework & this framework is the most popular front-end framework right now";
 console.log(quote.replace(/framework/g,"library"));
 //know the performance of the task
 const startTime = performance.now();
 for(let i=0;i<=50;i++){
    console.log(i);
 }
 const endTime = performance.now();
 console.log(`loop will talke ${endTime-startTime} miliseconds `)