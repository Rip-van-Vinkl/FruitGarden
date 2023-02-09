<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit garden</title>
</head>

<body>
     
    <?php
            if (!mysqli_num_rows(mysqli_query($connect, query: "SELECT id FROM `trees` WHERE id = 1;"))) {
        ?>
    <form action="functions/create.php" method="POST">
        <h3>Создание сада</h3>
        <p>В созданном саду будет не менее 10 яблонь и 15 груш</p>
        <h4>И можно сразу добавить несколько штук дополнительно</h4>
        <p>Сколько добавить?</p>
        <p>Яблонь: <input type="number" step="1" min="0" placeholder="step = 1" value="0" name="start_apple_tree" /></p>
        <p></p>Груш: <input type="number" step="1" min="0" placeholder="step = 1" value="0" name="start_pear_tree" /></p>
        <p><input type="submit" value="Создать сад" name="create"/></p>
    </form>
    <?php
            }
        ?>

    <?php
        if (mysqli_num_rows(mysqli_query($connect, query: "SELECT id FROM `trees` WHERE id = 1;"))) {
        ?>
    <form action="functions/create.php" method="POST">
        <h4>Можно ещё добавить деревьев разного вида</h4>
        <p>Сколько добавить?</p>
        <p>Яблонь: <input type="number" step="1" min="0" placeholder="step = 1" value="0" name="new_apple_tree" /></p>
        <p></p>Груш: <input type="number" step="1" min="0" placeholder="step = 1" value="0" name="new_pear_tree" /></p>
        <p><input type="submit" value="Добавить деревья" name="add"/></p>
    </form>
    <?php
            }
        ?>

    <?php
        require_once 'functions/view.php';
    ?>

    <form action="functions/delite.php" method="POST">
        <p>
            <button type="submit" name="delite">Вырубить сад</button>
        </p>
    </form>

</body>
</html>