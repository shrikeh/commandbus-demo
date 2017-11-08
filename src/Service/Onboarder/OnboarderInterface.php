<?php
namespace WorldFirst\CommmandBusDemo\Service\Onboarder;

use WorldFirst\CommmandBusDemo\OnboardedCustomer;

/**
 * Interface OnboarderInterface
 */
interface OnboarderInterface
{
    /**
     * @param $registrant
     *
     * @return OnboardedCustomer
     */
    public function onboard($registrant): OnboardedCustomer;
}