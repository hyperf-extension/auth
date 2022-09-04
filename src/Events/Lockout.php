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

use Psr\Http\Message\ServerRequestInterface;

class Lockout
{
    /**
     * The throttled request.
     *
     * @var \Psr\Http\Message\ServerRequestInterface
     */
    public $request;

    /**
     * Create a new event instance.
     */
    public function __construct(ServerRequestInterface $request)
    {
        $this->request = $request;
    }
}
