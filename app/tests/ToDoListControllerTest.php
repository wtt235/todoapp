<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 8/27/14
 * Time: 5:30 PM
 */


class ToDoListControllerTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->user = new User(array('id' => 1));
        $this->be($this->user);
        $this->mock = Mockery::mock('Eloquent', 'User');
    }

    public function tearDown()
    {
        Mockery::close();
    }

    /**
     * test that authenticated user will be able to generate todo list
     */
    public function testshowList()
    {
        $this->mock->shouldReceive('find')->once()->andReturn($this->user);
        $this->app->instance('User', $this->mock);
        $crawler = $this->client->request('GET', 'todo');
        $this->assertViewHas('items');
        $this->assertCount(0, $crawler->filter('tbody > tr'));
    }
} 