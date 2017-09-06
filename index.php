
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
		function main_view()
		{
			$pagina_presentacion='
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 12pt; font-family: Arial; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">UNIVERSIDAD TECNOL&Oacute;GICA DE PANAM&Aacute;</span></strong></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 12pt; font-family: Arial; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">FACULTAD DE INGENIER&Iacute;A DE SISTEMAS COMPUTACIONALES</span></strong></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 12pt; font-family: Arial; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">DEPARTAMENTO DE INGENIER&Iacute;A EN SOFTWARE</span></strong></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 12pt; font-family: Arial; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">LICENCIATURA EN INGENIER&Iacute;A DE SOFTWARE</span></strong></p>
<p><br /><br /><br /><br /></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Nombre</span></strong></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Tu&ntilde;&oacute;n, Carlos</span> <span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">8-&shy;916-&shy;809</span></p>
<p><br /><br /><br /><br /></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Grupo</span></strong></p>
<p>&nbsp;</p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">1SF131</span></p>
<p><br /><br /></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><em><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Informe</span></em></strong></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><em><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Problemas de PHP y Validaci&oacute;n de Formularios</span></em></strong></p>
<p><br /><br /><br /></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Asignatura</span></strong></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Ingenieria Web</span></p>
<p><br /><br /><br /><br /><br /></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Profesor:</span></strong></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Giankaris Moreno</span></p>
<p><br /><br /><br /><br /><br /><br /></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">A&ntilde;o</span></strong></p>
<p style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">2017</span></p>
<br><br>';
			return $pagina_presentacion;
		
		}
		$view = main_view();
include 'template.php';
?>


