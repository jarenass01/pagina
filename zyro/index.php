<?php
error_reporting(E_ALL); @ini_set('display_errors', true);
	$pages = array(
		'0'	=> array('id' => '6', 'alias' => array('es' => 'Contactenos'), 'file' => '6.php'),
		'1'	=> array('id' => '6', 'alias' => array('es' => 'Inicio'), 'file' => '6.php'),
		'2'	=> array('id' => '5', 'alias' => array('es' => 'Ingreso-de-Presupuesto'), 'file' => '5.php'),
		'3'	=> array('id' => '4', 'alias' => array('es' => 'Informes'), 'file' => '4.php'),
		'4'	=> array('id' => '7', 'alias' => array('es' => 'Registrese'), 'file' => '7.php')
	);
	$forms = array(
		'6'	=> array(
			'3d7ec1f0' => Array( 'email' => 'ingenisof@gmail.com', 'subject' => 'contacto de la pagina', 'sentMessage' => 'El formulario ha sido enviado', 'fields' => array( array( 'fidx' => '0', 'name' => array('es' => 'Nombre'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'E-mail', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Message', 'type' => 'textarea', 'options' => '' ) ) ),
			'1fe1bbeb' => Array( 'email' => 'ingenisof@gmail.com', 'subject' => 'Pregunta desde la página', 'sentMessage' => 'El formulario ha sido enviado.', 'fields' => array( array( 'fidx' => '0', 'name' => 'Nombre', 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'Email', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => array('es' => 'Facultad'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '3', 'name' => array('es' => 'Curso '), 'type' => 'input', 'options' => '' ), array( 'fidx' => '4', 'name' => 'Mensaje', 'type' => 'textarea', 'options' => '' ) ) )
		),
		'7'	=> array(
			'f4033344' => Array( 'email' => 'ingenisof@gmail.com', 'subject' => 'contacto de la pagina', 'sentMessage' => 'El formulario ha sido enviado', 'fields' => array( array( 'fidx' => '0', 'name' => array('es' => 'Nombre'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'E-mail', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Message', 'type' => 'textarea', 'options' => '' ) ) )
		),
		'5'	=> array(
			'307b5256' => Array( 'email' => 'ingenisof@gmail.com', 'subject' => 'contacto de la pagina', 'sentMessage' => 'El formulario ha sido enviado', 'fields' => array( array( 'fidx' => '0', 'name' => array('es' => 'Nombre'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'E-mail', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Message', 'type' => 'textarea', 'options' => '' ) ) ),
			'3edbb359' => Array( 'email' => '', 'subject' => 'Pregunta desde la página', 'sentMessage' => 'El formulario ha sido enviado.', 'fields' => array( array( 'fidx' => '0', 'name' => array('es' => 'Salario Mensual'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => array('es' => 'Gastos de pasajes'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => array('es' => 'gastos de estudio'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '3', 'name' => 'Mensaje', 'type' => 'textarea', 'options' => '' ) ) )
		),
		'4'	=> array(
			'9efbc59a' => Array( 'email' => 'ingenisof@gmail.com', 'subject' => 'contacto de la pagina', 'sentMessage' => 'El formulario ha sido enviado', 'fields' => array( array( 'fidx' => '0', 'name' => array('es' => 'Nombre'), 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'E-mail', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Message', 'type' => 'textarea', 'options' => '' ) ) )
		)
	);
	$langs = array(
		'es' => true
	);
	$def_lang = 'es';
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$show_comments = false;
	include dirname(__FILE__).'/functions.inc.php';
	$home_page = '6';
	list($page_id, $lang) = parse_uri();
	$user_key = "iWTqKAajH2W/EpaEfd2sNGU=";
	$user_hash = "e8537adb8071e3b0";
	$comment_callback = "http://uk.zyro.com/es-ES/comment_callback/";
	$preview = false;
	$mod_rewrite = true;
	$page = isset($pages[$page_id]) ? $pages[$page_id] : null;
	if (!is_null($page)) {
		handleComments($page['id']);
		if (isset($_POST["wb_form_id"])) handleForms($page['id']);
	}
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news')
		include dirname(__FILE__).'/news.php';
	else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog')
		include dirname(__FILE__).'/blog.php';
	else if ($page) {
		$fl = dirname(__FILE__).'/'.$page['file'];
		if (is_file($fl)) {
			ob_start();
			include $fl;
			$out = ob_get_clean();
			$ga_out = '';
			if ($lang && $langs) {
				foreach ($langs as $lang => $default) {
					$pageUri = getPageUri($page['id'], $lang);
					$out = str_replace(urlencode('{{lang_'.$lang.'}}'), $pageUri, $out);
				}
			}
			if (is_file($ga_file = dirname(__FILE__).'/ga_code') && $ga_code = file_get_contents($ga_file)) {
				$ga_out = str_replace('{{ga_code}}', $ga_code, file_get_contents(dirname(__FILE__).'/ga.html'));
			}
			$out = str_replace('{{ga_code}}', $ga_out, $out);
			$proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
			$out = str_replace('{{base_url}}', $proto.'://'.$_SERVER['HTTP_HOST'].'/', $out);
			header('Content-type: text/html; charset=utf-8', true);
			echo $out;
		}
	} else {
		header("Content-type: text/html; charset=utf-8", true, 404);
		if (is_file(dirname(__FILE__).'/404.html')) {
			include '404.html';
		} else {
			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "<head>\n";
			echo "<title>404 Not found</title>\n";
			echo "</head>\n";
			echo "<body>\n";
			echo "404 Not found\n";
			echo "</body>\n";
			echo "</html>";
		}
	}
	ob_end_flush();

?>