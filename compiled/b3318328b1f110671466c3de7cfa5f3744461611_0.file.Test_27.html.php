<?php
/* Smarty version 3.1.36, created on 2020-06-11 15:32:31
  from '/var/www/html/modules/custom_template_engine_v2.9.4/templates/Test_27.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee2407f1afc49_60721583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3318328b1f110671466c3de7cfa5f3744461611' => 
    array (
      0 => '/var/www/html/modules/custom_template_engine_v2.9.4/templates/Test_27.html',
      1 => 1591885943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee2407f1afc49_60721583 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8"></head><body>
                        <header></header><footer></footer><main><p><strong>Shipment ID:</strong> <?php echo $_smarty_tpl->tpl_vars['redcap']->value['shipment_id'];?>
</p>

<p><strong>Shipment Ensat ID:</strong> <?php echo $_smarty_tpl->tpl_vars['redcap']->value['shipment_ensat_id'];?>
</p>
</main></body></html>
<?php }
}
