<?php
/**
 * jolicht
 *
 * @link      https://jolicht.github.io
 * @copyright Copyright (c) 2018 jolicht
 */

declare(strict_types=1);

namespace ZendExpressiveMonolog;

use Interop\Container\ContainerInterface;
use Monolog\Logger;

class LoggerFactory implements Factory
{
    public function __invoke(ContainerInterface $container): Logger
    {
        return new Logger('testName');
    }
}