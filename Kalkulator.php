<?php
    //Tampung inputan tectfield dengan vaiabel
    $angka1 = @$_POST['angka1'];
    $angka2 = @$_POST['angka2'];
    $hasil = @$_POST['hasil'];

    //Uji jika tombol diklik 
    if(isset($_POST['btambah']))
    {
        $hasil = $angka1 + $angka2;
    }
    else if(isset($_POST['bkurang']))
    {
        $hasil = $angka1 - $angka2;
    }
    else if(isset($_POST['bkali']))
    {
        $hasil = $angka1 * $angka2;
    }
    elseif(isset($_POST['bagi'])) {
        if ($angka2 == 0) {
            $hasil = "Undefined";
        } else {
            $hasil = $angka1 / $angka2;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>PHP Calculator</title>
</head>

<body>
    <form method="post">
        <table align="center" border="0">
            <tr>
                <td colspan="3" id="judul">Kalkulator</td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td class="angka">Angka 1</td>
                <td> : </td>
                <td>
                    <input type="text" name="angka1" value="<?=$angka1?>">
                </td>
            </tr>
            <tr>
                <td class="angka">Angka 2</td>
                <td> : </td>
                <td>
                    <input type="text" name="angka2" value="<?=$angka2?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                     <input type="submit" name="btambah" value="+">
                     <input type="submit" name="bkurang" value="-">
                     <input type="submit" name="bkali" value="×">
                     <input type="submit" name="bagi" value="÷">
                </td>
            </tr>
            <tr>
                <td class="angka">Hasil</td>
                <td> : </td>
                <td>
                    <input type="text" name="hasil" value="<?=$hasil?>" >
                </td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
        </table>
    </form>
</body>
</html>