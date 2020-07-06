<?php


namespace App\Security;


use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AuthenticatorInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\PassportInterface;

class LoginFormAuthenticator implements AuthenticatorInterface
{

    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository =$userRepository;
    }

    /**
     * @inheritDoc
     */
    public function supports(Request $request): ?bool
    {
        return $request->attributes->get('__route')==='app_login' &&
        $request->isMethod('POST');
    }

    /**
     * @inheritDoc
     */
    public function authenticate(Request $request): PassportInterface
    {
        $user = $this->userRepository->findOneByEmail($request->request->get('email'));

        if (!$user)
        {
            throw new UsernameNotFoundException();
        }

        return new Passport($user, new PasswordCredentials($request->get('password')), [
            // and CSRF protection using a "csrf_token" field
            new CsrfTokenBadge('loginform', $request->get('csrf_token')),

            // and add support for upgrading the password hash
            new PasswordUpgradeBadge($request->get('password'), $this->userRepository)
        ]);
    }

    /**
     * @inheritDoc
     */
    public function createAuthenticatedToken(PassportInterface $passport, string $firewallName): TokenInterface
    {
        // TODO: Implement createAuthenticatedToken() method.
    }

    /**
     * @inheritDoc
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // TODO: Implement onAuthenticationSuccess() method.
    }

    /**
     * @inheritDoc
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        // TODO: Implement onAuthenticationFailure() method.
    }
}