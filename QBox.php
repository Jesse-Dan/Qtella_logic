<?php
require 'Models/User.php';
require 'Models/Transaction.php';

class QBox
{

    private User $usr1;
    private User $usr2;
    private User $usr3;

    public function __construct()
    {
        echo 'dfsf';
    }

    public function init()
    {
        drawline('Initializing App');
        drawline('App Initialized');
        drawline('QBOX STARTED');
    }

    public function initUsers()
    {
        $this->usr1 = new User("Jesse", "Iloveu2123.", 2322);
        $this->usr2 = new User("Dan", "Iloveu2123.", 2323);
        $this->usr3 = new User("Finn", "Iloveu2123.", 2324);
    }

    public function transact($usr1, $usr2)
    {
        $tranx = new Transaction($usr1, $usr2, 4000.0, 12.00, '2jw23idiqi21', 'Qcode');
        $tranx->send('2jw23idiqi21');
    }
}
