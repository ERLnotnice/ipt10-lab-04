<?php

class CurrentAccount extends Account
{
    // Properties
    public $accountNo;
    public $balance;


    // Constructor
    public function __construct($accountNo, $balance)
    {
        $this->accountNo = $accountNo;
        $this->balance = $balance;
    }

    // Methods with placeholder implementation
    public function withdraw()
    {
        return false; // Placeholder implementation
    }
}

?>
