<?php
/* Smarty version 3.1.38, created on 2021-03-02 16:40:40
  from 'D:\Programmes\laragon\www\lbdntools\templates\bodyRapport.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_603e6a881792d9_58262818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a37a015167608809cb61a5bc9257dbbcd1b0c24' => 
    array (
      0 => 'D:\\Programmes\\laragon\\www\\lbdntools\\templates\\bodyRapport.tpl',
      1 => 1614702900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603e6a881792d9_58262818 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="rapport-section">
    <div id=rapport-container>
        <textarea placeholder="Lieu&#10Date&#10Grade&#10Nom Prénom" class=nom-prenom value="nom / prénom"></textarea>
        <textarea class=contenu value="contenu du rapport"></textarea>
        <textarea class=titre value="contenu du rapport"></textarea>

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
