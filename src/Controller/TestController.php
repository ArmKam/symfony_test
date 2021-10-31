<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
        var_dump("Ca fonctionne");
        die();
    }

    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET","POST"}, host="localhost",
     * schemes={"http", "https"})
     * 
     */

    public function test(Request $request, int $age)
    {
        // dump("Page de test");
        // die();

        // $request = Request::createFromGlobals();
        //dd($request);
        dump($request);

        //   $age = $request->attributes->get('age');  on passe $age en parametter


        $prenom = $request->query->get('prenom', "anonymus");

        // $age = 0;
        // if (!empty($_GET["age"])) {

        //     $age = $_GET["age"];
        // }
        // dd("Votre prenom est {$prenom}");
        // dd("Vous avaez {$age} ans");

        return new Response("{$prenom} avaez {$age} ans!");
    }
}
