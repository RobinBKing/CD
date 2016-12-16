<?php
    class Car
    {
        public $make_model;
        public $price;
        public $miles;

        function _construct($auto_make_model, $auto_price, $auto_miles )
        {
            $this->make_model = $auto_make_model;
            $this->price = $auto_price;
            $this->miles = $auto_miles;
        }

    function worthBuying($max_price)
        {
            return $this->price < ($max_price + 100);
        }
    }

    $porsche = new Car("2014 Porsche 911", 114991, 7864);
    $ford = new Car("2011 Ford F450", 55995, 14241);
    $lexus = new Car("2013 Lexus RX 350", 44700, 20000);
    $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979);
    
    if  (empty($porsche->make_model)) {
        echo "This field is empty!";
    } else {
        echo $porsche->make_model;
    }
    $cars = array($porsche, $ford, $lexus, $mercedes);

    $cars_matching_search = array();
    foreach ($cars as $car) {
        if ($car->worthBuying($_GET['price'])) {
            array_push($cars_matching_search, $car);
        }
    }

    if (empty($cars_matching_search)) {
        echo "This array is empty!";
    } else {
        echo "This array is not empty!";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <div class="container">
        <h1>Your Car Dealership</h1>
        <?php 
            foreach ($cars_matching_search as $auto) {
                echo "<div class='row'>
                        <div class='col-md-6'>
                            <p>Make/Model: $auto->make_model</p>
                            <p>Price: $$auto->price</p>
                            <p>Miles: $auto->miles</p>
                        </div>
                    </div>";
            }
        ?>
    </div>
</body>
</html>