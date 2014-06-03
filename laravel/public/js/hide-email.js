

$(function() {
    $(document).ready(function() {
        $('.hide-email').each(function(index, value) {
            // $(this).on('click', function(event) {
                // event.preventDefault();
                // console.log('CLICKED'); 
            // });
            console.log($(this));
            // var emailLink = '<a>' +  + '</a>';
            $(this).attr('href', "mailto:" + $(this).attr('id') + "@trianglegameshowcase.com"); 
        }); 
    });
});
