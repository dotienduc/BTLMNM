(function() {

	"use strict";


			// Revolution Slider Initialize
			if($(".fullwidthbanner1").get(0)) {
				var rev = $(".fullwidthbanner1").revolution({
					delay:9000,
					startheight:640,
					startwidth:1920,

					hideThumbs:10,

					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:5,

					navigationType:"both",
					navigationArrows:"verticalcentered",

					touchenabled:"on",
					onHoverStop:"on",

					navOffsetHorizontal:0,
					navOffsetVertical:20,

					stopAtSlide:-1,
					stopAfterLoops:-1,

					shadow:0,
					fullWidth:"on"
				});

				$("#revolutionSlider .tp-caption").on("mousedown", function(e) {
					e.preventDefault();
					rev.revpause();
					return false;
				});

			}

			// Revolution Slider Initialize
			if($(".fullwidthbanner2").get(0)) {
				var rev = $(".fullwidthbanner2").revolution({
					delay:9000,
					startheight:725,
					startwidth:1920,

					hideThumbs:10,

					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:5,

					navigationType:"both",
					navigationArrows:"verticalcentered",

					touchenabled:"on",
					onHoverStop:"on",

					navOffsetHorizontal:0,
					navOffsetVertical:20,

					stopAtSlide:-1,
					stopAfterLoops:-1,

					shadow:0,
					fullWidth:"on"
				});

				$("#revolutionSlider .tp-caption").on("mousedown", function(e) {
					e.preventDefault();
					rev.revpause();
					return false;
				});

			}

			// Revolution Slider Initialize
			if($(".fullwidthbanner3").get(0)) {
				var rev = $(".fullwidthbanner3").revolution({
					delay:9000,
					startheight:623,
					startwidth:770,

					hideThumbs:10,

					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:5,

					navigationType:"both",
					navigationArrows:"verticalcentered",

					touchenabled:"on",
					onHoverStop:"on",

					navOffsetHorizontal:0,
					navOffsetVertical:20,

					stopAtSlide:-1,
					stopAfterLoops:-1,

					shadow:0,
					fullWidth:"on"
				});

				$("#revolutionSlider .tp-caption").on("mousedown", function(e) {
					e.preventDefault();
					rev.revpause();
					return false;
				});

			}

			// Revolution Slider Initialize
			if($(".fullwidthbanner4").get(0)) {
				var rev = $(".fullwidthbanner4").revolution({
					delay:9000,
					startheight:492,
					startwidth:770,

					hideThumbs:10,

					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:5,

					navigationType:"both",
					navigationArrows:"verticalcentered",

					touchenabled:"on",
					onHoverStop:"on",

					navOffsetHorizontal:0,
					navOffsetVertical:20,

					stopAtSlide:-1,
					stopAfterLoops:-1,

					shadow:0,
					fullWidth:"on"
				});

				$("#revolutionSlider .tp-caption").on("mousedown", function(e) {
					e.preventDefault();
					rev.revpause();
					return false;
				});

			}

			// Revolution Slider Initialize
			if($(".fullwidthbanner5").get(0)) {
				var rev = $(".fullwidthbanner5").revolution({
					delay:9000,
					startheight:725,
					startwidth:1920,

					hideThumbs:10,

					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:5,

					navigationType:"both",
					navigationArrows:"verticalcentered",

					touchenabled:"on",
					onHoverStop:"on",

					navOffsetHorizontal:0,
					navOffsetVertical:20,

					stopAtSlide:-1,
					stopAfterLoops:-1,

					shadow:0,
					fullWidth:"on"
				});

				$("#revolutionSlider .tp-caption").on("mousedown", function(e) {
					e.preventDefault();
					rev.revpause();
					return false;
				});

			}

})();