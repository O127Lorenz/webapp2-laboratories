<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
    <?php
        // task 1 Variables
		$name = 'Lorenz Genesis M.Reyes';
        $age = 20;
        $address = '#376, McArthur Highway Corazon Calumpit, Bulacan';
        $hobbies = 'Cycling, Weight-lifting, Singing, Cooking, & Playing Guitar';
        $pet_peeve = 'Smelly';
        
        echo "Name: " . $name . "\n";
        echo "Age: " . $age . "\n";
        echo "Address: " . $address . "\n";
        // task 2 Single-line comment to $hobbies and $pet_peeve
        // echo "Hobbies: " . $hobbies . "\n";
        // echo "Pet Peeve: " . $pet_peeve . "\n";

        // task 3 - constant variables
        define("NAME","Lorenz Genesis M.Reyes");
        define("AGE", 20);
        define("ADDRESS","#376, McArthur Highway Corazon Calumpit, Bulacan");
        define("HOBBIES","Cycling, Weight-lifting, Singing, Cooking, & Playing Guitar");
        define("PET_PEEVE","Smelly");

        // task 4 -Displaying constants using var_dump
        var_dump(NAME);
        var_dump(AGE);
        var_dump(ADDRESS);
        var_dump(HOBBIES);
        var_dump(PET_PEEVE);

        // task 5
       /*  My pet is smelly because of the weather, he sweat so fast due to extreme heat of this summmer 
        season, and those heat cause him stress that leads to his hot body temperature that gives some 
        odor smell, sometimes the main reason is beacause he poop unhygienically that's why he smell. */
	?>
</body>
</html>