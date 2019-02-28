(function ($) {
    $(document).ready(function () {

        $('#new-quote-button').on('click', function (event) {
            event.preventDefault();
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
        });
    
    });
})
})(jQuery);
