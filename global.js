var pointID = 0;

function choose(choice) {
    $(document).ready(function () {

        $('#content').load(choice);

    });
}
$(document).ready(function () {

    $('#content').load('accueil.html');

});

function map(choice) {
    $('#map').css('background-image', choice);
};

$('#map').css('background-image', 'url(img/marigny.png)');

function dezoom() {
    var size = document.getElementById('map').clientHeight;
    console.log(size);
    size = size * 90 / 100;
    size = size + "px";
    console.log(size);
    $('#map').css('width', size);
    $('#map').css('height', size);
};

function zoom() {
    var size = document.getElementById('map').clientHeight;
    console.log(size);
    size = size * 110 / 100;
    size = size + "px";
    console.log(size);
    $('#map').css('width', size);
    $('#map').css('height', size);
};

function addLegendElement(choice) {
    document.getElementById("add-module-menu").classList.toggle("change");
    var iframe = document.createElement("div");
    var i;
    
    iframe.classList.add("icon");
    iframe.classList.add(pointID + "");
    iframe.classList.add(choice);
    
    
    var buttonTeam = document.createElement("button");
    buttonTeam.setAttribute('onClick','changeTeam(this)');
    buttonTeam.classList.add(pointID + '');
    buttonTeam.classList.add('buttonTeam');
    buttonTeam.textContent = "Allié";
    buttonTeam.id = choice;
    var div = document.createElement("div");



    div.classList.add("draggable");
    div.classList.add(pointID + "");
        div.classList.add(choice);

    div.style.top = '50%';
    div.style.left = '50%';

        var div2 = document.createElement("div");
    div2.id = choice + pointID;
    div2.classList.add(pointID + "");
    div2.classList.add("legend-content");
    
    var close = document.createElement("button");
    close.classList.add("delete");
    close.setAttribute('onclick','supprimer(this)');
    close.classList.add(pointID + "");

    document.getElementById("legende").appendChild(div2);
    document.getElementById(choice + pointID).appendChild(iframe);
    document.getElementById(choice + pointID).appendChild(close);
    document.getElementById(choice + pointID).appendChild(buttonTeam);
    
    document.getElementById("map").appendChild(div);

    draggableElements = document.getElementsByClassName("draggable");
    var draggableElements = document.getElementsByClassName("draggable");
    pointID = pointID + 1;
    for (i = 0; i < draggableElements.length; i++) {
        dragElement(draggableElements[i]);
    }

};
function addModuleMenu(){
        document.getElementById("add-module-menu").classList.toggle("change");

};

