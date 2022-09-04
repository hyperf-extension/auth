<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/auth.
 *
 * @link     https://github.com/hyperf-extension/auth
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/auth/blob/master/LICENSE
 */
namespace HyperfExtension\Auth;

use Hyperf\Context\Context;

trait ContextHelpers
{
    public function setContext(string $id, $value)
    {
        Context::set(static::class . '.' . $id, $value);
        return $value;
    }

    public function getContext(string $id, $default = null, $coroutineId = null)
    {
        return Context::get(static::class . '.' . $id, $default, $coroutineId);
    }
}
