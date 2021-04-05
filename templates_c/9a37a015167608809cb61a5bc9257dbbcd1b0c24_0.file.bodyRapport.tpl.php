<?php
/* Smarty version 3.1.38, created on 2021-04-05 14:30:13
  from 'D:\Programmes\laragon\www\lbdntools\templates\bodyRapport.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_606b1ef5c408a7_05293150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a37a015167608809cb61a5bc9257dbbcd1b0c24' => 
    array (
      0 => 'D:\\Programmes\\laragon\\www\\lbdntools\\templates\\bodyRapport.tpl',
      1 => 1617633005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606b1ef5c408a7_05293150 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="rapport-section">
    <div id=rapport-container class="us">
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
                    <button onclick="Rapport('all')" class="rapport-all">Rapport&nbspallemand</button>
                    <button onclick="Rapport('us')" class="rapport-us">Rapport&nbspaméricain</button>
                </div>
            </div>
            <button id=download onclick=DownloadAsImage2()></button>
        </div>
    </div>
    <div class="element-div form">
    </div>
</section><?php }
}
