<?php 

/*
 * jQuery File Upload Plugin PHP Example 5.7 
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
 
 //********************* Modified (tortured) by Agustin Amenabar

switch ($_SERVER['REQUEST_METHOD']) {
    case 'OPTIONS':
    case 'HEAD':
    case 'GET':
        break;
    case 'POST':
    	error_reporting(E_ALL | E_STRICT);

		require('UploadImg.php');

		$upload_handler = new UploadImg();

		header('Pragma: no-cache');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		/*header('Content-Disposition: inline; filename="files.json"');
		header('X-Content-Type-Options: nosniff');*/
		header('Access-Control-Allow-Origin: *');
		/*header('Access-Control-Allow-Methods: GET, POST');
		header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');*/
        $upload_handler->post();
        exit();
        break;
    default:
        header('HTTP/1.1 405 Method Not Allowed');
}
?>
<!doctype html>
<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. Ojo con el lang-->
<head>
    <!--<meta charset="utf-8"> -->
    <title>Upload Folder</title>
</head>
<body>

<a href="imgs/">Images Folder</a>
</body>
</html>