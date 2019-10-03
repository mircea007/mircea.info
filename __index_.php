<!DOCTYPE html>

<?php $years = (int)((time() - 1184115661) / 31536000) - 6; ?>

<html>
  <head>
    <title>Mircea.info</title>
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "https://lh3.googleusercontent.com/r-MU2XepUD06attUBCoyCWnPmQZmBfq2jHhsn6rdcxr8zVAKblzlKh1jk2ZeJkOYSg=w300">
    <link rel = "stylesheet" type = "text/css" href = "styles.css">
  </head>
  <body>
	<div class = "navbar">
	  <div class = "dropdown">
	    <button class="dropbtn">Navigate</button>
	    <div class = "dropdown-content">
	      <a href = "experiments/">Experiments</a>
		  <a href = "http://tiberiu.info"><- Back</a>
	    </div>
	  </div>
	  <div class = "title"><b>Mircea.info</b></div>
	</div>
	<div class = "content">
	  <img class = "Im" src = "https://lh3.googleusercontent.com/r-MU2XepUD06attUBCoyCWnPmQZmBfq2jHhsn6rdcxr8zVAKblzlKh1jk2ZeJkOYSg=w300">
	  <div class = "text" align = "center">
	  <div>
		<h1 align = "center">* About Me *</h1>
	    <p >I am a <b><?php echo $years; ?></b>th grader which studies programming.<br>
	    I program in <b>C</b> and <b>Python</b> and I wish to learn <b>Assembly</b></p>
	  </div>
	  <div>
	    <h1 align = "center">* C *</h1>
		<div>I am learning <a href = "https://en.wikipedia.org/wiki/C_(programming_language)">C</a>. My teacher is <a href = "http://francu.org/">Cristian Francu</a>.
		Learning <b>C</b> is very important because it was used for <a href = "https://en.wikipedia.org/wiki/Unix">UNIX</a>(the first operating system).
		And if you learn it well it will be easy to learn the other programing languages. We use <a href = "http://varena.ro">VianuArena</a> to do our homework.
		You can see my profile <a href = "http://varena.ro/utilizator/mircea_007" >here</a></div>
	  </div>
	  <div>
	    <h1 align = "center">* Python *</h1>
		<div>I started learning <a href = "http://python.org/">Python</a> by myself in 3rd grade.
		Learning <b>Python</b> was very easy.
		It is important to know <b>Python</b> because it is very advanced and easy to learn.</div>
	  </div>
	  <div>
	    <h1 align = "center">* HTML *</h1>
		<div>I started learning <a href = "https://en.wikipedia.org/wiki/HTML">HTML</a>, <a href = "https://en.wikipedia.org/wiki/Cascading_Style_Sheets">CSS</a> and <a href = "https://en.wikipedia.org/wiki/JavaScript">JavaScript</a> when I was 4th grade.
		I really wanted to learn <b>HTML</b> because I wanted to make my own website.
		I recommend learning <b>HTML</b> if you want a good web page.</div>
	  </div>
	  <div>
	    <h1 align = "center">* PHP *</h1>
		<div>I started learning <a href = "http://php.net">PHP</a> at the end of 4th grade because I wanted to know how to exchange information
		from the website to the people using it (like messages, files etc.). I suggest learning <b>PHP</b> (even though it's syntax is horrible) 
		because with it you can do pretty much everything with a website</div>
	  </div>
	  <div>
	    <h1 align = "center">* MySQL *</h1>
		<div>I started learning <a href = "http://mysql.com">MySQL</a> in 5th grade. <b>MySQL</b> is all about <a href = "https://en.wikipedia.org/wiki/Database">databases</a>.
		With the help of some <b>PHP</b> you can view and store data. A database has it's own <b>tables</b> which contain the actual data. I suggest learning <b>MySQL</b>
		so that you can store accounts and other usefull data.</div>
	  </div>
	  <div>
	    <h1 align = "center">* SCRATCH *</h1>
		<div>I recomend <a href = "http://scratch.mit.edu/">Scratch</a> for people who don't know how to <i>code</i>
		because in Scratch you program visualy.
		</div>
	  </div>
	  <br><br>
	  <div class = "Tm">
	   <b>a special thanks to: </b> <i><a href = "https://tiberiu.info/">Tiberiu Musat</a></i><span style = "opacity: 0.5;">( my cousin )</span>for hosting this site. 
	  </div>
	  <br>
	  </div>
	</div>
  </body>
  <style>
    .navbar {
	  position: sticky;
	  top: 0;
	  z-index: 1;
	  float: up;
	  overflow: hidden;
      background-color: white;
	  z-index: 2;
	}
	.title{
	  position: absolute;
	  right: calc(50% - 58px);
	  padding: 14px 16px;
	  background-color: none;
	  color: black;
	}
	.navbar a{
	  float: left;
	  color: black;
	  padding: 14px 16px;
	  transition: 0.3s;
	  text-decoration: none;
	  font-size: 16px;
	}
	.dropdown {
      float: left;
	  overflow: hidden;
    }
	.dropdown-content{
	  display: none;
	  background-color: white;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  position: fixed;
	}
	.dropdown-content a {
      float: none;
	  color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
	}
	.dropbtn{
	  text-decoration: none;
	  color: black;
	  background-color: white;
	  border: none;
	  outline: none;
	  font-size: 16px;
	  padding: 14px 16px;
	  transition: 0.3s;
	}
	.dropbtn:hover {
	  background-color: red;
	}
	.dropdown-content a:hover {
	  background-color: #ddd;
	}
    .dropdown:hover .dropdown-content{
	  display: block;
	}
	.dropdown:hover .dropbtn{
	  background-color: red;
	}
	.text {
	  position: absolute;
	  left: 0;
	  width: 100%;
	  text-align: center;
	  z-index: 1;
	  top: 180px;
	  color: white;
	  line-height: 1.6;
	}
	.text div {
	  margin: auto;
	}
	.text div div {
	  max-width: 500px;
	}
	.text div h1 {
	  align: center;
	}
	.text a {
	  color: white;
	  transition: 0.3s;
	  padding: 8px 8px;
	  font-weight: bold
	}
	.text a:hover {
	  background-color: red;
	}
	.Tm {
	  border-left: 6px solid #00b600;
	  background-color: #5bff4d;
	  max-width: 320px;
	  padding: 8px 8px;
	}
	.bg {
	  width: 100%;
	  height: 1000px;
	}
	.Im {
	  height: 100px;
	  width: 100px;
	  position: absolute;
	  z-index: 1;
	  top: 70px;
	  left: 0;
	  right: 0;
	  margin: auto;
	}
  </style>
</html>














