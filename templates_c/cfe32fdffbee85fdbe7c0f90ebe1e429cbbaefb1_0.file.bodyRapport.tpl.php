<?php
/* Smarty version 3.1.38, created on 2021-03-02 18:20:56
  from 'D:\laragon\www\lbdntools\templates\bodyRapport.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_603e8208a617b1_84034482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe32fdffbee85fdbe7c0f90ebe1e429cbbaefb1' => 
    array (
      0 => 'D:\\laragon\\www\\lbdntools\\templates\\bodyRapport.tpl',
      1 => 1614709253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603e8208a617b1_84034482 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="rapport-section">
    <div id=rapport-container>
        <textarea placeholder="Lieu&#10Date&#10Grade&#10Nom Prénom" class=nom-prenom ></textarea>
        <textarea placeholder="Rapport" class=contenu ></textarea>
        <textarea class=titre placeholder="Titre"></textarea>
        <textarea class=inventaire placeholder="Inventaire"></textarea>
        <textarea class=regiment placeholder="Régiment, compagnie ..."></textarea>

    </div>
    <div class="element-div rapport">
        <div class="top-left">
            <div class="dropdown">
                <div class="inner">
                    <span>Rapport</span>
                    <span><img src="img/arrow-down-filled-triangle.svg"></span>
                </div>
                <div class="dropdown-content">
                    <button class="rapport-all">Rapport&nbspallemand</button>
                    <button class="rapport-us">Rapport&nbspaméricain</button>
                </div>
            </div>
            <button id=download onclick=DownloadAsImage2()></button>
        </div>
    </div>
    <div class="element-div form">
    </div>
</section><?php }
}
