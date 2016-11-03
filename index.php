<?php

	$num_cats = 185;
	$cat_file = rand(1, $num_cats);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Daily Mail Blocker</title>

		<meta name="google-site-verification" content="EJOTQWsVwuMA6tjtdmDXM0v8ejx4G12gMnu9MKnT5f4">

		<style>
			* {
				border:  0;
				margin:  0;
				padding: 0;
			}

			a {
				color: #3C8FC7;
			}

			html, body {
				background:  #000;
				color:       #333;
				font-family: Helvetica, Arial, sans-serif;
				height:      100%;
				overflow:    hidden;
				width:       100%;
			}

			img {
				display: block;
				height:  100%;
				width:   100%;
			}

			.psa {
				-webkit-transform: translateX(-50%);
				   -moz-transform: translateX(-50%);
				    -ms-transform: translateX(-50%);
				     -o-transform: translateX(-50%);

				background:    rgba(255, 255, 255, 0.5);
				bottom:        0;
				border-radius: 1em 1em 0 0;
				box-sizing:    border-box;
				left:          50%;
				max-width:     600px;
				padding:       1em 1em;
				position:      absolute;
				transform:     translateX(-50%);
				width:         90%;
			}

				.psa h1 {
					font-size:     1.5em;
					margin-bottom: 0.5em;
					text-align:    center;
				}

				.psa p {
					line-height:   1.4;
					margin-bottom: 1em;
				}

					.psa p:last-child {
						margin-bottom: 0;
					}
		</style>
	</head>

	<body>
		<div class="psa">
			<h1>Hang on a second!</h1>

			<p>
				You were headed to the Daily Mail's website. Have a look at this
				cat gif instead. Refresh for another, if you like.
			</p>

			<p>
				Another selfless act performed just for you by
				<a href="http://twitter.com/Jonic">@Jonic</a>.
				You're <em>welcome</em>.
			</p>
		</div>

		<img alt="" src="/images/<?php echo $cat_file; ?>.gif">

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-85981-9', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>