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
    buttonTeam.setAttribute('onClick', 'changeTeam(this)');
    buttonTeam.classList.add(pointID + '');
    buttonTeam.classList.add('buttonTeam');
    buttonTeam.textContent = "Allié";
    buttonTeam.id = choice;


    var okInput = document.createElement("button");
    okInput.setAttribute('onClick', 'submit(this)');
    okInput.classList.add(pointID + '');
    okInput.classList.add('okInput');
    okInput.textContent = "OK";

    var div3 = document.createElement("div");
    div3.id = "input" + pointID;
    div3.classList.add(pointID + '');
    div3.classList.add('divInput');

    var div4 = document.createElement("div");
    div4.classList.add(pointID + '');
    div4.classList.add('nameInput');
    div4.innerHTML = "name : ";


    var inputName = document.createElement("input");
    inputName.classList.add(pointID + '');
    inputName.classList.add('inputName');
    inputName.value = pointID;

    var div = document.createElement("div");



    div.classList.add("draggable");
    div.classList.add(pointID + "");
    div.classList.add(choice);
    div.setAttribute('onmouseenter', 'showName(this)');
    div.setAttribute('onmouseleave', 'showName(this)');
    div.style.top = '50%';
    div.style.left = '50%';

    var div2 = document.createElement("div");
    div2.id = choice + pointID;
    div2.classList.add(pointID + "");
    div2.classList.add("legend-content");

    var close = document.createElement("button");
    close.classList.add("delete");
    close.setAttribute('onclick', 'supprimer(this)');
    close.classList.add(pointID + "");

    document.getElementById("legende").appendChild(div2);
    document.getElementById(choice + pointID).appendChild(iframe);
    document.getElementById(choice + pointID).appendChild(close);
    document.getElementById(choice + pointID).appendChild(buttonTeam);
    document.getElementById(choice + pointID).appendChild(div3);
    document.getElementById("input" + pointID).appendChild(div4);
    document.getElementById("input" + pointID).appendChild(inputName);
    document.getElementById("input" + pointID).appendChild(okInput);


    document.getElementById("map").appendChild(div);

    draggableElements = document.getElementsByClassName("draggable");
    var draggableElements = document.getElementsByClassName("draggable");
    pointID = pointID + 1;
    for (i = 0; i < draggableElements.length; i++) {
        dragElement(draggableElements[i]);
    }

};

function addModuleMenu() {
    document.getElementById("add-module-menu").classList.toggle("change");

};

function showName(obj) {
    document.getElementById("nameOfElement").classList.toggle("change");
    var name = obj.classList[1];
    document.getElementById("nameOfElement").textContent = name + "";
};

document.addEventListener('mousemove', function (e) {

    var body = document.getElementById('map');
    var circle = document.getElementById('nameOfElement');
    var left = e.pageX;
    var top = e.pageY;
    circle.style.left = left + 'px';
    circle.style.top = top + 'px';
});



function submit(obj) {
    var class1 = obj.classList[0];
     

    var input = document.getElementsByClassName( "inputName " + class1);
    var newclass = input[0].value;
    newclass = newclass.replace(/\s/g, '');
    var j = 1;
    while (typeof document.getElementsByClassName(class1 + "") !== 'undefined' && document.getElementsByClassName(newclass + "").length > 0) {
        newclass = newclass + "(" + j +")";
    }
    input[0].value = newclass +"";
    var elems = document.getElementsByClassName(class1 + "");
    console.log(elems);
    var x = elems.length;
    while (elems !== 'undefined' && elems.length > 0) {
        console.log(i);
        console.log(elems);
        elems[0].className = elems[0].className.replace(class1 + "", newclass + "");
    }
}