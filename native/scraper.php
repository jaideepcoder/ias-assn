<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('ias-assn');

function storeLink($url,$gathered_from) {
	$query = "INSERT INTO links (url, gathered_from) VALUES ('$url', '$gathered_from')";
	mysql_query($query) or die('Error, insert query failed');
}

$userAgent = 'Googlebot/2.1 (http://www.googlebot.com/bot.html)';
$target_url='http://www.powerbuzz.in/5/bureaucracy-news.php';

// make the cURL request to $target_url
$ch = curl_init();
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$html= curl_exec($ch);
if (!$html) {
	echo "<br />cURL error number:" .curl_errno($ch);
	echo "<br />cURL error:" . curl_error($ch);
	exit;
}

// parse the html into a DOMDocument
$dom = new DOMDocument();
@$dom->loadHTML($html);

// grab all the on the page
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//table//tbody//tr//td//table//tbody//tr//td//div//h2//a");
var_dump($hrefs);
for ($i = 0; $i < $hrefs->length; $i++) {
	$href = $hrefs->item($i);
	$url = $href->getAttribute('href');
	storeLink($url,$target_url);
	echo "<br />Link stored: $url";
}
?>