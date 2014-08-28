<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 8/25/14
 * Time: 9:48 PM
 */

class ToDoListController  extends BaseController{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function showList(){
        $user = $this->user->find(Auth::id());
        $items = $user->items()->orderBy('due', 'asc')->get();
        return View::make('list', array('items' => $items))->nest('taskform', 'taskform');
    }

} 