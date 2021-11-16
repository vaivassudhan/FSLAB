var f = ["Hello","Hi","Welcome","Tomorrow is your day!"];
function getF(){
    document.getElementById("fortune").innerHTML = f[Math.floor(Math.random()*f.length)];
}