<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php
        /*
        $category1 = "Programming";
        $category2 = "Business";
        $category3 = "Art & Drawing";
        $category4 = "Self improvment";
        $category5 = "History";
        */

        // $categories = array("Programming", "Business", "Art & Drawing", "Self improvment", "History");
        $categories = ["Programming", "Business", "Art & Drawing", "Self improvment", "History"];
        var_dump($categories);
        echo $categories[0] . "\n";
        echo $categories[3];

        // $firstCategory = $categories[0];
        // var_dump($firstCategory);

        var_dump(count($categories));

        if (in_array('Programming', $categories)) {
            echo "Programming is a category on our system.\n";
        }

        var_dump(isset($categories[99]));
        var_dump(empty($categories[99]));
        // var_dump($categories[99]);

        ?>
    </pre>
</body>

</html>