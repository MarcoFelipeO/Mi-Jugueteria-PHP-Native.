<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="author" content=" << https://graphiconedition.com >> << team@graphiconedition.com >> ">
	<title><?php echo $this->TittleMeta; ?></title>
	<link rel="icon" href="<?php echo constant('URL'); ?>public/FrontEnd/images/ico.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/FrontEnd/notFound/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/FrontEnd/notFound/sticky-footer.css">
</head>
<body>

    <main role="main" class="container">

      	<h1 class="mt-5 h1 text-danger">
      		<?php echo $this->Spectacular; ?>
      	</h1>

      	<p class="lead">
      		<?php echo $this->MainTitle; ?>		
      	</p>

      	<p>
      		<?php echo $this->Subtitle; ?>		
      	</p>

    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">
        	<a href="<?php echo constant('URL'); ?>" class="font-italic text-center text-primary">Volver al principio.</a>
        </span>
      </div>
    </footer>

</body>
</html>