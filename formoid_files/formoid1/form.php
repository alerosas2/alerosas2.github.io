<?php

define('EMAIL_FOR_REPORTS', 'juanpfelixp@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', '¡Gracias por contactarnos!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-light-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-light-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Contactanos</h2></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input1" placeholder="Nombre de Club"/><span class="icon-place"></span></div></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="email" name="email" value="" placeholder="Email"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>" title="Seleccione una rama"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >

		<option value="Varonil">Varonil</option>
		<option value="Femenil">Femenil</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select1"); ?>" title="Seleccione un estado"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select1" >

		<option value="Aguascalientes">Aguascalientes</option>
		<option value="Baja California">Baja California</option>
		<option value="Baja California Sur">Baja California Sur</option>
		<option value="Campeche">Campeche</option>
		<option value="Coahuila">Coahuila</option>
		<option value="Colima">Colima</option>
		<option value="Chiapas">Chiapas</option>
		<option value="Chihuahua">Chihuahua</option>
		<option value="Durango">Durango</option>
		<option value="Guanajuato">Guanajuato</option>
		<option value="Guerrero">Guerrero</option>
		<option value="Hidalgo">Hidalgo</option>
		<option value="Jalisco">Jalisco</option>
		<option value="Mexico">Mexico</option>
		<option value="Michoacán">Michoacán</option>
		<option value="Morelos">Morelos</option>
		<option value="Nayarit">Nayarit</option>
		<option value="Nuevo León">Nuevo León</option>
		<option value="Oaxaca">Oaxaca</option>
		<option value="Puebla">Puebla</option>
		<option value="Queretaro">Queretaro</option>
		<option value="Quintana Roo">Quintana Roo</option>
		<option value="San Luis Potosi">San Luis Potosi</option>
		<option value="Sinaloa">Sinaloa</option>
		<option value="Sonora">Sonora</option>
		<option value="Tabasco">Tabasco</option>
		<option value="Tamaulipas">Tamaulipas</option>
		<option value="Tlaxcala">Tlaxcala</option>
		<option value="Veracruz">Veracruz</option>
		<option value="Yucatan">Yucatan</option>
		<option value="Zacatecas">Zacatecas</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select2"); ?>" title="Seleccione una categoria"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select2" >

		<option value="U12">U12</option>
		<option value="U14">U14</option>
		<option value="U16">U16</option>
		<option value="U18">U18</option>
		<option value="U20">U20</option></select><i></i><span class="icon-place"></span></span></div></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-light-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>