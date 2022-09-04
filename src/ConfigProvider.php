<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/auth.
 *
 * @link     https://github.com/hyperf-extension/auth
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/auth/blob/master/LICENSE
 */
namespace HyperfExt\Auth;

use HyperfExt\Auth\Access\GateManager;
use HyperfExt\Auth\Commands\GenAuthPolicyCommand;
use HyperfExt\Auth\Contracts\Access\GateManagerInterface;
use HyperfExt\Auth\Contracts\AuthManagerInterface;
use HyperfExt\Auth\Contracts\PasswordBrokerManagerInterface;
use HyperfExt\Auth\Passwords\PasswordBrokerManager;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                AuthManagerInterface::class => AuthManager::class,
                GateManagerInterface::class => GateManager::class,
                PasswordBrokerManagerInterface::class => PasswordBrokerManager::class,
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                    'ignore_annotations' => [
                        'mixin',
                    ],
                ],
            ],
            'commands' => [
                GenAuthPolicyCommand::class,
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for hyperf-extension/auth.',
                    'source' => __DIR__ . '/../publish/auth.php',
                    'destination' => BASE_PATH . '/config/autoload/auth.php',
                ],
            ],
        ];
    }
}
