<?php

class CustomerRepositoryTest extends \PHPUnit\Framework\TestCase
{


    public function testFetchesAllCustomersWhoMatchAGivenSpecification()
    {
        $customers = new CustomerRepository(
          new Customer('gold'),
          new Customer('bronze'),
          new Customer('silver'),
          new Customer('gold')
        );

        $results = $customers->bySpecification(new CustomerIsGold);

        $this->assertCount(2, $results);
    }
}