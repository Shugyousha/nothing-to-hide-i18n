<?php

//FIXME parsing of Strings and replacement for strings based on different DOM elements (data-i18n vs text>tspan)

//TODO change from static string to fontfile place and encode on the fly to base64
define("FONTBASE64", "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");


//define("STYLESTRING", "@font-face { font-family: Ostrich Sans; src: url(\"data:application/font-woff;charset=utf-8;base64,"+FONTBASE64+"\"); }");

//TODO add to all SVG files these attributes: data-i18n, textLength (visually from Inkscape), lengthAdjust="spacingAndGlyphs"
//TODO add smart loading of ressources in code of all config.js files: load from subdirectories, depending on selected language
$filelist=array(
	"FINAL/cutscene/img/header.svg",
	"FINAL/cutscene/pics2/meta0001.svg",
	"FINAL/cutscene/pics2/meta0002.svg",
	"FINAL/cutscene/pics2/meta0003.svg",
	"FINAL/cutscene/pics2/meta0004.svg",
	"FINAL/cutscene/pics2/meta0005.svg",
	"FINAL/cutscene/pics2/meta0006.svg",
	"FINAL/cutscene/pics2/meta0007.svg",
	"FINAL/cutscene/pics2/meta0008.svg",
	
	"FINAL/cutscene/pics/establishing_fg.svg",
	"FINAL/menu/assets/propaganda/title.svg", 
	"FINAL/game/assets/propaganda/dont_help_hiders.svg",
	"FINAL/game/assets/propaganda/error.svg",
	"FINAL/game/assets/propaganda/intro_pics.svg",
	"FINAL/game/assets/propaganda/needs_dummy.svg",
	"FINAL/game/assets/propaganda/nobody_messes.svg",
	"FINAL/game/assets/propaganda/nobody_the_wall.svg",
	"FINAL/game/assets/propaganda/nobody_the_wall_2.svg",
	"FINAL/game/assets/propaganda/pickup_gardner.svg",
	"FINAL/game/assets/propaganda/pickup_lookout.svg",
	"FINAL/game/assets/propaganda/puzzle_mock.svg",
	"FINAL/game/assets/propaganda/puzzle_psa.svg",
	"FINAL/game/assets/propaganda/questions.svg",
	"FINAL/game/assets/propaganda/smile.svg",
	"FINAL/game/assets/propaganda/stream_wall.svg",
	"FINAL/game/assets/propaganda/stream_wall_2.svg",
	"FINAL/game/assets/propaganda/tut_carpet.svg",
	"FINAL/game/assets/propaganda/tut_darker.svg",
	"FINAL/game/assets/propaganda/tut_pickup.svg",
	"FINAL/game/assets/propaganda/tut_power.svg",
	"FINAL/game/assets/propaganda/tut_reminder.svg",
	"FINAL/game/assets/propaganda/tut_slidewalk.svg",
	"FINAL/game/assets/propaganda/tut_slow.svg",
	"FINAL/game/assets/propaganda/tut_walk.svg",
	"FINAL/game/assets/propaganda/unsecret_ballot.svg",
	"FINAL/game/img/share_big.svg",
	"FINAL/menu/img/share_big.svg"
);

$action = "";
if (count($argv)>1){
	$action = $argv[1];
}

//TODO replace by file list which is read from "locales" directory instead of a static list
$langList=array("en","de","nl","ru","fr","it","sv");
//do this only once to avoid unecessary file operations
if 	($action==="doTranslate"||$action==="")
	$languages = getLanguages($langList);

//TODO: consider indicating nothing => updateFont && doTranslate && createOverview

foreach ($filelist as $file){
	switch ($action){
		case "extractStrings":
			extractStrings($file);
			break;
		case "updateFont":
			updateFont($file);
			//TODO probably also add doTranslate, so all translation get updated by itself
			break;
		case "doTranslate":
		case "": case null:
			doTranslate($file,$languages);
			break;
		case "?":
		case "help": 
			printHelp();
			break 2;
		case "createOverview":
			createOverviewList("overviewList.htm",$filelist,$langList);
			createOverviewTable("overviewTable.htm",$filelist,$langList);
			break 2;
		default:
			echo "You entered an invalid command\n\n";
			printHelp();
			break 2;
	}
}
if ($action===""){
	createOverviewList("overviewList.htm",$filelist,$langList);
	createOverviewTable("overviewTable.htm",$filelist,$langList);
}

/**
 * returns an array of all languages from the JSON files, given an array of language codes
 */
function getLanguages($langList){
	$languages = array();
	foreach ($langList as $lang){
		$json=file_get_contents ("FINAL/locales/translation-$lang.json");
		//we want an associative array, thus second parameter is true
		$languages[$lang] = json_decode($json,true);
		//print_r($obj);
	}
	return $languages;
}


function explodeFile($file){
	$pos = strrpos($file, '/')+1;
	$filename = substr($file, $pos);
	$filepath = substr($file, 0, $pos);
	return array($filepath,$filename);
}

