<!doctype html>
<html lang="fr">
<head>
<link rel="icon" type="image/png" href="imagesSite/1x/favicon.png" />
<meta charset="utf-8">
<meta property="og:title" content="NBformation" />
<meta property="og:type" content="informatique" />
<meta property="og:url" content="https://www.nbformation.com/" />
<meta property="og:image" content="https://www.thegoodmiam.com/imagesSite/1x/logoA.png" />
<meta property="og:description" content="Des cours d'informatiques, tutoriels sql, tutoriels vba Access, tutoriels bureautique, tutoriels javascript, html, php du fun et de la programmation">
<meta name="description" content="Des cours d'informatiques, tutoriels sql, tutoriels vba Access, tutoriels bureautique, tutoriels javascript, html, php du fun et de la programmation" />
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<title>L'informatique simple | nbformation</title>
<!-- j'ai inclut les styles dans la page en attendant de faire un .css -->
<style>
html, body{
   margin: 0px;
   padding: 0px;
   outline: 0px;
   height: 100%;

}
#page{

   height: 100%;
   width: 100%;
}
#wrapViolet
	{
		/*background: -moz-linear-gradient(top, #5f4b8b 45%, #10173a 100%); /* FF3.6-15 */
/*background: -webkit-linear-gradient(top, #5f4b8b 45%,#10173a 100%); /* Chrome10-25,Safari5.1-6 */
/*background: linear-gradient(to bottom, #5f4b8b 45%,#10173a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
/*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5f4b8b', endColorstr='#10173a',GradientType=0 );*/
		background: url(imagesSite/FondDegrade.png);
		background-size: cover;
		position: relative;
		height: 70%;
		width: 100%;
		overflow: visible;
		box-shadow: 0px 4px 1px 0px rgba(0,0,0,0.45);
	}
#myLogo
	{
		width: 12%;
		height: auto;
		position: absolute;
		top:20%;
		left: 44%;
	}
#myLogo img
	{
		width: 100%;
		height: auto;
	}
.logo
	{
		transform-origin: center;
		animation: myanimation infinite linear 3s;
	}
@keyframes myanimation
	{
		from{
			transform: rotate(0deg);
		}
		to{
			transform: rotate(360deg);
		}
	}
#Name
	{
		width: 30%;
		position: absolute;
		left: 35%;
		top: 64%;
		font-size: 5em;
		color : white;
		text-align: center;
		font-family: 'Comfortaa', cursive;
	}
#header
	{
		width: 100%;
		position: fixed;
		height: 60px;
		z-index: 3;
	}
#fondNoir
	{
		position: absolute;
		width: 100%;
		height: 100%;
		background: black;
		opacity: 0.7;
	}
#logoHead
	{
		position: absolute;
		left: 80px;
		height: 80%;
		top: 10%;
		width: auto;
		z-index: 2;
	}
#logoHead img
	{
		height: 100%;
		width: auto;
	}
#baseName
	{
		color: white;
		position: absolute;
		height: 90%;
		left: 144px;
		font-size: 1.3em;
		width: 150px;
		z-index: 2;
	}
.Tmiddle
	{
		position: absolute;
		width: 100%;
		text-align: center;
		top: 50%;
		height: auto;
		display: block;
		transform: translateY(-50%)
	}
