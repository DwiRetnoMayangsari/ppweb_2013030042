<html>
    <head>
        <title> kalkulator sederhana </title>
        <link rel."style sheet"type="text/css"href=kalkulator-style-css">
    </head>
    <body>
        <?php if( sret($_POST["hitung"])){
        $bill 1=$_POST ["bill 1"];
        $bill 2=$_POST ["bill 2"];
        $operasi =$_POST ['operasi'];
        switch ($operasi){
            case'tambah';
            $hasil = $bill + $bill2;
        break;
            case 'kurang';
            $hasil = $bill1 - $bill2;
        break;
            case 'kali';
            $hasil = $bill1 * $bill2;
        break;
            case-'bagi';
            $hasil = $bill1/$bill2;
        break;}
        }
        ?>
        }
    </body>