<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/auth.
 *
 * @link     https://github.com/hyperf-extension/auth
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/auth/blob/master/LICENSE
 */
namespace HyperfExtension\Auth\Events;

use HyperfExtension\Auth\Contracts\AuthenticatableInterface;

class Login
{
    /**
     * The authentication guard name.
     *
     * @var string
     */
    public $guard;

    /**
     * The authenticated user.
     *
     * @var \HyperfExtension\Auth\Contracts\AuthenticatableInterface
     */
    public $user;

    /**
     * Indicates if the user should be "remembered".
     *
     * @var bool
     */
    public $remember;

    /**
     * Create a new event instance.
     */
    public function __construct(string $guard, AuthenticatableInterface $user, bool $remember)
    {
        $this->guard = $guard;
        $this->user = $user;
        $this->remember = $remember;
    }
}
