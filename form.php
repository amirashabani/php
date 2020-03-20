<html dir="rtl">
<form action="form.php" method="POST">
	نام خانوادگی: <input name="name" type="text"> <br> <br>
	میزان کارکرد: <input name="time" type="text"> <br> <br>
	<br>

	جنسیت:
	زن<input name="gender" type="radio" value="f" checked>
	مرد<input name="gender" type="radio" value="m"> <br> <br>
	<br>

	مدرک تحصیلی:
	لیسانس<input name="degree" type="radio" value="bachelor" checked>
	فوق لیسانس<input name="degree" type="radio" value="master">
	دکترا<input name="degree" type="radio" value="doctor">
	فوق دکترا<input name="degree" type="radio" value="postdoc"> <br> <br>
	<br>

	شرایط: <br>
	بدی اب و هوا<input name="weather" type="checkbox"> <br>
	سختی کار<input name="work" type="checkbox"> <br>
	حق عائله‌مندی<input name="family" type="checkbox"> <br> <br>
	<br>

	شهر محل فعالیت:
	<select name="city">
		<option value="tehran">تهران</option>
		<option value="qom">قم</option>
		<option value="shiraz">شیراز</option>
		<option value="mashhad">مشهد</option>
		<option value="kordestan">کردستان</option>
		<option value="gilan">گیلان</option>
		<option value="tabriz">تبریز</option>
		<option value="ardebil">اردبیل</option>
		<option value="semnan">سمنان</option>
		<option value="bandarabas">بندرعباس</option>
		<option value="sistan">سیستان</option>
		<option value="zahedan">زاهدان</option>
		<option value="mazandaran">مازندران</option>
	</select> <br>
	<br>

	مدارک تحصیلی: 
	<input name="file" type="file">
	<input name="submit" type="submit" value="دخیره‌سازی">
</form>
<?php
echo '<pre>';
print_r($_POST);
?>
</html>
