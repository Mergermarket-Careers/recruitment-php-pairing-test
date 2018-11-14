<?php

namespace Tests\Functional;

class AppTest extends BaseTestCase
{
    /**
     * Test that the index route returns a rendered response containing the text 'homepage'
     */
    public function testGetHomepage()
    {
        $response = $this->runApp('GET', '/');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertContains('homepage', (string)$response->getBody());
    }

    public function testReturnsForbiddenOnSecretPage()
    {
        $response = $this->runApp('GET', '/secret');

        $this->assertEquals(403, $response->getStatusCode());
    }
}