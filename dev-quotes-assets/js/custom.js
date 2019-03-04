(function ($) {
 
   let lastPage ='';

$(window).on('popstate',function () {
    window.location.replace(lastPage);

});

        $('#new-quote-button').on('click', function (event) {
            event.preventDefault();
            lastPage = document.URL;
            console.log("click");
            $.ajax({
                method: 'GET',
                url: qod_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
            }).done(function (response) {

                    $('.entry-content').html(response[0].content.rendered);
                    $('.entry-title').html(response[0].title.rendered);

                    if (response[0]._qod_quote_source_url && response[0]._qod_quote_source) {
                        $('.entry-title').append(`<a target='_blank' class='entry-title'
                        href=${response[0]._qod_quote_source_url}
                        >, ${response[0]._qod_quote_source}</a>`);
                    }
                    const url = qod_vars.home_url + '/' + response[0].slug + '/';
                    history.pushState(null, null, url);
console.log(url);
        }); 

    });

    $('#submit').on('click', function (event) {
        event.preventDefault();
    
        let title = $('#quote-author').val();
        const content = $('#quote-content').val();
        const source = $('#quote-source').val();
        const sourceURL = $('#quote-source-url').val();
        const JSONData = {
            'title': title,
            'content': content,
            'source': source,
            'source_url': sourceURL,
            status: 'waiting for approval',
        };
        $.ajax({
            type: 'POST',
            url: qod_vars.rest_url + 'wp/v2/posts',
            dataType: 'json',
            data: JSONData,
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', qod_vars.nonce);
            },
    
            success: function () {
    
                $('#quote-submission-form').slideUp(1250);
                $('.quote-submission-container').append ('<p>' + qod_vars.success + '</p>');
            },
    
            error: function () {
                $('#quote-submission-form').slideUp(1250);
                $('.quote-submission-container').append ('<p>' + qod_vars.failure + '</p>');
            }
    
        });

    });

})(jQuery);
