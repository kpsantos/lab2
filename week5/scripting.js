//loading in javascript
let link = document.createElement('link');
//attribute setting
link.rel = 'stylesheet';
link.type = 'text/css';
link.href = 'website.css';

//html head element append link element
function button1(){
    let spotifyName = "kizzah";
    document.getElementById("buttonid1").innerHTML = spotifyName;
}

function button2(){
    document.getElementById("buttonid2").innerHTML = cars[0];

}

function wallahi(){
    document.getElementById("buttonid3").innerHTML = test.course;
}

function aSync(some){
    document.getElementById("demo").innerHTML = some;
}

function first(){
    aSync("Hello");
}

function second(){
    aSync("I like turtles.");
}

first();
second();
class aboutMe{
    constructor(course, year) {
        this.course = course;
        this.year = year;
    }
}

const test = new aboutMe("Computer Science", 2023);




const person =  {
    firstName: "Janson",
    lastName: "Pagharion"
};