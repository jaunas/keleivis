<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdministrationControllerTest extends WebTestCase
{
    public function testUsers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'administration/users');
    }

}
