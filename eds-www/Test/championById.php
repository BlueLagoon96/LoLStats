<?PHP
$id = "";
$api_key = "";
if(isset($_REQUEST["id"])){
	$id = $_REQUEST["id"];
}
if(isset($_REQUEST["api_key"])){
	$api_key = $_REQUEST["api_key"];
}
$url = "https://na1.api.riotgames.com/lol/platform/v3/champions/" . $id . $api_key;
$jsonText = file_get_contents($url, False);
echo $jsonText;
?>