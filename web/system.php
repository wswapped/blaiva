<!DOCTYPE HTML>
<html>
	<head>
		<title>Blaiva</title>
		<meta charset="utf-8" />
		<link rel="icon" href="Blaiva.png">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" 	href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo row">
					<a href="index.html">AI Vision Robot <span>by Rwanda Robotics Team</span></a>
					<!-- <img style="width: 200px; height: 0px" src="Blaiva.png" class="img-responsive"> -->
				</div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<!-- <nav id="menu">

				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav> -->

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>AI Vision for the blind</h1>
						<p>Blaiva gives a gift of sight to the blind through Artificial intelligence powered device.</p>

						<p>It's whole new world to see with Blaiva</p>
					</header>
					<a href="#main" class="button big scrolly">Learn More</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="generic.html" class="link"><img id="loadfeed" src="images/pic01.jpg" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Book or text; yes you can read it</h3>
										<p>Blaiva uses computer vision enhanced with Deep learning to help the blind read through character recognition.</p>
										<p>We enable the blind to read like normal can and extract the world's best source of knowledge world can offer. Ranging from business card to newspaper reading and book; Blaiva is right ready to help the blind take a journey through the world</p>
										<a href="#" class="button">Learn More</a>
									</div>
								</div>
						</div>
					</section>
				 <!-- Section -->
					<!-- <section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="col col2">
									<h3></h3>

									<p>Blaiva helps the blind to move places confidently, Blind get guidance on how to move to reach the destination without a problem along the way</p>
									<p>Thanks to the camera and laser</p>
									<a href="#" class="button">Learn More</a>
								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<a href="generic.html" class="link"><img src="images/pic02.jpg" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section> -->

				<!-- Section -->
					<!-- <section class="wrapper style1">
						<div class="inner">
							<header class="align-center">
								<h2>Aliquam ipsum purus dolor</h2>
								<p>Cras sagittis turpis sit amet est tempus, sit amet consectetur purus tincidunt.</p>
							</header>
							<div class="flex flex-3">
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/pic03.jpg" alt="" />
									</div>
									<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
									<a href="#" class="button">Learn More</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/pic05.jpg" alt="" />
									</div>
									<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
									<a href="#" class="button">Learn More</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/pic04.jpg" alt="" />
									</div>
									<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
									<a href="#" class="button">Learn More</a>
								</div>
							</div>
						</div>
					</section> -->

			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="https://web.facebook.com/Blaiva-1074866389320658/" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://web.facebook.com/Blaiva-1074866389320658/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<!-- <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li> -->
						<!-- <li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li> -->
					</ul>
					<p>&copy; Blaiva. All rights reserved.</p>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script type="text/javascript">
				setInterval(function(){
					$.get('../api/getFeed.php', function(data){
						console.log(data)
						//get that
						$("#loadfeed").attr('src', "../api/"+data);
					});
					

				}, 1000)
				// var source = new EventSource("../api/getFeed.php");
				// source.onmessage = function(event) {
				//     document.getElementById("result").innerHTML += event.data + "<br>";
				// };
			</script>

			var source = new EventSource("demo_sse.php");
source.onmessage = function(event) {
    document.getElementById("result").innerHTML += event.data + "<br>";
};

	</body>
</html>