$(document).ready(function(){
    $('.parallax').parallax();
});

$('.branch-states').on('click', function(event) {
    $('.branch-states').removeClass('active'); // remove active class from tabs
    $(this).addClass('active'); // add active class to clicked tab
});