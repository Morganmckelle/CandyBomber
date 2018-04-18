<html>
	<title>Candy Bomber Intro</title>
	<body onload="">
		<style>
			body{
				background: white;
				background-image: url('images/background.png');
				text-shadow: 1px 1px 2px white, -1px -1px 2px silver;
			}
			canvas {
				position: absolute;
				top: 0px;
				left: 0px;
				background: transparent;
			}
			.scoreT_value_display
			{
				color: gold;
				text-shadow: 1px 1px 1px black, -1px -1px 2px silver;
			}
			.speedT_value_display
			{
				color: green;
				text-shadow: 1px 1px 1px black, -1px -1px 2px silver;
			}
			.collectedCandyT_value_display
			{
				color: magenta;
				text-shadow: 1px 1px 1px black, -1px -1px 2px silver;
			}
		</style>
		<br><br><br><br><br>
		<center>
			<h1>
				Welcome to Candy Drop!
			</h1>
			<h2>
				Controls:
			</h2>			
			Move the <b><span style="color:blue">MOUSE</span></b> to move your plane to a different location.<br>
			Press <b><span style="color:blue">SPACEBAR</span></b> to drop candy you've collected to children.<br>
			<h2> Objective:</h2>
			Get the highest <span class="scoreT_value_display">score</span> possible!
			
			<h2> Tips:</h2>
			Don't get hit by other planes! <img style="height: 15px;" src="images/e-plane.png"><br>
			Collect candy to increase your planes <span class="speedT_value_display">speed</span>. <img style="height: 15px;" src="images/candy_pickup.png"><br>			
			Survive as long as you can to increase your <span class="scoreT_value_display">score</span>.<br>
			Deliver candy to kids using spacebar from <font color="red">halfway up</font> on the screen <font color="red">or higher</font> to increase your <span class="scoreT_value_display">score</span> and <span class="speedT_value_display">speed</span>. <img style="height: 15px;" src="images/candy_parachute.png"><img style="height: 15px;" src="images/kids.png"><br>
			
			<br><br>
			<a href="candy_bomber.html"><button style="font-size: 34px; border-radius: 10px; border-style: outset; border-color: purple; background-color: cyan; background: linear-gradient(to right, green , cyan); color:white; cursor: pointer;">Play!</button></a>
			
		</center>
		
		<canvas id="background" style="z-index: -99;">Your browser does not support canvas. Please try again with a different browser.</canvas>
		<canvas id="background-colored" style="z-index: -98; opacity: 0;">Your browser does not support canvas. Please try again with a different browser.</canvas>
		<canvas id="player" style="z-index: 98;"></canvas>
		<canvas id="game-canvas" style="z-index: 90;"></canvas>

		<script src="jquery.min.js"></script>		

		<img id="plane" style="display: none;" src="images/plane.png">
	</body>
</html>