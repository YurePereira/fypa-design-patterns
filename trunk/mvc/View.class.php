<?php
class View {
	public function showView() {
		echo <<<HTML
<!doctype html>
<html>
	<bod>
		<form method="post">
			Nome:<input type="text" name="txt_nome" id="txt_nome" />
			<br />
			Email:<input type="text" name="txt_email" id="txt_email" />
			<br />
			<input type="submit" value="Validar" />
		</form>
	</body>
</html>
HTML;
	}
}