<?php
     date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

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

    $cars = array($porsche, $ford, $lexus, $mercedes);

    $cars_matching_search = array();
    foreach ($cars as $car) {
        if ($car->worthBuying($_GET['price'])) {
            array_push($cars_matching_search, $car);
        }
    }
    $app->get("/", function() {
        return
        "<!DOCTYPE html>
        <html>
        <head>
            <title>Find a Car</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        </head>
            <body>
                <div class='container'>
                    <h1>Your Car Dealership</h1>
                        foreach ($cars_matching_search as $auto) {
                            echo '<div class='row'>
                                    <div class='col-md-6'>
                                        <p>Make/Model: $auto->make_model</p>
                                        <p>Price: $$auto->price</p>
                                        <p>Miles: $auto->miles</p>
                                    </div>
                                </div>';
                        }
                </div>
            </body>
        </html>"
        ;
    });

    return $app;
?>