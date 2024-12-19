<?php

declare(strict_types=1);

namespace Tests\ControllerTest;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DrinkControllerTest extends WebTestCase
{
    public function testDeQueTodosOsDrinksFuncionam(): void
    {

        $client = static::createClient();

        $request = $client->request('GET', '/drinks');

        $response = json_decode(
            $client->getResponse()->getContent()
        );

        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(expectedCode: 200);
        $this->assertIsArray($response);
        $this->assertIsInt($response[0]->id);
        $this->assertIsString($response[0]->nome);

    }
}