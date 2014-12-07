<?php

	$num_cats = 185;
	$cat_file = rand(1, $num_cats);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Daily Mail Blocker</title>

		<meta name="google-site-verification" content="EJOTQWsVwuMA6tjtdmDXM0v8ejx4G12gMnu9MKnT5f4" />

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