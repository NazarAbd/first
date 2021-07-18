$(function()
{
'use strict';
var winh   =  $(window).height(), 
    upperh =  $('.upper').innerHeight(),
    navh   =  $('.navbar').innerHeight();
$('.slider,.carousel-item').height( winh - (upperh + navh));
});