function extractStrings($file){
	$filenamepart=explodeFile($file);
	//remove last 4 chars as it is assumed that these are the file extension ".svg"
	echo "'".substr($filenamepart[1],0,-4)."': {\n";
    $buffer=file_get_contents ($file);
	//echo $buffer;
    $pos=0;
    $notfirst=false;
    $num=0;
    while ($pos!==false){
        $pos = getNextText($buffer,$pos);
        //echo "text $pos\n";
        if ($pos==false) {break;}
        $pos = getNextTSpan($buffer,$pos);
        //echo "tspan $pos\n";
        if ($pos==false) {break;}
        $posL = getNextGt($buffer,$pos);
        //echo "gt $posL\n";
        $posR = getNextLt($buffer,$posL);
        //echo "lt $posR\n";
        $text = getTextBetween($buffer,$posL,$posR);
        $pos = $posR;
        
        if ($notfirst) { echo ","; $notfirst=true;}
        //echo $text."-".$pos."\n";
        $num++;
        echo "    'string$num': '$text'\n";
        
   }
   //TODO: change so that correct JSON is generated without an unecessary comma at the end
   echo "},\n";
}

function printHelp(){
	global $argv;
	echo "Usage: php ".$argv[0]." <action>\n";
	echo "<action> can be: \n";
	echo "* (empty string): makes doTranslate and createOverview";
	echo "* 'doTranslate': translates all images given the current language files\n";
	echo "* 'updateFont': updates all SVGs with Ostrich-Sans text to use a different BASE64 code after changing it in the source of this script\n";
	echo "* 'extractStrings': tries to extract all strings from the SVGs, printing them as JSON code. Experimental! Don't rely solely on it.\n";
	echo "* 'createOverview': create an html overview which lists all SVGs in a table, in order to check whether translation look good in all languages\n";
}

/* general approach: 
	- read in translation files from locales
	- find text occurence of data-i18n attribute in DOM tags
	- translate text in that DOM tag from locales files, similar to i18next for all translation files
	- create files in subdirectories of the actual SVG (e.g. "FINAL/cutscene/pics/establishing_fg.svg" => "FINAL/cutscene/pics/XX/establishing_fg.svg" where XX is "en", "de", "ru", etc.
* */
function doTranslate($file,$languages){
	echo "\n\n=============================\n";
	echo "Translating $file\n";
	echo "=============================\n";
	$filenamepart=explodeFile($file);
	$buffer=file_get_contents($file);
	//loop through the languages
	foreach ($languages as $key=>$lang){
		echo "-----------------------------\n";
		echo "Translating to language $key\n";
		echo "-----------------------------\n";
		$posR=0;
		$translated = "";
		while (true){
			//find next occurence of a data-i18n attribute
			$pos1 = getNextDataI18N($buffer,$posR+1);
			
			//if there is no more occurence, there's nothing more to do; break this loop
			if ($pos1==false) {break;}
			
			//else extract the dataName from this attribute
			$pos2 = getNextQuote($buffer,$pos1+1);
			$dataName = getTextBetween($buffer,$pos1,$pos2);
		
			//append with text that comes before the string to be translated
			$posL = getNextGt($buffer,$pos2);
			$translated .= getTextBefore($buffer,$posR,$posL);
			
			//append with translation of said string
			$replaceText = getI18nText($dataName,$lang);
			echo "* $dataName=$replaceText\n";	
			$translated .= $replaceText;
			
			//go to end of translated string
			$posR = getNextLt($buffer,$posL);
			$pos1 = $posR;
		
		}
		//append part of file after last translated string
		$translated .= substr($buffer,$posR,-1);// getTextAfter($buffer,$posR);
		
		//if language directory does not exist, create it
		$directory = $filenamepart[0]."$key/"; 
		if (!is_dir($directory)) {
			mkdir($directory);
			echo "* created directory $directory\n";
		}
		
		//create file for language
		$newFile=$directory.$filenamepart[1];
		file_put_contents($newFile,$translated);
		
	}
}

/**
 * This function creates a file at $htmFileName which lists all SVGs below each other
 * This is nice for checking whether translation look good in all languages
 */
function createOverviewList($htmFileName,$filelist,$langList){
	echo "\n\n=============================\n";
	echo "Creating overview at $htmFileName\n";
	echo "=============================\n";
	$out = "";
	//loop through the files
	foreach ($filelist as $file){
		$filenamepart=explodeFile($file);
		echo "-----------------------------\n";
		echo "File $file\n";
		echo "-----------------------------\n";
		echo "* Reading original at $file\n";
		$out.="<h1>$file</h1>";
		$out.="<h2>Original</h2>";
		$out.=file_get_contents($file);
		$out.=htmlSeparator();
		//loop through the languages
		foreach ($langList as $key){
			$langFile=$filenamepart[0]."$key/".$filenamepart[1];
			echo "* Reading language $key at $langFile\n";
			$out.="<h2>Language: $key</h2>";
			$out.=file_get_contents($langFile);
			$out.=htmlSeparator();
		}
	}
	$out=htmlHeader("Overview list").$out.htmlFooter();
	file_put_contents($htmFileName,$out);
}

