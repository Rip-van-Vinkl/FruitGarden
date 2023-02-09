<?php
    $trees = mysqli_query($connect, query: "SELECT * FROM `trees`");
    $trees = mysqli_fetch_all($trees);

    $tree_all = 0;
    $apple_trees = 0;
    $pear_trees = 0;
    $fruits_apple_trees = 0;
    $fruits_pear_trees = 0;

    foreach ($trees as $tree) {
        $tree_all++;

        if ($tree[1] == 'яблоня') {
            $apple_trees++;
            $fruits_apple_trees += $tree[2];
        } else {
            $pear_trees++;
            $fruits_pear_trees += $tree[2];
        }

    }

    print_r ('Всего деревьев - ' . $tree_all);
    print_r ("<br/>");
    print_r ('Из них:');
    print_r ("<br/>");
    print_r ('яблонь - ' . $apple_trees . ' и плодов на них - ' . $fruits_apple_trees . ' шт.');
    print_r ("<br/>");
    print_r ('грушь - ' . $pear_trees . ' и плодов на них - ' . $fruits_pear_trees . ' шт.');
?>