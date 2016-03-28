<!DOCTYPE html>
<html>
<head>
<title>FAKTORIAL MENGGUNAKAN WHILE</title>
<style>
body{
color:#000;
background:url(rr.jpg) no-repeat;
background-size:100% 100%;
background-attachment:fixed;
font-size:18px;
font-family: Lucida Sans Typewriter;
margin:0;
padding:18px;
}
h1 {
	text-align:center;
}
</style>
</head>
<body>
<h1>FAKTORIAL MENGGUNAKAN WHILE</h1> 
</head>
<body>
<form name="frm01" method="post">
<table>
<tr>
<td>Masukkan Angka</td>
<td><input type="text" name="txtAngka" size="5"/></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="hasil" value="Hasil"/></td>
</tr>
</table>
<?php
error_reporting(0);
if($_POST['hasil']!=''){
            $angka=$_POST['txtAngka'];

            function faktorial($angka){
            if($angka<=1){
                        $hasil=1;
                        return $hasil;
            }elseif($angka>1){
                        $i=1;
                        while($i<=5)
                        {
                            $i=$i+1;  
                             $hasil=$angka * faktorial($angka-1);
                        }
                        return $hasil;
            }
}
         echo "Angka Yang Anda Masukkan :".$angka."<br>";
   echo "Faktorial dari "." ".$angka." "."adalah :"." ".faktorial($angka);
}
?>
</form>
</body>
</html>
