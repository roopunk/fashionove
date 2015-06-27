jQuery(function () {
    $('.fa-remove').click(function (event) {
        var link = $(this).parent().attr('href');
        var _token = $(this).parent().next().val();
        event.preventDefault();
        var a = confirm('Are you sure want to delete this item?');
        if (a == true) {
            $.ajax({
                url: link,
                type: 'DELETE',
                data: { '_token': _token },
                success: function () {
                    window.location = "";
                }
            });
        }
    });

    $('.ajax-validation').on('submit', function (event) {
        /* this class validate fields and send data to server
        * according the method 
        * class  of the form must be validation
        * the validate class should be added to the field 
        */

        /*
        * initializing the error classes
        */

        $('span.error').remove();
        $('.validate , .validate-email, .validate-alpha').parent().removeClass('has-error , has-success');

        /*
        *initializing the variables and flags
        */
        var val_email = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/,
                    val_alpha = /^\s*[a-zA-Z,\s]+\s*$/;

        var that = $(this),
                    type = that.attr('method'),
                    url = that.attr('action'),
                    data = {},
                    flag = 1;

        /*
        * finding the elements
        */

        that.find('[name]').each(function (index, value) {
            var that = $(this),
                        name = that.attr('name'),
                        msg = that.attr('data-error-msg'),
                        msg='<span class="error" style="color:red;padding:3px;"><small><span class="glyphicon glyphicon-ban-circle"></span> '+ msg +' </small></span>',
                        blnk_msg='<span class="error" style="color:red;padding:3px;"><small><span class="glyphicon glyphicon-ban-circle"></span> This field is required</small></span>',
            value = that.val();

            if (value == "" && (that.hasClass('validate') || that.hasClass('validate-email') || that.hasClass('validate-alpha'))) {
                $(this).after(blnk_msg);
                $(this).parent().addClass(' has-error');
                flag = 0;
            }
            else if (that.hasClass('validate-email') && !val_email.test(value)) {
                $(this).after(msg);
                $(this).parent().addClass(' has-error');
                flag = 0;
            }
            else if (that.hasClass('validate-alpha') && !val_alpha.test(value)) {
                $(this).parent().addClass(' has-error');
                $(this).after(msg);
                flag = 0;
            }
            else if (that.hasClass("validate") || that.hasClass('validate-email') || that.hasClass('validate-alpha')) {
                $(this).parent().addClass(' has-success');
            }
            else {

                flag = 1;
            }
            data[name] = value;
        });

        if (flag === 1) {
            return true;
        }
        else {
            return false;
        }
        return false;
    });

    $('.validate, .validate-email, .validate-alpha').blur(function () {
        var that = $(this),
                    vl = that.val(),
                   msg = '<span class="error" style="color:red;padding:3px;"><small><span class="glyphicon glyphicon-ban-circle"></span> This field is required </small></span>';

        if (vl == "" && !that.parent().hasClass('has-error')) {
            $(this).parent().addClass(' has-error');
            that.after(msg);
        }

    });

    $(document).on('change','#brand_id_product_edit',function(){
        var that = $(this);
        $('#product_edit_stores_list').html('');
        var checkbox="";
        $.ajax({
            url:'get_stores',
            type:'POST',
            dataType:'json',
            data:{
                _token:$('#_token').val(),
                brand_id:$(this).find('option:selected').val()
            },
            success:function(data){
                if(data != ''){
                    for(i=0;i<data.length;i++){
                        checkbox +='<div class="checkbox"><label><input type="checkbox" value="'+data[i].id+'">'+data[i].store_name+'</label></div>';
                    }
                    $('#product_edit_stores_list').html(checkbox);
                }else{
                    checkbox = '<b>No Stores Found!!</b>';
                    $('#product_edit_stores_list').html(checkbox);
                }
            }
        })
    });
    $(document).on('click','#product_edit_stores_list input[type="checkbox"]',function(){
        var store_id = $(this).val();
       if($(this).is(':checked')){
           $.ajax({
               url:'update_store_id',
               type:'POST',
               dataType:'json',
               data:{
                   _token:$('#_token').val(),
                   store_id:store_id
               },
               success:function(data){

               }
           })
       }else{
           $.ajax({
               url:'delete_store_id',
               type:'POST',
               dataType:'json',
               data:{
                   _token:$('#_token').val(),
                   store_id:store_id
               },
               success:function(data){

               }
           })
       }
    });
})