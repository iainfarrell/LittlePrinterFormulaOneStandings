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
      <td><b>Rider</b></td>
      <td><b>Manufacturer</b></td>
      <td><b>Points</b></td>
    </tr>

    <tr>
      <td>1</td>
      <td>M. Marquez</td>
      <td>Honda</td>
      <td>163</td>
    </tr>


    <tr>
      <td>2</td>
      <td>D. Pedrosa</td>
      <td>Honda</td>
      <td>147</td>
    </tr>


    <tr>
      <td>3</td>
      <td>J. Lorenzo</td>
      <td>Yamaha</td>
      <td>137</td>
    </tr>


    <tr>
      <td>4</td>
      <td>V. Rossi</td>
      <td>Yamaha</td>
      <td>117</td>
    </tr>


    <tr>
      <td>5</td>
      <td>C. Crutchlow</td>
      <td>Yamaha</td>
      <td>116</td>
    </tr>

</table>
<table>
<tr>
<td width=138><img src="http://littleprinter.netau.net/motogp/edition/motoGPQR.png"></td>
<td><h2 align=center>Scan to read more at motogp.com</h2></td>
</tr>
</table>

<p>Next round, <b>Indianapolis</b> - <i>August 16th 2013</i></br>
<center><img src="http://littleprinter.netau.net/motogp/edition/circuits/indianapolis.png"></center></p>

<h3>Did you know?</h3>

<p>The first ever held at Indianapolis was a motorcycle race in 1909. MotoGP caught up in 2008.</p>

<?php 				
	// Now include the footer
	makeFooter();

?>
