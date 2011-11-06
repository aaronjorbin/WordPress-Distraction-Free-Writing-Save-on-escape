(function($){
    // Fun Stuff Goes Here    
    $(document).bind( 'wp_CloseOnEscape', function(e, data){ 
        data.cb = function(e) { 
            fullscreen.bounder( 'showToolbar', 'hideToolbar', 10000, e );  
            fullscreen.save();
        };   
    );
})(jQuery);
