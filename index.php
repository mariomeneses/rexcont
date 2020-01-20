<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RexCont Adviser</title>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/script_v13.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr-custom_3.js"></script>

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/style_v55.css" rel="stylesheet" type="text/css" />

	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.png" type="image/png">

	<!--[if lt IE 9 ]>
		<script type="text/javascript" src="js/html5shiv.min.js"></script>
		<script type="text/javascript" src="js/html5shiv-printshiv.min.js"></script>
		<script type="text/javascript" src="js/respond.min.js"></script>
		<![endif]-->

	<script type="text/javascript">
	    $(window).on('load',function(){
	        $('#modalOnPageLoad').modal('show');
	    });
	</script>

	</head>
	<body>	
		<div class="fixed-top">
			<div id="bgBlack">
				<div class="d-flex justify-content-end container" id="officeInfo">
					<img src="img/reloj.png" alt="Reloj Rexcont">
					<div class="mr-auto p-2">Lunes a Viernes 09:00 &#8226; 18:30</div>
					<img src="img/wzp-icon.png" alt="WhatsApp Rexcont">
					<div class="p-2"><a href="https://api.whatsapp.com/send?phone=56978244824" target="_blank">+56 9 78244824&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
					<img src="img/mail.png" alt="Mail Rexcont">
					<div class="p-2"><a href="mailto:contacto@rexcont.cl">contacto@rexcont.cl&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
					<img src="img/telefono.png" alt="telefono_rexcont">
					<div class="p-2"><a href="tel:2 2605 1244">2 2605 1244</a> / <a href="tel:2 2605 1245">2 2605 1245</a></div>
				</div>
			</div>
			<header class="bgTransparent">
				<div id="bgBlack" class="pruebaDisplayNone">
					<div class="container"><br>
						<nav class="navbar" id="navbar">
							<img src="img/rexcont_logo.png" id="logoImg" alt="Logo Rexcont">
							<button class="navbar-toggler ml-auto custom-toggler" id="botonMenuMobile" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
								<span class="navbar-toggler-icon">
								</span>
							</button>
							<div class="navbar-collapse collapse" id="collapsingNavbar3">
								<ul class="navbar-nav mx-auto">
									<li class="nav-item active" data-toggle="collapse" data-target="#collapsingNavbar3">
										<a id="linkMenu" href="#home" class="nav-link">Inicio</a>
									</li>
									<li class="nav-item" data-toggle="collapse" data-target="#collapsingNavbar3">
										<a id="linkMenu" href="#about" class="nav-link" >Quienes somos</a>
									</li>
									<li class="nav-item" data-toggle="collapse" data-target="#collapsingNavbar3">
										<a id="linkMenu" href="#about" class="nav-link">Servicios</a>
									</li>
									<li class="nav-item" data-toggle="collapse" data-target="#collapsingNavbar3">
										<a id="linkMenu" href="#contactForm" class="nav-link">Contacto</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
				<nav id="myNavbar" class="navbar navbar-expand-md ">
					<div class="container">
						<img src="img/rexcont_logo.png" id="logoImg" alt="Logo Rexcont">
						<div id="topMenu" class="navbar-collapse w-100 order-3 dual-collapse2">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item" id="menuSeparation">
									<a id="linkMenu" href="#home" class="nav-link">Inicio</a>
								</li>
								<li class="nav-item" id="menuSeparation">
									<a id="linkMenu" href="#about" class="nav-link" >Quienes somos</a>
								</li>
								<li class="nav-item" id="menuSeparation">
									<a id="linkMenu" href="#about" class="nav-link">Servicios</a>
								</li>
								<li class="nav-item" id="menuSeparation">
									<a id="linkMenu" href="#contactForm" class="nav-link">Contacto</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</header>
		</div>
		<div id="home">
			<div class="container alignCenter" id="homeText">
				<section>
					<p id="homeTextTitle">“Nuestro compromiso<br>es dar soluciones reales”</p>
					<p id="homeTextDetail">
						<br>
						Somos un estudio contable que presta asesor&iacute;as y servicios a peque&ntilde;as y <br>
						medianas empresas, en el &aacute;rea contable, financiera, tributaria y laboral. <br>
						Contamos con profesionales de amplia experiencia
					</p>
					<br><br><br>
					<a href="#contactForm" id="homeContactButton">CONT&Aacute;CTENOS</a>
				</section>
			</div>
		</div>
		<section id="about">
			<div class="container">
				<div class="row" id="rowServicios">
					<div class="col services">
						<div id="hrService" class="services">
							<div>
								<img src="img/AREA_RECURSOS_HUMANOS.png" alt="&Aacute;rea Recursos humanos">
								<div id="servicesStyle">
									&Aacute;REA <br>
									RECURSOS <br>
									HUMANOS
								</div>
							</div>
							<div>
								<button class="btnDetailServicesRecursos" data-toggle="modal" data-target="#modalRecursosHumanos">Ver más</button>
							</div>
						</div>
						<div id="hrHover" class="servicesDetail">
							<div id="servicesStyle">
								<!-- hover servicios -->
								<div id="servicesHover">
									<p> Contratos de Trabajo.</p><br>
									<p> Finiquitos.</p><br>
									<p> Liquidaciones de Sueldo.</p><br>
									<p> Cargas Leyes Sociales Previred.</p><br>
									<p> Contratos especiales y ofertas de trabajo a extranjeros.</p><br>
									<p> Orientaci&oacute;n para tr&aacute;mites de extranjer&iacute;a e Instituciones Previsionales.</p><br>
									<p> Asesor&iacute;as Telef&oacute;nicas RR HH exclusivo s&oacute;lo clientes.</p><br>
								</div>
							</div>
						</div>
					</div>
					<div class="col services">
						<div id="contService" class="services">
							<div>
								<img src="img/AREA_CONTABLE_Y_TRIBUTARIA.png" alt="&Aacute;rea Contable y tributaria">
								<div id="servicesStyle">
									&Aacute;REA <br>
									CONTABLE Y <br>
									TRIBUTARIA
								</div>
							</div>
							<div>
								<button class="btnDetailServices" data-toggle="modal" data-target="#modalAreaContable">Ver más</button>
							</div>	
						</div>
						<div id="contHover" class="servicesDetail">
							<div id="servicesStyle">
								<!-- hover servicios -->
								<div id="servicesHover">
									<p> Renta Presunta*.</p><br>
									<p> Tributaci&oacute;n Simplificada (Art&iacute;culo 14 ter Letra A)*.</p><br>
									<p> Renta Atribuida (Art. 14 A)*.</p><br>
									<p> Semi Integrado (Art. 14 B)*.</p><br>
									<p> Calculo, cargas y  pago de impuestos online.</p><br>
									<p> Contabilidad de acuerdo a normas vigentes.</p><br>
									<p> Balance y Pre-Balance.</p><br>
									<p> Calculo y carga de impuesto a la renta online.</p><br>
									<p> Impuestos diferidos.</p><br>
									<p> Asesor&iacute;as Tributarias exclusivo s&oacute;lo clientes.</p><br><br>
									<p id="smallLetter">*Nuevos reg&iacute;menes tributarios por reforma tributaria vigente.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col services"> 
						<div id="startService" class="services">
							<div>
								<img src="img/SERVICIOS_DE_PUESTA_EN_MARCHA.png" alt="Servicios de puesta en marcha">
								<div id="servicesStyleTwo">
									SERVICIOS <br>
									DE PUESTA <br>
									EN MARCHA
								</div>
							</div>
							<div>
								<button class="btnDetailServicesPuestaEnMarcha" data-toggle="modal" data-target="#modalPuestaEnMarcha">Ver más</button>
							</div>	
						</div>
						<div id="startHover" class="servicesDetailTwo">
							<div id="servicesStyle">
								<!-- hover servicios -->
								<div id="servicesHover">
									<p> Confecci&oacute;n Escrituras Sociales empresas en un día.</p><br>
									<p> Iniciaci&oacute;n de Actividades.</p><br>
									<p> Evaluaci&oacute;n de personal.</p><br>
									<p> Configuraci&oacute;n e Implementaci&oacute;n de Factura Electr&oacute;nica SII o de mercado.</p><br>
									<p> Capacitaciones facturaci&oacute;n electr&oacute;nica.</p><br>
									<p> Otros servicios adicionales para la puesta en marcha.</p><br>
								</div>
							</div>
						</div>
					</div>
					<div class="col services">
						<div id="enterpriseService" class="services">
							<div id="servicesStyleThreeCont">
								<div>
									<img src="img/REINICIO_O_TERMINO_DE_EMPRESAS.png" alt="Reinicio o t&eacute;rmino de empresas">
									<div id="servicesStyleThree">
										REINICIO <br>
										O T&Eacute;RMINO<br>
										DE EMPRESAS
									</div>
								</div>
								<div>
									<button class="btnDetailServicesReinicio" data-toggle="modal" data-target="#modalReinicio">Ver más</button>
								</div>
							</div>
						</div>
						<div id="enterpriseHover" class="col servicesDetailTwo">
							<div id="servicesStyle" class="alignTextEnterpriseHover">
								<!-- hover servicios -->
								<div id="servicesHover">
									<p> Evaluaci&oacute;n Financiera Empresa.</p><br>
									<p> Evaluaci&oacute;n de recursos humanos.</p><br>
									<p> Evaluaci&oacute;n de costos.</p><br>
									<p> Reestructuraci&oacute;n departamentos.</p><br>
									<p> T&eacute;rminos de giro.</p><br><br>
									<p id="smallLetter"> *Consulte por servicios especiales en regiones.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="aboutCont">
					<p id="aboutTitleOne">QUIENES</p>
					<p id="aboutTitleTwo">SOMOS</p>
					<div id="aboutLine"></div>
					<div id="aboutText">
						<p>
							<b id="aboutStrong"><strong>Rexcont Adviser</strong></b> es una empresa orientada hacia las Pyme (Peque&ntilde;a y Mediana Empresa) con la sola finalidad de otorgar la mejor atenci&oacute;n a sus clientes, en un tiempo razonable y de manera confiable.<br><br>
						</p>
						<p>
							Nosotros estamos dispuestos a asesorarle en lo que usted requiera o necesite; mas aquellas sugerencias que podamos hacerle a su proceso administrativo. <br><br>
						</p>
						<p>
							Es importante recalcar que hay procesos b&aacute;sicos o pilares fundamentales dentro de la administraci&oacute;n
							de una Empresa o Negocio, sobre todo si se desea tomar las mejores decisiones para hacerla crecer. <br><br>
						</p>
					<!--	<p>
							Para ello es que estamos aqu&iacute;, para estrechar lazos y trabajar de manera mancomunada. <br>
							Asesor&aacute;ndole en los campos en los cuales somos expertos y que son inherentes a nuestra profesi&oacute;n.<br><br>
						</p>-->
						<p>
							Le invitamos a ver en nuestra p&aacute;gina algunos de los muchos servicios que prestamos. <br><br><br>
						</p>
						<p>
							Saludos,
						</p>
						<p><strong id="aboutStrong">
							Gerencia <br>
							Rexcont Adviser.</strong>
						</p>
					</div>
				</div>
			</div><br>
		</section>
		<div id="aboutLineBot" class="container"></div>
		<section id="contactForm"><br><br><br><br>
			<div id="formCenter" class="container">
				<div id="formAlign">
					<p id="formConnect"><br>
						Cont&aacute;ctese con nosotros
					</p>
					<p id="formEvaluate">
						Evaluamos su caso
					</p>
					<p id="formText">
						Ll&aacute;menos a los tel&eacute;fonos 2 2605 1244 y 2 2605 1245,<br>
						o complete el siguiente formulario y nos pondremos <br>
						en contacto con Ud. lo antes posible. <br><br>
					</p>
					<div id="contact_form">
						<div class="form-group">
							<input type="text" id="nameInput" name="nameInput" placeholder="Nombre"><br><br>
							<input type="email" id="emailInput" name="emailInput" aria-describedby="emailHelp" placeholder="Correo"><br><br>
							<input type="text" id="phoneInput" name="phoneInput" placeholder="Tel&eacute;fono"><br><br>
							<textarea id="descriptionInput" name="descriptionInput" placeholder="Descripci&oacute;n de su caso" rows="5"></textarea><br><br>
							<button id="btnSubmitForm">ENVIAR CONSULTA</button>
						</div>
						<div id="result"></div><br>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col" id="logoFoot">
						<img src="img/rexcont_logo.png" id="footerLogo" alt="Logo Rexcont">
					</div>
					<div class="col fixMenuBottom" id="footerMenu">
						<nav>
							<ul class="ulFooterMenu">
								<li><a href="#home" id="homeFooter" class="footerMenuColor">Inicio</a><div id="footerNavLineHome"></div><br></li><br>
								<li><a href="#about" id="aboutFooter" class="footerMenuColor">Servicios</a><div id="footerNavLineAbout"></div><br></li><br>
								<li><a href="#about" id="usFooter" class="footerMenuColor" >Nosotros</a><div id="footerNavLineUs"></div><br></li><br>
								<li><a href="#contactForm" id="contactFooter" class="footerMenuColor">Contacto</a><div id="footerNavLineContact"></div></li>
							</ul>
						</nav>							
					</div>
					<div class="col" id="footerMenu">
						Oficinas<br><br>
						Ahumada #131, Of. 915, Santiago, Chile.<br><br>
						<a class="footerOfficeColor" href="mailto:contacto@rexcont.cl">Correo: contacto@rexcont.cl</a><br><br>
						Tel&eacute;fono: <a class="footerOfficeColor" href="tel:2 2605 1244">2 2605 1244</a> / <a href="tel:2 2605 1245" class="footerOfficeColor">2 2605 1245</a>
					</div>
					<div class="col" id="hiddenDivFooter"></div>
				</div>
				<div>
					<div id="footerLine"></div>
					<a href="https://api.whatsapp.com/send?phone=56978244824" target="_blank"><img class="imgWsp" src="img/wzp-icon.png" alt="WhatsApp Rexcont">&nbsp;&nbsp;&nbsp;</a>
					<a href="https://www.facebook.com/victor.asencio.96" target="_blank"><img src="img/facebook.png" id="fbIcon" alt="facebook Rexcont">&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="mailto:contacto@rexcont.cl"><img src="img/mail.png" alt="mail Rexcont"></a> <p id="derechos">2018 Rexcont Adviser. Todos los derechos reservados.</p>
				</div>
			</div>
		</footer>
		<!-- Modal on page load-->
		<div class="modal fade" id="modalOnPageLoad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content-modalOnPageLoad">
					<div class="modal-header">
						<h4 class="modal-title">Modal Header</h4>
						<button type="button" class="close btnModalOnPageLoad" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et eros leo. Aliquam non sapien pellentesque, pulvinar diam finibus, posuere eros. Suspendisse potenti. Vestibulum sed lorem orci. Nulla vel ipsum orci. Cras suscipit auctor ligula, posuere ullamcorper ante gravida et. Ut vel leo vehicula, scelerisque tellus nec, mollis erat. Nulla eleifend consectetur dictum. Curabitur quis scelerisque massa, eu eleifend massa. Donec a faucibus turpis. Nunc dapibus accumsan tellus et viverra. Etiam sed mattis felis, non commodo ipsum. Donec tristique mi fringilla gravida condimentum. Integer finibus sed libero ac eleifend. Mauris quis leo a lectus ultrices sodales eu a risus. </p>
					</div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Fullscreen ÁREA RECURSOS HUMANOS -->
		<div class="modal fade modal-fullscreen-xs-down" id="modalRecursosHumanos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
						<h4 class="modal-title" id="myModalLabel">ÁREA RECURSOS HUMANOS</h4>
					</div>
					<div class="modal-body">
						<p> Contratos de Trabajo.</p><br>
						<p> Finiquitos.</p><br>
						<p> Liquidaciones de Sueldo.</p><br>
						<p> Cargas Leyes Sociales Previred.</p><br>
						<p> Contratos especiales y ofertas de trabajo a extranjeros.</p><br>
						<p> Orientaci&oacute;n para tr&aacute;mites de extranjer&iacute;a e Instituciones Previsionales.</p><br>
						<p> Asesor&iacute;as Telef&oacute;nicas RR HH exclusivo s&oacute;lo clientes.</p><br>
					</div>
					<div><button type="button" class="btnCerrarModal" data-dismiss="modal">Cerrar</button></div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>
		<!-- Modal Fullscreen modalAreaContable -->
		<div class="modal fade modal-fullscreen-xs-down" id="modalAreaContable" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
						<h4 class="modal-title" id="myModalLabel">&Aacute;REA CONTABLE Y TRIBUTARIA</h4>
					</div>
					<div class="modal-body">
						<p> Renta Presunta*.</p><br>
						<p> Tributaci&oacute;n Simplificada (Art&iacute;culo 14 ter Letra A)*.</p><br>
						<p> Renta Atribuida (Art. 14 A)*.</p><br>
						<p> Semi Integrado (Art. 14 B)*.</p><br>
						<p> Calculo, cargas y  pago de impuestos online.</p><br>
						<p> Contabilidad de acuerdo a normas vigentes.</p><br>
						<p> Balance y Pre-Balance.</p><br>
						<p> Calculo y carga de impuesto a la renta online.</p><br>
						<p> Impuestos diferidos.</p><br>
						<p> Asesor&iacute;as Tributarias exclusivo s&oacute;lo clientes.</p><br><br><br><br>
						<p id="smallLetter">*Nuevos reg&iacute;menes tributarios por reforma tributaria vigente.</p>
					</div>
					<div><button type="button" class="btnCerrarModal" data-dismiss="modal">Cerrar</button></div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>
		<!-- Modal Fullscreen SERVICIOS DE PUESTA EN MARCHA -->
		<div class="modal fade modal-fullscreen-xs-down" id="modalPuestaEnMarcha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
						<h4 class="modal-title" id="myModalLabel">SERVICIOS DE PUESTA EN MARCHA</h4>
					</div>
					<div class="modal-body">
						<p> Confecci&oacute;n Escrituras Sociales empresas en un día.</p><br>
						<p> Iniciaci&oacute;n de Actividades.</p><br>
						<p> Evaluaci&oacute;n de personal.</p><br>
						<p> Configuraci&oacute;n e Implementaci&oacute;n de Factura Electr&oacute;nica SII o de mercado.</p><br>
						<p> Capacitaciones facturaci&oacute;n electr&oacute;nica.</p><br>
						<p> Otros servicios adicionales para la puesta en marcha.</p><br>
					</div>
					<div><button type="button" class="btnCerrarModal" data-dismiss="modal">Cerrar</button></div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>
		<!-- Modal Fullscreen REINICIO O TÉRMINO DE EMPRESAS-->
		<div class="modal fade modal-fullscreen-xs-down" id="modalReinicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
						<h4 class="modal-title" id="myModalLabel">REINICIO O T&Eacute;RMINO DE EMPRESAS</h4>
					</div>
					<div class="modal-body">
						<p> Evaluaci&oacute;n Financiera Empresa.</p><br>
						<p> Evaluaci&oacute;n de recursos humanos.</p><br>
						<p> Evaluaci&oacute;n de costos.</p><br>
						<p> Reestructuraci&oacute;n departamentos.</p><br>
						<p> T&eacute;rminos de giro.</p><br><br><br><br>
						<p id="smallLetter">*Consulte por servicios especiales en regiones.</p>
					</div>
					<div><button type="button" class="btnCerrarModal" data-dismiss="modal">Cerrar</button></div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>									