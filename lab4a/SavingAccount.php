<?php

class SavingAccount extends Account
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

}

?>
