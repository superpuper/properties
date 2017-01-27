<?
// encoding UTF-8
$TRANSLIT_TABLES = array(
	'ru_RU' => array(
		"А"=>"A","Б"=>"B","В"=>"V","Г"=>"G","Д"=>"D","Е"=>"E","Ё"=>"E","Ж"=>"ZH","З"=>"Z","И"=>"I","Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N","О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T","У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH","Ш"=>"SH","Щ"=>"SCH","Ъ"=>"'","Ы"=>"Y","Ь"=>"'","Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d","е"=>"e","ё"=>"e","ж"=>"zh","з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l","м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h","ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"'","ы"=>"y","ь"=>"'","э"=>"e","ю"=>"yu","я"=>"ya"
	)
);

function transliterate($str, $locale = 'ru_RU') {
	global $TRANSLIT_TABLES;

	return isset($TRANSLIT_TABLES[$locale])?str_replace(array_keys($TRANSLIT_TABLES[$locale]), array_values($TRANSLIT_TABLES[$locale]), $str):$str;
}

?>