<?php
/* Smarty version 3.1.38, created on 2021-03-04 17:28:36
  from 'D:\laragon\www\lbdntools\templates\bodyMortar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_604118c4107992_78436552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d82443ccd88e131497f1433e6ef30fce9d0c9a6' => 
    array (
      0 => 'D:\\laragon\\www\\lbdntools\\templates\\bodyMortar.tpl',
      1 => 1614878906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604118c4107992_78436552 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="mortar-section">
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
                        <button onclick="map('url(img/marigny.png)',6.6325)">rp_marigny</button>
                        <button onclick="map('url(img/falaise.png)',8.2052)">rnl_firyofalaise</button>

                    </div>
                </div>
                <button id=download onclick=DownloadAsImage()></button>
            </div>
            <div id=previewImage></div>
            <div class=zoom>
                <button class=frame onclick="dezoom()">-</button><button class=frame onclick="zoom()">+</button>
            </div>
            <div id=map class="6.6325">
                <div id="infos"></div>
                <div class="mortarEnd" id="mortarEnd"></div>
                <div class="draggable mortarStart" id="mortarStart"></div>
                
                
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        

        function adjustLine(from, line){
            var mapSize = parseFloat(document.getElementById("map").classList[0]);


            var fT = from.offsetTop;
            var fL = from.offsetLeft;

            
            var dist = 50*50/8.91*Math.sin(2*(45 * Math.PI/180));
            console.log(dist + "m");
            dist = dist / mapSize ;
            console.log(dist + "%");






            
            line.style.top    = fT+'px';
            line.style.left   = fL+'px';
            line.style.height   = dist * 2 +'%';
            line.style.width   = dist * 2 +'%';
        }





        function refresh(){
            adjustLine(
                document.getElementById('mortarStart'), 
                document.getElementById('mortarEnd')
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
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
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
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"><?php echo '</script'; ?>
>
</section><?php }
}
