$(document).on('click', '#logout', function (e) {
    e.preventDefault();
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type:'POST',
        url:'/logout',
        success:function(){
            $("#logout-form").submit();
        }
    });
})
