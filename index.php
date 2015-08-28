<?php

public static function get_сid() {
	list($version, $domainDepth, $cid1, $cid2) = preg_split('[\.]', $_COOKIE["_ga"], 4);
	$ga = array('version' => $version, 'domainDepth' => $domainDepth, 'cid' => $cid1.'.'.$cid2);

	return $ga;
}

echo '<pre>';
print_r(get_сid());
echo '</pre>';

?>