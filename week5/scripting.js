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

function button3(){
    document.getElementById("buttonid3").innerHTML = person.firstName + person.lastName;
}

const person =  {
    firstName: "Janson",
    lastName: "Pagharion"
};