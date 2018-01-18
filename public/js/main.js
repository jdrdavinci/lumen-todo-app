(function($){
    console.log('Ready Player One');

    $(":checkbox.task").change(function() {
        console.log("Task: %o", $(this).closest("span"));
        fetch("/task/check/" + this.value).then($(this).next("span").toggleClass("strike"));
    });

    var options = {
        url: "task/search",
        getValue: "description",
        list: {
            match: {
                enabled: true
            }
        }
    };

    $("#tasks").easyAutocomplete(options);

})(jQuery);