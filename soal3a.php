<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
</head>
<body>
<?php
require_once 'connection.php';
function getResult() {
    $conn = openCon();
    $data = [];
    if ($conn) {
        $nama = $alamat = '';
        if (!empty($_POST['nama'])) $nama = $_POST['nama'];
        if (!empty($_POST['alamat'])) $alamat = $_POST['alamat'];

        $str = "SELECT * FROM person as person LEFT JOIN hobi as hobi ON hobi.person_id = person.id";
        if (strlen($nama) > 0) $str .= " WHERE person.nama LIKE '%{$nama}%' ";
        if (strlen($alamat) > 0) {
            if (strlen($nama) == 0) {
                $str .= " WHERE person.alamat LIKE '%{$alamat}%' ";
            } else {
                $str .= " AND person.alamat LIKE '%{$alamat}%'";
            }
        }
        $q = $conn->query($str);
        $i = 0;
        while ($row = $q->fetch_assoc()) {
            $data[$i] = $row;
            $i++;
        }
        $conn->close();
    }
    return $data;
}

?>
<table style="width:50%" border="1">
    <thead><tr><th>Nama</th><th>Alamat</th><th>Hobi</th></tr></thead>
    <tbody>
    <?php
    foreach (getResult() as $item) {
        echo "<tr><td>{$item['nama']}</td><td>{$item['alamat']}</td><td>{$item['hobi']}</td></tr>";
    }
    ?>
    </tbody>
</table>

<form method="post" action="soal3a.php" style="border: solid 1px black; margin-top:10px;width:50%;padding:10px">
    <p>Nama : <input value="<?= empty($_POST['nama']) ? '' : $_POST['nama'] ?>" name="nama" type="text"></p>
    <p>Alamat : <input value="<?= empty($_POST['alamat']) ? '' : $_POST['alamat'] ?>" name="alamat" type="text"></p>
    <p><button>SEARCH</button></p>
</form>
</body>
</html>
