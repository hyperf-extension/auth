<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/auth.
 *
 * @link     https://github.com/hyperf-extension/auth
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/auth/blob/master/LICENSE
 */
namespace HyperfExtension\Auth\Contracts;

interface StatefulGuardInterface extends GuardInterface
{
    /**
     * Attempt to authenticate a user using the given credentials.
     * @return bool|mixed
     */
    public function attempt(array $credentials = [], bool $remember = false);

    /**
     * Log a user into the application without sessions or cookies.
     */
    public function once(array $credentials = []): bool;

    /**
     * Log a user into the application.
     *
     * @param \HyperfExtension\Auth\Contracts\AuthenticatableInterface $user
     * @return mixed|void
     */
    public function login(AuthenticatableInterface $user, bool $remember = false);

    /**
     * Log the given user ID into the application.
     *
     * @param mixed $id
     *
     * @return \HyperfExtension\Auth\Contracts\AuthenticatableInterface
     */
    public function loginUsingId($id, bool $remember = false): ?AuthenticatableInterface;

    /**
     * Log the given user ID into the application without sessions or cookies.
     *
     * @param mixed $id
     *
     * @return bool|\HyperfExtension\Auth\Contracts\AuthenticatableInterface
     */
    public function onceUsingId($id);

    /**
     * Determine if the user was authenticated via "remember me" cookie.
     */
    public function viaRemember(): bool;

    /**
     * Log the user out of the application.
     * @return mixed|void
     */
    public function logout();
}
