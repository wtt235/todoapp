<?php

class ItemController extends BaseController {

    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

	/**
	 * Store a resource in storage. Will wither update or add, depending on if itemId
     * if provided.
	 *
	 * @return Redirect
	 */

	public function store()
	{
        $item = new Item;
        $this->fillItem($item);
	}

    public function update($id){

        $item = $this->item->find($id);
        $this->fillItem($item);
    }


	/**
	 * Display the specified item in json format
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
	 * Remove the item from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
    {
        $item = $this->item->find($id);
		$item->delete();
	}

    private function fillItem($item)
    {
        $userId  = Auth::id();
        $title = trim(Input::get('title'));
        $body = trim(Input::get('body'));
        $due = Input::get('due');
        $item->user_id = $userId;
        $item->title = $title;
        if(!empty($body))
        {
            $item->body = $body;
        }
        $item->setFromFormattedDate($due);
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
    }
}
