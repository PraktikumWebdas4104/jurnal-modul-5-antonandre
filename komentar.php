<form method="POST">
	Komentar : <input type="text" name="komentar"><br>
	<input type="submit" name="kirim" value="CEK">
</form>

<?php
}
if (isset($_POST['kirim'])){
	
	$komentar = $_POST['komentar'];
	
	if(str_word_count($komentar)>=5){
		echo $komentar;
		}else if(str_word_count($komentar)<5){
		echo "Kata yang diinputkan kurang dari 5";
		}
}
?>
