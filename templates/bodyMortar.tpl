<section class="mortar-section">
    <div id="nameOfElement"></div>
    <div class=container>
        <div class=element-div id=mortar-map-container>
            <div id="infos-mortier"></div>
            <div class="top-left">
                <div class="dropdown">
                    <div class="inner">
                        <span>Carte </span>
                        <span><img src="img/arrow-down-filled-triangle.svg"></span>
                    </div>
                    <div class="dropdown-content">
                        <button onmouseover="refresh()" onclick="map('url(img/marigny.png)')">rp_marigny</button>
                        <button onmouseover="refresh()" onclick="map('url(img/falaise.png)')">rnl_firyofalaise</button>

                    </div>
                </div>
                <button id=download onclick=DownloadAsImage()></button>
            </div>
            <div id=previewImage></div>
            <div class=zoom>
                <button class=frame onclick="dezoom()">-</button><button class=frame onclick="zoom()">+</button>
            </div>
            <div id=map>
                <div id="line"></div>
                <div class="draggable mortarStart" id="mortarStart"></div>
                <div class="draggable mortarEnd" id="mortarEnd"></div>
                
            </div>
        </div>
    </div>

    <script>

        function adjustLine(from, to, line){

            var fT = from.offsetTop;
            var tT = to.offsetTop;
            var fL = from.offsetLeft;
            var tL = to.offsetLeft;

            var angleDeg = Math.atan2(fT - tT, fL - tL) * 180 / Math.PI + 180;
            var dist = Math.sqrt((fL-tL)*(fL-tL) + (fT - tT)*(fT - tT));
            var calculDeLaMort =90 - (0.5 * Math.asin((9.81*dist)/(60*60))) * 180 / Math.PI;
            var infos = angleDeg + " degrés Z, " + dist + " mètres, " + calculDeLaMort + " degrés X";


            document.getElementById("infos-mortier").innerHTML=infos; 



            console.log(angleDeg + " deg");
            console.log(dist + " px de distance");
            
            var CA   = Math.abs(tT - fT);
            var CO   = Math.abs(tL - fL);
            var H    = Math.sqrt(CA*CA + CO*CO);
            var ANG  = 180 / Math.PI * Math.acos( CA/H );

            if(tT > fT){
                var top  = (tT-fT)/2 + fT;
            }else{
                var top  = (fT-tT)/2 + tT;
            }
            if(tL > fL){
                var left = (tL-fL)/2 + fL;
            }else{
                var left = (fL-tL)/2 + tL;
            }

            if(( fT < tT && fL < tL) || ( tT < fT && tL < fL) || (fT > tT && fL > tL) || (tT > fT && tL > fL)){
                ANG *= -1;
            }
            top-= H/2;

            line.style["-webkit-transform"] = 'rotate('+ ANG +'deg)';
            line.style["-moz-transform"] = 'rotate('+ ANG +'deg)';
            line.style["-ms-transform"] = 'rotate('+ ANG +'deg)';
            line.style["-o-transform"] = 'rotate('+ ANG +'deg)';
            line.style["-transform"] = 'rotate('+ ANG +'deg)';
            line.style.top    = top+'px';
            line.style.left   = left+'px';
            line.style.height = H + 'px';
        }





        function refresh(){
            adjustLine(
                document.getElementById('mortarStart'), 
                document.getElementById('mortarEnd'),
                document.getElementById('line')
            );
        }

        refresh();



        function parentWidth(elem) {
            return elem.parentElement.clientWidth;
        }

        function parentHeight(elem) {
            return elem.parentElement.clientHeight;
        }




        var draggableElements = document.getElementsByClassName("draggable");

        for (var i = 0; i < draggableElements.length; i++) {
            dragElement(draggableElements[i]);
        }

        function dragElement(elmnt) {
            var pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;
            if (document.getElementById(elmnt.id + "header")) {
                document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
            } else {
                elmnt.onmousedown = dragMouseDown;
            }


            function dragMouseDown(e) {
                e = e || window.event;
                pos3 = parseInt(e.clientX);
                pos4 = parseInt(e.clientY);
                document.onmouseup = closeDragElement;
                document.onmousemove = elementDrag;
                return false;
            };

            function elementDrag(e) {
                e = e || window.event;
                pos1 = pos3 - parseInt(e.clientX);
                pos2 = pos4 - parseInt(e.clientY);
                pos3 = parseInt(e.clientX);
                pos4 = parseInt(e.clientY);

                var width = (elmnt.offsetLeft - pos1) / (parentWidth(elmnt) / 100);
                var height = (elmnt.offsetTop - pos2) / (parentHeight(elmnt) / 100);

                console.log(width + "%");
                console.log(height + "%");

                if (height > 100) {
                    height = 100;
                }
                if (height < 0) {
                    height = 0;
                }
                if (width > 100) {
                    width = 100;
                }
                if (width < 0) {
                    width = 0;
                }

                refresh()

                elmnt.style.top = height + "%";
                elmnt.style.left = width + "%";
            }

            function closeDragElement() {
                document.onmouseup = null;
                document.onmousemove = null;
            }
        };
    </script>

    <script>
        function supprimer(obj) {
            console.log("." + obj.classList[1]);
            $("." + obj.classList[1]).remove();
        };

        function changeTeam(obj) {
            if (obj.textContent === 'Allié') {
                obj.textContent = 'Ennemi';
            } else {
                obj.textContent = 'Allié';
            }


            var class1 = obj.classList[0];



            var elems = document.getElementsByClassName(class1 + " " + obj.id);
            console.log(elems);
            for (var i = 0; i < elems.length; i++) {
                elems[i].classList.toggle("change");
            }
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
</section>