<?php 
include "php/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <div class="num">
            <h1 class="title">ToDoList</h1>
            <br>
            <div class="flex">
                <div class="flex1"><form action="php/tambah.php" method="post"><input name="input" type="text"> <button>Tambah</button></form></div>
            </div>
        </div>
        <div class="todo">


            <?php
            $sql = "SELECT * FROM list";
            $query = mysqli_query($conn, $sql);
            while($data = mysqli_fetch_array($query)){
            ?>

            <br>
            <div class="list">
                <form action="php/ubah.php" method="post">
                <input class="input" name="input2" value="<?= $data["todo"] ?>"></input>
                <input class="hidden" name="input3" value="<?= $data["id"] ?>"></input>
                <div class="btn">
                <button class= "bn">Simpan Edit</button>
                </form>
                <i>|</i>
                <a class= "bn" href="php/hapus.php?p=<?= $data["id"] ?>">Hapus</a>
                </div>
                
            </div>

            <?php 
            }
            ?>
            

        </div>
    </div>
</body>
</html>