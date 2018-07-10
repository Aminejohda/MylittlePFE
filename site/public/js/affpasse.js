var timeoutId = 0;
var $button = $("#bt");
var $box = $("#pass");


$button.mousedown(function() {
    timeoutId = setTimeout(function(){
        showPass('text');
    }, 300);
}).bind('mouseup', function() {
    clearTimeout(timeoutId);
    
        showPass('password');
});

function showPass(val){
    $box.prop('type', val);
}