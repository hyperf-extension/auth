<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/auth.
 *
 * @link     https://github.com/hyperf-extension/auth
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/auth/blob/master/LICENSE
 */
namespace HyperfExt\Auth\Events;

use HyperfExt\Auth\Contracts\AuthenticatableInterface;

class Registered
{
    /**
     * The authenticated user.
     *
     * @var \HyperfExtension\Auth\Contracts\AuthenticatableInterface
     */
    public $user;

    /**
     * Create a new event instance.
     */
    public function __construct(AuthenticatableInterface $user)
    {
        $this->user = $user;
    }
}
