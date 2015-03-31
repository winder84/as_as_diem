<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 31.03.15
 * Time: 16:45
 */

?>

<div style="width: 500px; margin: 50px auto; text-align: center;">
	<form action="" name="exportForm" method="post">
		<h1 style="margin: 10px; text-align: center;">Для начала необходимо скачать файл с данными и внести правки в цены!</h1>
		<br />
		<br />
		<input type="submit" value="Экспорт" style="width: 100px; height: 50px; border-radius: 5px; background-color: lightgreen;">
		<input hidden="hidden" style="display: none;" name="export" value="1">
	</form>
</div>

<div style="width: 500px; margin: 50px auto; text-align: center;">
	<form action="" name="importForm" method="post">
		<h1 style="margin: 10px; text-align: center;">После правки цен необходимо загрузить файл обратно на сервер!</h1>
		<br />
		<br />
		<h2 style="margin: 10px; text-align: center; color: red;">Внимание! Необходимо удостовериться в корректности данных!</h2>
		<br />
		<br />
		<input type="file" name="importFile" id="importFile" value="1">
		<br />
		<br />
		<input type="submit" value="Импорт" id="importButton" style="width: 100px; height: 50px; border-radius: 5px; background-color: coral;">
		<input hidden="hidden" style="display: none;" name="import" value="1">
	</form>
</div>