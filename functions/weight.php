<form action="" method="POST">
        <p>
            <button type="submit" name="weight">Посчитать вес собранных фруктов</button>
        </p>
    </form>

    
    <?php
        if (isset($_POST['weight'])) {
        ?>
    <?php
    //вес, конечно, будет меняться каждый раз при нажатии кнопки, но мне уже лень переписывать
    $apples_weight = $fruits_apple_trees*rand(150, 180)/1000;
    $pears_weight = $fruits_pear_trees*rand(130, 170)/1000;

    print_r ("<br/>");
    print_r ('Масса всех яблок = ' . $apples_weight . ' кг.');
    print_r ("<br/>");
    print_r ('Масса всех грушь = ' . $pears_weight . ' кг.');
    print_r ("<br/>");
    print_r ('Всего  - ' . $pears_weight + $pears_weight . ' гр.');
    ?>
        <?php
            }
        ?>