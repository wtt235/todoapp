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
        $this->mock = Mockery::mock('Eloquent', 'User');
    }

    public function tearDown()
    {
        Mockery::close();
    }


    public function testshowList()
    {
        $user = new User(array('id' => 1));
        $this->be($user);
        $this->mock->shouldReceive('find')->once()->andReturn($user);
        $this->app->instance('User', $this->mock);
        $crawler = $this->client->request('GET', 'todo');
        $this->assertViewHas('items');
        $this->assertCount(0, $crawler->filter('tbody > tr'));
    }


} 