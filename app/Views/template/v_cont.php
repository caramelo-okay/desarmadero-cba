<body>
	<div class = "container">

	<?php 

	if (!empty($usuario)) {
		echo $usuario[0]['name'];
	}else{
		echo 'No hay datos.';
	}
		
	?>			
	</div>
</body>



