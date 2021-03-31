<?php
#Untuk sisi dari balok, itu bisa dijadikan satu.
#Variabel super global bisa diakses dimana saja.
$_GET['nama'] = 'Anne';
#Array isi satu yaitu Anne dengan key nama.
echo $_GET; 
var_dump($_GET);
#Tipe data array yang gabisa ditampilkan lewat echo, harus di loop.
#Digunakan untuk debugging.
#Mengisi get dari URL
# ? + key = ...
#Kalau mau dua, dikasih &

echo $_POST
$_POST['nama'] = 'Anne';
#Gabisa diisi lewat url, bisanya lewat form.
#Method dalam form adalah post.
#Mengirim key dengan name.
#Value bisa langsung dari form.

    if (isset($_POST['submit_btn'])){
        if (strLen($_POST['nama'])> 0){
            echo 'Login!';
        } else{
            echo 'Isi yang benar!';
        }
    }
    #Gunanya untuk mengecek, apa udah dikasih value postnya.
    #strLen itu mengecek panjang string

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anne</title>
</head>
<body>
    <h1>Nama <?php echo isset($_GET['nama']) ? ($_GET['nama']): '';  ?></h1>
    <!-- Ternary operator untuk mengecek -->
    <form action="" method="POST">
    <!-- get post -->
        <label for="">Diameter Alas</label>
        <input type="text" name="nama" value='Anne Raihan'>
        <button name='submit_btn'>Submit</button>

    </form>
        <!-- Name itu adalah key -->
        <!-- Value itu isi dari arraynya -->
        <!-- <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button>Hitung</button>
        <hr>
        <ul>
            <li>Luas Sisi : 0</li>
            <li>Volume : 0</li>
        </ul> -->
    </form>
</body>
</html>

