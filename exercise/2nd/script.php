<?php
$hourly_price = 12000;

function convert_digits($string, $to) {
	$to_fa = array(
		"0" => "۰",
		"1" => "۱",
		"2" => "۲",
		"3" => "۳",
		"4" => "۴",
		"5" => "۵",
		"6" => "۶",
		"7" => "۷",
		"8" => "۸",
		"9" => "۹"
	);

	$to_en = array(
		"۰" => "0",
		"۱" => "1",
		"۲" => "2",
		"۳" => "3",
		"۴" => "4",
		"۵" => "5",
		"۶" => "6",
		"۷" => "7",
		"۸" => "8",
		"۹" => "9"
	);

	if($to === "en") return strtr($string, $to_en);
	else if($to === "fa") return strtr($string, $to_fa);
	else {
		trigger_error("destination language isn't recognized.", E_USER_WARNING);
		return $string;
	}
}

function table_row($elements) {
	echo '<tr>';
	for($i = 0; $i < count($elements); $i++) {
		echo '<td>' . convert_digits($elements[$i], "fa") . '</td>';
	}
	echo '</tr>';
}

function total_price($hourly_price) {
	$total_price = 0;
	$report = '';
	$degree_percentage = array(
		"لیسانس" => 5,
		"فوق لیسانس" => 10,
		"دکترا" => 15,
		"فوق دکترا" => 20
	);

	$total_price += ($hourly_price * (int)$_POST["time"]);
	$report .= '(' . $hourly_price . ' * ' . $_POST["time"] . ') + ';

	$degree = ($total_price * $degree_percentage[$_POST["degree"]]) / 100;
	$total_price += $degree;
	$report .= '(' . $degree . ') + ';

	if(isset($_POST["weather"])) {
		$total_price += 10000;
		$report .= '(10000) + ';
	} else {
		$report .= '(0) + ';
	}

	if(isset($_POST["work"])) {
		$total_price += 20000;
		$report .= '(20000) + ';
	} else {
		$report .= '(0) + ';
	}

	if(isset($_POST["family"])) {
		$total_price += 30000;
		$report .= '(30000) + ';
	} else {
		$report .= '(0) + ';
	}

	$report = substr($report, 0, -3);
	return $report . ' = (' . $total_price . ')';
}

echo '<pre>';
echo '<table border=1>';
if(isset($_POST["name"])) table_row(array('نام و نام خانوادگی', $_POST["name"]));
if((isset($_POST["time"]))) table_row(array('میزان کارکرد', $_POST["time"]));
if(isset($_POST["gender"])) table_row(array('جنسیت', $_POST["gender"]));
if((isset($_POST["degree"]))) table_row(array('مدرک تحصیلی', $_POST["degree"]));

$circumstance = '';
if(isset($_POST["weather"])) $circumstance .= 'سختی کار، ';
if(isset($_POST["work"])) $circumstance .= 'بدی آب و هوا، ';
if(isset($_POST["family"])) $circumstance .= 'حق عائله‌مندی، ';

if($circumstance !== '') $circumstance = substr($circumstance, 0, -3);

table_row(array('شرایط', $circumstance));
if(isset($_POST["city"])) table_row(array('شهر محل فعالیت', $_POST["city"]));
table_row(array('حقوق ساعتی', $hourly_price));
if(isset($_POST["time"])) table_row(array('مجموع حقوق', total_price($hourly_price)));

echo '</table>';
?>
