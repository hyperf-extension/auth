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

interface AuthManagerInterface
{
    /**
     * Get a guard instance by name.
     *
     * @return \HyperfExtension\Auth\Contracts\GuardInterface|\HyperfExtension\Auth\Contracts\StatefulGuardInterface|\HyperfExtension\Auth\Contracts\StatelessGuardInterface
     */
    public function guard(?string $name = null): GuardInterface;

    /**
     * Set the default guard the factory should serve.
     */
    public function shouldUse(string $name): void;
}
