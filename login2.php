<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="content-Type" content="text/html";
charset="utf-8">
<title> untiled dokumen</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="https://font.googleapis.com/css?family=Play" rel="stylesheet">

    </head>
    <body class="login-body">
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
        <div class="sigin">
            <form action="cek_login2.php" method="post">
            <img src="img/avatar.png" class="logo">
            <img src="img/logo1.png" class="logo1">
            <br>
                <h1 style="color: white; text-align:center">login</h1>
                <input type="text" name="username" placeholder="username" required>
                <br>
                <input type="password" name="password"
                placeholder="password" required><br><br>
                <br>
               
                <input class="tombol a-class" type="submit" value="login"></a><br>
               
                <br>
                <div id="container" >
                    <a href="#" class="a-class" style="margin-right:45px; font-size:13px;
                    font-family:Tahoma, Geneva, sans-serif">reset
                     password ?</a>
                     <a href="#" class="a-class" style="margin-right:0px ;font-size:13px;
                     font-family:Tahoma, Geneva, sans-serif">forgot
                      password</a>
                </div><br><br><br><br><br><br>
                <br>
                <br>
                <h5 style="text-align:center">don't have account ? <a href="http://localhost/SOLO/signup.php" class="a-class">&nbsp;Sign up</a></h5>
            </form>
        </div>
    </body>
</html>