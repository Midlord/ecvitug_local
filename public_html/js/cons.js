$(document).on('click', '.anchor_delete', function(e) {
    e.preventDefault();
    var $this = $(this);

    
    if(confirm('Are you sure you want to delete this item?')) {
        $.ajax({
            type: $this.data('method'),
            url: $this.data('href'),
            data: {status: $this.data('status')},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(result) {
                console.log(result);
                if (result == 'success'){
                    location.reload();
                }
            }
        })
    } else {
        return;
    }    
});



$(document).on('click', '.anchor_restore', function(e) {
    e.preventDefault();
    var $this = $(this);

    
    if(confirm('Are you sure you want to restore this item?')) {
        $.ajax({
            type: $this.data('method'),
            url: $this.data('href'),
            data: {status: $this.data('status')},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(result) {
                console.log(result);
                if (result == 'success'){
                    location.reload();
                }
            }
        })
    } else {
        return;
    }    
});



$(document).on('click', '.anchor_update', function(e) {
    e.preventDefault();
    var $this = $(this);

    
    if(confirm('Are you sure you want to approve this order?')) {
        $.ajax({
            type: $this.data('method'),
            url: $this.data('href'),
            data: {status: $this.data('status')},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(result) {
                console.log(result);
                if (result == 'success'){
                    location.reload();
                }
            }
        })
    } else {
        return;
    }    
});



$('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
    e.preventDefault();
    var $form=$(this);
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
        .on('click', '#delete-btn', function(){
            $form.submit();
        });
});