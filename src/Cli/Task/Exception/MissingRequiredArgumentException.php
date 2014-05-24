<?php
/**
 * This file is part of Vegas package
 *
 * @author Slawomir Zytko <slawomir.zytko@gmail.com>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage https://github.com/vegas-cmf
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vegas\Cli\Task\Exception;

use Vegas\Cli\Exception as CliException;

/**
 * Class MissingArgumentException
 * @package Vegas\Cli\Task\Exception
 */
class MissingRequiredArgumentException extends CliException
{
    /**
     * @param string $argument
     */
    public function __construct($argument)
    {
        $this->message = strtr('Argument `:argument` is required', array(':argument' => $argument));
    }

    /**
     * @var string
     */
    protected $message = 'Missing required argument';
}
 