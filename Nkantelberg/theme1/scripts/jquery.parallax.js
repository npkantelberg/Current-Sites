;
(function ($, w, c) {
	$.fn.parallax = function (opts) {
		return this.each(function (i, e) {
			return new $px(e, opts);
		});
	};

	var instance = 0;
	var defaults = {
		image: '/public/images/parallax.jpg',
		centerElement: true,
		boundaries: true,
		stayInBoundaries: true,
		scrollSpeed: 0,
		offset: 0,
		overflow: 'hidden',
		direction: {
			move: 'y',
			y: 'up',
			x: 'ltr'
		},
		onLoad: null,
		beforeMove: null,
		afterMove: null,
		onResize: null,
		step: {
			forward: null,
			backward: null
		}
	};

	$.parallax = function (el, options) {
		var self = this;
		this.settings = $.extend(true, {}, defaults, options);
		this.instance = instance++;

		this.settings.image = typeof $(el).attr('data-parallax-image') !== 'undefined' ? $(el).attr('data-parallax-image') : this.settings.image;
		this.settings.debug = typeof $(el).attr('data-parallax-debug') !== 'undefined' ? boolean($(el).attr('data-parallax-debug')) : false;
		this.settings.boundaries = typeof $(el).attr('data-parallax-boundaries') !== 'undefined' ? boolean($(el).attr('data-parallax-boundaries')) : this.settings.boundaries;
		this.settings.stayInBoundaries = typeof $(el).attr('data-parallax-stay-in-boundaries') !== 'undefined' ? boolean($(el).attr('data-parallax-stay-in-boundaries')) : this.settings.stayInBoundaries;
		this.settings.centerElement = typeof $(el).attr('data-parallax-center-element') !== 'undefined' ? boolean($(el).attr('data-parallax-center-element')) : this.settings.centerElement;
		this.settings.scrollSpeed = typeof $(el).attr('data-parallax-scroll-speed') !== 'undefined' ? Number($(el).attr('data-parallax-scroll-speed')) : this.settings.scrollSpeed;
		this.settings.offset = typeof $(el).attr('data-parallax-offset') !== 'undefined' ? Number($(el).attr('data-parallax-offset')) : this.settings.offset;
		this.settings.direction.move = typeof $(el).attr('data-parallax-direction-move') !== 'undefined' ? $(el).attr('data-parallax-direction-move') : this.settings.direction.move;
		this.settings.direction.y = typeof $(el).attr('data-parallax-direction-y') !== 'undefined' ? $(el).attr('data-parallax-direction-y') : this.settings.direction.y;
		this.settings.direction.x = typeof $(el).attr('data-parallax-direction-x') !== 'undefined' ? $(el).attr('data-parallax-direction-x') : this.settings.direction.x;
		this.settings.overflow = typeof $(el).attr('data-parallax-overflow') !== 'undefined' ? $(el).attr('data-parallax-overflow') : this.settings.overflow;
		this.instance = typeof $(el).attr('data-parallax-instance') !== 'undefined' ? $(el).attr('data-parallax-instance') : this.instance;

		if (this.settings.debug) {
			c.log(defaults);
			c.log(options);
			c.log(this.settings);
		}

		this.el = $(el);

		if (this.el.children('.parallax-element').length === 0) {
			this.el.prepend($('<img />', {
				src: this.settings.image,
				'class': 'parallax-element'
			}, function () {
				this.calculateMove();
			})).css('overflow', this.settings.overflow);
		}

		this.run = function () {
			self.init();
			return self;
		};
		this.move = function () {
			self.updateGeo('viewport');
			if (self.geo.parallax.inView) {
				self.moveElement();
			}
			return self;
		};
		this.resize = function () {
			if (typeof self.settings.onResize === 'function') {
				self.settings.onResize(self);
			}
			self.init();
			return self;
		};

		this.setup().init();

		return this;
	};

	var $px = $.parallax;

	$px.fn = $px.prototype = {
		parallax: '4.0.1'
	};

	$px.fn.extend = $px.extend = $.extend;

	$px.fn.extend({
		/**
		 * Setup the plugin
		 * @name setup
		 * @returns {undefined}
		 */
		setup: function () {
			$(w).bind('scroll', this.move);
			$(w).bind('resize', this.resize);
			if (typeof this.settings.onLoad === 'function') {
				this.settings.onLoad();
			}
			return this;
		},
		/**
		 * Initialize parallax
		 * @name init
		 * @returns {undefined}
		 */
		init: function () {
			this.geo = {
				parallax: {}
			};
			this.updateGeo('all');
			this.moveElement();
			return this;
		},
		/**
		 * Center the element on the parallax container
		 * @returns {jquery.parallax3_L1.jquery.parallax3Anonym$1}
		 */
		centerElement: function () {
			if (this.settings.direction.move === 'y') {
				if (this.geo.parallax.viewport.width > this.geo.parallax.element.width) {
					this.geo.parallax.element.left = ((this.geo.parallax.viewport.width - this.geo.parallax.element.width) / 2);
				}
				else {
					this.geo.parallax.element.left = -((this.geo.parallax.element.width - this.geo.parallax.viewport.width) / 2);
				}
			}
			else if (this.settings.direction.move === 'x') {
				this.geo.parallax.element.left = -((this.geo.parallax.element.height - this.geo.parallax.viewport.height) / 2);
			}
			return this;
		},
		/**
		 * Calculate the amount of movement for the parallax element
		 * @returns {Number}
		 */
		calculateMove: function () {
			var move;
			if (this.settings.direction.move === 'xy') {
				move = [];
				move.push(this.findX());
				move.push(this.findY());
			}
			else if (this.settings.direction.move === 'y') {
				move = this.findY();
			}
			else if (this.settings.direction.move === 'x') {
				move = this.findX();
			}
			return move;
		},
		/**
		 * Mpve the element
		 * @name moveElement
		 * @returns {undefined}
		 */
		moveElement: function () {
			this.moveAmount = this.calculateMove();
			this._debug();
			if (!this.settings.boundaries && this.settings.stayInBoundaries) {
				if (this.moveAmount > 0) {
					this.moveAmount = 0;
				}
				else if (this.moveAmount < -(this.geo.parallax.element.height - this.geo.parallax.viewport.height)) {
					this.moveAmount = -(this.geo.parallax.element.height - this.geo.parallax.viewport.height);
				}
			}
			this.percentComplete = Math.floor((this.moveAmount / (-(this.geo.parallax.element.height - this.geo.parallax.viewport.height)) * 100));
			if (typeof this.settings.beforeMove === 'function') {
				this.settings.beforeMove();
			}

			if (this.percentComplete > this.lastMove && typeof this.settings.step.forward === 'function') {
				this.settings.step.forward(this);
			}
			else if (this.percentComplete < this.lastMove && typeof this.settings.step.backward === 'function') {
				this.settings.step.backward(this);
			}
			this.lastMove = this.percentComplete;

			var moveCss;
			switch (this.settings.direction.move) {
				case 'xy':
					moveCss = {
						transform: 'translate3d(' + this.moveAmount[0] + 'px, ' + this.moveAmount[1] + 'px, 0)'
					};
					break;
				case 'x':
					moveCss = {
						transform: 'translate3d(' + this.moveAmount + 'px, ' + this.geo.parallax.element.left + 'px, 0)'
					};
					break;
				default:
					moveCss = {
						transform: 'translate3d(' + this.geo.parallax.element.left + 'px, ' + this.moveAmount + 'px, 0)'
					};
					break;
			}

			this.el.find('.parallax-element').css(moveCss);

			if (typeof this.settings.afterMove === 'function') {
				this.settings.afterMove();
			}
			return this;
		},
		/**
		 * Update the geometry of parallax [viewport|element] and window (top offset, height, width)
		 * @name updateGeo
		 * @param string section Portion o f geo that needs updating
		 *	<ul>
		 *		<li>all [default]</li>
		 *		<li>parallax</li>
		 *		<li>parallax-viewport</li>
		 *		<li>parallax-element</li>
		 *		<li>viewport</li>
		 *	</ul>
		 * @returns {undefined}
		 */
		updateGeo: function (section) {
			if (typeof section === 'undefined') {
				section = 'all';
			}
			switch (section) {
				case 'parallax':
					this.geo.parallax = {
						element: this.geoParallaxElement(),
						viewport: this.geoParallaxViewport()
					};
					break;
				case 'parallax-viewport':
					this.geo.parallax.viewport = this.geoParallaxViewport();
					break;
				case 'parallax-element':
					this.geo.parallax.element = this.geoParallaxElement();
					break;
				case 'viewport':
					this.geo.viewport = this.geoViewport();
					break;
				default:
					this.geo.parallax.viewport = this.geoParallaxViewport();
					this.geo.parallax.element = this.geoParallaxElement();
					this.geo.viewport = this.geoViewport();
					break;
			}
			this.geo.parallax.inView = false;
			if (((this.geo.viewport.top + this.geo.viewport.height) > this.geo.parallax.viewport.top) &&
					(this.geo.viewport.top < (this.geo.parallax.viewport.top + this.geo.parallax.viewport.height))) {
				this.geo.parallax.inView = true;
			}
			if (this.settings.centerElement || (this.geo.parallax.viewport.width > this.geo.parallax.element.width)) {
				this.centerElement();
			}
			return this;
		},
		geoParallax: function () {

		},
		geoParallaxViewport: function () {
			return  {
				top: this.el.offset().top,
				height: this.el.height(),
				width: this.el.width()
			};
		},
		geoParallaxElement: function () {
			return {
				height: this.el.find('.parallax-element').height(),
				width: this.el.find('.parallax-element').width(),
				left: 0
			};
		},
		geoViewport: function () {
			return {
				top: $(w).scrollTop(),
				height: $(w).height(),
				width: $(w).width()
			};
		},
		findY: function () {
			var a, b, move;
			if (this.settings.boundaries) {
				a = (this.geo.parallax.element.height - this.geo.parallax.viewport.height);
				b = ((this.geo.parallax.viewport.top - (this.geo.viewport.height + this.geo.viewport.top)) / (this.geo.viewport.height + this.geo.parallax.viewport.height));
				move = (a * b);
			}
			else {
				a = (this.geo.parallax.viewport.top + this.geo.parallax.viewport.height / 2) - (this.geo.viewport.top + this.geo.viewport.height / 2);
				b = this.geo.parallax.viewport.height / 2 - this.geo.parallax.element.height / 2;
				move = b + this.settings.offset + a * this.settings.scrollSpeed;
			}
			return move;
		},
		findX: function () {
			var a, b, move;
			a = (this.geo.viewport.top + this.geo.viewport.height - this.geo.parallax.viewport.top) / (this.geo.viewport.height + this.geo.parallax.element.height);
			b = this.geo.parallax.element.width - this.geo.parallax.viewport.width;

			if (this.settings.direction.x === 'ltr') {
				move = b * (-1 + a);
			}
			else {
				move = b * (0 - a);
			}
			return move;
		},
		_debug: function () {
			if (this.settings.debug && false) {
				console.log('--------------------------------------------- ' + this.instance + ' ---------------------------------------------');
				c.log(this.settings);
				c.log(this.geo);
				c.log(this.settings.direction);
			}
		}

	});
	return this;
	function boolean(s) {
		return s == 'false' ? false : true;
	}
})(jQuery, window, console);