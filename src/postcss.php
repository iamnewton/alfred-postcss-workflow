<?php
	// error_reporting(0);
	require_once('workflows.php');
	$w = new Workflows();
	
	// cache
	if ( true && filemtime("data.json") <= time()-86400*7 || 1 ) {
		$data = json_decode(file_get_contents("https://raw.githubusercontent.com/himynameisdave/postcss-plugins/master/plugins.json"));
		$arr = array();
	
		foreach ($data as $item) {
			$title = $item->name;
			$url = $item->url;
			$description = $item->description;
			$keywords = join(',', $item->tags);
	        
			$arr[] = array(
				"url" => $url,
				"title" => $title,
				"description" => $description,
				"keywords" => $tags
	        );
		}
		if (count($arr)) {
			file_put_contents("data.json", json_encode($arr));
		}
	}
	
	if (!isset($query)) { 
		$query = urlencode( "atcss" ); 
	}
	
	$data = json_decode(file_get_contents("data.json"));
	
	function registerResult($result) {
		global $w;
		$w->result( $result->title, $result->url, $result->title." ".$result->tags, $result->description, "icon.png" );
		return;
	}

	$found = array();
	$query = strtolower(trim($query));

	foreach ($data as $key => $result) {
		$value = strtolower(trim($result->title));
		$description = utf8_decode(strip_tags($result->description));
		$keywords = utf8_decode($result->keywords);

		if (strpos( $value, $query ) === 0) {
			if (!isset($found[$value])) {
				$found[$value] = true;
				registerResult($result);
			}
		}
		else if (strpos($value, $query) > 0) {
			if (!isset($found[$value])) {
				$found[$value] = true;
				registerResult($result);
			}
		}
		else if (strpos($keywords, $query) !== false) {
			if (!isset($found[$value])) {
				$found[$value] = true;
				registerResult($result);
			}
		}
		else if (strpos($description, $query) !== false) {
			if (!isset($found[$value])) {
				$found[$value] = true;
				registerResult($result);
			}
		}
	}
	
	echo $w->toxml();
?>