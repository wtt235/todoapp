<?php

class UserControllerTest extends TestCase
{
    /**
     * test that user/create route returns
     */
    public function testCreateUserForm()
    {
        $crawler = $this->client->request('GET', 'user/create');
        $this->assertTrue($this->client->getResponse()->isOk());
    }
} 