<?php

namespace App\UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ComentarioControllerTest extends WebTestCase
{
    public function testAddcomentario()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addComentario');
    }

}
