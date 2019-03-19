<html>
	<head>
		<title>Titulo do site</title>
		<link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1> Topo do meu site</h1>

		<?php $this->loadViewInTemplate($viewName, $viewData); ?>

		<h1>Rodapé do meu site</h1>
	</body>
</html>