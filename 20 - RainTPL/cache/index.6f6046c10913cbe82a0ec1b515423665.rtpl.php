<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
	<h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?>!</h1>
	<p>Teste de Template com RainTPL</p>
	<p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
</body>
</html>