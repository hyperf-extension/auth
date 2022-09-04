<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/auth.
 *
 * @link     https://github.com/hyperf-extension/auth
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/auth/blob/master/LICENSE
 */
namespace HyperfExtension\Auth\Aspect;

use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;
use HyperfExtension\Auth\Annotations\Auth;
use HyperfExtension\Auth\Contracts\AuthenticatableInterface;
use HyperfExtension\Auth\Exceptions\AuthenticationException;

/**
 * @Aspect
 */
class AuthAspect extends AbstractAspect
{
    public $annotations = [
        Auth::class,
    ];

    /**
     * @Inject
     * @var \HyperfExtension\Auth\Contracts\AuthManagerInterface
     */
    protected $auth;

    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        $annotation = $proceedingJoinPoint->getAnnotationMetadata();

        $authAnnotation = $annotation->class[Auth::class] ?? $annotation->method[Auth::class];

        $guards = empty($authAnnotation->guards) ? [null] : $authAnnotation->guards;
        $passable = $authAnnotation->passable;

        foreach ($guards as $name) {
            $guard = $this->auth->guard($name);

            if (! $guard->user() instanceof AuthenticatableInterface and ! $passable) {
                throw new AuthenticationException('Unauthenticated.', $guards);
            }
        }

        return $proceedingJoinPoint->process();
    }
}
