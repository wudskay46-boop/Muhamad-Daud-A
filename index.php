<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="style.css">
     
</head>
<body>

<form action="" method="post">
    Angka1 <input type="text" name="angka1"> <br>
    Angka2 <input type="text" name="angka2"> <br>
    Operator <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="x">x</option>
        <option value="/">/</option>
    </select>
    <button type="submit" name="eksekusi">Eksekusi</button>
</form>

<?php
if(isset($_POST['eksekusi'])) {
    $angka1 = $_POST['angka1'] ;
    $angka2 = $_POST['angka2'] ;
    $operator = $_POST['operator'] ;

    //Penjumlahan
    if ($operator == "+") {
        $hasil = $angka1 + $angka2 ;
    }

    //Pengurangan
    else if($operator == "-") {
        $hasil = $angka1 - $angka2 ;
    }

    //Perkalian
    else if($operator == "x") {
        $hasil = $angka1 * $angka2 ;
    }

    //Pembagian
    else if($operator == "/") {
        $hasil = $angka1 / $angka2 ;
    }

    echo "<div class='result'>" ;
    echo "$angka1 $operator $angka2 <br>" ;
    echo "=$hasil" ; 
    echo "</div>" ;
}
?>
    
</body>
</html>