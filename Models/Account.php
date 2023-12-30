<?php

class Account
{
    public string $id;
    public float $balance;
    public string $account_type;
    public array $tranx_history;

    public function __construct(
        string $id,
        float $balance,
        string $account_type,
        array $tranx_history
    ) {
        $this->id = $id;
        $this->balance = $balance;
        $this->account_type = $account_type;
        $this->tranx_history = $tranx_history;
    }

    public function showBalance()
    {
        return $this->balance;
    }

    public function setBalance($newBalance)
    {
        return $this->balance = $newBalance;
    }

    public function showAccountHistory()
    {
        return $this->tranx_history;
    }
}
