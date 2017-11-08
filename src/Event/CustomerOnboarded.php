<?php
namespace WorldFirst\CommmandBusDemo\Event;

use WorldFirst\CommmandBusDemo\OnboardedCustomer;

/**
 * Class CustomerCreated
 */
final class CustomerOnboarded
{
    /**
     * @var OnboardedCustomer
     */
    private $customer;

    /**
     * @param OnboardedCustomer $customer
     * @return CustomerOnboarded
     */
    public static function fromOnboardedCustomer(OnboardedCustomer $customer): self
    {
        return new self($customer);
    }

    /**
     * CustomerCreated constructor.
     * @param OnboardedCustomer $customer
     */
    public function __construct(OnboardedCustomer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return OnboardedCustomer
     */
    public function customer()
    {
        return $this->customer;
    }
}