<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/auth.
 *
 * @link     https://github.com/hyperf-extension/auth
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/auth/blob/master/LICENSE
 */
namespace HyperfExt\Auth\Contracts;

interface PasswordBrokerManagerInterface
{
    /**
     * Get a password broker instance by name.
     *
     * @return mixed
     */
    public function broker(?string $name = null);
}
