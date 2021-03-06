<?php

namespace App\Action\User;

use App\Domain\User\Data\UserCreatorData;
use App\Domain\User\Service\UserCreator;
use App\Responder\Responder;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\Twig;


/**
 * Action.
 */
final class UserCreateAction
{
    /**
     * @var Responder
     */
    private $responder;

    /**
     * @var UserCreator
     */
    private $userCreator;
/**
     * @var Twig
     */
    private $twig;
    /**
     * The constructor.
     *
     * @param Responder $responder The responder
     * @param UserCreator $userCreator The service
     */
    public function __construct(Responder $responder, UserCreator $userCreator, Twig $twig)
    {
        $this->twig = $twig;
        $this->responder = $responder;
        $this->userCreator = $userCreator;
    }

    /**
     * Action.
     *
     * > curl -X POST -H "Content-Type: application/json" -d {\"key1\":\"value1\"} http://localhost/users
     *
     * @param ServerRequestInterface $request The request
     * @param ResponseInterface $response The response
     *
     * @return ResponseInterface The response
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        return $this->twig->render($response, 'register/login.twig');
    }
}
