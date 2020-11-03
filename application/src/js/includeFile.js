function includeFile (route) {
    let includes = $('[data-include]');
    jQuery.each(includes, function(){
        let file = route + '/' + $(this).data('include') + '.php';
        $(this).load(file);
    });
    includes = null;
}