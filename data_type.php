
        <?php 
            //string
            $string = "Hello word";
            echo $string;

            //integer
            $inte = 1996;
            var_dump ($inte); // var_dump return data_type and value

            //array
            $cars = array("trum","tin","tac");
            var_dump($cars);

            //object

            class animal {
                function animal() {
                    $this ->cate = "increase";
                }
            }

            $object = new animal();
            echo $object->cate;
        ?>
