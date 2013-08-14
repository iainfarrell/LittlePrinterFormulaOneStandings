<?php

	// This is where all the important stuff happens.
	// Refer to http://remote.bergcloud.com/developers/reference/edition for help

	require_once("../framework.php"); // Include the framework
	require_once("../config.php"); // Include the framework

	// The /edition endpoint requires an ETag to be sent.
	// This function sends an md5 string based on how frequently your publication changes

	// The params are as follows:
	//	1: changes every day
	//	2: changes every week
	//	3: changes every month
	//	4: different every time

	eTag(2);
	charset();

	// This must be be the first line of code on this page, otherwise you'll get a 'headers not sent' error

	// Now include the header
	// You can pass paramaters into here in an array and they will be available in header.php for use.
	makeHeader();

	// Put your code under here:
?>

<table>
    
    <tr>
      <td><b>POS.</b></td>
      <td><b>Driver</b></td>
      <td><b>Manufacturer</b></td>
      <td><b>Points</b></td>
    </tr>

    <tr>
      <td>1</td>
      <td>S. Vettel</td>
      <td>Red Bull</td>
      <td>172</td>
    </tr>


    <tr>
      <td>2</td>
      <td>K. Raikkonen</td>
      <td>Lotus</td>
      <td>134</td>
    </tr>


    <tr>
      <td>3</td>
      <td>F. Alonso</td>
      <td>Ferrari</td>
      <td>133</td>
    </tr>


    <tr>
      <td>4</td>
      <td>L. Hamilton</td>
      <td>Mercedes</td>
      <td>124</td>
    </tr>


    <tr>
      <td>5</td>
      <td>M. Webber</td>
      <td>Red Bull</td>
      <td>105</td>
    </tr>
</table>

<table>
<tr>
<td width=138><img src="http://littleprinter.netau.net/formulaone/edition/f1QR.png"></td>
<td><h2 align=center>Scan to read more online.</h2></td>
</tr>
</table>

<p>Next round, <b>Belgian Grand Prix</b> - <i>August 25th 2013</i></br>
<center><img src="http://littleprinter.netau.net/formulaone/edition/circuits/belgian.png"></center></p>

<h3>Did you know?</h3>

<p>Michael Schumacher surpassed Alain Prost's all time record here in 2001 winning his 52nd Grand Prix.</p>

<?php 				
	// Now include the footer
	makeFooter();

?>
