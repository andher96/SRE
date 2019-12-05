<?php include ("includes/layouts/default.php");?>
	<div class="contenido contenedor col al-central">
		<div class="contenedor al-espaciado row bar">
			<div class="opciones contenedor row al-espaciado bar">
				<div>
					<input type="text" name="buscar">
					<button>buscar</button>
				</div>
				<div class="contenedor row al-final">
					<button>Crear empresa</button>
					<button>Crear sucursal</button>
					<button>Crear servidor</button>
					<button>Crear equipo</button>
					<button>Crear dispositivo</button>
				</div>
			</div>
		</div>
		<div class="bar cont-int">
			<?php 
				$ruta = $_SERVER['REQUEST_URI'];
				if ($ruta == '/empresas'){
					include ("includes/layouts/empresas/lista.php");
				}elseif ($ruta == '/sucursales') {
					include ("includes/layouts/sucursales/lista.php");
				}elseif ($ruta == '/servidores') {
					include ("includes/layouts/servidores/lista.php");
				}elseif ($ruta == '/equipos') {
					include ("includes/layouts/equipos/lista.php");
				}
			?>
		</div>
	</div>
<?php include ("includes/layouts/footer.php");?>