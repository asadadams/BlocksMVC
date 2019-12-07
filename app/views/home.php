<html>
<head>
<title>Blocks</title>
<!-- Bootstrap -->
<link rel = 'stylesheet' href = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity = 'sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin = 'anonymous'>
<!-- Google Fonts -->
<link href = 'https://fonts.googleapis.com/css?family=Julius+Sans+One|Sulphur+Point&display=swap' rel = 'stylesheet'>
<link rel = 'stylesheet' href = '<?php echo  Url::get_url('/dist/css/main.css');?>'>
</head>
<body>
<div class = 'main container'>
<p id = 'blocks-title'>Blocks</p>
<p id = 'version'>Version 1.0.0</p>
<ul class = 'links'>
<li><a target="_blank" rel="noopener noreferrer" href = 'https://github.com/asadadams/BlocksMVC'>Github</a></li>
<li><a target='_blank' rel="noopener noreferrer" href = 'https://www.npmjs.com/package/blocksmvc-cli'>CLI</a></li>
</ul>

<div class = 'col-md-6 col-md-offset-3 desc'>
<p>This is a default page, If you would like to edit this page, you will find it located at:</p>
<pre>app/view/home.php</pre>
</div>

<div class = 'col-md-6 col-md-offset-3 desc'>
<p>It's corresponding controller can be located at:</p>
<pre>app/controllers/Home.php</pre>
</div>

</div>
</body>
</html>
