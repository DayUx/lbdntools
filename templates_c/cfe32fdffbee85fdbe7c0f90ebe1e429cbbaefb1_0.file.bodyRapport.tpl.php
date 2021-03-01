<?php
/* Smarty version 3.1.38, created on 2021-03-01 17:50:59
  from 'D:\laragon\www\lbdntools\templates\bodyRapport.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_603d2983020347_11295354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe32fdffbee85fdbe7c0f90ebe1e429cbbaefb1' => 
    array (
      0 => 'D:\\laragon\\www\\lbdntools\\templates\\bodyRapport.tpl',
      1 => 1614621032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603d2983020347_11295354 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="rapport-section">
    <div class="element-div rapport">
        <div class="top-left">
            <div class="dropdown">
                <div class="inner">
                    <span>Rapport</span>
                    <span><img src="img/arrow-down-filled-triangle.svg"></span>
                </div>
                <div class="dropdown-content">
                    <button class="rapport-all">Rapport Allemand</button>
                    <button class="rapport-us">Rapport Américain</button>
                </div>
            </div>
            <button id=download onclick=DownloadAsImage()></button>
        </div>
    </div>
    <div class="element-div form">
    </div>
</section><?php }
}
