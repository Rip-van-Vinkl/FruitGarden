<?php

require_once '../config/connect.php';


    class GardenMachine
    {
        public function add_trees($connect, $add_apple_tree, $add_pear_tree) {

            $n = 0;
            while ($n < $add_apple_tree) {
                new Apple($connect, rand(40, 50));               
                $n++;
            }

            $p = 0;
            while ($p < $add_pear_tree) {
                new Pear($connect, rand(0, 20));
                $p++;
            }
        }
    }

    class Tree
    {
        public $kind;
        public $fruit_volume;

        function __construct($connect, $fruit_volume) {
            $this->fruit_volume = $fruit_volume;
            mysqli_query($connect, query: "INSERT INTO `trees` (`id`, `kind`, `fruits`) VALUES (NULL, '$this->kind', '$this->fruit_volume') ");
        }
    }

    class Apple extends Tree
    {
        public $kind = 'яблоня';     
    }

    class Pear extends Tree
    {
        public $kind = 'груша';
    }


$machine = new GardenMachine;

if (isset($_POST['start_apple_tree']) || isset($_POST['start_pear_tree'])) {
    $start_apple_tree = 10 + (int)$_POST['start_apple_tree'];
    $start_pear_tree = 15 + (int)$_POST['start_pear_tree'];
    $machine->add_trees($connect, $start_apple_tree, $start_pear_tree);
}

if (isset($_POST['new_apple_tree']) || isset($_POST['new_pear_tree'])) {
    $new_apple_tree = (int)$_POST['new_apple_tree'];
    $new_pear_tree = (int)$_POST['new_pear_tree'];
    $machine->add_trees($connect, $new_apple_tree, $new_pear_tree); 
}


header('Location: /');

?>