.Tmiddle img
	{
		width: 100%;
		height: auto;
	}
	.cls-1{fill:#fff;}
	#malettreB, #malettreF, #malettreO, #malettreR, #malettreM, #malettreA, #malettreT, #malettreI, #malettreOB, #malettreNB
		{
			display: none;
			transform-origin: bottom;
		}
	#malettreN
	{
		transform-origin: bottom;
	}
	#wrapMenu
	{
		position: absolute;
		width: 35%;
		top: 5%;
		right: 375px;
		max-width: 500px;
		min-height: 40px;
		padding-bottom: 0.7%;
		background-color: tomato;
		z-index: 2;
		display: none;
	}
</style>
</head>

<body>
	<div id="page">
		<div id="wrapViolet">
			<div id="header">
				<div id="logoHead">
					<img src="imagesSite/SVG/logoblanc.svg" alt="l'informatique simple, NBformation">
				</div>
				<div id="baseName"><span class="Tmiddle"><img src="imagesSite/SVG/nameGrand.svg"></span></div>
				<div id="wrapMenu">
					<div class="menu" id="menu1">bureautique</div>
					<div class="menu" id="menu2">programmation</div>
				</div>
				<div id="connexion">
				
				</div>
				<div id="fondNoir"></div>
			</div>
			<div id="myLogo"><img src="imagesSite/1x/myLogo.png" alt="l'informatique simple, NBformation" class="logo"></div>
			<div id="Name">
			<svg  viewBox="0 0 566 76.4"><path id="malettreN" class="cls-1" d="M4.52,69.17c-5-4.41-6.94-54.24,0-61.17S18.4,3,24.07,8,37.32,40.16,43,40.16,37.32,14.3,43,8,58.76,3,62.54,8s5.05,49.82,1.9,56.76c-3.33,7.31-15.77,8.83-23.34,4.41s-13.87-29-19.55-27.75,3.15,24.6,0,27.75S9.57,73.59,4.52,69.17Z"/><path id="malettreB" class="cls-1" d="M102.91,36.38c13.24-6.94,20.81-18.29,8.83-28.38S78.31,2.32,73.9,8s-3.79,58,0,61.17,18.92,4.42,36.58,0S123.72,38.27,102.91,36.38ZM84.62,14.93c3.15-3.78,20.18-1.89,20.18,6.63s-17,9.77-20.18,6.62S81.46,18.72,84.62,14.93Zm0,44.78c-3.16-2.52-2.53-10.09,0-13.24s20.18-1.89,20.18,6.62S87.77,62.24,84.62,59.71Z"/><path id="malettreF" class="cls-1" d="M132.55,72.33c-4.42-3.79,1.26-30.91,0-32.8s-10.09,1.89-11.35,0-2.53-10.09,0-12,10.09,1.89,11.35,0-5.05-18.29,0-24,32.79-3.78,36.58,0,3.78,11.35,0,14.51-17.66-3.16-20.18,0-2.53,8.2,0,10.09,8.2-1.89,11.35,0,3.15,6.94,0,9.46-8.83-2.52-11.35,0,3.78,30.27,0,34.69S137,76.11,132.55,72.33Z"/><path id="malettreT" class="cls-1" d="M411.94,18.09c.2,4-2.52,8.2,0,10.09s8.2-1.89,11.35,0,3.16,6.94,0,9.46-8.83-2.52-11.35,0S406.26,65.39,422.66,61c2.55-.68,4.86,11.14-1.89,13.25-8.11,2.52-22.82.17-25.23-1.89-4.41-3.79,1.26-30.91,0-32.8s-10.09,1.89-11.35,0-2.52-10.09,0-12,10.09,1.89,11.35,0-5.67-8.2.63-12S411.31,5.47,411.94,18.09Z"/><path id="malettreO" class="cls-1" d="M210.34,33.18c-7-7.49-34.77-8.56-40.12,0s-7,29.43.53,35.85,33.71,7,39.59,0S217.3,40.68,210.34,33.18ZM199.56,59.4c-2.75,3.21-14.36,3.75-18.32,0s-3.53-10.7-.24-16.58,15.43-3.21,18.56,0S202.32,56.19,199.56,59.4Z"/><path id="malettreOB" class="cls-1" d="M509.92,35.08c-7-7.49-34.78-8.56-40.13,0s-7,29.42.53,35.84,33.71,7,39.6,0S516.87,42.57,509.92,35.08ZM499.14,61.29c-2.76,3.21-14.37,3.75-18.32,0s-3.54-10.7-.25-16.58,15.44-3.21,18.57,0S501.89,58.08,499.14,61.29Z"/><path id="malettreR" class="cls-1" d="M223.3,70.08c-3-2.47-4-35.66,0-39.12s11.88-3.47,14.36,0,0,8.91,0,8.91S254.5,28.48,259,31s4.45,12.38,0,16.84-18.33-4.46-20.81-.5,3,19.32-.49,22.78S226.27,72.56,223.3,70.08Z"/><path id="malettreM" class="cls-1" d="M269.76,74.22c-4-3.79-4-38.47.57-44.78s10.37-3.15,13.25-.63a8.18,8.18,0,0,1,2.88,5.68s12.09-15.77,22.46,0c7.49-9.46,13.24-6.94,16.12,0s1.73,37.21,0,39.73-12.09,1.89-14.39,0-.58-29.64-1.73-29.64-1.73,27.75-4.61,29.64-10.94,1.89-13.82,0-2.88-31.54-4-31.54.57,29.65-1.15,31.54S273.79,78,269.76,74.22Z"/><path id="malettreNB" class="cls-1" d="M557.84,74.22c-2.88,1.89-10.94,1.89-13.82,0s-2.88-31.54-4-31.54.58,29.65-1.15,31.54-11.52,3.78-15.55,0-4-38.47.58-44.78,10.36-3.15,13.24-.63A8.18,8.18,0,0,1,540,34.49s13.41-16.4,22.46,0S560.72,72.33,557.84,74.22Z"/><path id="malettreA" class="cls-1" d="M376.94,38c-8.83-13.87-34.06-8.83-40.37-1.89,0,0-9.46,16.4,5.68,10.72s17-2.52,15.14,0-10.09,1.27-17.66,3.79-10.72,17,0,23.33S357.39,72,357.39,72c10.09,7.57,22.07,0,22.07,0S385.77,51.83,376.94,38Zm-20.18,28.7c-.88,0-1.58-2.4-1.58-5.36s.7-5.36,1.58-5.36,1.57,2.4,1.57,5.36S357.63,66.65,356.76,66.65Z"/><path id="malettreI" class="cls-1" d="M455.46,72.45c-3.79,3.59-13.88,2.39-18.29,0s-3.79-37.73,0-41.93a8.68,8.68,0,0,1,2.14-1.67,16.73,16.73,0,0,1-2.75-.56c-3-1-2-6.46,0-7.95s16.89-3,18.88,0,3,6,0,8a4.78,4.78,0,0,1-1.56.61,7.36,7.36,0,0,1,1.58,1.62C459.24,35.92,459.24,68.85,455.46,72.45Z"/>
			<animateTransform 
			   xlink:href="#malettreN"
				id="F1"
				attributeName='transform'
				type="scale"
				from="1 0.5"
				to="1 1"
				begin="0s"
				dur="1s"
				repeatCount="1"
				calcMode="spline"
			   values="1 0.5; 1 1; 1 0.6; 1 1; 1 0.7; 1 1; 1 0.8; 1 1"
			   keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1"
			   keySplines="0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1"
							  />
			<animateTransform 
			   xlink:href="#malettreB"
				id="F2"
				attributeName='transform'
				type="scale"
				from="1 0.5"
				to="1 1"
				begin="0.3s"
				dur="1s"
				repeatCount="1"
				calcMode="spline"
			   values="1 0.5; 1 1; 1 0.6; 1 1; 1 0.7; 1 1; 1 0.8; 1 1"
			   keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1"
			   keySplines="0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1"
							  />
			<animateTransform 
			   xlink:href="#malettreF"
				id="F3"
				attributeName='transform'
				type="scale"
				from="1 0.5"
				to="1 1"
				begin="0.6s"
				dur="0.7s"
				repeatCount="1"
				calcMode="spline"
			   values="1 0.5; 1 1; 1 0.6; 1 1; 1 0.7; 1 1; 1 0.8; 1 1"
			   keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1"
			   keySplines="0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1"
							  />
			<animateTransform 
			   xlink:href="#malettreO"
				id="F4"
				attributeName='transform'
				type="scale"
				from="1 0.5"
				to="1 1"
				begin="0.9s"
				dur="0.7s"
				repeatCount="1"
				calcMode="spline"
			   values="1 0.5; 1 1; 1 0.6; 1 1; 1 0.7; 1 1; 1 0.8; 1 1"
			   keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1"
			   keySplines="0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1"
							  />
			<animateTransform 
			   xlink:href="#malettreR"
				id="F5"
				attributeName='transform'
				type="scale"
				from="1 0.5"
				to="1 1"
				begin="1.2s"
				dur="0.7s"
				repeatCount="1"
				calcMode="spline"
			   values="1 0.5; 1 1; 1 0.6; 1 1; 1 0.7; 1 1; 1 0.8; 1 1"
			   keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1"
			   keySplines="0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1"
							  />
			<animateTransform 
			   xlink:href="#malettreM"
				id="F6"
				attributeName='transform'
				type="scale"
				from="1 0.5"
				to="1 1"
				begin="1.5s"
				dur="0.7s"
				repeatCount="1"
				calcMode="spline"
			   values="1 0.5; 1 1; 1 0.6; 1 1; 1 0.7; 1 1; 1 0.8; 1 1"
			   keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1"
			   keySplines="0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1"
							  />
			<animateTransform 
			   xlink:href="#malettreA"
				id="F7"
				attributeName='transform'
				type="scale"
				from="1 0.5"
				to="1 1"
				begin="1.8s"
				dur="0.37s"
				repeatCount="1"
				calcMode="spline"
			   values="1 0.5; 1 1; 1 0.6; 1 1; 1 0.7; 1 1; 1 0.8; 1 1"
			   keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1"
			   keySplines="0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1"
							  />
			<animateTransform 
			   xlink:href="#malettreT"
				id="F8"
				attributeName='transform'
				type="scale"
				from="1 0.5"
				to="1 1"
				begin="2.1s"
				dur="0.7s"
				repeatCount="1"
				calcMode="spline"
			   values="1 0.5; 1 1; 1 0.6; 1 1; 1 0.7; 1 1; 1 0.8; 1 1"
			   keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1"
			   keySplines="0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1"
							  />
			<animateTransform 
			   xlink:href="#malettreI"
				id="F9"
				attributeName='transform'
				type="scale"
				from="1 0.5"
				to="1 1"
				begin="2.4s"
				dur="0.7s"
				repeatCount="1"
				calcMode="spline"
			   values="1 0.5; 1 1; 1 0.6; 1 1; 1 0.7; 1 1; 1 0.8; 1 1"
			   keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1"
			   keySplines="0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1"
							  />
			<animateTransform 
			   xlink:href="#malettreOB"
				id="F10"
				attributeName='transform'
				type="scale"
				from="1 0.5"
				to="1 1"
				begin="2.7s"
				dur="0.7s"
				repeatCount="1"
				calcMode="spline"
			   values="1 0.5; 1 1; 1 0.6; 1 1; 1 0.7; 1 1; 1 0.8; 1 1"
			   keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1"
			   keySplines="0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1"
							  />
			<animateTransform 
			   xlink:href="#malettreNB"
				id="F11"
				attributeName='transform'
				type="scale"
				from="1 0.5"
				to="1 1"
				begin="3s"
				dur="0.7s"
				repeatCount="1"
				calcMode="spline"
			   values="1 0.5; 1 1; 1 0.6; 1 1; 1 0.7; 1 1; 1 0.8; 1 1"
			   keyTimes="0; 0.15; 0.3; 0.45; 0.6; 0.75; 0.9; 1"
			   keySplines="0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1;
						   0 0 0.59 1;
						   0.42 0 1 1"
							  />		

					</svg>



			</div>
			<style>
			#wrapGrosMenu
				{
					width: 50%;
					position: absolute;
					bottom: 0;
					transform: translateY(50%);
					padding-bottom: 10%;
					left:25%;
					overflow: visible;
					animation: ouvre cubic-bezier(0,1.56,.98,-1.08) 1s 1;
					
				}
				@keyframes ouvre
				{
					from{
						padding-bottom: 0%;
					}
					to{
						padding-bottom: 10%;
					}
				}
			.grosMenu
				{
					position: absolute;
					top:0;
					width: 33.33%;
					height: 100%;
				}
			.grosMenu.A
				{
					left: 0;
				}
			.grosMenu.B
				{
					left:33.33%;
				}
			.grosMenu.C
				{
					left:66.66%;
				}
			.inGM
				{
					width: 52%;
					height: 90%;
					margin: 1.5% auto;
					border-radius: 51%;
					background : #FFF;
					color: black;
					position: relative;
					font-weight: bold;
					font-size: 1.2vw;
					font-family: 'Comfortaa', cursive;
					font-variant-caps: all-small-caps;
					border:solid #5F4B8B 1px;
					box-shadow: 5px 3px 19px 0px rgba(0,0,0,0.66);
					
				}
				.inGM:hover
				{
					margin-top: 4%;
					cursor: pointer;
					box-shadow:none;
				}
			</style>
			<div id="wrapGrosMenu">
				<div class="grosMenu A" id="connexionG"><div class="inGM"><span class="Tmiddle">connexion</span></div></div>
				<div class="grosMenu B" id="bureautiqueG"><div class="inGM"><span class="Tmiddle">bureautique</span></div></div>
				<div class="grosMenu C" id="programmationG"><div class="inGM"><span class="Tmiddle">programmation</span></div></div>
			</div>
		</div>
		<div id="truc" style="height: 1000px;"
	</div>
<script src="../js/jquery-3.2.1.js"></script>
<script>
$(document).ready(function(){
	var time = 300;
	setTimeout(function(){
		$('#malettreB').show();
		setTimeout(function(){
			$('#malettreF').show();
			setTimeout(function(){
				$('#malettreO').show();
				setTimeout(function(){
				$('#malettreR').show();
					setTimeout(function(){
				$('#malettreM').show();
						setTimeout(function(){
				$('#malettreA').show();
							setTimeout(function(){
				$('#malettreT').show();
								setTimeout(function(){
				$('#malettreI').show();
								setTimeout(function(){
				$('#malettreOB').show();
									setTimeout(function(){
				$('#malettreNB').show();
			},time);
			},time);
			},time);
			},time);
			},time);
			},time);
			},time);
			},time);
		},time);
	},time);
	
	$(document).scroll(function() {
	  var y = $(this).scrollTop();
		var doc = $(window).height();
		console.log((0.7*doc));
	  if (y > (0.7*doc)) {
		$('#wrapMenu').fadeIn();
	  } else {
		$('#wrapMenu').fadeOut();
	  }
	});
	
});
</script>
</body>
</html>
