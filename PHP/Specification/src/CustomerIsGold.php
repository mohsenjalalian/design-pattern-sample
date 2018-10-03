<?php

class CustomerIsGold
{

    public function isSatisfiedBy(Customer $customer)
    {
        return $customer->type() == 'gold';
//        return $customer->type() == 'silver';
    }


}