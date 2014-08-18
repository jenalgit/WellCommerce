<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\CoreBundle\Form\Conditions;

use WellCommerce\Bundle\CoreBundle\Form\Condition;

/**
 * Class GE
 *
 * @package WellCommerce\Bundle\CoreBundle\Form\Conditions
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class GE extends Condition implements ConditionInterface
{
    /**
     * Checks whether given value is greater or equal
     *
     * @param $value
     *
     * @return bool
     */
    public function evaluate($value)
    {
        if ($this->_argument instanceof Condition) {
            return false;
        }

        return ($value >= $this->_argument);
    }
}