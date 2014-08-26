<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 8/25/14
 * Time: 9:48 PM
 */

class ToDoListController  extends BaseController{

    public function showList(){
        $user_id = Auth::id();
        $user = User::find($user_id);
        $items = $user->items();
    }

} 