<?PHP
$name = "";
$api_key = "";
if(isset($_REQUEST["name"])){
	$name = $_REQUEST["name"];
}
if(isset($_REQUEST["api_key"])){
	$api_key = $_REQUEST["api_key"];
}
$url = "https://na1.api.riotgames.com/lol/summoner/v3/summoners/by-name/" . $name . $api_key;
$jsonText = file_get_contents($url, False);
echo $jsonText;
?>