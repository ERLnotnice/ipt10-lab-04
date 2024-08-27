<?php

class ATMTransactions
{
    // Properties
    public $transactionId;
    public $date;
    public $type;
    public $ammount;
    public $postBalance;


    // Constructor
    public function __construct($number, $balance)
    {
        $this->number = $number;
        $this->balance = $balance;
    }

    // Methods with placeholder implementation
    public function modifies()
    {
        return false; // Placeholder implementation
    }
}

?>
