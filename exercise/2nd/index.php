<!DOCTYPE html>
<html dir="rtl">
	<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="font-face.css"/>
	</head>
	<body>
		<form action="index.php" method="POST">
			نام و نام خانوادگی: <input name="name" type="text"> <br> <br>
			میزان کارکرد: <input name="time" type="text"> <br> <br>
			<br>

			جنسیت: 
			زن<input name="gender" type="radio" value="زن" checked>
			مرد<input name="gender" type="radio" value="مرد"> <br> <br>
			<br>

			مدرک تحصیلی: 
			لیسانس<input name="degree" type="radio" value="لیسانس" checked>
			فوق لیسانس<input name="degree" type="radio" value="فوق لیسانس">
			دکترا<input name="degree" type="radio" value="دکترا">
			فوق دکترا<input name="degree" type="radio" value="فوق دکترا"> <br> <br>
			<br>

			شرایط: 
			بدی آب و هوا <input name="weather" type="checkbox"> 
			سختی کار<input name="work" type="checkbox"> 
			حق عائله‌مندی<input name="family" type="checkbox"> <br>
			<br>

			شهر محل فعالیت:
			<select name="city">
				<option value="تهران">تهران</option>
				<option value="اصفهان">اصفهان</option>
				<option value="قم">قم</option>
				<option value="شیراز">شیراز</option>
				<option value="مشهد">مشهد</option>
				<option value="کردستان">کردستان</option>
				<option value="گیلان">گیلان</option>
				<option value="تبریز">تبریز</option>
				<option value="اردبیل">اردبیل</option>
				<option value="سمنان">سمنان</option>
				<option value="بندرعباس">بندرعباس</option>
				<option value="سیستان">سیستان</option>
				<option value="زاهدان">زاهدان</option>
				<option value="مازندران">مازندران</option>
			</select> <br>
			<br>

			مدارک تحصیلی: 
			<input name="file" type="file">
			<input name="submit" type="submit" value="ذخیره‌سازی">
		</form>
	</body>
</html>

<?php include_once("script.php"); ?>
