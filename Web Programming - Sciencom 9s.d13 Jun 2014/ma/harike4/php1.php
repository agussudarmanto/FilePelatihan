Coba ketik : 
<?php
echo htmlspecialchars('<script>alert("hello you\'re hacked");</script>');
?>

<form method="POST">
<textarea name="nama"></textarea>
<input type="submit" value="KIRIM">
</form>

<?php
// tanpa filter script akan dijalankan
echo $_POST['nama'];
?>
