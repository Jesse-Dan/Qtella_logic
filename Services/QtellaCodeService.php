<?php
class QtellaCodeService
{
    public User $sender;
    public User $receiver;
    public int $code;
    public float $time_of_gen;
    public float $code_ref;
    public string $sct_key;

    public function __construct(
        User $sender,
        User $receiver,
        string $sct_key
    ) {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->sct_key = $sct_key;
    }

    public function generateCode(): QtellaCodeService
    {
        $this->code = rand(100000, 999999);
        $this->time_of_gen = 12.44;
        $this->code_ref = 00000;
        return $this;
    }
}