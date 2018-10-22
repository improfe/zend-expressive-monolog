<?php
/**
 * jolicht
 *
 * @link      https://jolicht.com
 * @copyright Copyright (c) 2018 jolicht
 */

declare(strict_types=1);

namespace ZendExpressiveMonolog;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [

        ];
    }

    public function getDependencies(): array
    {
        return [
            'factories' => [

            ]
        ];
    }
}