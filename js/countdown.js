$("#countdown").countdown("2014/12/31", function(event) {
    $(this).text(
        event.strftime('%D days %H:%M:%S')
    );
});