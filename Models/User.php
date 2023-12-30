<?php
require 'Models/Account.php';

class User
{
    public string $username;
    public string $password;
    public int $trans_key;
    public Account $account;

    public function __construct(
        string $username,
        string $password,
        int $trans_key
    ) {
        $this->username = $username;
        $this->account = new Account('QtellaUser_' . $username, 0.0, "Savings", []);
        $this->password = $password;
        $this->trans_key = $trans_key;

        drawline('  >> --[User ' . $this->username . ' has been created]--  ');
        drawline('  >> --[Account with id: ' . $this->account->id . ' has been created for user ' . $this->username . ']--  ');
    }
}