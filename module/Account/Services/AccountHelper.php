<?php
namespace Module\Account\Services;

use Module\Account\Models\Account;

class AccountHelper
{

    public function create()
    {
        Account::create([
            'name'          => 'Binary Teach Zonesss',
            'balance'       => 36500 ,
            'account_no'    => '12547856',
        ]);
    }
}