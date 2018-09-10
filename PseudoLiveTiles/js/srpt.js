var tiles = document.getElementsByClassName('tile');

function updateTile() {
    // We need a random tile between 0 and 8 (array indexes start from 0)
    var min = 0, max = 8; 
    var rand = Math.round(Math.random() * (max - min)) + min;  

    tiles[rand].classList.add('start');
    setTimeout(function() {
        tiles[rand].classList.remove('start');
    }, 500);
}
console.log("hi");
(function loop() {
    // We need a random time interval between 100 and 3000 milliseconds
    var min = 100, max = 3000; 
    var rand = Math.round(Math.random() * (max - min)) + min;  
    
    setTimeout(function() {
        updateTile();
        loop();
    }, rand);
}());

