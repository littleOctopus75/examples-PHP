<?php
    $array = array(
        "foo" => "bar",
        42 => 24,
        "multi" => array(
            "dimensional" => array(
                "array" => "foo"
            )
        )
            );
    var_dump($array["foo"]);
    echo "<br>";
    var_dump($array[42]);
    echo "<br>";
    var_dump($array["multi"]["dimensional"]["array"]);
?>

<?php
    class foo
    {
        function hacer_algo()
        {
            echo "Haciendo algo";
        }
    }

    $bar = new foo;
    $bar->hacer_algo();
?>