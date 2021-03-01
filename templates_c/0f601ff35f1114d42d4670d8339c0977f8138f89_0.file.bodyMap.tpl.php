<?php
/* Smarty version 3.1.38, created on 2021-03-01 21:03:26
  from 'D:\laragon\www\lbdntools\templates\bodyMap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_603d569e93c4f8_11865545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f601ff35f1114d42d4670d8339c0977f8138f89' => 
    array (
      0 => 'D:\\laragon\\www\\lbdntools\\templates\\bodyMap.tpl',
      1 => 1614632329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603d569e93c4f8_11865545 (Smarty_Internal_Template $_smarty_tpl) {
?>

<body>
    <div id="nameOfElement"></div>
    <div class=container>
        <div class=element-div id=map-container>
            <div class="top-left">
                <div class="dropdown">
                    <div class="inner">
                        <span>carte </span>
                        <span><img src="img/arrow-down-filled-triangle.svg"></span>
                    </div>
                    <div class="dropdown-content">
                        <button onclick="map('url(img/marigny.png)')">rp_marigny</button>
                        <button onclick="map('url(img/falaise.png)')">rnl_firyofalaise</button>

                    </div>
                </div>
                <button id=download onclick=DownloadAsImage()></button>
            </div>
            <div id=previewImage></div>
            <div class=zoom>
                <button class=frame onclick="dezoom()">-</button><button class=frame onclick="zoom()">+</button>
            </div>
            <div id=map>


            </div>
        </div>
        <div class=element-div id=legende>
            <div class="add-module-div">
                <button onclick="addModuleMenu()" id=add-module>
                    <div class=frame>+</div>
                    <div>Ajouter un élément</div>
                </button>
                <div id=add-module-menu>
                    <button class=add-module-button onclick="addLegendElement('infantry')">Infanterie</button>
                    <button class=add-module-button onclick="addLegendElement('mg')">Mg</button>
                    <button class=add-module-button onclick="addLegendElement('tank')">Tank</button>
                    <button class=add-module-button onclick="addLegendElement('mortar')">Mortar</button>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
>
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


</body><?php }
}
