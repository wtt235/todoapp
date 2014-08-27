var $form = $('#item-form');
var $inputTitle = $('#inputTitle');
var $inputBody  = $('#inputBody');
var $inputDue = $('#inputDue');
var $submitButton = $('#submit-form');
$('#tags').tagsInput();
$submitButton.click( function(){
    $form.submit();
});
$('#add-task').click(function(){
    clearInputs();
    $('#tags').importTags('');
    $('#myModalLabel').text('Add Task');
    $('#submit-form').text('Add');
    checkInputs();
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
        $('#myModal').modal('show');
    });

});
$('.item-delete').click(function(){
    var $current_row =  $(this).closest('tr');
    var $item_id = $current_row.attr('id');
    var delete_url = "item/delete/" + $item_id;
    $.post( delete_url, function(){
        $current_row.remove();
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