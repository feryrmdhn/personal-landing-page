<?php
if($_POST['kirim']){
	$admin = 'mtksigma@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$name	= htmlentities($_POST['name']);
	$email	= htmlentities($_POST['email']);
	$subject	= htmlentities($_POST['subject']);
	$message	= htmlentities($_POST['message']);
	
	$pengirim	= 'Dari: '.$name.' <'.$email.'>';
	
	if(mail($admin, $subject, $message, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
	}
}else{
	header("Location: index.php");
}
?>