// var car = function(name, year, color){
//     this.name = name;
//     this.year = year;
//     this.color = color;
//     this.fullcardetails = function(name, year, color){ 
//       console.log(this.name + this.year + this.color);
//     }
//   }
  
//   var cardetails1 = new car("toyota corolla", 2000, "black");
//   var cardetails2 = new car ("toyota corolla", 2000, "black");
//   var cardetails3 = new car("toyota corolla", 2000, "black");
//   var cardetails4 = new car ("toyota corolla", 2000, "black");
//   cardetails1.fullcardetails();

// function reverseInPlace(str) {
//     var words = [];
//     words = str.split("\s+");
//     var result = "";
//     for (var i = 0; i < words.length; i++) {
//         return result += words[i].split("").reverse().join("");
//     }
// }
// console.log(reverseInPlace("mid"));

// var car = function car (name, year, color) {
//     this.name = name;
//     this.year = year;
//     this.color = color;
//     this.fullcardetails = function() {
//       return this.name +  this.year + this.color};
//     console.log(this.name + this.year + this.color);
// }
  
//   var cardetails1 = new car("toyota corolla", " ", 2000, " ", "black") ;
//   var cardetails2 = new car ("toyota corolla", " ", 2000, " ", "black") ;
//   var cardetails3 = new car("toyota corolla", " ", 2000, " ", "black") ;
//   var cardetails4 = new car ("toyota corolla", " ", 2000, " ", "black") ;
//   document.getElementById("demo").innerHTML = "My new car is " + cardetails1.color

var myString = 'I\'m a "fun" girl'

console.log(myString.toLowerCase());
console.log(myString.toUpperCase());
console.log(myString.length);