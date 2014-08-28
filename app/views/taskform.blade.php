<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Add Task</h3>
    </div>
    {{ Form::open(array('class' => 'form-horizontal', 'id' => 'item-form')) }}
        <br/>
        <input type="hidden" id="_method" name ="_method" value="POST">
        <input type="hidden" id="_task-id" name ="_task-id" value="">
        <div class="control-group">
            <label class="control-label" for="inputTitle">Title</label>
            <div class="controls">
              <input name="title" id="inputTitle" type="text"  placeholder="Title">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputBody">Details</label>
            <div class="controls">
                <input name="body" type="text" id="inputBody" placeholder="Details">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputDue">Due Date</label>
            <div class="controls">
                <div class="input-append">
                    <input name="due" class="span2" size="16" id="inputDue" type="text" data-provide="datepicker" placeholder="Due Date">
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="tags">Tags</label>
            <div class="controls">
               <input name="tags" id="tags" value="" />
            </div>
        </div>
    {{ Form::close() }}
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button id="submit-form" class="btn btn-primary">Add</button>
    </div>
</div>