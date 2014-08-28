var $form = $('#item-form');
var $method = $('#_method');
var $inputTitle = $('#inputTitle');
var $inputBody  = $('#inputBody');
var $inputDue = $('#inputDue');
var $submitButton = $('#submit-form');
$('#tags').tagsInput();
$submitButton.click( function(){
    var currentMethod = $method.val();
    var formData = $form.serializeArray();
    if(currentMethod === 'POST'){
        $.post( "item", formData, function(){
            location.reload(true);
        });
    } else if (currentMethod === 'PUT'){
        var $currentID = $('#_task-id').val();
        $.ajax({
            url: 'item/' + $currentID,
            type: 'PUT',
            data: formData,
            success: function() { location.reload(true);}
        });
    }
});
$('#add-task').click(function(){
    clearInputs();
    $('#tags').importTags('');
    $('#myModalLabel').text('Add Task');
    $('#submit-form').text('Add');
    checkInputs();
    $method.val('POST');
    $('#myModal').modal('show');
});
$('.item-edit').click( function(){
    clearInputs();
    $('#tags').importTags('');
    $('#myModalLabel').text('Edit Task');
    $('#submit-form').text('Save');
    var $item_id = $(this).closest('tr').attr('id');
    $('#_task-id').val($item_id);
    var get_url = "item/" + $item_id;
    $.get( get_url, function(data){
        data = $.parseJSON(data);
        $inputTitle.val(data.title);
        $inputBody.val(data.body);
        $inputDue.val(data.due);
        var all_tags = "";
        $.each(data.tags, function(i, item) {
            all_tags += item.name + ',';
        });
        $('#tags').importTags(all_tags);
        checkInputs();
        $method.val('PUT');
        $('#myModal').modal('show');
    });

});
$('.item-delete').click(function(){
    var $current_row =  $(this).closest('tr');
    var $item_id = $current_row.attr('id');
    $.ajax({
        url: 'item/' + $item_id,
        type: 'DELETE',
        success: function() { $current_row.remove();}
    });
});

$form.keyup(function(){
    checkInputs();
});

$inputDue.change(function(){
    checkInputs();
});

function clearInputs(){
    $('#item-form input').each(function(){ $(this).val('')});
}

function checkInputs(){
    if($inputTitle.val() === '' || $inputDue.val() === '') {
        $submitButton.attr('disabled', 'disabled');
    } else{
        $submitButton.removeAttr('disabled');
    }
}