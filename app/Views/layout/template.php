<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/assets/css/crud.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>CRUD</title>
</head>

<body>
    <header>
        <nav>
            <table>
                <tr>
                    <td>Kelompok</td>
                    <td>:</td>
                    <td>Kelompok 7</td>
                </tr>
                <tr>
                    <td>Mata Kuliah</td>
                    <td>:</td>
                    <td>Praktikum Web Programming</td>
                </tr>
            </table>
        </nav>
    </header>
    <?= $this->renderSection('content') ?>
</body>

</html>