<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/auth.
 *
 * @link     https://github.com/hyperf-extension/auth
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/auth/blob/master/LICENSE
 */
namespace HyperfExt\Auth\Contracts\Access;

interface Authorizable
{
    /**
     * Determine if the entity has a given ability.
     *
     * @param array|mixed $arguments
     */
    public function can(string $ability, $arguments = []): bool;
}
