(function($){
  $(function(){
        $('select').formSelect();
        $('.sidenav').sidenav();
        $('.parallax').parallax();
  }); // end of document ready
})(jQuery); // end of jQuery name space
$('.dropdown-trigger').dropdown({
        inDuration: 300,
        outDuration: 225,
        hover: false, // Activate on hover
        belowOrigin: false, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        gutter: 20
    }
);

$(document).ready(function(){
    $('.collapsible').collapsible();
});

$(document).ready(function() {
    $('input#input_text, textarea#question').characterCounter();
});
$(document).ready(function() {
    $('input#input_text, textarea#story').characterCounter();
});
