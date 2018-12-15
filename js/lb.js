var begin = document.querySelector(".begin");
var pause = document.querySelector(".pause");
var fastNeutron = document.querySelector(".fastNeutron");
var nucleus2 = document.querySelector(".nucleus2");
var nucleus3 = document.querySelector(".nucleus3");
var newNentron = document.querySelector(".newNentron");
var newNentron1 = document.querySelector(".newNentron1");

var nucleus = document.querySelector(".nucleus");
var nucleus21 = document.querySelector(".nucleus21");
var nucleus22 = document.querySelector(".nucleus22");
var nucleus31 = document.querySelector(".nucleus31");
var nucleus32 = document.querySelector(".nucleus32");
var nucleus33 = document.querySelector(".nucleus33");
var nucleus34 = document.querySelector(".nucleus34");

var newNentron21 = document.querySelector(".newNentron21");
var newNentron22 = document.querySelector(".newNentron22");
var newNentron23 = document.querySelector(".newNentron23");
var newNentron24 = document.querySelector(".newNentron24");
var newNentron25 = document.querySelector(".newNentron25");
var newNentron26 = document.querySelector(".newNentron26");

var energy = document.querySelector(".energy")
var energy1 = document.querySelector(".energy1")
var energy2 = document.querySelector(".energy2")
begin.onclick = function () {
    fastNeutron.style.animationPlayState = "running";
    nucleus2.style.animationPlayState = "running";
    nucleus3.style.animationPlayState = "running";
    newNentron.style.animationPlayState = "running";
    newNentron1.style.animationPlayState = "running";
    // setTimeout(function(){
    //     fastNeutron.style.display="none"
    // },5000);
    
}
pause.onclick = function () {
    fastNeutron.style.animationPlayState = "paused";
}
fastNeutron.addEventListener('animationend', function () {
    fastNeutron.style.display = "none";
    nucleus.style.display = "none";
    nucleus2.style.display = "block";
    nucleus3.style.display = "block";
    newNentron.style.display = "block";
    newNentron1.style.display = "block";
    nucleus21.style.display = "block";
    nucleus22.style.display = "block";
    energy.style.animationPlayState="running";
    
})
newNentron.addEventListener('animationend', function () {
    nucleus21.style.display = "none";
    nucleus22.style.display = "none";
    nucleus31.style.display = "block";
    nucleus32.style.display = "block";
    nucleus33.style.display = "block";
    nucleus34.style.display = "block";
    newNentron21.style.display="block";
    newNentron22.style.display="block";
    newNentron23.style.display="block";
    newNentron24.style.display="block";
    newNentron25.style.display="block";
    newNentron26.style.display="block";
    newNentron.style.display = "none";
    newNentron1.style.display = "none";
    energy1.style.animationPlayState="running";
    energy2.style.animationPlayState="running";
})
