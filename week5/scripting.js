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
    let text = `he's often called me "Honey!"`;
    document.getElementById("buttonid2").innerHTML = text;
}