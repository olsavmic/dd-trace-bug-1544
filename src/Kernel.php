<?php

namespace App;

use DDTrace\GlobalTracer;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Annotation\Route;

class Kernel extends BaseKernel
{

    use MicroKernelTrait;

    #[Route('/')]
    public function indexAction(): Response
    {
        // Commenting out this line fixes the issue
        GlobalTracer::get()->getActiveSpan();

        return new Response('Hello World!');
    }

}
