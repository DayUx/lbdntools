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

    var iframe = document.createElement("div");
    var i;
    iframe.id = choice;
    iframe.classList.add("legend-content");
    iframe.classList.add("players");
    iframe.classList.add(pointID + "");
    iframe.classList.add(choice);
    
    var div = document.createElement("div");
    
    pointID = pointID + 1;

    div.classList.add("draggable");
    div.classList.add(pointID + "");
    div.style.top = '50%';
    div.style.left = '50%';



    document.getElementById("legende").appendChild(iframe);
    document.getElementById("map").appendChild(div);
    
    $( "#" + choice ).load( "legend/infantry.html" );
    draggableElements = document.getElementsByClassName("draggable");
    var draggableElements = document.getElementsByClassName("draggable");

    for (i = 0; i < draggableElements.length; i++) {
        dragElement(draggableElements[i]);
    }

};

