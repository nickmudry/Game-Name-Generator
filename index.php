<html>
<head>
<meta name="description" content="Generate funny video game ideas. Great for any indie game developer looking for a create a new video game!">
<meta name="keywords" content="Video Game Ideas, Indie Game Ideas, Funny Video Game Ideas, board game ideas, party game ideas, simple game ideas, fun game ideas, create your own video game, Video Games, Indie Games">
<meta name="author" content="Nick Mudry">
<meta charset="UTF-8">
<title>Video Game Name Generator - Mudry.me</title>
<style>
	body {
		background-color: #000; 
		color: #f5f5f5;
	}
	h1 {
		text-align: center;
		font-size: 60px;
		position: absolute;
		margin: auto;
		font-style: !important;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		height: 200px;
		min-width: 500px;
	}
	h2 {
		text-align: center;
		font-size: 16px;
		position: absolute;
		margin: auto;
		font-style: italic;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		height: 0px;
		min-width: 500px;
	}
	h3 {
		
	}
	footer {
		display: block;
		text-align: center;
		font-style: italic;
		font-size: 14px;
		color: #888;
		position: absolute;
		bottom: 0; left: 0; right: 0;
	}
	a {
		color: #58C;
		text-decoration: none;
	}
	a:visited {
		color: #85C;
	}
	a:hover {
		color: #C85;
		text-decoration: underline;
	}
	</style>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42417402-1', 'mudry.me');
  ga('send', 'pageview');

</script>
</head>
<body>
<p>
<?php
function make_seed() //Make's a random seed for the random generator. 
{
  list($usec, $sec) = explode(' ', microtime());
  return (float) $sec + ((float) $usec * 100000);
}
srand(make_seed());

//Creates and array of strings from the funny.txt file.
$fp = @fopen('funny.txt', 'r'); 
if ($fp) {
   $funnyarray = explode("\n", fread($fp, filesize('funny.txt')));
}

//Creates and array of strings from the noun.txt file.
$fp2 = @fopen('noun.txt', 'r'); 
if ($fp2) {
   $nounarray = explode("\n", fread($fp2, filesize('noun.txt')));
}

//Figures out how many lines there are in the file. 
$file="funny.txt";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);

$funnylines = $linecount; //Sets the line count to the correct number. 

//Figures out how many lines there are in the file. 
$file="noun.txt";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);

$nounlines = $linecount; //Sets the line count to the correct number. 


$funnyword = $funnyarray[rand(0,$funnylines - 1)];
$noun = $nounarray[rand(0,$nounlines - 1)];

//Checks for empty lines that may be added, makes them the first one in the array.
if ($funnyword == "")
{
$funnyword = $funnyarray[1];
}
if ($noun == "")
{
$noun = $nounarray[1];
}
echo "<h1>";
echo $funnyword; echo " "; echo $noun; //Prints the funny word and noun to the screen. 
echo "</h1> <br>";
?>
<h2>
<p>Refresh for a new set of words.</p>
<p><a href="https://twitter.com/intent/tweet?text=I'm%20making%20a%20game%20about%20<? echo($funnyword); echo (" "); echo ($noun); ?>.%20Generate%20your%20own%20game%20idea%20at%20http://mudry.me/gameideas/&hashtags=gamedev&via=AngryFacing&related=AngryFacing,PlayNimbus">Click to Tweet Your Crazy Game Idea to the World!</a></p>
<p></p>
<p><a href="http://mudry.me/iphone-2d-game-development-with-unity-3d/">iPhone Game Development</a> | <a href="http://mudry.me/tag/game-development/">Create Video Games</a> | <a href="http://mudry.me/tag/unity-3d/">Unity 3D Game Development Tutorials</a></p>
</h2>

<footer>
<p>
Code by <a href="http://mudry.me/">Nick Mudry</a>. Inspired by <a href="http://iostream.se/gamegenerator.php">iostream's game name generator</a>. Download for the source code to this project coming soon. Have any questions or want to add a combination? <a href="http://mudry.me/contact/">Email me!</a> 
</p>
<p>

</p> 
</footer>
</div>
</p>
</body>
</html>
