<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="syntax.css" />
</head>

<body>
<script src="syntax.js"></script>

<pre><code class = "language-js" style = "width: 100%; height: 100vh;"><?php

$file_path = $_GET["fp"];

$myfile = fopen($file_path, "r") or die("Unable to open file!");
echo fread($myfile, filesize($file_path));
fclose($myfile);

?></code></pre>

</body>

</html>