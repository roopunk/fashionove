jQuery(function(){
    $('.fa-remove').click(function(event){
        var link = $(this).parent().attr('href');
        var _token = $(this).parent().next().val();
        event.preventDefault();
        var a = confirm('Are you sure want to delete this item?');
        if(a==true){
            $.ajax({
                url :link,
                type:'DELETE',
                data: {'_token':_token},
                success: function(){
                    window.location = "";
                }
            });
        }
    });
})