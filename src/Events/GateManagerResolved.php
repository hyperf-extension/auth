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

use HyperfExtension\Auth\Contracts\Access\GateManagerInterface;

class GateManagerResolved
{
    /**
     * @var \HyperfExtension\Auth\Contracts\Access\GateManagerInterface
     */
    public $gate;

    /**
     * Create a new event instance.
     */
    public function __construct(GateManagerInterface $gate)
    {
        $this->gate = $gate;
    }
}
