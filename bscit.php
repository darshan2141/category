<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="bca.php" target="_parent">BCA</a>
        <a href="bscit.php" target="_parent">BSC-IT</a>
        <a href="bscsci.php">BSC-SCi</a>
    </nav>

    <?php
    include('./connection.php');
    $category = mysqli_query($c, "select * from post where cate='bscit' ");
    while ($row = mysqli_fetch_array($category)) {
    ?>
        <div>
            <h1><?php
                echo $row['title'];
                ?></h1>
            <h2>
                <?php
                echo $row['content'];
                ?>
            </h2>
        </div>
    <?php
    }

    // $t = mysqli_query($c, "insert into category values(1,'BCA')");
    ?>

</body>

</html>