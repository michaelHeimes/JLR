jQuery( document ).ready(function($) {
	
/*
	var content = jQuery('#content').offset().top;
	jQuery(window).on( 'scroll', function(){
        if (jQuery(window).scrollTop() >= content) {
            jQuery('#site-navigation').addClass('new-border');
        } else {
            jQuery('#site-navigation').addClass('new-border');
        }
    });
*/

!function(f){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=f();else if("function"==typeof define&&define.amd)define([],f);else{("undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this).iosInnerHeight=f()}}(function(){return function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){return o(e[i][1][r]||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}({1:[function(require,module,exports){"use strict";module.exports=function(){if(!navigator.userAgent.match(/iphone|ipod|ipad/i))return function(){return window.innerHeight};var ruler,axis=Math.abs(window.orientation),dims={w:0,h:0};return(ruler=document.createElement("div")).style.position="fixed",ruler.style.height="100vh",ruler.style.width=0,ruler.style.top=0,document.documentElement.appendChild(ruler),dims.w=90===axis?ruler.offsetHeight:window.innerWidth,dims.h=90===axis?window.innerWidth:ruler.offsetHeight,document.documentElement.removeChild(ruler),ruler=null,function(){return 90!==Math.abs(window.orientation)?dims.h:dims.w}}()},{}]},{},[1])(1)});
	
$(document).ready(function() {
  function setHeight() {
    windowHeight = iosInnerHeight();
    $('.home .header_bg, .page-template-community-dev-single-page-template .header_bg, .page-template-events-single-page-template .header_bg, .page-template-about-page-template .header_bg, .page-template-join-page-template .header_bg').css('min-height', windowHeight - 160);
  };
  setHeight();
  
  $(window).resize(function() {
    setHeight();
  });
});
	
	jQuery(function () {
		var controller = new ScrollMagic.Controller();
		  // build a scene
		  var scene = new ScrollMagic.Scene({
		    triggerElement: '.main-navigation',
		    triggerHook: "onLeave"
		  })
		  .setPin('.main-navigation')
		  .addTo(controller);
		  
	});
	
	jQuery(function () { // wait for document ready
		// build scene
		// init controller
		var controller = new ScrollMagic.Controller();
		  // build a scene
		  var scene = new ScrollMagic.Scene({
		    triggerElement: '.main-navigation',
		    triggerHook: "onLeave",
		    offset: 10
		  })
		  .setClassToggle('.main-navigation', 'scrolled')
		  .addTo(controller);
	});
	
	jQuery(function () { // wait for document ready
		// build scene
		// init controller
		var controller = new ScrollMagic.Controller();
		  // build a scene
		  var scene = new ScrollMagic.Scene({
		    triggerElement: '#content',
		    triggerHook: "onLeave",
		    offset: -80
		  })
		  .setClassToggle('.main-navigation', 'new-border')
		  .addTo(controller);
	});
	
/*
	jQuery(document.body).scroll(function() {
        var scroll = jQuery(document.body).scrollTop();

        if (scroll >= 300) {
            //alert();
            header.addClass("scrolled");
        } else {
            header.removeClass('scrolled');
        }
    });
*/

/*
	var $all_oembed_videos = jQuery(".video-wrap > iframe[src*='youtube'], .video-wrap > iframe[src*='vimeo']");
	$all_oembed_videos.each(function() {
		jQuery(this).removeAttr('height').removeAttr('width');
 	});
 	
	var $all_oembed_videos = jQuery(".members-intro > div > p > iframe[src*='youtube'], .members-intro > div > p > iframe[src*='vimeo']");
	$all_oembed_videos.each(function() {
		jQuery(this).removeAttr('height').removeAttr('width');
 	});
*/

				
    console.log( "scripts ready son!" );
});