/**
 * This function creates a file at $htmFileName which lists all SVGs in a table (scaled)
 * This is nice for checking whether translation look good in all languages
 */
function createOverviewTable($htmFileName,$filelist,$langList){
	echo "\n\n=============================\n";
	echo "Creating overview table at $htmFileName\n";
	echo "=============================\n";
	$out = "<th>&nbsp;</th><th>(original)</th>";
	foreach ($langList as $key){
		$out.="<th>$key</th>";
	}
	$out = "<tr>$out</tr>";
	//loop through the files
	foreach ($filelist as $file){
		$filenamepart=explodeFile($file);
		echo "-----------------------------\n";
		echo "File $file\n";
		echo "-----------------------------\n";
		echo "* Reading original at $file\n";
		$row ="<th>$file</th>";
		$row.="<td>".file_get_contents($file)."</td>";
		//loop through the languages
		foreach ($langList as $key){
			$row.="\n<!-- ----------------------------------------->\n";
			$langFile=$filenamepart[0]."$key/".$filenamepart[1];
			echo "* Reading language $key at $langFile\n";
			$row.="\n<td>\n".file_get_contents($langFile)."\n</td>\n";
		}
		$out .= "<tr>$row</tr>";
		$row.="\n\n<!-- =========================================== -->\n\n";
	}
	$out=htmlHeader("Overview table")."<table border=1>$out</table>".htmlFooter();
	file_put_contents($htmFileName,$out);
}



/**
 * Helper function for createOverview (above)
 */
function htmlSeparator(){
	return "\n\n<br/><hr/>\n<!-- ----------------------------------------------->\n\n";
}

/**
 * Helper function for createOverview (above)
 */
function htmlHeader($title){
	return "<!DOCTYPE html>
		<html>
		<head>
		<title>$title</title><meta charset='utf-8'/>
		<style>
			body{
				background-color: #ccc;
				background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0));
				background-size: 50px 50px;
			}
		</style>
		</head>
		<body>";
}

/**
 * Helper function for createOverview (above)
 */
function htmlFooter(){
	return "</body></html>";
}


/**
 * Updates the font-face code with the BASE64 constant defined at the top of the script in all template SVGs
 * But only if there already exists exactly one @font-face directive in the SVG
 * Does not updated translated SVGs! (use doTranslate afterwards to update the font-face therein)
 */
function updateFont($file){
	$filenamepart=explodeFile($file);
	$buffer=file_get_contents($file);
	$posL = getNextFontFace($buffer,0);
	if ($posL===false) {
		echo "\n=> NOTICE: $file has no font-face! returning.\n"; return;
	}
	if (getNextFontFace($buffer,$posL+1)!==false) {
		echo "\n=> ERROR: $file has more than one font-face! Doing nothing, returning.\n"; return;
	}
	$posR = getNextCurlyBracket($buffer,$posL);
	$out=getTextBefore($buffer,0,$posL-1);
	$out.="@font-face { font-family: Ostrich Sans; src: url(\"data:application/font-woff;charset=utf-8;base64,".FONTBASE64."\"); }";
	$out.=getTextAfter($buffer,$posR+1);
	file_put_contents($file,$out);
}


/**
 * Gets the corresponding text out of a JSON language array from a key string like "key1.key2.key3";
 */
function getI18nText($name,$lang) {
	//explode into parts
	$nameparts=explode(".",$name);
	for ($i=0;$i<count($nameparts);$i++){
		$name = $nameparts[$i];
		$lang = $lang[$name];
	}
	return $lang;
}

/**
 * ==================================
 * BELOW ARE STRING HELPER FUNCTIONS
 */

function getNextFontFace($buffer,$pos){
	return strpos($buffer,'@font-face',$pos);
}

function getNextCurlyBracket($buffer,$pos){
	return strpos($buffer,'}',$pos);
}

function getNextDataI18N($buffer,$pos){
	$a = strpos($buffer,'data-i18n="',$pos);
	if ($a!==false) {$a+=strlen('data-i18n="')-1;}
	return $a;
}

function getNextQuote($buffer,$pos){
	return strpos($buffer,'"',$pos);
}

function getNextText($buffer, $pos){
	return strpos($buffer,"<text",$pos);
}

function getNextTSpan($buffer, $pos){
	return strpos($buffer,"<tspan",$pos);
}

function getNextLt($buffer,$pos){
	return strpos($buffer,"<",$pos);
}

function getNextGt($buffer,$pos){
	return strpos($buffer,">",$pos);
}

function getTextBetween($buffer,$pos1,$pos2){
	return substr($buffer, $pos1+1, $pos2-$pos1-1);
}

function getTextBefore($buffer,$pos1,$pos2){
	return substr($buffer, $pos1, $pos2-$pos1+1);
}

function getTextAfter($buffer,$posR){
	return substr($buffer." ",$posR,-1);
}
