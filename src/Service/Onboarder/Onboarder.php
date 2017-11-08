<?php
namespace WorldFirst\CommmandBusDemo\Service\Onboarder;

use WorldFirst\CommmandBusDemo\OnboardedCustomer;

/**
 * Class Onboarder
 */
final class Onboarder implements OnboarderInterface
{
    /**
     * {@inheritdoc}
     */
    public function onboard($registrant): OnboardedCustomer
    {
        return new OnboardedCustomer();
    }
}