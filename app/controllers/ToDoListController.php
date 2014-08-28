<?php

class ToDoListController  extends BaseController{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     * gathers tasks (items) for the authenticated user and loads them into the to list view
     */
    public function showList()
    {
        $user = $this->user->find(Auth::id());
        $items = $user->items()->orderBy('due', 'asc')->get();
        return View::make('list', array('items' => $items))->nest('taskform', 'taskform');
    }

} 