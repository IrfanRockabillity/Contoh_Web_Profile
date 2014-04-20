<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>METALLICA</title>
</head>

<body>
<table border="1" id="table">
	<tr>
		<td colspan="2">
		<?php
				error_reporting(E_ALL & ~E_NOTICE);
				session_start(); 
				$username = ($_SESSION['username']);
					if (empty($username)) {
						include "form_login.php";
						include "pesanloigineror.php";
					} else 
						echo "Welcome, $username<a href='Logout.php'><input type='button' value='Logout'/></a>";
		?>
		</td>
	</tr>
	<tr>
		<td colspan="2" id="header1">
		</td>
	</tr>
	<tr>
		<td colspan="2" id="menu">
		<ul> 
				<li><a href="home.php">HOME </a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="gallery.php">GALLERY</a></li>
				<li><a href="live_downloads.php">LIVE DOWNLOADS</a></li>
		</ul>
		</td>
	</tr>
	<tr>
		<td id="content">
		<h3>HISTORY</h3>
		<p>Metallica is an American heavy metal band from Los Angeles, California. The band's fast tempos, instrumentals, and aggressive musicianship placed them as one of the founding "big four" of thrash metal alongside Slayer, Megadeth, and Anthrax.[1] Metallica formed in 1981 when James Hetfield responded to an advertisement that drummer Lars Ulrich had posted in a local newspaper. As of 2003, the line-up features long-time lead guitarist Kirk Hammett (who joined the band in 1983) and bassist Robert Trujillo (a member since 2003) alongside Hetfield and Ulrich. Previous members of the band are lead guitarist Dave Mustaine (who went on to found the band Megadeth), and bassists Ron McGovney, Cliff Burton and Jason Newsted. The band also had a long collaboration with producer Bob Rock, who produced all of its albums from 1990 to 2003 and served as a temporary bassist between the departure of Newsted and the hiring of Trujillo.
The band earned a growing fan-base in the underground music community and critical acclaim with its first four albums, with their third, Master of Puppets (1986), described as one of the most influential and "heavy" thrash metal albums. Metallica achieved substantial commercial success with their eponymous fifth album (also known as The Black Album), which debuted at number one on the Billboard 200. With this release the band expanded its musical direction resulting in an album that appealed to a more mainstream audience.
In 2000, Metallica was among a number of artists who filed a lawsuit against Napster for sharing the band's copyright-protected material for free without any band member's consent.[2] A settlement was reached, and Napster became a pay-to-use service. Despite reaching number one on the Billboard 200, the release of St. Anger (2003) alienated many fans with the exclusion of guitar solos and the "steel-sounding" snare drum. A film titled Some Kind of Monster documented the recording process of St. Anger and the tensions within the band during that time. In 2009, Metallica was inducted into the Rock and Roll Hall of Fame.
Metallica has released nine studio albums, four live albums, five extended plays, 25 music videos, and 37 singles. The band has won nine Grammy Awards, and has had five consecutive albums debut at number one on the Billboard 200,[3] making Metallica the first band to do so; this record was later matched, and then surpassed, by the Dave Matthews Band.[4] The band's 1991 album, Metallica, has sold over 15 million copies in the United States, and 28 million copies worldwide, which makes it the 25th-best-selling album in the country.[5] In December 2009, it became the best-selling album of the SoundScan era, surpassing 1997's Come on Over by country artist Shania Twain.[6] The band has sold more than 100 million albums worldwide as of 2010.[7] As of December 2009, Metallica is the fourth best-selling music artist since the SoundScan era began tracking sales on May 25, 1991, selling a total of 52,672,000 albums in the United States alone.[8]
In 2012, Metallica formed the independent record label Blackened Recordings, and have acquired the rights to all of their studio albums.</p>
		</td>
		<td id="sidebar">
				<h3>Metallica Fans Club</h3>
					<a href="#"><img src="images/metclub.png" width="259" height="194" alt="logo fans club" /></a>
					<div id="social"><!--Begin Social-->
					<a href="http://www.facebook.com/Metallica" target="_blank"><img src="images/facebook.png" width="33" height="33" alt="Facebook" /></a>
					<a href="https://twitter.com/metallica" target="_blank"><img src="images/twitter.png" width="33" height="33" alt="Twitter"/></a>
					</a><a href="http://www.youtube.com/user/MetallicaTV/" target="_blank"><img src="images/youtube.png" width="33" height="33" alt="RSS Feed" /></a>      
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">Footer
		</td>
	</tr>	
</table>
</body>
</html>
