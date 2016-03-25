<?php
if (!isset($_SESSION)) 
{ 
     session_start(); 
} 

# Define program-wide constanats
define("FRENCH", "fr");
define("ENGLISH", "en");
define("BLOGUE", "BLOGUE_");

// For now, set the locale every time.  May get smarter later
function setLanguage() {
	$defaultLang = "fr_FR";

	$language = defaultVal($_SESSION, "language", $defaultLang);

	if (isset($_GET["lang"]))
	{
	    $lang = filter_input(INPUT_GET, 'lang', FILTER_SANITIZE_STRING);
	    if (strpos($lang, "en") === 0) {
	        $language = "en_US";
	    }
	    else {
	    	$language = $defaultLang;
	    }
	}

	putenv("LANG=" . $language);
	setlocale(LC_ALL, $language);
	//echo "Setting language to " . $language;

	// Set the text domain as "messages"
	$domain = "messages";
	bindtextdomain($domain, "locale");

	//bind_textdomain_codeset($domain, 'UTF-8');
	textdomain($domain);

	// Just return fr or en
	return substr($language, 0, 2) === "en" ? ENGLISH : FRENCH;
}


// This is needed to call a function from a Heredoc
$hereFunc = function($fn) {
	return $fn;
};


function defaultVal($array, $key, $default) {
    return isset($array[$key]) ? $array[$key] : $default;
}


function getBlogId($postId) {
    return BLOGUE . $postId;
}

// Is this needed?  Or is filter_input() sufficient ?
function cleanInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function getUrlForOtherLang($lang, $stuffBeforeAnchorEnds ) {
	if ($lang == ENGLISH) {
		$langForUrl = "fr";
		$langName = "Fran&ccedil;ais";
	}
	else {
		$langForUrl = "en";
		$langName = "English";
	}

	return "<a href="  . full_path()  . "?lang=" . $langForUrl . ">" . $langName . $stuffBeforeAnchorEnds .  "</a>";
}

// http://stackoverflow.com/questions/6768793/get-the-full-url-in-php
function full_path()
{
    $s = &$_SERVER;
    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
    $sp = strtolower($s['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port = $s['SERVER_PORT'];
    $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
    $host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
    $host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
    $uri = $protocol . '://' . $host . $s['REQUEST_URI'];
    $segments = explode('?', $uri, 2);
    $url = $segments[0];
    return $url;
}

?>