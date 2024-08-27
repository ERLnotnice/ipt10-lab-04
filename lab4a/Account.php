<?php

class Account
{
    // Properties
    public $number;
    public $balance;

    // Constructor
    public function __construct($number, $balance)
    {
        $this->number = $number;
        $this->balance = $balance;
    }

    // Methods with placeholder implementation
    public function deposit()
    {
        return false; // Placeholder implementation
    }

    public function withdraw()
    {
        return false; // Placeholder implementation
    }
    public function createTransactions()
    {
        return false; // Placeholder implementation
    }
}

?>
