<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Simple function to sort an array by a specific key. Maintains index association.

<?php

function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

$people = array(
    12345 => array(
        'id' => 12345,
        'first_name' => 'Joe',
        'surname' => 'Bloggs',
        'age' => 23,
        'sex' => 'm'
    ),
    12346 => array(
        'id' => 12346,
        'first_name' => 'Adam',
        'surname' => 'Smith',
        'age' => 18,
        'sex' => 'm'
    ),
    12347 => array(
        'id' => 12347,
        'first_name' => 'Amy',
        'surname' => 'Jones',
        'age' => 21,
        'sex' => 'f'
    )
);

print_r(array_sort($people, 'age', SORT_DESC)); // Sort by oldest first
print_r(array_sort($people, 'surname', SORT_ASC)); // Sort by surname

/*
Array
(
    [12345] => Array
        (
            [id] => 12345
            [first_name] => Joe
            [surname] => Bloggs
            [age] => 23
            [sex] => m
        )
 
    [12347] => Array
        (
            [id] => 12347
            [first_name] => Amy
            [surname] => Jones
            [age] => 21
            [sex] => f
        )
 
    [12346] => Array
        (
            [id] => 12346
            [first_name] => Adam
            [surname] => Smith
            [age] => 18
            [sex] => m
        )
 
)
Array
(
    [12345] => Array
        (
            [id] => 12345
            [first_name] => Joe
            [surname] => Bloggs
            [age] => 23
            [sex] => m
        )
 
    [12347] => Array
        (
            [id] => 12347
            [first_name] => Amy
            [surname] => Jones
            [age] => 21
            [sex] => f
        )
 
    [12346] => Array
        (
            [id] => 12346
            [first_name] => Adam
            [surname] => Smith
            [age] => 18
            [sex] => m
        )
 
)
*/

?>
</body>
</html>