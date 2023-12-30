<?php

require 'Models/User.php';
require 'Models/Account.php';
require 'Services/QtellaCodeService.php';


class Transaction
{
    public User $sender;
    public User $receiver;
    public float $amount;
    public float $time;
    public string $trans_ref;
    public string $trans_type;

    public function __construct(
        User $sender,
        User $receiver,
        float $amount,
        float $time,
        string $trans_ref,
        string $trans_type
    ) {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->amount = $amount;
        $this->time = $time;
        $this->trans_ref = $trans_ref;
        $this->trans_type = $trans_type;
    }

    public function send(string $sct_key)
    {
        $qtella_code_service = new QtellaCodeService($this->sender, $this->receiver, $sct_key);
        $qtella_code = $qtella_code_service->generateCode();
        echo ($qtella_code->sender->username);
    }

    public function redeemCode()
    {
        // Implement code redemption logic here
    }

    public function checkCodeBalance()
    {
        // Implement code balance check logic here
    }

    public function releaseCode()
    {
        // Implement code release logic here
    }
}
