<?php
/* Smarty version 3.1.38, created on 2021-02-28 21:18:04
  from 'D:\Programmes\laragon\www\lbdntools\templates\bodyRapport.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_603c088c5531c3_61714916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a37a015167608809cb61a5bc9257dbbcd1b0c24' => 
    array (
      0 => 'D:\\Programmes\\laragon\\www\\lbdntools\\templates\\bodyRapport.tpl',
      1 => 1614546773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603c088c5531c3_61714916 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="rapport-section">
    <div class=element-div id=map-container>
        <div class="top-left">
            <div class="dropdown">
                <div class="inner">
                    <span>Rapport </span>
                    <span><img src="img/arrow-down-filled-triangle.svg"></span>
                </div>
                <div class="dropdown-content">
                    <button onclick="">Rapport Allemand</button>
                    <button onclick="">Rapport Américain</button>

                </div>
            </div>
            <button id=download onclick=DownloadAsImage()></button>
        </div>
        <div id=previewImage></div>
    </div>
    <div class=element-div id=legende>
    </div>
</section><?php }
}
