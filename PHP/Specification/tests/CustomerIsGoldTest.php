<?php


class CustomerIsGoldTest extends \PHPUnit\Framework\TestCase
{
    public function testACustomerIsGoldIfTheyHaveTheRespectiveType()
    {
        $specification = new CustomerIsGold;

        $goldCustomer = new Customer('gold');
        $silverCustomer = new Customer('silver');

        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
        $this->assertFalse($specification->isSatisfiedBy($silverCustomer));
    }
}