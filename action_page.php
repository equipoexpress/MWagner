<?php
$nombre=$_REQUEST[nombre];
$apellido=$_REQUEST[apellido];
$email=$_REQUEST[email];
$calendar=$_REQUEST[calendar];
$turno=$_REQUEST[turno];
$disp=$_REQUEST[disp];
$consulta=$_REQUEST[consulta];
$micorreo=$_REQUEST[micorreo];

$encabezado='From:noreply@micaelawagner.com';
$asunto="Formulario de contacto";
$cuerpo="Nombre: $nombre\n Apellido: $apellido\n E-mail:$email\n Fecha de la consulta:$calendar\n Franja horaria de preferencia:$turno\n Disponibilidad: $disp\n Consulta: $consulta\n " ;
$cuerpousuario= "Muchas gracias por completar el formulario. Nos comunicaremos a la brevedad. A continuación se muestran los datos que envió:\n\n Nombre: $nombre\n Apellido: $apellido\n E-mail:$email\n Fecha de la consulta:$calendar\n Franja horaria de preferencia:$turno\n Disponibilidad: $disp\n Consulta: $consulta\n ";

mail($micorreo, $asunto, $cuerpo, $encabezado);
mail($email, $asunto, $cuerpousuario, $encabezado);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Le Marche</title>
<style type="text/css">



body {
	background-color: #FFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #36F;
}
a:hover {
	text-decoration: none;
	color: #36C;
}
a:active {
	text-decoration: none;
	color: #9FF;
}
#principal1 {
	margin-right: auto;
	margin-left: auto;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#principal2 {
	margin-right: auto;
	margin-left: auto;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#principal3 {
	margin-right: auto;
	margin-left: auto;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#principal4 {
	margin-right: auto;
	margin-left: auto;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#encabezado {
	background-color: #FFF;
	height: 80px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#barranav {
	background-color: #FFF;
	height: 45px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#cuerpo {
	background-color: #FFF;
	height: 600px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#pie {
	background-color: #FFF;
	height: 60px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#titulo {
	text-align: left;
	height: 32px;
	width: 700px;
	margin-right: auto;
	margin-left: auto;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	padding-top: 8px;
}
#divizq {
	text-align: justify;
	float: left;
	height: 450px;
	width: 420px;
	margin-right: auto;
	margin-left: 150px;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#divder {
	text-align: justify;
	float: right;
	height: 360px;
	width: 420px;
	margin-right: auto;
	margin-left: auto;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#chiq {
	text-align: justify;
	height: 20px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	background-color: #0A4681;
}
</style>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<link href="estilo2.css" rel="stylesheet" type="text/css" />
<meta name="author" content="Clara Ibarzábal" />
<meta name="keywords" content="micaela wagner, mica wagner, micaela vagner, mica vagner, diseñadora, diseñadora argentina, diseñador, diseño argentino, diseño, diseño web, diseño UX, diseñadora UBA, diseñadora web, diseñadora web argentina, diseñadora UX, diseñadora UX argentina, diseño 3D, diseño 3D argentina, diseñadora 3D, diseñadora 3D argentina, diseñador 3D, diseñador 3D argentina, diseñador UX, diseñador UX argentina, diseñador web, diseñador web argentino, diseño packaging argentina, diseño packaging, packaging, diseño de packaging, diseñadora de packaging, diseñadora packaging, diseñador packaging, diseñadora logo argentina, diseño logo, diseñador logo, filtros de realidad aumentada, filtros de realidad aumentada argentina, filtros AR, filtros AR argentina, diseñadora filtros AR, diseñador filtros AR, animación 2D, animadora 2D, animador 2D, diseño para el metaverso, diseño metaverso, diseñadora NFT, diseño NFT argentina, diseño para NFTS, diseñadora metaverso, diseñadora metaverso argentina, diseño para NFTS argentina, identidad visual, branding, diseño de imagen" />
<meta name="description" content="Soy Micaela Wagner, una diseñadora argentina con una trayectoria de 20 años realizando diseño web, diseño UX, diseño 3D, packaging, filtros de realidad aumentada, animación 2D y diseño para el metaverso." />
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
</head>

<body>
<div id="principal1">
  <div id="encabezado"><img src="img/jpg/encabezado.png" width="1000" height="80" /></div>
</div>
<div id="principal2">

</div>
<div id="principal3">
<div id="cuerpo">
  
  
   <div id="chiq"></div>
  <div class="texto3" id="divizq">
    <p class="texto3">Muchas gracias por completar el formulario, <?php echo $nombre; ?> . Nos comunicaremos a la brevedad. A continuación se muestran los datos que envió:</p>
    <p>Nombre: <?php echo $nombre; ?> </p>
    <p>Apellido: <?php echo $apellido; ?> </p>
    <p>Correo: <?php echo $email; ?></p>
    <p>Fecha de la consulta:<?php echo $calendar; ?></p>
    <p>Franja horaria de preferencia:<?php echo $turno; ?></p>
    <p>Disponibilidad: <?php echo $disp; ?></p>
    <p>Consulta: <?php echo $consulta; ?></p>
    <p>&nbsp;</p>
  </div>
   <div id="divder"><img src="img/jpg/mail.jpg" width="420" height="370" /></div>
</div>
</div>
<div id="principal4"><div id="pie"><table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="1000">
  <!-- fwtable fwsrc="pie.png" fwpage="Página 1" fwbase="pie.jpg" fwstyle="Dreamweaver" fwdocid = "210392650" fwnested="0" -->
  <tr>
    <td><img src="img/jpg/spacer.gif" alt="" name="undefined_2" width="76" height="1" /></td>
    <td><img src="img/jpg/spacer.gif" alt="" name="undefined_2" width="54" height="1" /></td>
    <td><img src="img/jpg/spacer.gif" alt="" name="undefined_2" width="870" height="1" /></td>
    <td><img src="img/jpg/spacer.gif" alt="" name="undefined_2" width="1" height="1" /></td>
  </tr>
  <tr>
    <td><a href="https://behance.net/micaelawagner/"><img name="pie_r1_c1" src="img/jpg/pie_r1_c1.jpg" width="76" height="60" id="pie_r1_c1" alt="" /></a></td>
    <td><a href="contacto.html"><img name="pie_r1_c2" src="img/jpg/pie_r1_c2.jpg" width="54" height="60" id="pie_r1_c2" alt="" /></a></td>
    <td><img name="pie_r1_c3" src="img/jpg/pie_r1_c3.jpg" width="870" height="60" id="pie_r1_c3" alt="" /></td>
    <td><img src="img/jpg/spacer.gif" alt="" name="undefined_2" width="1" height="60" /></td>
  </tr>
</table>
</div>
</div></div>
</body>
</html>

