<style>

		body {
			margin: 0;
			padding: 0;
			background: url(kars2.jpg);
              -webkit-background-size: cover;
            background-size: cover;
		}
		.box{
			width: 300px;
			padding: 40px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			background: white;
			text-align: center;
		}
		.box h2 {
			color: white;
			text-transform: uppercase;
			font-weight: 500;
		}

	</style>

</head>
<body>
<form class="box">
<?php

function Yonlendir($url,$zaman = 0)
                            {
                                if($zaman != 0)
                                {
                                    header("Refresh: $zaman; url=$url");
                                }
                                else header("Location: $url");
                            }
                            $mail=$_POST['email'];
                            $sifre=$_POST['pd'];
                            //echo "Hoşgeldiniz ".$_POST['girismail'];
                            if($sifre=="b231210032" and $mail=="b231210032@sakarya.edu.tr")
                            {

                                echo "HOŞGELDİNİZ ".$_POST['pd'] ." ANA SAYFAYA YÖNLENDİRİLİYORSUNUZ ..";
                                Yonlendir("https://b211210082.000webhostapp.com",3);
                            }
                            else
                            {
                                echo "HATALI GİRİŞ"."<br>"."LOGİN SAYFASINA YÖNLENDİRİLİYORSUNUZ..";
                                yonlendir("https://b211210082.000webhostapp.com",3);
                            }

?>
</form>
</body>