<html>
	<body onload="">
		<style>
			body{
				background: black;}
			canvas {
				position: absolute;
				top: 0px;
				left: 0px;
				background: transparent;
			}
			.scoreT_value_display
			{
				color: gold;
			}
			.speedT_value_display
			{
				color: green;
			}
			.collectedCandyT_value_display
			{
				color: magenta;
			}
		</style>

		<canvas id="background" style="z-index: -99;">Your browser does not support canvas. Please try again with a different browser.</canvas>
		<canvas id="background-colored" style="z-index: -98; opacity: 0;">Your browser does not support canvas. Please try again with a different browser.</canvas>
		<canvas id="player" style="z-index: 98;"></canvas>
		<canvas id="game-canvas" style="z-index: 90;"></canvas>

		<script src="jquery.min.js"></script>
		<script src="images.js"></script>		
		<script src="planeMovement.js"></script>
		<script src="main.js"></script>
		<script src="obstacles.js"></script>		
		<script src="ro_p_pop.js"></script>

		<img id="plane" style="display: none;" src="images/plane.png">
	</body>
</html>