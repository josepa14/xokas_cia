<?php
namespace App\EventListener;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class ManejoExcepciones
{
    public function __invoke(ExceptionEvent $event): void
    {
    
        $exception = $event->getThrowable();
        $message = sprintf(
            'ERROR: %s CON CODIGO: %s',
            $exception->getMessage(),
            $exception->getCode()
        );
        $response = new Response();
        $response->setContent($message);

        if ($exception instanceof HttpExceptionInterface) {
            $response->setStatusCode($exception->getStatusCode());
            $response->headers->replace($exception->getHeaders());
        } else {
            $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        // sends the modified response object to the event
        $event->setResponse($response);
    }
}
?>