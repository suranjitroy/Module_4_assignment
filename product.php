<?php

class Product {

    private $id;
    private $name;
    private $price;
    private $stringPrice;

    public function __construct( $id, $name, $price ) {
        $this->id    = $id;
        $this->name  = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return "$" . $this->stringPrice = strval( number_format( $this->price, 2, '.' ) );
    }

    public function consoleLog() {
        echo "<script type='text/javascript'>";
        echo "console.log('ID: " . $this->id . "')";
        echo "</script>";
        echo "<script type='text/javascript'>";
        echo "console.log('Name: " . $this->name . "')";
        echo "</script>";
        echo "<script type='text/javascript'>";
        echo "console.log('Price: " . $this->getFormattedPrice() . "')";
        echo "</script>";
    }

    public function showDetails() {
        echo $this->consoleLog();
    }

}

$product = new Product( 1, 'T-shirt', 19.986746 );
$product->showDetails();

?>