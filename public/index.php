<?php declare(strict_types = 1);

use App\Kernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernel;

(static function (): void {
    require_once dirname(__DIR__) . '/vendor/autoload.php';

    \DDTrace\hook_method(
        HttpKernel::class,
        'handleRaw',
        // both pre and post hooks don't work
        function (): void {},
    );

    $kernel = new Kernel('prod', true);

    $request = Request::createFromGlobals();

    $response = $kernel->handle($request);
    $response->send();

    $kernel->terminate($request, $response);
})();
