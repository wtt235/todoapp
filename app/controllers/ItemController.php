<?php

class ItemController extends BaseController {

    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function store()
	{
        $id = Input::get('_task-id');
        $item = null;
        if(!empty($id))
        {
            $item = $this->item->find($id);
        }
        else
        {
            $item = new Item;
        }
        $item->user_id = Auth::id();
        $item->title = Input::get('title');
        $item->body = Input::get('body');
        $item->setFromFormattedDate(Input::get('due'));
        $item->save();
        $tags = array();
        $tag_names = explode(",",Input::get('tags'));
        foreach($tag_names as $tag_name)
        {
            $tag = new Tag;
            $tag->name = $tag_name;
            $tags[] = $tag;
        }
        $item->tags()->delete();
        $item->tags()->saveMany($tags);
        return Redirect::to('todo');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $item = $this->item->with('tags')->find($id);
        $item->due = $item->getShortFormattedDueDate();
        return $item->toJson();
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
    {
        $item = $this->item->find($id);
		$item->delete();
        return Redirect::to('todo');
	}
}
