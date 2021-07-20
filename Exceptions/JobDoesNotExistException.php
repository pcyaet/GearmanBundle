<?php

/**
 * Gearman Bundle for Symfony2
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

namespace Mmoreram\GearmanBundle\Exceptions;

use Mmoreram\GearmanBundle\Exceptions\Abstracts\AbstractGearmanException;

/**
 * GearmanBundle can't find job specified as Gearman format Exception
 *
 * @since 2.3.1
 */
class JobDoesNotExistException extends AbstractGearmanException
{

}
