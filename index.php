<?php

	$num_cats = 130;
	$cat_file = rand(1, 130);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>STOP</title>

		<meta name="google-site-verification" content="EJOTQWsVwuMA6tjtdmDXM0v8ejx4G12gMnu9MKnT5f4" />

		<style>
			* {
				border: 0;
				margin: 0;
				padding: 0;
			}

			a {
				color: #d35400;
			}

			html, body {
				background: #000;
				color: #333;
				font-family: Helvetica, Arial, sans-serif;
				height: 100%;
				overflow: hidden;
				width: 100%;
			}

			img {
				display: block;
				height: 100%;
				width: 100%;
			}

			.psa {
				background: rgba(255, 255, 255, 0.75);
				bottom: 0;
				box-sizing: border-box;
				padding: 1em 2em;
				position: absolute;
				width: 40%;
			}

				.psa h1 {
					font-size: 2em;
					margin-bottom: 0.5em;
				}

				.psa p {
					line-height: 1.4;
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
				You're heading towards an article that was probably written specifically to provoke a reaction. Take a moment, enjoy this gif, and think about whether or
				not you want to give them the satisfaction of knowing that you took the bait.
			</p>

			<p>
				Another selfless act performed just for you by <a href="http://twitter.com/Jonic">@Jonic</a>. You're <em>welcome</em>.
			</p>
		</div>

		<img alt="" src="/images/<?php echo $cat_file; ?>.gif" />

		<script type="text/javascript">
		  var _gauges = _gauges || [];
		  (function() {
		    var t   = document.createElement('script');
		    t.type  = 'text/javascript';
		    t.async = true;
		    t.id    = 'gauges-tracker';
		    t.setAttribute('data-site-id', '5186ac12613f5d3c86000002');
		    t.src = '//secure.gaug.es/track.js';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(t, s);
		  })();
		</script>
	</body>
</html>