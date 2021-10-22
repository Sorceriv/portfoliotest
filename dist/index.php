<html>
<head>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap');
	:root {
		--header-font: Merriweather, Helvetica;
		--body-font: Helvetica;
		--main-color: rgb(255,77,0);
		--secondary-color: rgb(242,183,81);
		--circle-filled: rgb(242,183,81);
		--circle-empty: rgb(200,200,200);
		--pseudo-color: black; /*so javascript can access pseudo element color, because pseudo elements are not a part of DOM this is needed*/
	}
	
	html {
		scroll-behavior: smooth;
	}
	
	body {
		margin: 0;
	}
	
	a {
		text-decoration: none;
		color: inherit;
	}
	
	#nav {
		transition: 0.5s;
		top: 0; /*needed because it will disappear with no transition on first hide on javascript if no top here because it will suddenly be added instead of changed*/
	}
	
	.nav-bar {
		padding: 50px 100px;
		font-family: var(--body-font);
		position: fixed;
		width: 100%;
		z-index: 1;
	}
	
	.nav-bar > span {
		position: relative;
		max-width: 100px;
		margin-right: 1%;
		
	}
	
	.nav-bar > span::after {
		content: ' ';
		position: absolute;
		top: 50%;
		left: 0;
		width: 0%;
		height: 1px;
		background: var(--pseudo-color);
		transition: 0.5s;
	}
	
	.nav-bar > span:hover::after {
		width: 100%;
	}
	
	.main {
		
	}
	
	.section-1 {
		display: flex;
		margin: auto;
		max-width: 1500px; /*width does not exceed 1500 but still automatic below that useful for responsive*/
		padding: 250px 100px 150px 100px;
		height: 350px;
	}
	
	.section-1 > div {
		width: 100%;
	}
	
	.section-1 > div:nth-child(1) {
	}
	
	.section-1 > div:nth-child(1) > div {
		animation: fly-in ease-in 0.5s;
		user-select: none;
	}
	
	.section-1 > div:nth-child(1) > div h1 {
		font-family: var(--header-font);
		font-size: 40pt;
		margin: 0;
	}
	
	.section-1 > div:nth-child(1) > div h2 {
		font-family: var(--header-font);
		color: var(--main-color);
		font-size: 28pt;
		margin: 0;
		line-height: 75px;
	}
	

	.section-1 > div:nth-child(2) {
		text-align: center;
	}
	
	.section-1 > div:nth-child(2) > img {
		width: 300px;
		animation: fade-in ease-in 0.5s;
		user-drag: none;
		-webkit-user-drag: none;
		user-select: none;
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	
	.section-2 {
		box-shadow: 0px -20px 20px rgb(200,200,200);
		width: 100%;
	}
	
	.section-2 > .skill-container {
		padding: 150px 100px;
		max-width: 1500px;
		margin: auto;
	}
	
	.section-2 > .skill-container > .gray-line {
		background-color: rgb(200,200,200);
		width: 100%;
		height: 1px;
	}
	
	.section-2 > .skill-container > h2 {
		font-family: var(--header-font);
		font-size: 28pt;
		margin-bottom: 50px;
	}
	
	.section-2 > .skill-container > .skills-flex {
		display: flex;
		flex: auto auto auto;
		flex-wrap: wrap;
	}
	
	.section-2 > .skill-container > .skills-flex > .skill {
		margin-bottom: 50px;
		margin-right: 50px;
	}
	
	.section-2 > .skill-container > .skills-flex > .skill > text {
		display: block;
		font-family: var(--body-font);
		margin-bottom: 25px;
	}
	
	.section-2 > .skill-container > .skills-flex > .skill > .circle-bar {
	}
	
	.section-2 > .skill-container > .skills-flex > .skill > .circle-bar > .circle {
		border-radius: 50%;
		width: 50px;
		height: 50px;
		background-color: var(--circle-empty);
		display: inline-block;
		margin-right: 10px;
	}
	
	.section-2 > .skill-container > .skills-flex > .skill > .circle-bar > .scrolled.filled { /*.scrolled.filled, filled styles will reaactivate when scrolled is added thus scrolling down again activates it again*/
		background-color: var(--circle-empty);
		animation: circle-bar ease-in-out 0.1s both;
		animation-delay: 0.1s;
	}
	
	.section-2 > .skill-container > .skills-flex > .skill > .circle-bar > .scrolled.filled:nth-child(2) {
		animation-delay: 0.2s;
	}
	
	.section-2 > .skill-container > .skills-flex > .skill > .circle-bar > .scrolled.filled:nth-child(3) {
		animation-delay: 0.3s;
	}
	
	.section-2 > .skill-container > .skills-flex .skill > .circle-bar > .scrolled.filled:nth-child(4) {
		animation-delay: 0.4s;
	}
	
	.section-2 > .skill-container > .skills-flex > .skill > .circle-bar > .scrolled.filled:nth-child(5) {
		animation-delay: 0.5s;
	}
	
	.section-3 {
		width: 100%;
		background-color: rgb(50,50,70);
		box-shadow: inset 0px 0px 50px rgba(242,183,81,0.1);
		color: white;
		position: relative;
		overflow: hidden;
	}
	
	.section-3::before {
		content: '';
		width: 200px;
		height: 200px;
		background-color: white;
		position: absolute;
		transform: rotate(145deg);
		top: -150px;
		left: -100px;
	}
	
	.section-3::after {
		content: '';
		width: 200px;
		height: 200px;
		background-color: white;
		position: absolute;
		transform: rotate(30deg);
		top: -150px;
		right: -100px;
	}
	
	.section-3 > .work-container {
		max-width: 1500px;
		padding: 200px 100px;
		margin: auto;
	}
	
	.section-3 > .work-container > h2 {
		font-family: var(--header-font);
		font-size: 28pt;
		margin-bottom: 75px;
	}
	
	.section-3 > .work-container > img {
		width: 600px;
		margin: auto;
		display: block;
		animation: floating 5s ease-in-out;
		animation-iteration-count: infinite;
	}
	
	.js-scroll {
		opacity: 0;
		transition: opacity 500ms;
	}
	
	.scrolled {
		opacity: 1;
	}
	
	@keyframes circle-bar {
		0% {
			background-color: var(--circle-empty);
		}
		100% {
			background-color: var(--circle-filled);
		}
	}
	
	@keyframes fly-in {
		0% {
			-webkit-transform: translateY(50px);
			transform: translateY(50px);
		}
		
		100% {
			-webkit-transform: translateY(0px);
			transform: translateY(0px);
		}
	}
	
	@keyframes fade-in{
		0% {
			-webkit-transform: translateY(50px);
			transform: translateY(50px);
			opacity: 0;
		}
		
		100% {
			-webkit-transform: translateY(0px);
			transform: translateY(0px);
			opacity: 1;
		}
	}
	
	@keyframes floating {
		0% {
			transform: translateY(0px);
		}
		50% {
			transform: translateY(-10px);
		}
		
		100% {
			transform: translateY(0px);
		}
	}
</style>
</head>
<body>
	<nav id="nav" class="nav-bar">
		<span><a href="#home">HOME</a></span>
		<span><a href="#skills">SKILLS</a></span>
		<span><a href="#works">WORKS</a></span>
		<span><a href="">CONTACT</a></span>
	</nav>
	<div class="main">
		<div id="home" class="section-1">
			<div>
				<div>
					<h1>Hi, I am<br>Eduardo Villanueva</h1>
					<h2>Web Designer / Developer</h2>
				</div>
			</div>
			<div>
				<img src="svg.svg">
			</div>
		</div>
		
		<div id="skills" class="section-2">
			<div class="skill-container">
				<div class="gray-line"></div>
				<h2>Skillset</h2>
				<div class="skills-flex">
					<div class="skill">
						<text>HTML</text>
						<div class="circle-bar">
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle"></div>
						</div>
					</div>
					<div class="skill">
						<text>CSS</text>
						<div class="circle-bar">
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle"></div>
						</div>
					</div>
					<div class="skill">
						<text>Javascript</text>
						<div class="circle-bar">
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle"></div>
							<div class="js-scroll circle"></div>
						</div>
					</div>
					<div class="skill">
						<text>PHP</text>
						<div class="circle-bar">
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle"></div>
							<div class="js-scroll circle"></div>
							<div class="js-scroll circle"></div>
						</div>
					</div>
					<div class="skill">
						<text>SQL</text>
						<div class="circle-bar">
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle"></div>
							<div class="js-scroll circle"></div>
							<div class="js-scroll circle"></div>
						</div>
					</div>
					<div class="skill">
						<text>ReactJS</text>
						<div class="circle-bar">
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle"></div>
							<div class="js-scroll circle"></div>
						</div>
					</div>
					<div class="skill">
						<text>NodeJS</text>
						<div class="circle-bar">
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle filled"></div>
							<div class="js-scroll circle"></div>
							<div class="js-scroll circle"></div>
							<div class="js-scroll circle"></div>
						</div>
					</div>
				</div>
				<div class="gray-line"></div>
			</div>
		</div>
		<div id="works" class="section-3">
			<div class="work-container">
				<h2>Featured Works</h2>
				<img class="js-scroll" src="svg1.svg">
			</div>
		</div>
	</div>
<script>
	/*study js afterwards*/
	const scrollElements = document.querySelectorAll(".js-scroll");

	const elementInView = (el, dividend = 1) => {
		const elementTop = el.getBoundingClientRect().top;

		return (
			elementTop <=
			(window.innerHeight || document.documentElement.clientHeight) / dividend
		);
	};

	const elementOutofView = (el) => {
		const elementTop = el.getBoundingClientRect().top;

		return (
		elementTop > (window.innerHeight || document.documentElement.clientHeight)
		);
	};

	const displayScrollElement = (element) => {
		element.classList.add("scrolled");
	};

	const hideScrollElement = (element) => {
		element.classList.remove("scrolled");
	};

	const handleScrollAnimation = () => {
		scrollElements.forEach((el) => {
			if (elementInView(el, 1.1)) {
				displayScrollElement(el);
			} 
			else if (elementOutofView(el)) {
				hideScrollElement(el)
			}
		})
	}
	
	const changeNavColor = () => {
		var el = document.getElementById('works')
		var el1 = document.getElementById('skills')
		if (elementInView(el, 8)) {
			document.getElementById("nav").style.color = "white";
			document.querySelector(':root').style.setProperty('--pseudo-color', 'white');
		} 
		else if (elementInView(el, 1.5)) {
			document.getElementById("nav").style.color = "black";
			document.querySelector(':root').style.setProperty('--pseudo-color', 'black');
		}
	}
	
	var prevScrollpos = window.pageYOffset;
	const hideNav = () => {
		var currentScrollPos = window.pageYOffset;
		if (prevScrollpos > currentScrollPos) {
			document.getElementById("nav").style.top = "0";
		} 
		else {
			document.getElementById("nav").style.top = "-100px";
		}
		prevScrollpos = currentScrollPos;
	}

	window.addEventListener("scroll", () => { 
		handleScrollAnimation();
		changeNavColor();
		hideNav();
	});
</script>
</body>
</html>