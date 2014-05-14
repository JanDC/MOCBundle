<?php

namespace Jan\MOCBundle\Controller;

use Ctors\FilesystemCacheBundle\CacheProvider;
use Jan\MOCBundle\Entity\MOCPlayerInstance;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return new Response("false");
    }


}
