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

interface UserProviderInterface
{
    /**
     * Retrieve a user by their unique identifier.
     *
     * @param mixed $identifier
     *
     * @return null|\HyperfExtension\Auth\Contracts\AuthenticatableInterface
     */
    public function retrieveById($identifier): ?AuthenticatableInterface;

    /**
     * Retrieve a user by their unique identifier and "remember me" token.
     *
     * @param mixed $identifier
     *
     * @return null|\HyperfExtension\Auth\Contracts\AuthenticatableInterface
     */
    public function retrieveByToken($identifier, string $token): ?AuthenticatableInterface;

    /**
     * Update the "remember me" token for the given user in storage.
     *
     * @param \HyperfExtension\Auth\Contracts\AuthenticatableInterface $user
     */
    public function updateRememberToken(AuthenticatableInterface $user, string $token): void;

    /**
     * Retrieve a user by the given credentials.
     *
     * @return null|\HyperfExtension\Auth\Contracts\AuthenticatableInterface
     */
    public function retrieveByCredentials(array $credentials): ?AuthenticatableInterface;

    /**
     * Validate a user against the given credentials.
     *
     * @param \HyperfExtension\Auth\Contracts\AuthenticatableInterface $user
     */
    public function validateCredentials(AuthenticatableInterface $user, array $credentials): bool;
}
