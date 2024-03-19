/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "../src/assets/js/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "../node_modules/desandro-matches-selector/matches-selector.js":
/*!*********************************************************************!*\
  !*** ../node_modules/desandro-matches-selector/matches-selector.js ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

    var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;/**
    * matchesSelector v2.0.2
    * matchesSelector( element, '.selector' )
    * MIT license
    */
   
   /*jshint browser: true, strict: true, undef: true, unused: true */
   
   ( function( window, factory ) {
     /*global define: false, module: false */
     'use strict';
     // universal module definition
     if ( true ) {
       // AMD
       !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
                   __WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
                   (__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
                   __WEBPACK_AMD_DEFINE_FACTORY__),
                   __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
     } else {}
   
   }( window, function factory() {
     'use strict';
   
     var matchesMethod = ( function() {
       var ElemProto = window.Element.prototype;
       // check for the standard method name first
       if ( ElemProto.matches ) {
         return 'matches';
       }
       // check un-prefixed
       if ( ElemProto.matchesSelector ) {
         return 'matchesSelector';
       }
       // check vendor prefixes
       var prefixes = [ 'webkit', 'moz', 'ms', 'o' ];
   
       for ( var i=0; i < prefixes.length; i++ ) {
         var prefix = prefixes[i];
         var method = prefix + 'MatchesSelector';
         if ( ElemProto[ method ] ) {
           return method;
         }
       }
     })();
   
     return function matchesSelector( elem, selector ) {
       return elem[ matchesMethod ]( selector );
     };
   
   }));
   
   
   /***/ }),
   
   /***/ "../node_modules/ev-emitter/ev-emitter.js":
   /*!************************************************!*\
     !*** ../node_modules/ev-emitter/ev-emitter.js ***!
     \************************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;/**
    * EvEmitter v1.1.0
    * Lil' event emitter
    * MIT License
    */
   
   /* jshint unused: true, undef: true, strict: true */
   
   ( function( global, factory ) {
     // universal module definition
     /* jshint strict: false */ /* globals define, module, window */
     if ( true ) {
       // AMD - RequireJS
       !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
                   __WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
                   (__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
                   __WEBPACK_AMD_DEFINE_FACTORY__),
                   __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
     } else {}
   
   }( typeof window != 'undefined' ? window : this, function() {
   
   "use strict";
   
   function EvEmitter() {}
   
   var proto = EvEmitter.prototype;
   
   proto.on = function( eventName, listener ) {
     if ( !eventName || !listener ) {
       return;
     }
     // set events hash
     var events = this._events = this._events || {};
     // set listeners array
     var listeners = events[ eventName ] = events[ eventName ] || [];
     // only add once
     if ( listeners.indexOf( listener ) == -1 ) {
       listeners.push( listener );
     }
   
     return this;
   };
   
   proto.once = function( eventName, listener ) {
     if ( !eventName || !listener ) {
       return;
     }
     // add event
     this.on( eventName, listener );
     // set once flag
     // set onceEvents hash
     var onceEvents = this._onceEvents = this._onceEvents || {};
     // set onceListeners object
     var onceListeners = onceEvents[ eventName ] = onceEvents[ eventName ] || {};
     // set flag
     onceListeners[ listener ] = true;
   
     return this;
   };
   
   proto.off = function( eventName, listener ) {
     var listeners = this._events && this._events[ eventName ];
     if ( !listeners || !listeners.length ) {
       return;
     }
     var index = listeners.indexOf( listener );
     if ( index != -1 ) {
       listeners.splice( index, 1 );
     }
   
     return this;
   };
   
   proto.emitEvent = function( eventName, args ) {
     var listeners = this._events && this._events[ eventName ];
     if ( !listeners || !listeners.length ) {
       return;
     }
     // copy over to avoid interference if .off() in listener
     listeners = listeners.slice(0);
     args = args || [];
     // once stuff
     var onceListeners = this._onceEvents && this._onceEvents[ eventName ];
   
     for ( var i=0; i < listeners.length; i++ ) {
       var listener = listeners[i]
       var isOnce = onceListeners && onceListeners[ listener ];
       if ( isOnce ) {
         // remove listener
         // remove before trigger to prevent recursion
         this.off( eventName, listener );
         // unset once flag
         delete onceListeners[ listener ];
       }
       // trigger listener
       listener.apply( this, args );
     }
   
     return this;
   };
   
   proto.allOff = function() {
     delete this._events;
     delete this._onceEvents;
   };
   
   return EvEmitter;
   
   }));
   
   
   /***/ }),
   
   /***/ "../node_modules/fizzy-ui-utils/utils.js":
   /*!***********************************************!*\
     !*** ../node_modules/fizzy-ui-utils/utils.js ***!
     \***********************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/**
    * Fizzy UI utils v2.0.7
    * MIT license
    */
   
   /*jshint browser: true, undef: true, unused: true, strict: true */
   
   ( function( window, factory ) {
     // universal module definition
     /*jshint strict: false */ /*globals define, module, require */
   
     if ( true ) {
       // AMD
       !(__WEBPACK_AMD_DEFINE_ARRAY__ = [
         __webpack_require__(/*! desandro-matches-selector/matches-selector */ "../node_modules/desandro-matches-selector/matches-selector.js")
       ], __WEBPACK_AMD_DEFINE_RESULT__ = (function( matchesSelector ) {
         return factory( window, matchesSelector );
       }).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
                   __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
     } else {}
   
   }( window, function factory( window, matchesSelector ) {
   
   'use strict';
   
   var utils = {};
   
   // ----- extend ----- //
   
   // extends objects
   utils.extend = function( a, b ) {
     for ( var prop in b ) {
       a[ prop ] = b[ prop ];
     }
     return a;
   };
   
   // ----- modulo ----- //
   
   utils.modulo = function( num, div ) {
     return ( ( num % div ) + div ) % div;
   };
   
   // ----- makeArray ----- //
   
   var arraySlice = Array.prototype.slice;
   
   // turn element or nodeList into an array
   utils.makeArray = function( obj ) {
     if ( Array.isArray( obj ) ) {
       // use object if already an array
       return obj;
     }
     // return empty array if undefined or null. #6
     if ( obj === null || obj === undefined ) {
       return [];
     }
   
     var isArrayLike = typeof obj == 'object' && typeof obj.length == 'number';
     if ( isArrayLike ) {
       // convert nodeList to array
       return arraySlice.call( obj );
     }
   
     // array of single index
     return [ obj ];
   };
   
   // ----- removeFrom ----- //
   
   utils.removeFrom = function( ary, obj ) {
     var index = ary.indexOf( obj );
     if ( index != -1 ) {
       ary.splice( index, 1 );
     }
   };
   
   // ----- getParent ----- //
   
   utils.getParent = function( elem, selector ) {
     while ( elem.parentNode && elem != document.body ) {
       elem = elem.parentNode;
       if ( matchesSelector( elem, selector ) ) {
         return elem;
       }
     }
   };
   
   // ----- getQueryElement ----- //
   
   // use element as selector string
   utils.getQueryElement = function( elem ) {
     if ( typeof elem == 'string' ) {
       return document.querySelector( elem );
     }
     return elem;
   };
   
   // ----- handleEvent ----- //
   
   // enable .ontype to trigger from .addEventListener( elem, 'type' )
   utils.handleEvent = function( event ) {
     var method = 'on' + event.type;
     if ( this[ method ] ) {
       this[ method ]( event );
     }
   };
   
   // ----- filterFindElements ----- //
   
   utils.filterFindElements = function( elems, selector ) {
     // make array of elems
     elems = utils.makeArray( elems );
     var ffElems = [];
   
     elems.forEach( function( elem ) {
       // check that elem is an actual element
       if ( !( elem instanceof HTMLElement ) ) {
         return;
       }
       // add elem if no selector
       if ( !selector ) {
         ffElems.push( elem );
         return;
       }
       // filter & find items if we have a selector
       // filter
       if ( matchesSelector( elem, selector ) ) {
         ffElems.push( elem );
       }
       // find children
       var childElems = elem.querySelectorAll( selector );
       // concat childElems to filterFound array
       for ( var i=0; i < childElems.length; i++ ) {
         ffElems.push( childElems[i] );
       }
     });
   
     return ffElems;
   };
   
   // ----- debounceMethod ----- //
   
   utils.debounceMethod = function( _class, methodName, threshold ) {
     threshold = threshold || 100;
     // original method
     var method = _class.prototype[ methodName ];
     var timeoutName = methodName + 'Timeout';
   
     _class.prototype[ methodName ] = function() {
       var timeout = this[ timeoutName ];
       clearTimeout( timeout );
   
       var args = arguments;
       var _this = this;
       this[ timeoutName ] = setTimeout( function() {
         method.apply( _this, args );
         delete _this[ timeoutName ];
       }, threshold );
     };
   };
   
   // ----- docReady ----- //
   
   utils.docReady = function( callback ) {
     var readyState = document.readyState;
     if ( readyState == 'complete' || readyState == 'interactive' ) {
       // do async to allow for other scripts to run. metafizzy/flickity#441
       setTimeout( callback );
     } else {
       document.addEventListener( 'DOMContentLoaded', callback );
     }
   };
   
   // ----- htmlInit ----- //
   
   // http://jamesroberts.name/blog/2010/02/22/string-functions-for-javascript-trim-to-camel-case-to-dashed-and-to-underscore/
   utils.toDashed = function( str ) {
     return str.replace( /(.)([A-Z])/g, function( match, $1, $2 ) {
       return $1 + '-' + $2;
     }).toLowerCase();
   };
   
   var console = window.console;
   /**
    * allow user to initialize classes via [data-namespace] or .js-namespace class
    * htmlInit( Widget, 'widgetName' )
    * options are parsed from data-namespace-options
    */
   utils.htmlInit = function( WidgetClass, namespace ) {
     utils.docReady( function() {
       var dashedNamespace = utils.toDashed( namespace );
       var dataAttr = 'data-' + dashedNamespace;
       var dataAttrElems = document.querySelectorAll( '[' + dataAttr + ']' );
       var jsDashElems = document.querySelectorAll( '.js-' + dashedNamespace );
       var elems = utils.makeArray( dataAttrElems )
         .concat( utils.makeArray( jsDashElems ) );
       var dataOptionsAttr = dataAttr + '-options';
       var jQuery = window.jQuery;
   
       elems.forEach( function( elem ) {
         var attr = elem.getAttribute( dataAttr ) ||
           elem.getAttribute( dataOptionsAttr );
         var options;
         try {
           options = attr && JSON.parse( attr );
         } catch ( error ) {
           // log error, do not initialize
           if ( console ) {
             console.error( 'Error parsing ' + dataAttr + ' on ' + elem.className +
             ': ' + error );
           }
           return;
         }
         // initialize
         var instance = new WidgetClass( elem, options );
         // make available via $().data('namespace')
         if ( jQuery ) {
           jQuery.data( elem, namespace, instance );
         }
       });
   
     });
   };
   
   // -----  ----- //
   
   return utils;
   
   }));
   
   
   /***/ }),
   
   /***/ "../node_modules/get-size/get-size.js":
   /*!********************************************!*\
     !*** ../node_modules/get-size/get-size.js ***!
     \********************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
    * getSize v2.0.3
    * measure size of elements
    * MIT license
    */
   
   /* jshint browser: true, strict: true, undef: true, unused: true */
   /* globals console: false */
   
   ( function( window, factory ) {
     /* jshint strict: false */ /* globals define, module */
     if ( true ) {
       // AMD
       !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
                   __WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
                   (__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
                   __WEBPACK_AMD_DEFINE_FACTORY__),
                   __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
     } else {}
   
   })( window, function factory() {
   'use strict';
   
   // -------------------------- helpers -------------------------- //
   
   // get a number from a string, not a percentage
   function getStyleSize( value ) {
     var num = parseFloat( value );
     // not a percent like '100%', and a number
     var isValid = value.indexOf('%') == -1 && !isNaN( num );
     return isValid && num;
   }
   
   function noop() {}
   
   var logError = typeof console == 'undefined' ? noop :
     function( message ) {
       console.error( message );
     };
   
   // -------------------------- measurements -------------------------- //
   
   var measurements = [
     'paddingLeft',
     'paddingRight',
     'paddingTop',
     'paddingBottom',
     'marginLeft',
     'marginRight',
     'marginTop',
     'marginBottom',
     'borderLeftWidth',
     'borderRightWidth',
     'borderTopWidth',
     'borderBottomWidth'
   ];
   
   var measurementsLength = measurements.length;
   
   function getZeroSize() {
     var size = {
       width: 0,
       height: 0,
       innerWidth: 0,
       innerHeight: 0,
       outerWidth: 0,
       outerHeight: 0
     };
     for ( var i=0; i < measurementsLength; i++ ) {
       var measurement = measurements[i];
       size[ measurement ] = 0;
     }
     return size;
   }
   
   // -------------------------- getStyle -------------------------- //
   
   /**
    * getStyle, get style of element, check for Firefox bug
    * https://bugzilla.mozilla.org/show_bug.cgi?id=548397
    */
   function getStyle( elem ) {
     var style = getComputedStyle( elem );
     if ( !style ) {
       logError( 'Style returned ' + style +
         '. Are you running this code in a hidden iframe on Firefox? ' +
         'See https://bit.ly/getsizebug1' );
     }
     return style;
   }
   
   // -------------------------- setup -------------------------- //
   
   var isSetup = false;
   
   var isBoxSizeOuter;
   
   /**
    * setup
    * check isBoxSizerOuter
    * do on first getSize() rather than on page load for Firefox bug
    */
   function setup() {
     // setup once
     if ( isSetup ) {
       return;
     }
     isSetup = true;
   
     // -------------------------- box sizing -------------------------- //
   
     /**
      * Chrome & Safari measure the outer-width on style.width on border-box elems
      * IE11 & Firefox<29 measures the inner-width
      */
     var div = document.createElement('div');
     div.style.width = '200px';
     div.style.padding = '1px 2px 3px 4px';
     div.style.borderStyle = 'solid';
     div.style.borderWidth = '1px 2px 3px 4px';
     div.style.boxSizing = 'border-box';
   
     var body = document.body || document.documentElement;
     body.appendChild( div );
     var style = getStyle( div );
     // round value for browser zoom. desandro/masonry#928
     isBoxSizeOuter = Math.round( getStyleSize( style.width ) ) == 200;
     getSize.isBoxSizeOuter = isBoxSizeOuter;
   
     body.removeChild( div );
   }
   
   // -------------------------- getSize -------------------------- //
   
   function getSize( elem ) {
     setup();
   
     // use querySeletor if elem is string
     if ( typeof elem == 'string' ) {
       elem = document.querySelector( elem );
     }
   
     // do not proceed on non-objects
     if ( !elem || typeof elem != 'object' || !elem.nodeType ) {
       return;
     }
   
     var style = getStyle( elem );
   
     // if hidden, everything is 0
     if ( style.display == 'none' ) {
       return getZeroSize();
     }
   
     var size = {};
     size.width = elem.offsetWidth;
     size.height = elem.offsetHeight;
   
     var isBorderBox = size.isBorderBox = style.boxSizing == 'border-box';
   
     // get all measurements
     for ( var i=0; i < measurementsLength; i++ ) {
       var measurement = measurements[i];
       var value = style[ measurement ];
       var num = parseFloat( value );
       // any 'auto', 'medium' value will be 0
       size[ measurement ] = !isNaN( num ) ? num : 0;
     }
   
     var paddingWidth = size.paddingLeft + size.paddingRight;
     var paddingHeight = size.paddingTop + size.paddingBottom;
     var marginWidth = size.marginLeft + size.marginRight;
     var marginHeight = size.marginTop + size.marginBottom;
     var borderWidth = size.borderLeftWidth + size.borderRightWidth;
     var borderHeight = size.borderTopWidth + size.borderBottomWidth;
   
     var isBorderBoxSizeOuter = isBorderBox && isBoxSizeOuter;
   
     // overwrite width and height if we can get it from style
     var styleWidth = getStyleSize( style.width );
     if ( styleWidth !== false ) {
       size.width = styleWidth +
         // add padding and border unless it's already including it
         ( isBorderBoxSizeOuter ? 0 : paddingWidth + borderWidth );
     }
   
     var styleHeight = getStyleSize( style.height );
     if ( styleHeight !== false ) {
       size.height = styleHeight +
         // add padding and border unless it's already including it
         ( isBorderBoxSizeOuter ? 0 : paddingHeight + borderHeight );
     }
   
     size.innerWidth = size.width - ( paddingWidth + borderWidth );
     size.innerHeight = size.height - ( paddingHeight + borderHeight );
   
     size.outerWidth = size.width + marginWidth;
     size.outerHeight = size.height + marginHeight;
   
     return size;
   }
   
   return getSize;
   
   });
   
   
   /***/ }),
   
   /***/ "../node_modules/masonry-layout/masonry.js":
   /*!*************************************************!*\
     !*** ../node_modules/masonry-layout/masonry.js ***!
     \*************************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
    * Masonry v4.2.2
    * Cascading grid layout library
    * https://masonry.desandro.com
    * MIT License
    * by David DeSandro
    */
   
   ( function( window, factory ) {
     // universal module definition
     /* jshint strict: false */ /*globals define, module, require */
     if ( true ) {
       // AMD
       !(__WEBPACK_AMD_DEFINE_ARRAY__ = [
           __webpack_require__(/*! outlayer/outlayer */ "../node_modules/outlayer/outlayer.js"),
           __webpack_require__(/*! get-size/get-size */ "../node_modules/get-size/get-size.js")
         ], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
                   __WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
                   (__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
                   __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
     } else {}
   
   }( window, function factory( Outlayer, getSize ) {
   
   'use strict';
   
   // -------------------------- masonryDefinition -------------------------- //
   
     // create an Outlayer layout class
     var Masonry = Outlayer.create('masonry');
     // isFitWidth -> fitWidth
     Masonry.compatOptions.fitWidth = 'isFitWidth';
   
     var proto = Masonry.prototype;
   
     proto._resetLayout = function() {
       this.getSize();
       this._getMeasurement( 'columnWidth', 'outerWidth' );
       this._getMeasurement( 'gutter', 'outerWidth' );
       this.measureColumns();
   
       // reset column Y
       this.colYs = [];
       for ( var i=0; i < this.cols; i++ ) {
         this.colYs.push( 0 );
       }
   
       this.maxY = 0;
       this.horizontalColIndex = 0;
     };
   
     proto.measureColumns = function() {
       this.getContainerWidth();
       // if columnWidth is 0, default to outerWidth of first item
       if ( !this.columnWidth ) {
         var firstItem = this.items[0];
         var firstItemElem = firstItem && firstItem.element;
         // columnWidth fall back to item of first element
         this.columnWidth = firstItemElem && getSize( firstItemElem ).outerWidth ||
           // if first elem has no width, default to size of container
           this.containerWidth;
       }
   
       var columnWidth = this.columnWidth += this.gutter;
   
       // calculate columns
       var containerWidth = this.containerWidth + this.gutter;
       var cols = containerWidth / columnWidth;
       // fix rounding errors, typically with gutters
       var excess = columnWidth - containerWidth % columnWidth;
       // if overshoot is less than a pixel, round up, otherwise floor it
       var mathMethod = excess && excess < 1 ? 'round' : 'floor';
       cols = Math[ mathMethod ]( cols );
       this.cols = Math.max( cols, 1 );
     };
   
     proto.getContainerWidth = function() {
       // container is parent if fit width
       var isFitWidth = this._getOption('fitWidth');
       var container = isFitWidth ? this.element.parentNode : this.element;
       // check that this.size and size are there
       // IE8 triggers resize on body size change, so they might not be
       var size = getSize( container );
       this.containerWidth = size && size.innerWidth;
     };
   
     proto._getItemLayoutPosition = function( item ) {
       item.getSize();
       // how many columns does this brick span
       var remainder = item.size.outerWidth % this.columnWidth;
       var mathMethod = remainder && remainder < 1 ? 'round' : 'ceil';
       // round if off by 1 pixel, otherwise use ceil
       var colSpan = Math[ mathMethod ]( item.size.outerWidth / this.columnWidth );
       colSpan = Math.min( colSpan, this.cols );
       // use horizontal or top column position
       var colPosMethod = this.options.horizontalOrder ?
         '_getHorizontalColPosition' : '_getTopColPosition';
       var colPosition = this[ colPosMethod ]( colSpan, item );
       // position the brick
       var position = {
         x: this.columnWidth * colPosition.col,
         y: colPosition.y
       };
       // apply setHeight to necessary columns
       var setHeight = colPosition.y + item.size.outerHeight;
       var setMax = colSpan + colPosition.col;
       for ( var i = colPosition.col; i < setMax; i++ ) {
         this.colYs[i] = setHeight;
       }
   
       return position;
     };
   
     proto._getTopColPosition = function( colSpan ) {
       var colGroup = this._getTopColGroup( colSpan );
       // get the minimum Y value from the columns
       var minimumY = Math.min.apply( Math, colGroup );
   
       return {
         col: colGroup.indexOf( minimumY ),
         y: minimumY,
       };
     };
   
     /**
      * @param {Number} colSpan - number of columns the element spans
      * @returns {Array} colGroup
      */
     proto._getTopColGroup = function( colSpan ) {
       if ( colSpan < 2 ) {
         // if brick spans only one column, use all the column Ys
         return this.colYs;
       }
   
       var colGroup = [];
       // how many different places could this brick fit horizontally
       var groupCount = this.cols + 1 - colSpan;
       // for each group potential horizontal position
       for ( var i = 0; i < groupCount; i++ ) {
         colGroup[i] = this._getColGroupY( i, colSpan );
       }
       return colGroup;
     };
   
     proto._getColGroupY = function( col, colSpan ) {
       if ( colSpan < 2 ) {
         return this.colYs[ col ];
       }
       // make an array of colY values for that one group
       var groupColYs = this.colYs.slice( col, col + colSpan );
       // and get the max value of the array
       return Math.max.apply( Math, groupColYs );
     };
   
     // get column position based on horizontal index. #873
     proto._getHorizontalColPosition = function( colSpan, item ) {
       var col = this.horizontalColIndex % this.cols;
       var isOver = colSpan > 1 && col + colSpan > this.cols;
       // shift to next row if item can't fit on current row
       col = isOver ? 0 : col;
       // don't let zero-size items take up space
       var hasSize = item.size.outerWidth && item.size.outerHeight;
       this.horizontalColIndex = hasSize ? col + colSpan : this.horizontalColIndex;
   
       return {
         col: col,
         y: this._getColGroupY( col, colSpan ),
       };
     };
   
     proto._manageStamp = function( stamp ) {
       var stampSize = getSize( stamp );
       var offset = this._getElementOffset( stamp );
       // get the columns that this stamp affects
       var isOriginLeft = this._getOption('originLeft');
       var firstX = isOriginLeft ? offset.left : offset.right;
       var lastX = firstX + stampSize.outerWidth;
       var firstCol = Math.floor( firstX / this.columnWidth );
       firstCol = Math.max( 0, firstCol );
       var lastCol = Math.floor( lastX / this.columnWidth );
       // lastCol should not go over if multiple of columnWidth #425
       lastCol -= lastX % this.columnWidth ? 0 : 1;
       lastCol = Math.min( this.cols - 1, lastCol );
       // set colYs to bottom of the stamp
   
       var isOriginTop = this._getOption('originTop');
       var stampMaxY = ( isOriginTop ? offset.top : offset.bottom ) +
         stampSize.outerHeight;
       for ( var i = firstCol; i <= lastCol; i++ ) {
         this.colYs[i] = Math.max( stampMaxY, this.colYs[i] );
       }
     };
   
     proto._getContainerSize = function() {
       this.maxY = Math.max.apply( Math, this.colYs );
       var size = {
         height: this.maxY
       };
   
       if ( this._getOption('fitWidth') ) {
         size.width = this._getContainerFitWidth();
       }
   
       return size;
     };
   
     proto._getContainerFitWidth = function() {
       var unusedCols = 0;
       // count unused columns
       var i = this.cols;
       while ( --i ) {
         if ( this.colYs[i] !== 0 ) {
           break;
         }
         unusedCols++;
       }
       // fit container to columns that have been used
       return ( this.cols - unusedCols ) * this.columnWidth - this.gutter;
     };
   
     proto.needsResizeLayout = function() {
       var previousWidth = this.containerWidth;
       this.getContainerWidth();
       return previousWidth != this.containerWidth;
     };
   
     return Masonry;
   
   }));
   
   
   /***/ }),
   
   /***/ "../node_modules/outlayer/item.js":
   /*!****************************************!*\
     !*** ../node_modules/outlayer/item.js ***!
     \****************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/**
    * Outlayer Item
    */
   
   ( function( window, factory ) {
     // universal module definition
     /* jshint strict: false */ /* globals define, module, require */
     if ( true ) {
       // AMD - RequireJS
       !(__WEBPACK_AMD_DEFINE_ARRAY__ = [
           __webpack_require__(/*! ev-emitter/ev-emitter */ "../node_modules/ev-emitter/ev-emitter.js"),
           __webpack_require__(/*! get-size/get-size */ "../node_modules/get-size/get-size.js")
         ], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
                   __WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
                   (__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
                   __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
     } else {}
   
   }( window, function factory( EvEmitter, getSize ) {
   'use strict';
   
   // ----- helpers ----- //
   
   function isEmptyObj( obj ) {
     for ( var prop in obj ) {
       return false;
     }
     prop = null;
     return true;
   }
   
   // -------------------------- CSS3 support -------------------------- //
   
   
   var docElemStyle = document.documentElement.style;
   
   var transitionProperty = typeof docElemStyle.transition == 'string' ?
     'transition' : 'WebkitTransition';
   var transformProperty = typeof docElemStyle.transform == 'string' ?
     'transform' : 'WebkitTransform';
   
   var transitionEndEvent = {
     WebkitTransition: 'webkitTransitionEnd',
     transition: 'transitionend'
   }[ transitionProperty ];
   
   // cache all vendor properties that could have vendor prefix
   var vendorProperties = {
     transform: transformProperty,
     transition: transitionProperty,
     transitionDuration: transitionProperty + 'Duration',
     transitionProperty: transitionProperty + 'Property',
     transitionDelay: transitionProperty + 'Delay'
   };
   
   // -------------------------- Item -------------------------- //
   
   function Item( element, layout ) {
     if ( !element ) {
       return;
     }
   
     this.element = element;
     // parent layout class, i.e. Masonry, Isotope, or Packery
     this.layout = layout;
     this.position = {
       x: 0,
       y: 0
     };
   
     this._create();
   }
   
   // inherit EvEmitter
   var proto = Item.prototype = Object.create( EvEmitter.prototype );
   proto.constructor = Item;
   
   proto._create = function() {
     // transition objects
     this._transn = {
       ingProperties: {},
       clean: {},
       onEnd: {}
     };
   
     this.css({
       position: 'absolute'
     });
   };
   
   // trigger specified handler for event type
   proto.handleEvent = function( event ) {
     var method = 'on' + event.type;
     if ( this[ method ] ) {
       this[ method ]( event );
     }
   };
   
   proto.getSize = function() {
     this.size = getSize( this.element );
   };
   
   /**
    * apply CSS styles to element
    * @param {Object} style
    */
   proto.css = function( style ) {
     var elemStyle = this.element.style;
   
     for ( var prop in style ) {
       // use vendor property if available
       var supportedProp = vendorProperties[ prop ] || prop;
       elemStyle[ supportedProp ] = style[ prop ];
     }
   };
   
    // measure position, and sets it
   proto.getPosition = function() {
     var style = getComputedStyle( this.element );
     var isOriginLeft = this.layout._getOption('originLeft');
     var isOriginTop = this.layout._getOption('originTop');
     var xValue = style[ isOriginLeft ? 'left' : 'right' ];
     var yValue = style[ isOriginTop ? 'top' : 'bottom' ];
     var x = parseFloat( xValue );
     var y = parseFloat( yValue );
     // convert percent to pixels
     var layoutSize = this.layout.size;
     if ( xValue.indexOf('%') != -1 ) {
       x = ( x / 100 ) * layoutSize.width;
     }
     if ( yValue.indexOf('%') != -1 ) {
       y = ( y / 100 ) * layoutSize.height;
     }
     // clean up 'auto' or other non-integer values
     x = isNaN( x ) ? 0 : x;
     y = isNaN( y ) ? 0 : y;
     // remove padding from measurement
     x -= isOriginLeft ? layoutSize.paddingLeft : layoutSize.paddingRight;
     y -= isOriginTop ? layoutSize.paddingTop : layoutSize.paddingBottom;
   
     this.position.x = x;
     this.position.y = y;
   };
   
   // set settled position, apply padding
   proto.layoutPosition = function() {
     var layoutSize = this.layout.size;
     var style = {};
     var isOriginLeft = this.layout._getOption('originLeft');
     var isOriginTop = this.layout._getOption('originTop');
   
     // x
     var xPadding = isOriginLeft ? 'paddingLeft' : 'paddingRight';
     var xProperty = isOriginLeft ? 'left' : 'right';
     var xResetProperty = isOriginLeft ? 'right' : 'left';
   
     var x = this.position.x + layoutSize[ xPadding ];
     // set in percentage or pixels
     style[ xProperty ] = this.getXValue( x );
     // reset other property
     style[ xResetProperty ] = '';
   
     // y
     var yPadding = isOriginTop ? 'paddingTop' : 'paddingBottom';
     var yProperty = isOriginTop ? 'top' : 'bottom';
     var yResetProperty = isOriginTop ? 'bottom' : 'top';
   
     var y = this.position.y + layoutSize[ yPadding ];
     // set in percentage or pixels
     style[ yProperty ] = this.getYValue( y );
     // reset other property
     style[ yResetProperty ] = '';
   
     this.css( style );
     this.emitEvent( 'layout', [ this ] );
   };
   
   proto.getXValue = function( x ) {
     var isHorizontal = this.layout._getOption('horizontal');
     return this.layout.options.percentPosition && !isHorizontal ?
       ( ( x / this.layout.size.width ) * 100 ) + '%' : x + 'px';
   };
   
   proto.getYValue = function( y ) {
     var isHorizontal = this.layout._getOption('horizontal');
     return this.layout.options.percentPosition && isHorizontal ?
       ( ( y / this.layout.size.height ) * 100 ) + '%' : y + 'px';
   };
   
   proto._transitionTo = function( x, y ) {
     this.getPosition();
     // get current x & y from top/left
     var curX = this.position.x;
     var curY = this.position.y;
   
     var didNotMove = x == this.position.x && y == this.position.y;
   
     // save end position
     this.setPosition( x, y );
   
     // if did not move and not transitioning, just go to layout
     if ( didNotMove && !this.isTransitioning ) {
       this.layoutPosition();
       return;
     }
   
     var transX = x - curX;
     var transY = y - curY;
     var transitionStyle = {};
     transitionStyle.transform = this.getTranslate( transX, transY );
   
     this.transition({
       to: transitionStyle,
       onTransitionEnd: {
         transform: this.layoutPosition
       },
       isCleaning: true
     });
   };
   
   proto.getTranslate = function( x, y ) {
     // flip cooridinates if origin on right or bottom
     var isOriginLeft = this.layout._getOption('originLeft');
     var isOriginTop = this.layout._getOption('originTop');
     x = isOriginLeft ? x : -x;
     y = isOriginTop ? y : -y;
     return 'translate3d(' + x + 'px, ' + y + 'px, 0)';
   };
   
   // non transition + transform support
   proto.goTo = function( x, y ) {
     this.setPosition( x, y );
     this.layoutPosition();
   };
   
   proto.moveTo = proto._transitionTo;
   
   proto.setPosition = function( x, y ) {
     this.position.x = parseFloat( x );
     this.position.y = parseFloat( y );
   };
   
   // ----- transition ----- //
   
   /**
    * @param {Object} style - CSS
    * @param {Function} onTransitionEnd
    */
   
   // non transition, just trigger callback
   proto._nonTransition = function( args ) {
     this.css( args.to );
     if ( args.isCleaning ) {
       this._removeStyles( args.to );
     }
     for ( var prop in args.onTransitionEnd ) {
       args.onTransitionEnd[ prop ].call( this );
     }
   };
   
   /**
    * proper transition
    * @param {Object} args - arguments
    *   @param {Object} to - style to transition to
    *   @param {Object} from - style to start transition from
    *   @param {Boolean} isCleaning - removes transition styles after transition
    *   @param {Function} onTransitionEnd - callback
    */
   proto.transition = function( args ) {
     // redirect to nonTransition if no transition duration
     if ( !parseFloat( this.layout.options.transitionDuration ) ) {
       this._nonTransition( args );
       return;
     }
   
     var _transition = this._transn;
     // keep track of onTransitionEnd callback by css property
     for ( var prop in args.onTransitionEnd ) {
       _transition.onEnd[ prop ] = args.onTransitionEnd[ prop ];
     }
     // keep track of properties that are transitioning
     for ( prop in args.to ) {
       _transition.ingProperties[ prop ] = true;
       // keep track of properties to clean up when transition is done
       if ( args.isCleaning ) {
         _transition.clean[ prop ] = true;
       }
     }
   
     // set from styles
     if ( args.from ) {
       this.css( args.from );
       // force redraw. http://blog.alexmaccaw.com/css-transitions
       var h = this.element.offsetHeight;
       // hack for JSHint to hush about unused var
       h = null;
     }
     // enable transition
     this.enableTransition( args.to );
     // set styles that are transitioning
     this.css( args.to );
   
     this.isTransitioning = true;
   
   };
   
   // dash before all cap letters, including first for
   // WebkitTransform => -webkit-transform
   function toDashedAll( str ) {
     return str.replace( /([A-Z])/g, function( $1 ) {
       return '-' + $1.toLowerCase();
     });
   }
   
   var transitionProps = 'opacity,' + toDashedAll( transformProperty );
   
   proto.enableTransition = function(/* style */) {
     // HACK changing transitionProperty during a transition
     // will cause transition to jump
     if ( this.isTransitioning ) {
       return;
     }
   
     // make `transition: foo, bar, baz` from style object
     // HACK un-comment this when enableTransition can work
     // while a transition is happening
     // var transitionValues = [];
     // for ( var prop in style ) {
     //   // dash-ify camelCased properties like WebkitTransition
     //   prop = vendorProperties[ prop ] || prop;
     //   transitionValues.push( toDashedAll( prop ) );
     // }
     // munge number to millisecond, to match stagger
     var duration = this.layout.options.transitionDuration;
     duration = typeof duration == 'number' ? duration + 'ms' : duration;
     // enable transition styles
     this.css({
       transitionProperty: transitionProps,
       transitionDuration: duration,
       transitionDelay: this.staggerDelay || 0
     });
     // listen for transition end event
     this.element.addEventListener( transitionEndEvent, this, false );
   };
   
   // ----- events ----- //
   
   proto.onwebkitTransitionEnd = function( event ) {
     this.ontransitionend( event );
   };
   
   proto.onotransitionend = function( event ) {
     this.ontransitionend( event );
   };
   
   // properties that I munge to make my life easier
   var dashedVendorProperties = {
     '-webkit-transform': 'transform'
   };
   
   proto.ontransitionend = function( event ) {
     // disregard bubbled events from children
     if ( event.target !== this.element ) {
       return;
     }
     var _transition = this._transn;
     // get property name of transitioned property, convert to prefix-free
     var propertyName = dashedVendorProperties[ event.propertyName ] || event.propertyName;
   
     // remove property that has completed transitioning
     delete _transition.ingProperties[ propertyName ];
     // check if any properties are still transitioning
     if ( isEmptyObj( _transition.ingProperties ) ) {
       // all properties have completed transitioning
       this.disableTransition();
     }
     // clean style
     if ( propertyName in _transition.clean ) {
       // clean up style
       this.element.style[ event.propertyName ] = '';
       delete _transition.clean[ propertyName ];
     }
     // trigger onTransitionEnd callback
     if ( propertyName in _transition.onEnd ) {
       var onTransitionEnd = _transition.onEnd[ propertyName ];
       onTransitionEnd.call( this );
       delete _transition.onEnd[ propertyName ];
     }
   
     this.emitEvent( 'transitionEnd', [ this ] );
   };
   
   proto.disableTransition = function() {
     this.removeTransitionStyles();
     this.element.removeEventListener( transitionEndEvent, this, false );
     this.isTransitioning = false;
   };
   
   /**
    * removes style property from element
    * @param {Object} style
   **/
   proto._removeStyles = function( style ) {
     // clean up transition styles
     var cleanStyle = {};
     for ( var prop in style ) {
       cleanStyle[ prop ] = '';
     }
     this.css( cleanStyle );
   };
   
   var cleanTransitionStyle = {
     transitionProperty: '',
     transitionDuration: '',
     transitionDelay: ''
   };
   
   proto.removeTransitionStyles = function() {
     // remove transition
     this.css( cleanTransitionStyle );
   };
   
   // ----- stagger ----- //
   
   proto.stagger = function( delay ) {
     delay = isNaN( delay ) ? 0 : delay;
     this.staggerDelay = delay + 'ms';
   };
   
   // ----- show/hide/remove ----- //
   
   // remove element from DOM
   proto.removeElem = function() {
     this.element.parentNode.removeChild( this.element );
     // remove display: none
     this.css({ display: '' });
     this.emitEvent( 'remove', [ this ] );
   };
   
   proto.remove = function() {
     // just remove element if no transition support or no transition
     if ( !transitionProperty || !parseFloat( this.layout.options.transitionDuration ) ) {
       this.removeElem();
       return;
     }
   
     // start transition
     this.once( 'transitionEnd', function() {
       this.removeElem();
     });
     this.hide();
   };
   
   proto.reveal = function() {
     delete this.isHidden;
     // remove display: none
     this.css({ display: '' });
   
     var options = this.layout.options;
   
     var onTransitionEnd = {};
     var transitionEndProperty = this.getHideRevealTransitionEndProperty('visibleStyle');
     onTransitionEnd[ transitionEndProperty ] = this.onRevealTransitionEnd;
   
     this.transition({
       from: options.hiddenStyle,
       to: options.visibleStyle,
       isCleaning: true,
       onTransitionEnd: onTransitionEnd
     });
   };
   
   proto.onRevealTransitionEnd = function() {
     // check if still visible
     // during transition, item may have been hidden
     if ( !this.isHidden ) {
       this.emitEvent('reveal');
     }
   };
   
   /**
    * get style property use for hide/reveal transition end
    * @param {String} styleProperty - hiddenStyle/visibleStyle
    * @returns {String}
    */
   proto.getHideRevealTransitionEndProperty = function( styleProperty ) {
     var optionStyle = this.layout.options[ styleProperty ];
     // use opacity
     if ( optionStyle.opacity ) {
       return 'opacity';
     }
     // get first property
     for ( var prop in optionStyle ) {
       return prop;
     }
   };
   
   proto.hide = function() {
     // set flag
     this.isHidden = true;
     // remove display: none
     this.css({ display: '' });
   
     var options = this.layout.options;
   
     var onTransitionEnd = {};
     var transitionEndProperty = this.getHideRevealTransitionEndProperty('hiddenStyle');
     onTransitionEnd[ transitionEndProperty ] = this.onHideTransitionEnd;
   
     this.transition({
       from: options.visibleStyle,
       to: options.hiddenStyle,
       // keep hidden stuff hidden
       isCleaning: true,
       onTransitionEnd: onTransitionEnd
     });
   };
   
   proto.onHideTransitionEnd = function() {
     // check if still hidden
     // during transition, item may have been un-hidden
     if ( this.isHidden ) {
       this.css({ display: 'none' });
       this.emitEvent('hide');
     }
   };
   
   proto.destroy = function() {
     this.css({
       position: '',
       left: '',
       right: '',
       top: '',
       bottom: '',
       transition: '',
       transform: ''
     });
   };
   
   return Item;
   
   }));
   
   
   /***/ }),
   
   /***/ "../node_modules/outlayer/outlayer.js":
   /*!********************************************!*\
     !*** ../node_modules/outlayer/outlayer.js ***!
     \********************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
    * Outlayer v2.1.1
    * the brains and guts of a layout library
    * MIT license
    */
   
   ( function( window, factory ) {
     'use strict';
     // universal module definition
     /* jshint strict: false */ /* globals define, module, require */
     if ( true ) {
       // AMD - RequireJS
       !(__WEBPACK_AMD_DEFINE_ARRAY__ = [
           __webpack_require__(/*! ev-emitter/ev-emitter */ "../node_modules/ev-emitter/ev-emitter.js"),
           __webpack_require__(/*! get-size/get-size */ "../node_modules/get-size/get-size.js"),
           __webpack_require__(/*! fizzy-ui-utils/utils */ "../node_modules/fizzy-ui-utils/utils.js"),
           __webpack_require__(/*! ./item */ "../node_modules/outlayer/item.js")
         ], __WEBPACK_AMD_DEFINE_RESULT__ = (function( EvEmitter, getSize, utils, Item ) {
           return factory( window, EvEmitter, getSize, utils, Item);
         }).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
                   __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
     } else {}
   
   }( window, function factory( window, EvEmitter, getSize, utils, Item ) {
   'use strict';
   
   // ----- vars ----- //
   
   var console = window.console;
   var jQuery = window.jQuery;
   var noop = function() {};
   
   // -------------------------- Outlayer -------------------------- //
   
   // globally unique identifiers
   var GUID = 0;
   // internal store of all Outlayer intances
   var instances = {};
   
   
   /**
    * @param {Element, String} element
    * @param {Object} options
    * @constructor
    */
   function Outlayer( element, options ) {
     var queryElement = utils.getQueryElement( element );
     if ( !queryElement ) {
       if ( console ) {
         console.error( 'Bad element for ' + this.constructor.namespace +
           ': ' + ( queryElement || element ) );
       }
       return;
     }
     this.element = queryElement;
     // add jQuery
     if ( jQuery ) {
       this.$element = jQuery( this.element );
     }
   
     // options
     this.options = utils.extend( {}, this.constructor.defaults );
     this.option( options );
   
     // add id for Outlayer.getFromElement
     var id = ++GUID;
     this.element.outlayerGUID = id; // expando
     instances[ id ] = this; // associate via id
   
     // kick it off
     this._create();
   
     var isInitLayout = this._getOption('initLayout');
     if ( isInitLayout ) {
       this.layout();
     }
   }
   
   // settings are for internal use only
   Outlayer.namespace = 'outlayer';
   Outlayer.Item = Item;
   
   // default options
   Outlayer.defaults = {
     containerStyle: {
       position: 'relative'
     },
     initLayout: true,
     originLeft: true,
     originTop: true,
     resize: true,
     resizeContainer: true,
     // item options
     transitionDuration: '0.4s',
     hiddenStyle: {
       opacity: 0,
       transform: 'scale(0.001)'
     },
     visibleStyle: {
       opacity: 1,
       transform: 'scale(1)'
     }
   };
   
   var proto = Outlayer.prototype;
   // inherit EvEmitter
   utils.extend( proto, EvEmitter.prototype );
   
   /**
    * set options
    * @param {Object} opts
    */
   proto.option = function( opts ) {
     utils.extend( this.options, opts );
   };
   
   /**
    * get backwards compatible option value, check old name
    */
   proto._getOption = function( option ) {
     var oldOption = this.constructor.compatOptions[ option ];
     return oldOption && this.options[ oldOption ] !== undefined ?
       this.options[ oldOption ] : this.options[ option ];
   };
   
   Outlayer.compatOptions = {
     // currentName: oldName
     initLayout: 'isInitLayout',
     horizontal: 'isHorizontal',
     layoutInstant: 'isLayoutInstant',
     originLeft: 'isOriginLeft',
     originTop: 'isOriginTop',
     resize: 'isResizeBound',
     resizeContainer: 'isResizingContainer'
   };
   
   proto._create = function() {
     // get items from children
     this.reloadItems();
     // elements that affect layout, but are not laid out
     this.stamps = [];
     this.stamp( this.options.stamp );
     // set container style
     utils.extend( this.element.style, this.options.containerStyle );
   
     // bind resize method
     var canBindResize = this._getOption('resize');
     if ( canBindResize ) {
       this.bindResize();
     }
   };
   
   // goes through all children again and gets bricks in proper order
   proto.reloadItems = function() {
     // collection of item elements
     this.items = this._itemize( this.element.children );
   };
   
   
   /**
    * turn elements into Outlayer.Items to be used in layout
    * @param {Array or NodeList or HTMLElement} elems
    * @returns {Array} items - collection of new Outlayer Items
    */
   proto._itemize = function( elems ) {
   
     var itemElems = this._filterFindItemElements( elems );
     var Item = this.constructor.Item;
   
     // create new Outlayer Items for collection
     var items = [];
     for ( var i=0; i < itemElems.length; i++ ) {
       var elem = itemElems[i];
       var item = new Item( elem, this );
       items.push( item );
     }
   
     return items;
   };
   
   /**
    * get item elements to be used in layout
    * @param {Array or NodeList or HTMLElement} elems
    * @returns {Array} items - item elements
    */
   proto._filterFindItemElements = function( elems ) {
     return utils.filterFindElements( elems, this.options.itemSelector );
   };
   
   /**
    * getter method for getting item elements
    * @returns {Array} elems - collection of item elements
    */
   proto.getItemElements = function() {
     return this.items.map( function( item ) {
       return item.element;
     });
   };
   
   // ----- init & layout ----- //
   
   /**
    * lays out all items
    */
   proto.layout = function() {
     this._resetLayout();
     this._manageStamps();
   
     // don't animate first layout
     var layoutInstant = this._getOption('layoutInstant');
     var isInstant = layoutInstant !== undefined ?
       layoutInstant : !this._isLayoutInited;
     this.layoutItems( this.items, isInstant );
   
     // flag for initalized
     this._isLayoutInited = true;
   };
   
   // _init is alias for layout
   proto._init = proto.layout;
   
   /**
    * logic before any new layout
    */
   proto._resetLayout = function() {
     this.getSize();
   };
   
   
   proto.getSize = function() {
     this.size = getSize( this.element );
   };
   
   /**
    * get measurement from option, for columnWidth, rowHeight, gutter
    * if option is String -> get element from selector string, & get size of element
    * if option is Element -> get size of element
    * else use option as a number
    *
    * @param {String} measurement
    * @param {String} size - width or height
    * @private
    */
   proto._getMeasurement = function( measurement, size ) {
     var option = this.options[ measurement ];
     var elem;
     if ( !option ) {
       // default to 0
       this[ measurement ] = 0;
     } else {
       // use option as an element
       if ( typeof option == 'string' ) {
         elem = this.element.querySelector( option );
       } else if ( option instanceof HTMLElement ) {
         elem = option;
       }
       // use size of element, if element
       this[ measurement ] = elem ? getSize( elem )[ size ] : option;
     }
   };
   
   /**
    * layout a collection of item elements
    * @api public
    */
   proto.layoutItems = function( items, isInstant ) {
     items = this._getItemsForLayout( items );
   
     this._layoutItems( items, isInstant );
   
     this._postLayout();
   };
   
   /**
    * get the items to be laid out
    * you may want to skip over some items
    * @param {Array} items
    * @returns {Array} items
    */
   proto._getItemsForLayout = function( items ) {
     return items.filter( function( item ) {
       return !item.isIgnored;
     });
   };
   
   /**
    * layout items
    * @param {Array} items
    * @param {Boolean} isInstant
    */
   proto._layoutItems = function( items, isInstant ) {
     this._emitCompleteOnItems( 'layout', items );
   
     if ( !items || !items.length ) {
       // no items, emit event with empty array
       return;
     }
   
     var queue = [];
   
     items.forEach( function( item ) {
       // get x/y object from method
       var position = this._getItemLayoutPosition( item );
       // enqueue
       position.item = item;
       position.isInstant = isInstant || item.isLayoutInstant;
       queue.push( position );
     }, this );
   
     this._processLayoutQueue( queue );
   };
   
   /**
    * get item layout position
    * @param {Outlayer.Item} item
    * @returns {Object} x and y position
    */
   proto._getItemLayoutPosition = function( /* item */ ) {
     return {
       x: 0,
       y: 0
     };
   };
   
   /**
    * iterate over array and position each item
    * Reason being - separating this logic prevents 'layout invalidation'
    * thx @paul_irish
    * @param {Array} queue
    */
   proto._processLayoutQueue = function( queue ) {
     this.updateStagger();
     queue.forEach( function( obj, i ) {
       this._positionItem( obj.item, obj.x, obj.y, obj.isInstant, i );
     }, this );
   };
   
   // set stagger from option in milliseconds number
   proto.updateStagger = function() {
     var stagger = this.options.stagger;
     if ( stagger === null || stagger === undefined ) {
       this.stagger = 0;
       return;
     }
     this.stagger = getMilliseconds( stagger );
     return this.stagger;
   };
   
   /**
    * Sets position of item in DOM
    * @param {Outlayer.Item} item
    * @param {Number} x - horizontal position
    * @param {Number} y - vertical position
    * @param {Boolean} isInstant - disables transitions
    */
   proto._positionItem = function( item, x, y, isInstant, i ) {
     if ( isInstant ) {
       // if not transition, just set CSS
       item.goTo( x, y );
     } else {
       item.stagger( i * this.stagger );
       item.moveTo( x, y );
     }
   };
   
   /**
    * Any logic you want to do after each layout,
    * i.e. size the container
    */
   proto._postLayout = function() {
     this.resizeContainer();
   };
   
   proto.resizeContainer = function() {
     var isResizingContainer = this._getOption('resizeContainer');
     if ( !isResizingContainer ) {
       return;
     }
     var size = this._getContainerSize();
     if ( size ) {
       this._setContainerMeasure( size.width, true );
       this._setContainerMeasure( size.height, false );
     }
   };
   
   /**
    * Sets width or height of container if returned
    * @returns {Object} size
    *   @param {Number} width
    *   @param {Number} height
    */
   proto._getContainerSize = noop;
   
   /**
    * @param {Number} measure - size of width or height
    * @param {Boolean} isWidth
    */
   proto._setContainerMeasure = function( measure, isWidth ) {
     if ( measure === undefined ) {
       return;
     }
   
     var elemSize = this.size;
     // add padding and border width if border box
     if ( elemSize.isBorderBox ) {
       measure += isWidth ? elemSize.paddingLeft + elemSize.paddingRight +
         elemSize.borderLeftWidth + elemSize.borderRightWidth :
         elemSize.paddingBottom + elemSize.paddingTop +
         elemSize.borderTopWidth + elemSize.borderBottomWidth;
     }
   
     measure = Math.max( measure, 0 );
     this.element.style[ isWidth ? 'width' : 'height' ] = measure + 'px';
   };
   
   /**
    * emit eventComplete on a collection of items events
    * @param {String} eventName
    * @param {Array} items - Outlayer.Items
    */
   proto._emitCompleteOnItems = function( eventName, items ) {
     var _this = this;
     function onComplete() {
       _this.dispatchEvent( eventName + 'Complete', null, [ items ] );
     }
   
     var count = items.length;
     if ( !items || !count ) {
       onComplete();
       return;
     }
   
     var doneCount = 0;
     function tick() {
       doneCount++;
       if ( doneCount == count ) {
         onComplete();
       }
     }
   
     // bind callback
     items.forEach( function( item ) {
       item.once( eventName, tick );
     });
   };
   
   /**
    * emits events via EvEmitter and jQuery events
    * @param {String} type - name of event
    * @param {Event} event - original event
    * @param {Array} args - extra arguments
    */
   proto.dispatchEvent = function( type, event, args ) {
     // add original event to arguments
     var emitArgs = event ? [ event ].concat( args ) : args;
     this.emitEvent( type, emitArgs );
   
     if ( jQuery ) {
       // set this.$element
       this.$element = this.$element || jQuery( this.element );
       if ( event ) {
         // create jQuery event
         var $event = jQuery.Event( event );
         $event.type = type;
         this.$element.trigger( $event, args );
       } else {
         // just trigger with type if no event available
         this.$element.trigger( type, args );
       }
     }
   };
   
   // -------------------------- ignore & stamps -------------------------- //
   
   
   /**
    * keep item in collection, but do not lay it out
    * ignored items do not get skipped in layout
    * @param {Element} elem
    */
   proto.ignore = function( elem ) {
     var item = this.getItem( elem );
     if ( item ) {
       item.isIgnored = true;
     }
   };
   
   /**
    * return item to layout collection
    * @param {Element} elem
    */
   proto.unignore = function( elem ) {
     var item = this.getItem( elem );
     if ( item ) {
       delete item.isIgnored;
     }
   };
   
   /**
    * adds elements to stamps
    * @param {NodeList, Array, Element, or String} elems
    */
   proto.stamp = function( elems ) {
     elems = this._find( elems );
     if ( !elems ) {
       return;
     }
   
     this.stamps = this.stamps.concat( elems );
     // ignore
     elems.forEach( this.ignore, this );
   };
   
   /**
    * removes elements to stamps
    * @param {NodeList, Array, or Element} elems
    */
   proto.unstamp = function( elems ) {
     elems = this._find( elems );
     if ( !elems ){
       return;
     }
   
     elems.forEach( function( elem ) {
       // filter out removed stamp elements
       utils.removeFrom( this.stamps, elem );
       this.unignore( elem );
     }, this );
   };
   
   /**
    * finds child elements
    * @param {NodeList, Array, Element, or String} elems
    * @returns {Array} elems
    */
   proto._find = function( elems ) {
     if ( !elems ) {
       return;
     }
     // if string, use argument as selector string
     if ( typeof elems == 'string' ) {
       elems = this.element.querySelectorAll( elems );
     }
     elems = utils.makeArray( elems );
     return elems;
   };
   
   proto._manageStamps = function() {
     if ( !this.stamps || !this.stamps.length ) {
       return;
     }
   
     this._getBoundingRect();
   
     this.stamps.forEach( this._manageStamp, this );
   };
   
   // update boundingLeft / Top
   proto._getBoundingRect = function() {
     // get bounding rect for container element
     var boundingRect = this.element.getBoundingClientRect();
     var size = this.size;
     this._boundingRect = {
       left: boundingRect.left + size.paddingLeft + size.borderLeftWidth,
       top: boundingRect.top + size.paddingTop + size.borderTopWidth,
       right: boundingRect.right - ( size.paddingRight + size.borderRightWidth ),
       bottom: boundingRect.bottom - ( size.paddingBottom + size.borderBottomWidth )
     };
   };
   
   /**
    * @param {Element} stamp
   **/
   proto._manageStamp = noop;
   
   /**
    * get x/y position of element relative to container element
    * @param {Element} elem
    * @returns {Object} offset - has left, top, right, bottom
    */
   proto._getElementOffset = function( elem ) {
     var boundingRect = elem.getBoundingClientRect();
     var thisRect = this._boundingRect;
     var size = getSize( elem );
     var offset = {
       left: boundingRect.left - thisRect.left - size.marginLeft,
       top: boundingRect.top - thisRect.top - size.marginTop,
       right: thisRect.right - boundingRect.right - size.marginRight,
       bottom: thisRect.bottom - boundingRect.bottom - size.marginBottom
     };
     return offset;
   };
   
   // -------------------------- resize -------------------------- //
   
   // enable event handlers for listeners
   // i.e. resize -> onresize
   proto.handleEvent = utils.handleEvent;
   
   /**
    * Bind layout to window resizing
    */
   proto.bindResize = function() {
     window.addEventListener( 'resize', this );
     this.isResizeBound = true;
   };
   
   /**
    * Unbind layout to window resizing
    */
   proto.unbindResize = function() {
     window.removeEventListener( 'resize', this );
     this.isResizeBound = false;
   };
   
   proto.onresize = function() {
     this.resize();
   };
   
   utils.debounceMethod( Outlayer, 'onresize', 100 );
   
   proto.resize = function() {
     // don't trigger if size did not change
     // or if resize was unbound. See #9
     if ( !this.isResizeBound || !this.needsResizeLayout() ) {
       return;
     }
   
     this.layout();
   };
   
   /**
    * check if layout is needed post layout
    * @returns Boolean
    */
   proto.needsResizeLayout = function() {
     var size = getSize( this.element );
     // check that this.size and size are there
     // IE8 triggers resize on body size change, so they might not be
     var hasSizes = this.size && size;
     return hasSizes && size.innerWidth !== this.size.innerWidth;
   };
   
   // -------------------------- methods -------------------------- //
   
   /**
    * add items to Outlayer instance
    * @param {Array or NodeList or Element} elems
    * @returns {Array} items - Outlayer.Items
   **/
   proto.addItems = function( elems ) {
     var items = this._itemize( elems );
     // add items to collection
     if ( items.length ) {
       this.items = this.items.concat( items );
     }
     return items;
   };
   
   /**
    * Layout newly-appended item elements
    * @param {Array or NodeList or Element} elems
    */
   proto.appended = function( elems ) {
     var items = this.addItems( elems );
     if ( !items.length ) {
       return;
     }
     // layout and reveal just the new items
     this.layoutItems( items, true );
     this.reveal( items );
   };
   
   /**
    * Layout prepended elements
    * @param {Array or NodeList or Element} elems
    */
   proto.prepended = function( elems ) {
     var items = this._itemize( elems );
     if ( !items.length ) {
       return;
     }
     // add items to beginning of collection
     var previousItems = this.items.slice(0);
     this.items = items.concat( previousItems );
     // start new layout
     this._resetLayout();
     this._manageStamps();
     // layout new stuff without transition
     this.layoutItems( items, true );
     this.reveal( items );
     // layout previous items
     this.layoutItems( previousItems );
   };
   
   /**
    * reveal a collection of items
    * @param {Array of Outlayer.Items} items
    */
   proto.reveal = function( items ) {
     this._emitCompleteOnItems( 'reveal', items );
     if ( !items || !items.length ) {
       return;
     }
     var stagger = this.updateStagger();
     items.forEach( function( item, i ) {
       item.stagger( i * stagger );
       item.reveal();
     });
   };
   
   /**
    * hide a collection of items
    * @param {Array of Outlayer.Items} items
    */
   proto.hide = function( items ) {
     this._emitCompleteOnItems( 'hide', items );
     if ( !items || !items.length ) {
       return;
     }
     var stagger = this.updateStagger();
     items.forEach( function( item, i ) {
       item.stagger( i * stagger );
       item.hide();
     });
   };
   
   /**
    * reveal item elements
    * @param {Array}, {Element}, {NodeList} items
    */
   proto.revealItemElements = function( elems ) {
     var items = this.getItems( elems );
     this.reveal( items );
   };
   
   /**
    * hide item elements
    * @param {Array}, {Element}, {NodeList} items
    */
   proto.hideItemElements = function( elems ) {
     var items = this.getItems( elems );
     this.hide( items );
   };
   
   /**
    * get Outlayer.Item, given an Element
    * @param {Element} elem
    * @param {Function} callback
    * @returns {Outlayer.Item} item
    */
   proto.getItem = function( elem ) {
     // loop through items to get the one that matches
     for ( var i=0; i < this.items.length; i++ ) {
       var item = this.items[i];
       if ( item.element == elem ) {
         // return item
         return item;
       }
     }
   };
   
   /**
    * get collection of Outlayer.Items, given Elements
    * @param {Array} elems
    * @returns {Array} items - Outlayer.Items
    */
   proto.getItems = function( elems ) {
     elems = utils.makeArray( elems );
     var items = [];
     elems.forEach( function( elem ) {
       var item = this.getItem( elem );
       if ( item ) {
         items.push( item );
       }
     }, this );
   
     return items;
   };
   
   /**
    * remove element(s) from instance and DOM
    * @param {Array or NodeList or Element} elems
    */
   proto.remove = function( elems ) {
     var removeItems = this.getItems( elems );
   
     this._emitCompleteOnItems( 'remove', removeItems );
   
     // bail if no items to remove
     if ( !removeItems || !removeItems.length ) {
       return;
     }
   
     removeItems.forEach( function( item ) {
       item.remove();
       // remove item from collection
       utils.removeFrom( this.items, item );
     }, this );
   };
   
   // ----- destroy ----- //
   
   // remove and disable Outlayer instance
   proto.destroy = function() {
     // clean up dynamic styles
     var style = this.element.style;
     style.height = '';
     style.position = '';
     style.width = '';
     // destroy items
     this.items.forEach( function( item ) {
       item.destroy();
     });
   
     this.unbindResize();
   
     var id = this.element.outlayerGUID;
     delete instances[ id ]; // remove reference to instance by id
     delete this.element.outlayerGUID;
     // remove data for jQuery
     if ( jQuery ) {
       jQuery.removeData( this.element, this.constructor.namespace );
     }
   
   };
   
   // -------------------------- data -------------------------- //
   
   /**
    * get Outlayer instance from element
    * @param {Element} elem
    * @returns {Outlayer}
    */
   Outlayer.data = function( elem ) {
     elem = utils.getQueryElement( elem );
     var id = elem && elem.outlayerGUID;
     return id && instances[ id ];
   };
   
   
   // -------------------------- create Outlayer class -------------------------- //
   
   /**
    * create a layout class
    * @param {String} namespace
    */
   Outlayer.create = function( namespace, options ) {
     // sub-class Outlayer
     var Layout = subclass( Outlayer );
     // apply new options and compatOptions
     Layout.defaults = utils.extend( {}, Outlayer.defaults );
     utils.extend( Layout.defaults, options );
     Layout.compatOptions = utils.extend( {}, Outlayer.compatOptions  );
   
     Layout.namespace = namespace;
   
     Layout.data = Outlayer.data;
   
     // sub-class Item
     Layout.Item = subclass( Item );
   
     // -------------------------- declarative -------------------------- //
   
     utils.htmlInit( Layout, namespace );
   
     // -------------------------- jQuery bridge -------------------------- //
   
     // make into jQuery plugin
     if ( jQuery && jQuery.bridget ) {
       jQuery.bridget( namespace, Layout );
     }
   
     return Layout;
   };
   
   function subclass( Parent ) {
     function SubClass() {
       Parent.apply( this, arguments );
     }
   
     SubClass.prototype = Object.create( Parent.prototype );
     SubClass.prototype.constructor = SubClass;
   
     return SubClass;
   }
   
   // ----- helpers ----- //
   
   // how many milliseconds are in each unit
   var msUnits = {
     ms: 1,
     s: 1000
   };
   
   // munge time-like parameter into millisecond number
   // '0.4s' -> 40
   function getMilliseconds( time ) {
     if ( typeof time == 'number' ) {
       return time;
     }
     var matches = time.match( /(^\d*\.?\d*)(\w*)/ );
     var num = matches && matches[1];
     var unit = matches && matches[2];
     if ( !num.length ) {
       return 0;
     }
     num = parseFloat( num );
     var mult = msUnits[ unit ] || 1;
     return num * mult;
   }
   
   // ----- fin ----- //
   
   // back in global
   Outlayer.Item = Item;
   
   return Outlayer;
   
   }));
   
   
   /***/ }),
   
   /***/ "../node_modules/slick-carousel/slick/slick.js":
   /*!*****************************************************!*\
     !*** ../node_modules/slick-carousel/slick/slick.js ***!
     \*****************************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*
        _ _      _       _
    ___| (_) ___| | __  (_)___
   / __| | |/ __| |/ /  | / __|
   \__ \ | | (__|   < _ | \__ \
   |___/_|_|\___|_|\_(_)/ |___/
                      |__/
   
    Version: 1.8.1
     Author: Ken Wheeler
    Website: http://kenwheeler.github.io
       Docs: http://kenwheeler.github.io/slick
       Repo: http://github.com/kenwheeler/slick
     Issues: http://github.com/kenwheeler/slick/issues
   
    */
   /* global window, document, define, jQuery, setInterval, clearInterval */
   ;(function(factory) {
       'use strict';
       if (true) {
           !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "jquery")], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
                   __WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
                   (__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
                   __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
       } else {}
   
   }(function($) {
       'use strict';
       var Slick = window.Slick || {};
   
       Slick = (function() {
   
           var instanceUid = 0;
   
           function Slick(element, settings) {
   
               var _ = this, dataSettings;
   
               _.defaults = {
                   accessibility: true,
                   adaptiveHeight: false,
                   appendArrows: $(element),
                   appendDots: $(element),
                   arrows: true,
                   asNavFor: null,
                   prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
                   nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
                   autoplay: false,
                   autoplaySpeed: 3000,
                   centerMode: false,
                   centerPadding: '50px',
                   cssEase: 'ease',
                   customPaging: function(slider, i) {
                       return $('<button type="button" />').text(i + 1);
                   },
                   dots: false,
                   dotsClass: 'slick-dots',
                   draggable: true,
                   easing: 'linear',
                   edgeFriction: 0.35,
                   fade: false,
                   focusOnSelect: false,
                   focusOnChange: false,
                   infinite: true,
                   initialSlide: 0,
                   lazyLoad: 'ondemand',
                   mobileFirst: false,
                   pauseOnHover: true,
                   pauseOnFocus: true,
                   pauseOnDotsHover: false,
                   respondTo: 'window',
                   responsive: null,
                   rows: 1,
                   rtl: false,
                   slide: '',
                   slidesPerRow: 1,
                   slidesToShow: 1,
                   slidesToScroll: 1,
                   speed: 500,
                   swipe: true,
                   swipeToSlide: false,
                   touchMove: true,
                   touchThreshold: 5,
                   useCSS: true,
                   useTransform: true,
                   variableWidth: false,
                   vertical: false,
                   verticalSwiping: false,
                   waitForAnimate: true,
                   zIndex: 1000
               };
   
               _.initials = {
                   animating: false,
                   dragging: false,
                   autoPlayTimer: null,
                   currentDirection: 0,
                   currentLeft: null,
                   currentSlide: 0,
                   direction: 1,
                   $dots: null,
                   listWidth: null,
                   listHeight: null,
                   loadIndex: 0,
                   $nextArrow: null,
                   $prevArrow: null,
                   scrolling: false,
                   slideCount: null,
                   slideWidth: null,
                   $slideTrack: null,
                   $slides: null,
                   sliding: false,
                   slideOffset: 0,
                   swipeLeft: null,
                   swiping: false,
                   $list: null,
                   touchObject: {},
                   transformsEnabled: false,
                   unslicked: false
               };
   
               $.extend(_, _.initials);
   
               _.activeBreakpoint = null;
               _.animType = null;
               _.animProp = null;
               _.breakpoints = [];
               _.breakpointSettings = [];
               _.cssTransitions = false;
               _.focussed = false;
               _.interrupted = false;
               _.hidden = 'hidden';
               _.paused = true;
               _.positionProp = null;
               _.respondTo = null;
               _.rowCount = 1;
               _.shouldClick = true;
               _.$slider = $(element);
               _.$slidesCache = null;
               _.transformType = null;
               _.transitionType = null;
               _.visibilityChange = 'visibilitychange';
               _.windowWidth = 0;
               _.windowTimer = null;
   
               dataSettings = $(element).data('slick') || {};
   
               _.options = $.extend({}, _.defaults, settings, dataSettings);
   
               _.currentSlide = _.options.initialSlide;
   
               _.originalSettings = _.options;
   
               if (typeof document.mozHidden !== 'undefined') {
                   _.hidden = 'mozHidden';
                   _.visibilityChange = 'mozvisibilitychange';
               } else if (typeof document.webkitHidden !== 'undefined') {
                   _.hidden = 'webkitHidden';
                   _.visibilityChange = 'webkitvisibilitychange';
               }
   
               _.autoPlay = $.proxy(_.autoPlay, _);
               _.autoPlayClear = $.proxy(_.autoPlayClear, _);
               _.autoPlayIterator = $.proxy(_.autoPlayIterator, _);
               _.changeSlide = $.proxy(_.changeSlide, _);
               _.clickHandler = $.proxy(_.clickHandler, _);
               _.selectHandler = $.proxy(_.selectHandler, _);
               _.setPosition = $.proxy(_.setPosition, _);
               _.swipeHandler = $.proxy(_.swipeHandler, _);
               _.dragHandler = $.proxy(_.dragHandler, _);
               _.keyHandler = $.proxy(_.keyHandler, _);
   
               _.instanceUid = instanceUid++;
   
               // A simple way to check for HTML strings
               // Strict HTML recognition (must start with <)
               // Extracted from jQuery v1.11 source
               _.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/;
   
   
               _.registerBreakpoints();
               _.init(true);
   
           }
   
           return Slick;
   
       }());
   
       Slick.prototype.activateADA = function() {
           var _ = this;
   
           _.$slideTrack.find('.slick-active').attr({
               'aria-hidden': 'false'
           }).find('a, input, button, select').attr({
               'tabindex': '0'
           });
   
       };
   
       Slick.prototype.addSlide = Slick.prototype.slickAdd = function(markup, index, addBefore) {
   
           var _ = this;
   
           if (typeof(index) === 'boolean') {
               addBefore = index;
               index = null;
           } else if (index < 0 || (index >= _.slideCount)) {
               return false;
           }
   
           _.unload();
   
           if (typeof(index) === 'number') {
               if (index === 0 && _.$slides.length === 0) {
                   $(markup).appendTo(_.$slideTrack);
               } else if (addBefore) {
                   $(markup).insertBefore(_.$slides.eq(index));
               } else {
                   $(markup).insertAfter(_.$slides.eq(index));
               }
           } else {
               if (addBefore === true) {
                   $(markup).prependTo(_.$slideTrack);
               } else {
                   $(markup).appendTo(_.$slideTrack);
               }
           }
   
           _.$slides = _.$slideTrack.children(this.options.slide);
   
           _.$slideTrack.children(this.options.slide).detach();
   
           _.$slideTrack.append(_.$slides);
   
           _.$slides.each(function(index, element) {
               $(element).attr('data-slick-index', index);
           });
   
           _.$slidesCache = _.$slides;
   
           _.reinit();
   
       };
   
       Slick.prototype.animateHeight = function() {
           var _ = this;
           if (_.options.slidesToShow === 1 && _.options.adaptiveHeight === true && _.options.vertical === false) {
               var targetHeight = _.$slides.eq(_.currentSlide).outerHeight(true);
               _.$list.animate({
                   height: targetHeight
               }, _.options.speed);
           }
       };
   
       Slick.prototype.animateSlide = function(targetLeft, callback) {
   
           var animProps = {},
               _ = this;
   
           _.animateHeight();
   
           if (_.options.rtl === true && _.options.vertical === false) {
               targetLeft = -targetLeft;
           }
           if (_.transformsEnabled === false) {
               if (_.options.vertical === false) {
                   _.$slideTrack.animate({
                       left: targetLeft
                   }, _.options.speed, _.options.easing, callback);
               } else {
                   _.$slideTrack.animate({
                       top: targetLeft
                   }, _.options.speed, _.options.easing, callback);
               }
   
           } else {
   
               if (_.cssTransitions === false) {
                   if (_.options.rtl === true) {
                       _.currentLeft = -(_.currentLeft);
                   }
                   $({
                       animStart: _.currentLeft
                   }).animate({
                       animStart: targetLeft
                   }, {
                       duration: _.options.speed,
                       easing: _.options.easing,
                       step: function(now) {
                           now = Math.ceil(now);
                           if (_.options.vertical === false) {
                               animProps[_.animType] = 'translate(' +
                                   now + 'px, 0px)';
                               _.$slideTrack.css(animProps);
                           } else {
                               animProps[_.animType] = 'translate(0px,' +
                                   now + 'px)';
                               _.$slideTrack.css(animProps);
                           }
                       },
                       complete: function() {
                           if (callback) {
                               callback.call();
                           }
                       }
                   });
   
               } else {
   
                   _.applyTransition();
                   targetLeft = Math.ceil(targetLeft);
   
                   if (_.options.vertical === false) {
                       animProps[_.animType] = 'translate3d(' + targetLeft + 'px, 0px, 0px)';
                   } else {
                       animProps[_.animType] = 'translate3d(0px,' + targetLeft + 'px, 0px)';
                   }
                   _.$slideTrack.css(animProps);
   
                   if (callback) {
                       setTimeout(function() {
   
                           _.disableTransition();
   
                           callback.call();
                       }, _.options.speed);
                   }
   
               }
   
           }
   
       };
   
       Slick.prototype.getNavTarget = function() {
   
           var _ = this,
               asNavFor = _.options.asNavFor;
   
           if ( asNavFor && asNavFor !== null ) {
               asNavFor = $(asNavFor).not(_.$slider);
           }
   
           return asNavFor;
   
       };
   
       Slick.prototype.asNavFor = function(index) {
   
           var _ = this,
               asNavFor = _.getNavTarget();
   
           if ( asNavFor !== null && typeof asNavFor === 'object' ) {
               asNavFor.each(function() {
                   var target = $(this).slick('getSlick');
                   if(!target.unslicked) {
                       target.slideHandler(index, true);
                   }
               });
           }
   
       };
   
       Slick.prototype.applyTransition = function(slide) {
   
           var _ = this,
               transition = {};
   
           if (_.options.fade === false) {
               transition[_.transitionType] = _.transformType + ' ' + _.options.speed + 'ms ' + _.options.cssEase;
           } else {
               transition[_.transitionType] = 'opacity ' + _.options.speed + 'ms ' + _.options.cssEase;
           }
   
           if (_.options.fade === false) {
               _.$slideTrack.css(transition);
           } else {
               _.$slides.eq(slide).css(transition);
           }
   
       };
   
       Slick.prototype.autoPlay = function() {
   
           var _ = this;
   
           _.autoPlayClear();
   
           if ( _.slideCount > _.options.slidesToShow ) {
               _.autoPlayTimer = setInterval( _.autoPlayIterator, _.options.autoplaySpeed );
           }
   
       };
   
       Slick.prototype.autoPlayClear = function() {
   
           var _ = this;
   
           if (_.autoPlayTimer) {
               clearInterval(_.autoPlayTimer);
           }
   
       };
   
       Slick.prototype.autoPlayIterator = function() {
   
           var _ = this,
               slideTo = _.currentSlide + _.options.slidesToScroll;
   
           if ( !_.paused && !_.interrupted && !_.focussed ) {
   
               if ( _.options.infinite === false ) {
   
                   if ( _.direction === 1 && ( _.currentSlide + 1 ) === ( _.slideCount - 1 )) {
                       _.direction = 0;
                   }
   
                   else if ( _.direction === 0 ) {
   
                       slideTo = _.currentSlide - _.options.slidesToScroll;
   
                       if ( _.currentSlide - 1 === 0 ) {
                           _.direction = 1;
                       }
   
                   }
   
               }
   
               _.slideHandler( slideTo );
   
           }
   
       };
   
       Slick.prototype.buildArrows = function() {
   
           var _ = this;
   
           if (_.options.arrows === true ) {
   
               _.$prevArrow = $(_.options.prevArrow).addClass('slick-arrow');
               _.$nextArrow = $(_.options.nextArrow).addClass('slick-arrow');
   
               if( _.slideCount > _.options.slidesToShow ) {
   
                   _.$prevArrow.removeClass('slick-hidden').removeAttr('aria-hidden tabindex');
                   _.$nextArrow.removeClass('slick-hidden').removeAttr('aria-hidden tabindex');
   
                   if (_.htmlExpr.test(_.options.prevArrow)) {
                       _.$prevArrow.prependTo(_.options.appendArrows);
                   }
   
                   if (_.htmlExpr.test(_.options.nextArrow)) {
                       _.$nextArrow.appendTo(_.options.appendArrows);
                   }
   
                   if (_.options.infinite !== true) {
                       _.$prevArrow
                           .addClass('slick-disabled')
                           .attr('aria-disabled', 'true');
                   }
   
               } else {
   
                   _.$prevArrow.add( _.$nextArrow )
   
                       .addClass('slick-hidden')
                       .attr({
                           'aria-disabled': 'true',
                           'tabindex': '-1'
                       });
   
               }
   
           }
   
       };
   
       Slick.prototype.buildDots = function() {
   
           var _ = this,
               i, dot;
   
           if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {
   
               _.$slider.addClass('slick-dotted');
   
               dot = $('<ul />').addClass(_.options.dotsClass);
   
               for (i = 0; i <= _.getDotCount(); i += 1) {
                   dot.append($('<li />').append(_.options.customPaging.call(this, _, i)));
               }
   
               _.$dots = dot.appendTo(_.options.appendDots);
   
               _.$dots.find('li').first().addClass('slick-active');
   
           }
   
       };
   
       Slick.prototype.buildOut = function() {
   
           var _ = this;
   
           _.$slides =
               _.$slider
                   .children( _.options.slide + ':not(.slick-cloned)')
                   .addClass('slick-slide');
   
           _.slideCount = _.$slides.length;
   
           _.$slides.each(function(index, element) {
               $(element)
                   .attr('data-slick-index', index)
                   .data('originalStyling', $(element).attr('style') || '');
           });
   
           _.$slider.addClass('slick-slider');
   
           _.$slideTrack = (_.slideCount === 0) ?
               $('<div class="slick-track"/>').appendTo(_.$slider) :
               _.$slides.wrapAll('<div class="slick-track"/>').parent();
   
           _.$list = _.$slideTrack.wrap(
               '<div class="slick-list"/>').parent();
           _.$slideTrack.css('opacity', 0);
   
           if (_.options.centerMode === true || _.options.swipeToSlide === true) {
               _.options.slidesToScroll = 1;
           }
   
           $('img[data-lazy]', _.$slider).not('[src]').addClass('slick-loading');
   
           _.setupInfinite();
   
           _.buildArrows();
   
           _.buildDots();
   
           _.updateDots();
   
   
           _.setSlideClasses(typeof _.currentSlide === 'number' ? _.currentSlide : 0);
   
           if (_.options.draggable === true) {
               _.$list.addClass('draggable');
           }
   
       };
   
       Slick.prototype.buildRows = function() {
   
           var _ = this, a, b, c, newSlides, numOfSlides, originalSlides,slidesPerSection;
   
           newSlides = document.createDocumentFragment();
           originalSlides = _.$slider.children();
   
           if(_.options.rows > 0) {
   
               slidesPerSection = _.options.slidesPerRow * _.options.rows;
               numOfSlides = Math.ceil(
                   originalSlides.length / slidesPerSection
               );
   
               for(a = 0; a < numOfSlides; a++){
                   var slide = document.createElement('div');
                   for(b = 0; b < _.options.rows; b++) {
                       var row = document.createElement('div');
                       for(c = 0; c < _.options.slidesPerRow; c++) {
                           var target = (a * slidesPerSection + ((b * _.options.slidesPerRow) + c));
                           if (originalSlides.get(target)) {
                               row.appendChild(originalSlides.get(target));
                           }
                       }
                       slide.appendChild(row);
                   }
                   newSlides.appendChild(slide);
               }
   
               _.$slider.empty().append(newSlides);
               _.$slider.children().children().children()
                   .css({
                       'width':(100 / _.options.slidesPerRow) + '%',
                       'display': 'inline-block'
                   });
   
           }
   
       };
   
       Slick.prototype.checkResponsive = function(initial, forceUpdate) {
   
           var _ = this,
               breakpoint, targetBreakpoint, respondToWidth, triggerBreakpoint = false;
           var sliderWidth = _.$slider.width();
           var windowWidth = window.innerWidth || $(window).width();
   
           if (_.respondTo === 'window') {
               respondToWidth = windowWidth;
           } else if (_.respondTo === 'slider') {
               respondToWidth = sliderWidth;
           } else if (_.respondTo === 'min') {
               respondToWidth = Math.min(windowWidth, sliderWidth);
           }
   
           if ( _.options.responsive &&
               _.options.responsive.length &&
               _.options.responsive !== null) {
   
               targetBreakpoint = null;
   
               for (breakpoint in _.breakpoints) {
                   if (_.breakpoints.hasOwnProperty(breakpoint)) {
                       if (_.originalSettings.mobileFirst === false) {
                           if (respondToWidth < _.breakpoints[breakpoint]) {
                               targetBreakpoint = _.breakpoints[breakpoint];
                           }
                       } else {
                           if (respondToWidth > _.breakpoints[breakpoint]) {
                               targetBreakpoint = _.breakpoints[breakpoint];
                           }
                       }
                   }
               }
   
               if (targetBreakpoint !== null) {
                   if (_.activeBreakpoint !== null) {
                       if (targetBreakpoint !== _.activeBreakpoint || forceUpdate) {
                           _.activeBreakpoint =
                               targetBreakpoint;
                           if (_.breakpointSettings[targetBreakpoint] === 'unslick') {
                               _.unslick(targetBreakpoint);
                           } else {
                               _.options = $.extend({}, _.originalSettings,
                                   _.breakpointSettings[
                                       targetBreakpoint]);
                               if (initial === true) {
                                   _.currentSlide = _.options.initialSlide;
                               }
                               _.refresh(initial);
                           }
                           triggerBreakpoint = targetBreakpoint;
                       }
                   } else {
                       _.activeBreakpoint = targetBreakpoint;
                       if (_.breakpointSettings[targetBreakpoint] === 'unslick') {
                           _.unslick(targetBreakpoint);
                       } else {
                           _.options = $.extend({}, _.originalSettings,
                               _.breakpointSettings[
                                   targetBreakpoint]);
                           if (initial === true) {
                               _.currentSlide = _.options.initialSlide;
                           }
                           _.refresh(initial);
                       }
                       triggerBreakpoint = targetBreakpoint;
                   }
               } else {
                   if (_.activeBreakpoint !== null) {
                       _.activeBreakpoint = null;
                       _.options = _.originalSettings;
                       if (initial === true) {
                           _.currentSlide = _.options.initialSlide;
                       }
                       _.refresh(initial);
                       triggerBreakpoint = targetBreakpoint;
                   }
               }
   
               // only trigger breakpoints during an actual break. not on initialize.
               if( !initial && triggerBreakpoint !== false ) {
                   _.$slider.trigger('breakpoint', [_, triggerBreakpoint]);
               }
           }
   
       };
   
       Slick.prototype.changeSlide = function(event, dontAnimate) {
   
           var _ = this,
               $target = $(event.currentTarget),
               indexOffset, slideOffset, unevenOffset;
   
           // If target is a link, prevent default action.
           if($target.is('a')) {
               event.preventDefault();
           }
   
           // If target is not the <li> element (ie: a child), find the <li>.
           if(!$target.is('li')) {
               $target = $target.closest('li');
           }
   
           unevenOffset = (_.slideCount % _.options.slidesToScroll !== 0);
           indexOffset = unevenOffset ? 0 : (_.slideCount - _.currentSlide) % _.options.slidesToScroll;
   
           switch (event.data.message) {
   
               case 'previous':
                   slideOffset = indexOffset === 0 ? _.options.slidesToScroll : _.options.slidesToShow - indexOffset;
                   if (_.slideCount > _.options.slidesToShow) {
                       _.slideHandler(_.currentSlide - slideOffset, false, dontAnimate);
                   }
                   break;
   
               case 'next':
                   slideOffset = indexOffset === 0 ? _.options.slidesToScroll : indexOffset;
                   if (_.slideCount > _.options.slidesToShow) {
                       _.slideHandler(_.currentSlide + slideOffset, false, dontAnimate);
                   }
                   break;
   
               case 'index':
                   var index = event.data.index === 0 ? 0 :
                       event.data.index || $target.index() * _.options.slidesToScroll;
   
                   _.slideHandler(_.checkNavigable(index), false, dontAnimate);
                   $target.children().trigger('focus');
                   break;
   
               default:
                   return;
           }
   
       };
   
       Slick.prototype.checkNavigable = function(index) {
   
           var _ = this,
               navigables, prevNavigable;
   
           navigables = _.getNavigableIndexes();
           prevNavigable = 0;
           if (index > navigables[navigables.length - 1]) {
               index = navigables[navigables.length - 1];
           } else {
               for (var n in navigables) {
                   if (index < navigables[n]) {
                       index = prevNavigable;
                       break;
                   }
                   prevNavigable = navigables[n];
               }
           }
   
           return index;
       };
   
       Slick.prototype.cleanUpEvents = function() {
   
           var _ = this;
   
           if (_.options.dots && _.$dots !== null) {
   
               $('li', _.$dots)
                   .off('click.slick', _.changeSlide)
                   .off('mouseenter.slick', $.proxy(_.interrupt, _, true))
                   .off('mouseleave.slick', $.proxy(_.interrupt, _, false));
   
               if (_.options.accessibility === true) {
                   _.$dots.off('keydown.slick', _.keyHandler);
               }
           }
   
           _.$slider.off('focus.slick blur.slick');
   
           if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {
               _.$prevArrow && _.$prevArrow.off('click.slick', _.changeSlide);
               _.$nextArrow && _.$nextArrow.off('click.slick', _.changeSlide);
   
               if (_.options.accessibility === true) {
                   _.$prevArrow && _.$prevArrow.off('keydown.slick', _.keyHandler);
                   _.$nextArrow && _.$nextArrow.off('keydown.slick', _.keyHandler);
               }
           }
   
           _.$list.off('touchstart.slick mousedown.slick', _.swipeHandler);
           _.$list.off('touchmove.slick mousemove.slick', _.swipeHandler);
           _.$list.off('touchend.slick mouseup.slick', _.swipeHandler);
           _.$list.off('touchcancel.slick mouseleave.slick', _.swipeHandler);
   
           _.$list.off('click.slick', _.clickHandler);
   
           $(document).off(_.visibilityChange, _.visibility);
   
           _.cleanUpSlideEvents();
   
           if (_.options.accessibility === true) {
               _.$list.off('keydown.slick', _.keyHandler);
           }
   
           if (_.options.focusOnSelect === true) {
               $(_.$slideTrack).children().off('click.slick', _.selectHandler);
           }
   
           $(window).off('orientationchange.slick.slick-' + _.instanceUid, _.orientationChange);
   
           $(window).off('resize.slick.slick-' + _.instanceUid, _.resize);
   
           $('[draggable!=true]', _.$slideTrack).off('dragstart', _.preventDefault);
   
           $(window).off('load.slick.slick-' + _.instanceUid, _.setPosition);
   
       };
   
       Slick.prototype.cleanUpSlideEvents = function() {
   
           var _ = this;
   
           _.$list.off('mouseenter.slick', $.proxy(_.interrupt, _, true));
           _.$list.off('mouseleave.slick', $.proxy(_.interrupt, _, false));
   
       };
   
       Slick.prototype.cleanUpRows = function() {
   
           var _ = this, originalSlides;
   
           if(_.options.rows > 0) {
               originalSlides = _.$slides.children().children();
               originalSlides.removeAttr('style');
               _.$slider.empty().append(originalSlides);
           }
   
       };
   
       Slick.prototype.clickHandler = function(event) {
   
           var _ = this;
   
           if (_.shouldClick === false) {
               event.stopImmediatePropagation();
               event.stopPropagation();
               event.preventDefault();
           }
   
       };
   
       Slick.prototype.destroy = function(refresh) {
   
           var _ = this;
   
           _.autoPlayClear();
   
           _.touchObject = {};
   
           _.cleanUpEvents();
   
           $('.slick-cloned', _.$slider).detach();
   
           if (_.$dots) {
               _.$dots.remove();
           }
   
           if ( _.$prevArrow && _.$prevArrow.length ) {
   
               _.$prevArrow
                   .removeClass('slick-disabled slick-arrow slick-hidden')
                   .removeAttr('aria-hidden aria-disabled tabindex')
                   .css('display','');
   
               if ( _.htmlExpr.test( _.options.prevArrow )) {
                   _.$prevArrow.remove();
               }
           }
   
           if ( _.$nextArrow && _.$nextArrow.length ) {
   
               _.$nextArrow
                   .removeClass('slick-disabled slick-arrow slick-hidden')
                   .removeAttr('aria-hidden aria-disabled tabindex')
                   .css('display','');
   
               if ( _.htmlExpr.test( _.options.nextArrow )) {
                   _.$nextArrow.remove();
               }
           }
   
   
           if (_.$slides) {
   
               _.$slides
                   .removeClass('slick-slide slick-active slick-center slick-visible slick-current')
                   .removeAttr('aria-hidden')
                   .removeAttr('data-slick-index')
                   .each(function(){
                       $(this).attr('style', $(this).data('originalStyling'));
                   });
   
               _.$slideTrack.children(this.options.slide).detach();
   
               _.$slideTrack.detach();
   
               _.$list.detach();
   
               _.$slider.append(_.$slides);
           }
   
           _.cleanUpRows();
   
           _.$slider.removeClass('slick-slider');
           _.$slider.removeClass('slick-initialized');
           _.$slider.removeClass('slick-dotted');
   
           _.unslicked = true;
   
           if(!refresh) {
               _.$slider.trigger('destroy', [_]);
           }
   
       };
   
       Slick.prototype.disableTransition = function(slide) {
   
           var _ = this,
               transition = {};
   
           transition[_.transitionType] = '';
   
           if (_.options.fade === false) {
               _.$slideTrack.css(transition);
           } else {
               _.$slides.eq(slide).css(transition);
           }
   
       };
   
       Slick.prototype.fadeSlide = function(slideIndex, callback) {
   
           var _ = this;
   
           if (_.cssTransitions === false) {
   
               _.$slides.eq(slideIndex).css({
                   zIndex: _.options.zIndex
               });
   
               _.$slides.eq(slideIndex).animate({
                   opacity: 1
               }, _.options.speed, _.options.easing, callback);
   
           } else {
   
               _.applyTransition(slideIndex);
   
               _.$slides.eq(slideIndex).css({
                   opacity: 1,
                   zIndex: _.options.zIndex
               });
   
               if (callback) {
                   setTimeout(function() {
   
                       _.disableTransition(slideIndex);
   
                       callback.call();
                   }, _.options.speed);
               }
   
           }
   
       };
   
       Slick.prototype.fadeSlideOut = function(slideIndex) {
   
           var _ = this;
   
           if (_.cssTransitions === false) {
   
               _.$slides.eq(slideIndex).animate({
                   opacity: 0,
                   zIndex: _.options.zIndex - 2
               }, _.options.speed, _.options.easing);
   
           } else {
   
               _.applyTransition(slideIndex);
   
               _.$slides.eq(slideIndex).css({
                   opacity: 0,
                   zIndex: _.options.zIndex - 2
               });
   
           }
   
       };
   
       Slick.prototype.filterSlides = Slick.prototype.slickFilter = function(filter) {
   
           var _ = this;
   
           if (filter !== null) {
   
               _.$slidesCache = _.$slides;
   
               _.unload();
   
               _.$slideTrack.children(this.options.slide).detach();
   
               _.$slidesCache.filter(filter).appendTo(_.$slideTrack);
   
               _.reinit();
   
           }
   
       };
   
       Slick.prototype.focusHandler = function() {
   
           var _ = this;
   
           _.$slider
               .off('focus.slick blur.slick')
               .on('focus.slick blur.slick', '*', function(event) {
   
               event.stopImmediatePropagation();
               var $sf = $(this);
   
               setTimeout(function() {
   
                   if( _.options.pauseOnFocus ) {
                       _.focussed = $sf.is(':focus');
                       _.autoPlay();
                   }
   
               }, 0);
   
           });
       };
   
       Slick.prototype.getCurrent = Slick.prototype.slickCurrentSlide = function() {
   
           var _ = this;
           return _.currentSlide;
   
       };
   
       Slick.prototype.getDotCount = function() {
   
           var _ = this;
   
           var breakPoint = 0;
           var counter = 0;
           var pagerQty = 0;
   
           if (_.options.infinite === true) {
               if (_.slideCount <= _.options.slidesToShow) {
                    ++pagerQty;
               } else {
                   while (breakPoint < _.slideCount) {
                       ++pagerQty;
                       breakPoint = counter + _.options.slidesToScroll;
                       counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
                   }
               }
           } else if (_.options.centerMode === true) {
               pagerQty = _.slideCount;
           } else if(!_.options.asNavFor) {
               pagerQty = 1 + Math.ceil((_.slideCount - _.options.slidesToShow) / _.options.slidesToScroll);
           }else {
               while (breakPoint < _.slideCount) {
                   ++pagerQty;
                   breakPoint = counter + _.options.slidesToScroll;
                   counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
               }
           }
   
           return pagerQty - 1;
   
       };
   
       Slick.prototype.getLeft = function(slideIndex) {
   
           var _ = this,
               targetLeft,
               verticalHeight,
               verticalOffset = 0,
               targetSlide,
               coef;
   
           _.slideOffset = 0;
           verticalHeight = _.$slides.first().outerHeight(true);
   
           if (_.options.infinite === true) {
               if (_.slideCount > _.options.slidesToShow) {
                   _.slideOffset = (_.slideWidth * _.options.slidesToShow) * -1;
                   coef = -1
   
                   if (_.options.vertical === true && _.options.centerMode === true) {
                       if (_.options.slidesToShow === 2) {
                           coef = -1.5;
                       } else if (_.options.slidesToShow === 1) {
                           coef = -2
                       }
                   }
                   verticalOffset = (verticalHeight * _.options.slidesToShow) * coef;
               }
               if (_.slideCount % _.options.slidesToScroll !== 0) {
                   if (slideIndex + _.options.slidesToScroll > _.slideCount && _.slideCount > _.options.slidesToShow) {
                       if (slideIndex > _.slideCount) {
                           _.slideOffset = ((_.options.slidesToShow - (slideIndex - _.slideCount)) * _.slideWidth) * -1;
                           verticalOffset = ((_.options.slidesToShow - (slideIndex - _.slideCount)) * verticalHeight) * -1;
                       } else {
                           _.slideOffset = ((_.slideCount % _.options.slidesToScroll) * _.slideWidth) * -1;
                           verticalOffset = ((_.slideCount % _.options.slidesToScroll) * verticalHeight) * -1;
                       }
                   }
               }
           } else {
               if (slideIndex + _.options.slidesToShow > _.slideCount) {
                   _.slideOffset = ((slideIndex + _.options.slidesToShow) - _.slideCount) * _.slideWidth;
                   verticalOffset = ((slideIndex + _.options.slidesToShow) - _.slideCount) * verticalHeight;
               }
           }
   
           if (_.slideCount <= _.options.slidesToShow) {
               _.slideOffset = 0;
               verticalOffset = 0;
           }
   
           if (_.options.centerMode === true && _.slideCount <= _.options.slidesToShow) {
               _.slideOffset = ((_.slideWidth * Math.floor(_.options.slidesToShow)) / 2) - ((_.slideWidth * _.slideCount) / 2);
           } else if (_.options.centerMode === true && _.options.infinite === true) {
               _.slideOffset += _.slideWidth * Math.floor(_.options.slidesToShow / 2) - _.slideWidth;
           } else if (_.options.centerMode === true) {
               _.slideOffset = 0;
               _.slideOffset += _.slideWidth * Math.floor(_.options.slidesToShow / 2);
           }
   
           if (_.options.vertical === false) {
               targetLeft = ((slideIndex * _.slideWidth) * -1) + _.slideOffset;
           } else {
               targetLeft = ((slideIndex * verticalHeight) * -1) + verticalOffset;
           }
   
           if (_.options.variableWidth === true) {
   
               if (_.slideCount <= _.options.slidesToShow || _.options.infinite === false) {
                   targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex);
               } else {
                   targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex + _.options.slidesToShow);
               }
   
               if (_.options.rtl === true) {
                   if (targetSlide[0]) {
                       targetLeft = (_.$slideTrack.width() - targetSlide[0].offsetLeft - targetSlide.width()) * -1;
                   } else {
                       targetLeft =  0;
                   }
               } else {
                   targetLeft = targetSlide[0] ? targetSlide[0].offsetLeft * -1 : 0;
               }
   
               if (_.options.centerMode === true) {
                   if (_.slideCount <= _.options.slidesToShow || _.options.infinite === false) {
                       targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex);
                   } else {
                       targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex + _.options.slidesToShow + 1);
                   }
   
                   if (_.options.rtl === true) {
                       if (targetSlide[0]) {
                           targetLeft = (_.$slideTrack.width() - targetSlide[0].offsetLeft - targetSlide.width()) * -1;
                       } else {
                           targetLeft =  0;
                       }
                   } else {
                       targetLeft = targetSlide[0] ? targetSlide[0].offsetLeft * -1 : 0;
                   }
   
                   targetLeft += (_.$list.width() - targetSlide.outerWidth()) / 2;
               }
           }
   
           return targetLeft;
   
       };
   
       Slick.prototype.getOption = Slick.prototype.slickGetOption = function(option) {
   
           var _ = this;
   
           return _.options[option];
   
       };
   
       Slick.prototype.getNavigableIndexes = function() {
   
           var _ = this,
               breakPoint = 0,
               counter = 0,
               indexes = [],
               max;
   
           if (_.options.infinite === false) {
               max = _.slideCount;
           } else {
               breakPoint = _.options.slidesToScroll * -1;
               counter = _.options.slidesToScroll * -1;
               max = _.slideCount * 2;
           }
   
           while (breakPoint < max) {
               indexes.push(breakPoint);
               breakPoint = counter + _.options.slidesToScroll;
               counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
           }
   
           return indexes;
   
       };
   
       Slick.prototype.getSlick = function() {
   
           return this;
   
       };
   
       Slick.prototype.getSlideCount = function() {
   
           var _ = this,
               slidesTraversed, swipedSlide, centerOffset;
   
           centerOffset = _.options.centerMode === true ? _.slideWidth * Math.floor(_.options.slidesToShow / 2) : 0;
   
           if (_.options.swipeToSlide === true) {
               _.$slideTrack.find('.slick-slide').each(function(index, slide) {
                   if (slide.offsetLeft - centerOffset + ($(slide).outerWidth() / 2) > (_.swipeLeft * -1)) {
                       swipedSlide = slide;
                       return false;
                   }
               });
   
               slidesTraversed = Math.abs($(swipedSlide).attr('data-slick-index') - _.currentSlide) || 1;
   
               return slidesTraversed;
   
           } else {
               return _.options.slidesToScroll;
           }
   
       };
   
       Slick.prototype.goTo = Slick.prototype.slickGoTo = function(slide, dontAnimate) {
   
           var _ = this;
   
           _.changeSlide({
               data: {
                   message: 'index',
                   index: parseInt(slide)
               }
           }, dontAnimate);
   
       };
   
       Slick.prototype.init = function(creation) {
   
           var _ = this;
   
           if (!$(_.$slider).hasClass('slick-initialized')) {
   
               $(_.$slider).addClass('slick-initialized');
   
               _.buildRows();
               _.buildOut();
               _.setProps();
               _.startLoad();
               _.loadSlider();
               _.initializeEvents();
               _.updateArrows();
               _.updateDots();
               _.checkResponsive(true);
               _.focusHandler();
   
           }
   
           if (creation) {
               _.$slider.trigger('init', [_]);
           }
   
           if (_.options.accessibility === true) {
               _.initADA();
           }
   
           if ( _.options.autoplay ) {
   
               _.paused = false;
               _.autoPlay();
   
           }
   
       };
   
       Slick.prototype.initADA = function() {
           var _ = this,
                   numDotGroups = Math.ceil(_.slideCount / _.options.slidesToShow),
                   tabControlIndexes = _.getNavigableIndexes().filter(function(val) {
                       return (val >= 0) && (val < _.slideCount);
                   });
   
           _.$slides.add(_.$slideTrack.find('.slick-cloned')).attr({
               'aria-hidden': 'true',
               'tabindex': '-1'
           }).find('a, input, button, select').attr({
               'tabindex': '-1'
           });
   
           if (_.$dots !== null) {
               _.$slides.not(_.$slideTrack.find('.slick-cloned')).each(function(i) {
                   var slideControlIndex = tabControlIndexes.indexOf(i);
   
                   $(this).attr({
                       'role': 'tabpanel',
                       'id': 'slick-slide' + _.instanceUid + i,
                       'tabindex': -1
                   });
   
                   if (slideControlIndex !== -1) {
                      var ariaButtonControl = 'slick-slide-control' + _.instanceUid + slideControlIndex
                      if ($('#' + ariaButtonControl).length) {
                        $(this).attr({
                            'aria-describedby': ariaButtonControl
                        });
                      }
                   }
               });
   
               _.$dots.attr('role', 'tablist').find('li').each(function(i) {
                   var mappedSlideIndex = tabControlIndexes[i];
   
                   $(this).attr({
                       'role': 'presentation'
                   });
   
                   $(this).find('button').first().attr({
                       'role': 'tab',
                       'id': 'slick-slide-control' + _.instanceUid + i,
                       'aria-controls': 'slick-slide' + _.instanceUid + mappedSlideIndex,
                       'aria-label': (i + 1) + ' of ' + numDotGroups,
                       'aria-selected': null,
                       'tabindex': '-1'
                   });
   
               }).eq(_.currentSlide).find('button').attr({
                   'aria-selected': 'true',
                   'tabindex': '0'
               }).end();
           }
   
           for (var i=_.currentSlide, max=i+_.options.slidesToShow; i < max; i++) {
             if (_.options.focusOnChange) {
               _.$slides.eq(i).attr({'tabindex': '0'});
             } else {
               _.$slides.eq(i).removeAttr('tabindex');
             }
           }
   
           _.activateADA();
   
       };
   
       Slick.prototype.initArrowEvents = function() {
   
           var _ = this;
   
           if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {
               _.$prevArrow
                  .off('click.slick')
                  .on('click.slick', {
                       message: 'previous'
                  }, _.changeSlide);
               _.$nextArrow
                  .off('click.slick')
                  .on('click.slick', {
                       message: 'next'
                  }, _.changeSlide);
   
               if (_.options.accessibility === true) {
                   _.$prevArrow.on('keydown.slick', _.keyHandler);
                   _.$nextArrow.on('keydown.slick', _.keyHandler);
               }
           }
   
       };
   
       Slick.prototype.initDotEvents = function() {
   
           var _ = this;
   
           if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {
               $('li', _.$dots).on('click.slick', {
                   message: 'index'
               }, _.changeSlide);
   
               if (_.options.accessibility === true) {
                   _.$dots.on('keydown.slick', _.keyHandler);
               }
           }
   
           if (_.options.dots === true && _.options.pauseOnDotsHover === true && _.slideCount > _.options.slidesToShow) {
   
               $('li', _.$dots)
                   .on('mouseenter.slick', $.proxy(_.interrupt, _, true))
                   .on('mouseleave.slick', $.proxy(_.interrupt, _, false));
   
           }
   
       };
   
       Slick.prototype.initSlideEvents = function() {
   
           var _ = this;
   
           if ( _.options.pauseOnHover ) {
   
               _.$list.on('mouseenter.slick', $.proxy(_.interrupt, _, true));
               _.$list.on('mouseleave.slick', $.proxy(_.interrupt, _, false));
   
           }
   
       };
   
       Slick.prototype.initializeEvents = function() {
   
           var _ = this;
   
           _.initArrowEvents();
   
           _.initDotEvents();
           _.initSlideEvents();
   
           _.$list.on('touchstart.slick mousedown.slick', {
               action: 'start'
           }, _.swipeHandler);
           _.$list.on('touchmove.slick mousemove.slick', {
               action: 'move'
           }, _.swipeHandler);
           _.$list.on('touchend.slick mouseup.slick', {
               action: 'end'
           }, _.swipeHandler);
           _.$list.on('touchcancel.slick mouseleave.slick', {
               action: 'end'
           }, _.swipeHandler);
   
           _.$list.on('click.slick', _.clickHandler);
   
           $(document).on(_.visibilityChange, $.proxy(_.visibility, _));
   
           if (_.options.accessibility === true) {
               _.$list.on('keydown.slick', _.keyHandler);
           }
   
           if (_.options.focusOnSelect === true) {
               $(_.$slideTrack).children().on('click.slick', _.selectHandler);
           }
   
           $(window).on('orientationchange.slick.slick-' + _.instanceUid, $.proxy(_.orientationChange, _));
   
           $(window).on('resize.slick.slick-' + _.instanceUid, $.proxy(_.resize, _));
   
           $('[draggable!=true]', _.$slideTrack).on('dragstart', _.preventDefault);
   
           $(window).on('load.slick.slick-' + _.instanceUid, _.setPosition);
           $(_.setPosition);
   
       };
   
       Slick.prototype.initUI = function() {
   
           var _ = this;
   
           if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {
   
               _.$prevArrow.show();
               _.$nextArrow.show();
   
           }
   
           if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {
   
               _.$dots.show();
   
           }
   
       };
   
       Slick.prototype.keyHandler = function(event) {
   
           var _ = this;
            //Dont slide if the cursor is inside the form fields and arrow keys are pressed
           if(!event.target.tagName.match('TEXTAREA|INPUT|SELECT')) {
               if (event.keyCode === 37 && _.options.accessibility === true) {
                   _.changeSlide({
                       data: {
                           message: _.options.rtl === true ? 'next' :  'previous'
                       }
                   });
               } else if (event.keyCode === 39 && _.options.accessibility === true) {
                   _.changeSlide({
                       data: {
                           message: _.options.rtl === true ? 'previous' : 'next'
                       }
                   });
               }
           }
   
       };
   
       Slick.prototype.lazyLoad = function() {
   
           var _ = this,
               loadRange, cloneRange, rangeStart, rangeEnd;
   
           function loadImages(imagesScope) {
   
               $('img[data-lazy]', imagesScope).each(function() {
   
                   var image = $(this),
                       imageSource = $(this).attr('data-lazy'),
                       imageSrcSet = $(this).attr('data-srcset'),
                       imageSizes  = $(this).attr('data-sizes') || _.$slider.attr('data-sizes'),
                       imageToLoad = document.createElement('img');
   
                   imageToLoad.onload = function() {
   
                       image
                           .animate({ opacity: 0 }, 100, function() {
   
                               if (imageSrcSet) {
                                   image
                                       .attr('srcset', imageSrcSet );
   
                                   if (imageSizes) {
                                       image
                                           .attr('sizes', imageSizes );
                                   }
                               }
   
                               image
                                   .attr('src', imageSource)
                                   .animate({ opacity: 1 }, 200, function() {
                                       image
                                           .removeAttr('data-lazy data-srcset data-sizes')
                                           .removeClass('slick-loading');
                                   });
                               _.$slider.trigger('lazyLoaded', [_, image, imageSource]);
                           });
   
                   };
   
                   imageToLoad.onerror = function() {
   
                       image
                           .removeAttr( 'data-lazy' )
                           .removeClass( 'slick-loading' )
                           .addClass( 'slick-lazyload-error' );
   
                       _.$slider.trigger('lazyLoadError', [ _, image, imageSource ]);
   
                   };
   
                   imageToLoad.src = imageSource;
   
               });
   
           }
   
           if (_.options.centerMode === true) {
               if (_.options.infinite === true) {
                   rangeStart = _.currentSlide + (_.options.slidesToShow / 2 + 1);
                   rangeEnd = rangeStart + _.options.slidesToShow + 2;
               } else {
                   rangeStart = Math.max(0, _.currentSlide - (_.options.slidesToShow / 2 + 1));
                   rangeEnd = 2 + (_.options.slidesToShow / 2 + 1) + _.currentSlide;
               }
           } else {
               rangeStart = _.options.infinite ? _.options.slidesToShow + _.currentSlide : _.currentSlide;
               rangeEnd = Math.ceil(rangeStart + _.options.slidesToShow);
               if (_.options.fade === true) {
                   if (rangeStart > 0) rangeStart--;
                   if (rangeEnd <= _.slideCount) rangeEnd++;
               }
           }
   
           loadRange = _.$slider.find('.slick-slide').slice(rangeStart, rangeEnd);
   
           if (_.options.lazyLoad === 'anticipated') {
               var prevSlide = rangeStart - 1,
                   nextSlide = rangeEnd,
                   $slides = _.$slider.find('.slick-slide');
   
               for (var i = 0; i < _.options.slidesToScroll; i++) {
                   if (prevSlide < 0) prevSlide = _.slideCount - 1;
                   loadRange = loadRange.add($slides.eq(prevSlide));
                   loadRange = loadRange.add($slides.eq(nextSlide));
                   prevSlide--;
                   nextSlide++;
               }
           }
   
           loadImages(loadRange);
   
           if (_.slideCount <= _.options.slidesToShow) {
               cloneRange = _.$slider.find('.slick-slide');
               loadImages(cloneRange);
           } else
           if (_.currentSlide >= _.slideCount - _.options.slidesToShow) {
               cloneRange = _.$slider.find('.slick-cloned').slice(0, _.options.slidesToShow);
               loadImages(cloneRange);
           } else if (_.currentSlide === 0) {
               cloneRange = _.$slider.find('.slick-cloned').slice(_.options.slidesToShow * -1);
               loadImages(cloneRange);
           }
   
       };
   
       Slick.prototype.loadSlider = function() {
   
           var _ = this;
   
           _.setPosition();
   
           _.$slideTrack.css({
               opacity: 1
           });
   
           _.$slider.removeClass('slick-loading');
   
           _.initUI();
   
           if (_.options.lazyLoad === 'progressive') {
               _.progressiveLazyLoad();
           }
   
       };
   
       Slick.prototype.next = Slick.prototype.slickNext = function() {
   
           var _ = this;
   
           _.changeSlide({
               data: {
                   message: 'next'
               }
           });
   
       };
   
       Slick.prototype.orientationChange = function() {
   
           var _ = this;
   
           _.checkResponsive();
           _.setPosition();
   
       };
   
       Slick.prototype.pause = Slick.prototype.slickPause = function() {
   
           var _ = this;
   
           _.autoPlayClear();
           _.paused = true;
   
       };
   
       Slick.prototype.play = Slick.prototype.slickPlay = function() {
   
           var _ = this;
   
           _.autoPlay();
           _.options.autoplay = true;
           _.paused = false;
           _.focussed = false;
           _.interrupted = false;
   
       };
   
       Slick.prototype.postSlide = function(index) {
   
           var _ = this;
   
           if( !_.unslicked ) {
   
               _.$slider.trigger('afterChange', [_, index]);
   
               _.animating = false;
   
               if (_.slideCount > _.options.slidesToShow) {
                   _.setPosition();
               }
   
               _.swipeLeft = null;
   
               if ( _.options.autoplay ) {
                   _.autoPlay();
               }
   
               if (_.options.accessibility === true) {
                   _.initADA();
   
                   if (_.options.focusOnChange) {
                       var $currentSlide = $(_.$slides.get(_.currentSlide));
                       $currentSlide.attr('tabindex', 0).focus();
                   }
               }
   
           }
   
       };
   
       Slick.prototype.prev = Slick.prototype.slickPrev = function() {
   
           var _ = this;
   
           _.changeSlide({
               data: {
                   message: 'previous'
               }
           });
   
       };
   
       Slick.prototype.preventDefault = function(event) {
   
           event.preventDefault();
   
       };
   
       Slick.prototype.progressiveLazyLoad = function( tryCount ) {
   
           tryCount = tryCount || 1;
   
           var _ = this,
               $imgsToLoad = $( 'img[data-lazy]', _.$slider ),
               image,
               imageSource,
               imageSrcSet,
               imageSizes,
               imageToLoad;
   
           if ( $imgsToLoad.length ) {
   
               image = $imgsToLoad.first();
               imageSource = image.attr('data-lazy');
               imageSrcSet = image.attr('data-srcset');
               imageSizes  = image.attr('data-sizes') || _.$slider.attr('data-sizes');
               imageToLoad = document.createElement('img');
   
               imageToLoad.onload = function() {
   
                   if (imageSrcSet) {
                       image
                           .attr('srcset', imageSrcSet );
   
                       if (imageSizes) {
                           image
                               .attr('sizes', imageSizes );
                       }
                   }
   
                   image
                       .attr( 'src', imageSource )
                       .removeAttr('data-lazy data-srcset data-sizes')
                       .removeClass('slick-loading');
   
                   if ( _.options.adaptiveHeight === true ) {
                       _.setPosition();
                   }
   
                   _.$slider.trigger('lazyLoaded', [ _, image, imageSource ]);
                   _.progressiveLazyLoad();
   
               };
   
               imageToLoad.onerror = function() {
   
                   if ( tryCount < 3 ) {
   
                       /**
                        * try to load the image 3 times,
                        * leave a slight delay so we don't get
                        * servers blocking the request.
                        */
                       setTimeout( function() {
                           _.progressiveLazyLoad( tryCount + 1 );
                       }, 500 );
   
                   } else {
   
                       image
                           .removeAttr( 'data-lazy' )
                           .removeClass( 'slick-loading' )
                           .addClass( 'slick-lazyload-error' );
   
                       _.$slider.trigger('lazyLoadError', [ _, image, imageSource ]);
   
                       _.progressiveLazyLoad();
   
                   }
   
               };
   
               imageToLoad.src = imageSource;
   
           } else {
   
               _.$slider.trigger('allImagesLoaded', [ _ ]);
   
           }
   
       };
   
       Slick.prototype.refresh = function( initializing ) {
   
           var _ = this, currentSlide, lastVisibleIndex;
   
           lastVisibleIndex = _.slideCount - _.options.slidesToShow;
   
           // in non-infinite sliders, we don't want to go past the
           // last visible index.
           if( !_.options.infinite && ( _.currentSlide > lastVisibleIndex )) {
               _.currentSlide = lastVisibleIndex;
           }
   
           // if less slides than to show, go to start.
           if ( _.slideCount <= _.options.slidesToShow ) {
               _.currentSlide = 0;
   
           }
   
           currentSlide = _.currentSlide;
   
           _.destroy(true);
   
           $.extend(_, _.initials, { currentSlide: currentSlide });
   
           _.init();
   
           if( !initializing ) {
   
               _.changeSlide({
                   data: {
                       message: 'index',
                       index: currentSlide
                   }
               }, false);
   
           }
   
       };
   
       Slick.prototype.registerBreakpoints = function() {
   
           var _ = this, breakpoint, currentBreakpoint, l,
               responsiveSettings = _.options.responsive || null;
   
           if ( $.type(responsiveSettings) === 'array' && responsiveSettings.length ) {
   
               _.respondTo = _.options.respondTo || 'window';
   
               for ( breakpoint in responsiveSettings ) {
   
                   l = _.breakpoints.length-1;
   
                   if (responsiveSettings.hasOwnProperty(breakpoint)) {
                       currentBreakpoint = responsiveSettings[breakpoint].breakpoint;
   
                       // loop through the breakpoints and cut out any existing
                       // ones with the same breakpoint number, we don't want dupes.
                       while( l >= 0 ) {
                           if( _.breakpoints[l] && _.breakpoints[l] === currentBreakpoint ) {
                               _.breakpoints.splice(l,1);
                           }
                           l--;
                       }
   
                       _.breakpoints.push(currentBreakpoint);
                       _.breakpointSettings[currentBreakpoint] = responsiveSettings[breakpoint].settings;
   
                   }
   
               }
   
               _.breakpoints.sort(function(a, b) {
                   return ( _.options.mobileFirst ) ? a-b : b-a;
               });
   
           }
   
       };
   
       Slick.prototype.reinit = function() {
   
           var _ = this;
   
           _.$slides =
               _.$slideTrack
                   .children(_.options.slide)
                   .addClass('slick-slide');
   
           _.slideCount = _.$slides.length;
   
           if (_.currentSlide >= _.slideCount && _.currentSlide !== 0) {
               _.currentSlide = _.currentSlide - _.options.slidesToScroll;
           }
   
           if (_.slideCount <= _.options.slidesToShow) {
               _.currentSlide = 0;
           }
   
           _.registerBreakpoints();
   
           _.setProps();
           _.setupInfinite();
           _.buildArrows();
           _.updateArrows();
           _.initArrowEvents();
           _.buildDots();
           _.updateDots();
           _.initDotEvents();
           _.cleanUpSlideEvents();
           _.initSlideEvents();
   
           _.checkResponsive(false, true);
   
           if (_.options.focusOnSelect === true) {
               $(_.$slideTrack).children().on('click.slick', _.selectHandler);
           }
   
           _.setSlideClasses(typeof _.currentSlide === 'number' ? _.currentSlide : 0);
   
           _.setPosition();
           _.focusHandler();
   
           _.paused = !_.options.autoplay;
           _.autoPlay();
   
           _.$slider.trigger('reInit', [_]);
   
       };
   
       Slick.prototype.resize = function() {
   
           var _ = this;
   
           if ($(window).width() !== _.windowWidth) {
               clearTimeout(_.windowDelay);
               _.windowDelay = window.setTimeout(function() {
                   _.windowWidth = $(window).width();
                   _.checkResponsive();
                   if( !_.unslicked ) { _.setPosition(); }
               }, 50);
           }
       };
   
       Slick.prototype.removeSlide = Slick.prototype.slickRemove = function(index, removeBefore, removeAll) {
   
           var _ = this;
   
           if (typeof(index) === 'boolean') {
               removeBefore = index;
               index = removeBefore === true ? 0 : _.slideCount - 1;
           } else {
               index = removeBefore === true ? --index : index;
           }
   
           if (_.slideCount < 1 || index < 0 || index > _.slideCount - 1) {
               return false;
           }
   
           _.unload();
   
           if (removeAll === true) {
               _.$slideTrack.children().remove();
           } else {
               _.$slideTrack.children(this.options.slide).eq(index).remove();
           }
   
           _.$slides = _.$slideTrack.children(this.options.slide);
   
           _.$slideTrack.children(this.options.slide).detach();
   
           _.$slideTrack.append(_.$slides);
   
           _.$slidesCache = _.$slides;
   
           _.reinit();
   
       };
   
       Slick.prototype.setCSS = function(position) {
   
           var _ = this,
               positionProps = {},
               x, y;
   
           if (_.options.rtl === true) {
               position = -position;
           }
           x = _.positionProp == 'left' ? Math.ceil(position) + 'px' : '0px';
           y = _.positionProp == 'top' ? Math.ceil(position) + 'px' : '0px';
   
           positionProps[_.positionProp] = position;
   
           if (_.transformsEnabled === false) {
               _.$slideTrack.css(positionProps);
           } else {
               positionProps = {};
               if (_.cssTransitions === false) {
                   positionProps[_.animType] = 'translate(' + x + ', ' + y + ')';
                   _.$slideTrack.css(positionProps);
               } else {
                   positionProps[_.animType] = 'translate3d(' + x + ', ' + y + ', 0px)';
                   _.$slideTrack.css(positionProps);
               }
           }
   
       };
   
       Slick.prototype.setDimensions = function() {
   
           var _ = this;
   
           if (_.options.vertical === false) {
               if (_.options.centerMode === true) {
                   _.$list.css({
                       padding: ('0px ' + _.options.centerPadding)
                   });
               }
           } else {
               _.$list.height(_.$slides.first().outerHeight(true) * _.options.slidesToShow);
               if (_.options.centerMode === true) {
                   _.$list.css({
                       padding: (_.options.centerPadding + ' 0px')
                   });
               }
           }
   
           _.listWidth = _.$list.width();
           _.listHeight = _.$list.height();
   
   
           if (_.options.vertical === false && _.options.variableWidth === false) {
               _.slideWidth = Math.ceil(_.listWidth / _.options.slidesToShow);
               _.$slideTrack.width(Math.ceil((_.slideWidth * _.$slideTrack.children('.slick-slide').length)));
   
           } else if (_.options.variableWidth === true) {
               _.$slideTrack.width(5000 * _.slideCount);
           } else {
               _.slideWidth = Math.ceil(_.listWidth);
               _.$slideTrack.height(Math.ceil((_.$slides.first().outerHeight(true) * _.$slideTrack.children('.slick-slide').length)));
           }
   
           var offset = _.$slides.first().outerWidth(true) - _.$slides.first().width();
           if (_.options.variableWidth === false) _.$slideTrack.children('.slick-slide').width(_.slideWidth - offset);
   
       };
   
       Slick.prototype.setFade = function() {
   
           var _ = this,
               targetLeft;
   
           _.$slides.each(function(index, element) {
               targetLeft = (_.slideWidth * index) * -1;
               if (_.options.rtl === true) {
                   $(element).css({
                       position: 'relative',
                       right: targetLeft,
                       top: 0,
                       zIndex: _.options.zIndex - 2,
                       opacity: 0
                   });
               } else {
                   $(element).css({
                       position: 'relative',
                       left: targetLeft,
                       top: 0,
                       zIndex: _.options.zIndex - 2,
                       opacity: 0
                   });
               }
           });
   
           _.$slides.eq(_.currentSlide).css({
               zIndex: _.options.zIndex - 1,
               opacity: 1
           });
   
       };
   
       Slick.prototype.setHeight = function() {
   
           var _ = this;
   
           if (_.options.slidesToShow === 1 && _.options.adaptiveHeight === true && _.options.vertical === false) {
               var targetHeight = _.$slides.eq(_.currentSlide).outerHeight(true);
               _.$list.css('height', targetHeight);
           }
   
       };
   
       Slick.prototype.setOption =
       Slick.prototype.slickSetOption = function() {
   
           /**
            * accepts arguments in format of:
            *
            *  - for changing a single option's value:
            *     .slick("setOption", option, value, refresh )
            *
            *  - for changing a set of responsive options:
            *     .slick("setOption", 'responsive', [{}, ...], refresh )
            *
            *  - for updating multiple values at once (not responsive)
            *     .slick("setOption", { 'option': value, ... }, refresh )
            */
   
           var _ = this, l, item, option, value, refresh = false, type;
   
           if( $.type( arguments[0] ) === 'object' ) {
   
               option =  arguments[0];
               refresh = arguments[1];
               type = 'multiple';
   
           } else if ( $.type( arguments[0] ) === 'string' ) {
   
               option =  arguments[0];
               value = arguments[1];
               refresh = arguments[2];
   
               if ( arguments[0] === 'responsive' && $.type( arguments[1] ) === 'array' ) {
   
                   type = 'responsive';
   
               } else if ( typeof arguments[1] !== 'undefined' ) {
   
                   type = 'single';
   
               }
   
           }
   
           if ( type === 'single' ) {
   
               _.options[option] = value;
   
   
           } else if ( type === 'multiple' ) {
   
               $.each( option , function( opt, val ) {
   
                   _.options[opt] = val;
   
               });
   
   
           } else if ( type === 'responsive' ) {
   
               for ( item in value ) {
   
                   if( $.type( _.options.responsive ) !== 'array' ) {
   
                       _.options.responsive = [ value[item] ];
   
                   } else {
   
                       l = _.options.responsive.length-1;
   
                       // loop through the responsive object and splice out duplicates.
                       while( l >= 0 ) {
   
                           if( _.options.responsive[l].breakpoint === value[item].breakpoint ) {
   
                               _.options.responsive.splice(l,1);
   
                           }
   
                           l--;
   
                       }
   
                       _.options.responsive.push( value[item] );
   
                   }
   
               }
   
           }
   
           if ( refresh ) {
   
               _.unload();
               _.reinit();
   
           }
   
       };
   
       Slick.prototype.setPosition = function() {
   
           var _ = this;
   
           _.setDimensions();
   
           _.setHeight();
   
           if (_.options.fade === false) {
               _.setCSS(_.getLeft(_.currentSlide));
           } else {
               _.setFade();
           }
   
           _.$slider.trigger('setPosition', [_]);
   
       };
   
       Slick.prototype.setProps = function() {
   
           var _ = this,
               bodyStyle = document.body.style;
   
           _.positionProp = _.options.vertical === true ? 'top' : 'left';
   
           if (_.positionProp === 'top') {
               _.$slider.addClass('slick-vertical');
           } else {
               _.$slider.removeClass('slick-vertical');
           }
   
           if (bodyStyle.WebkitTransition !== undefined ||
               bodyStyle.MozTransition !== undefined ||
               bodyStyle.msTransition !== undefined) {
               if (_.options.useCSS === true) {
                   _.cssTransitions = true;
               }
           }
   
           if ( _.options.fade ) {
               if ( typeof _.options.zIndex === 'number' ) {
                   if( _.options.zIndex < 3 ) {
                       _.options.zIndex = 3;
                   }
               } else {
                   _.options.zIndex = _.defaults.zIndex;
               }
           }
   
           if (bodyStyle.OTransform !== undefined) {
               _.animType = 'OTransform';
               _.transformType = '-o-transform';
               _.transitionType = 'OTransition';
               if (bodyStyle.perspectiveProperty === undefined && bodyStyle.webkitPerspective === undefined) _.animType = false;
           }
           if (bodyStyle.MozTransform !== undefined) {
               _.animType = 'MozTransform';
               _.transformType = '-moz-transform';
               _.transitionType = 'MozTransition';
               if (bodyStyle.perspectiveProperty === undefined && bodyStyle.MozPerspective === undefined) _.animType = false;
           }
           if (bodyStyle.webkitTransform !== undefined) {
               _.animType = 'webkitTransform';
               _.transformType = '-webkit-transform';
               _.transitionType = 'webkitTransition';
               if (bodyStyle.perspectiveProperty === undefined && bodyStyle.webkitPerspective === undefined) _.animType = false;
           }
           if (bodyStyle.msTransform !== undefined) {
               _.animType = 'msTransform';
               _.transformType = '-ms-transform';
               _.transitionType = 'msTransition';
               if (bodyStyle.msTransform === undefined) _.animType = false;
           }
           if (bodyStyle.transform !== undefined && _.animType !== false) {
               _.animType = 'transform';
               _.transformType = 'transform';
               _.transitionType = 'transition';
           }
           _.transformsEnabled = _.options.useTransform && (_.animType !== null && _.animType !== false);
       };
   
   
       Slick.prototype.setSlideClasses = function(index) {
   
           var _ = this,
               centerOffset, allSlides, indexOffset, remainder;
   
           allSlides = _.$slider
               .find('.slick-slide')
               .removeClass('slick-active slick-center slick-current')
               .attr('aria-hidden', 'true');
   
           _.$slides
               .eq(index)
               .addClass('slick-current');
   
           if (_.options.centerMode === true) {
   
               var evenCoef = _.options.slidesToShow % 2 === 0 ? 1 : 0;
   
               centerOffset = Math.floor(_.options.slidesToShow / 2);
   
               if (_.options.infinite === true) {
   
                   if (index >= centerOffset && index <= (_.slideCount - 1) - centerOffset) {
                       _.$slides
                           .slice(index - centerOffset + evenCoef, index + centerOffset + 1)
                           .addClass('slick-active')
                           .attr('aria-hidden', 'false');
   
                   } else {
   
                       indexOffset = _.options.slidesToShow + index;
                       allSlides
                           .slice(indexOffset - centerOffset + 1 + evenCoef, indexOffset + centerOffset + 2)
                           .addClass('slick-active')
                           .attr('aria-hidden', 'false');
   
                   }
   
                   if (index === 0) {
   
                       allSlides
                           .eq(allSlides.length - 1 - _.options.slidesToShow)
                           .addClass('slick-center');
   
                   } else if (index === _.slideCount - 1) {
   
                       allSlides
                           .eq(_.options.slidesToShow)
                           .addClass('slick-center');
   
                   }
   
               }
   
               _.$slides
                   .eq(index)
                   .addClass('slick-center');
   
           } else {
   
               if (index >= 0 && index <= (_.slideCount - _.options.slidesToShow)) {
   
                   _.$slides
                       .slice(index, index + _.options.slidesToShow)
                       .addClass('slick-active')
                       .attr('aria-hidden', 'false');
   
               } else if (allSlides.length <= _.options.slidesToShow) {
   
                   allSlides
                       .addClass('slick-active')
                       .attr('aria-hidden', 'false');
   
               } else {
   
                   remainder = _.slideCount % _.options.slidesToShow;
                   indexOffset = _.options.infinite === true ? _.options.slidesToShow + index : index;
   
                   if (_.options.slidesToShow == _.options.slidesToScroll && (_.slideCount - index) < _.options.slidesToShow) {
   
                       allSlides
                           .slice(indexOffset - (_.options.slidesToShow - remainder), indexOffset + remainder)
                           .addClass('slick-active')
                           .attr('aria-hidden', 'false');
   
                   } else {
   
                       allSlides
                           .slice(indexOffset, indexOffset + _.options.slidesToShow)
                           .addClass('slick-active')
                           .attr('aria-hidden', 'false');
   
                   }
   
               }
   
           }
   
           if (_.options.lazyLoad === 'ondemand' || _.options.lazyLoad === 'anticipated') {
               _.lazyLoad();
           }
       };
   
       Slick.prototype.setupInfinite = function() {
   
           var _ = this,
               i, slideIndex, infiniteCount;
   
           if (_.options.fade === true) {
               _.options.centerMode = false;
           }
   
           if (_.options.infinite === true && _.options.fade === false) {
   
               slideIndex = null;
   
               if (_.slideCount > _.options.slidesToShow) {
   
                   if (_.options.centerMode === true) {
                       infiniteCount = _.options.slidesToShow + 1;
                   } else {
                       infiniteCount = _.options.slidesToShow;
                   }
   
                   for (i = _.slideCount; i > (_.slideCount -
                           infiniteCount); i -= 1) {
                       slideIndex = i - 1;
                       $(_.$slides[slideIndex]).clone(true).attr('id', '')
                           .attr('data-slick-index', slideIndex - _.slideCount)
                           .prependTo(_.$slideTrack).addClass('slick-cloned');
                   }
                   for (i = 0; i < infiniteCount  + _.slideCount; i += 1) {
                       slideIndex = i;
                       $(_.$slides[slideIndex]).clone(true).attr('id', '')
                           .attr('data-slick-index', slideIndex + _.slideCount)
                           .appendTo(_.$slideTrack).addClass('slick-cloned');
                   }
                   _.$slideTrack.find('.slick-cloned').find('[id]').each(function() {
                       $(this).attr('id', '');
                   });
   
               }
   
           }
   
       };
   
       Slick.prototype.interrupt = function( toggle ) {
   
           var _ = this;
   
           if( !toggle ) {
               _.autoPlay();
           }
           _.interrupted = toggle;
   
       };
   
       Slick.prototype.selectHandler = function(event) {
   
           var _ = this;
   
           var targetElement =
               $(event.target).is('.slick-slide') ?
                   $(event.target) :
                   $(event.target).parents('.slick-slide');
   
           var index = parseInt(targetElement.attr('data-slick-index'));
   
           if (!index) index = 0;
   
           if (_.slideCount <= _.options.slidesToShow) {
   
               _.slideHandler(index, false, true);
               return;
   
           }
   
           _.slideHandler(index);
   
       };
   
       Slick.prototype.slideHandler = function(index, sync, dontAnimate) {
   
           var targetSlide, animSlide, oldSlide, slideLeft, targetLeft = null,
               _ = this, navTarget;
   
           sync = sync || false;
   
           if (_.animating === true && _.options.waitForAnimate === true) {
               return;
           }
   
           if (_.options.fade === true && _.currentSlide === index) {
               return;
           }
   
           if (sync === false) {
               _.asNavFor(index);
           }
   
           targetSlide = index;
           targetLeft = _.getLeft(targetSlide);
           slideLeft = _.getLeft(_.currentSlide);
   
           _.currentLeft = _.swipeLeft === null ? slideLeft : _.swipeLeft;
   
           if (_.options.infinite === false && _.options.centerMode === false && (index < 0 || index > _.getDotCount() * _.options.slidesToScroll)) {
               if (_.options.fade === false) {
                   targetSlide = _.currentSlide;
                   if (dontAnimate !== true && _.slideCount > _.options.slidesToShow) {
                       _.animateSlide(slideLeft, function() {
                           _.postSlide(targetSlide);
                       });
                   } else {
                       _.postSlide(targetSlide);
                   }
               }
               return;
           } else if (_.options.infinite === false && _.options.centerMode === true && (index < 0 || index > (_.slideCount - _.options.slidesToScroll))) {
               if (_.options.fade === false) {
                   targetSlide = _.currentSlide;
                   if (dontAnimate !== true && _.slideCount > _.options.slidesToShow) {
                       _.animateSlide(slideLeft, function() {
                           _.postSlide(targetSlide);
                       });
                   } else {
                       _.postSlide(targetSlide);
                   }
               }
               return;
           }
   
           if ( _.options.autoplay ) {
               clearInterval(_.autoPlayTimer);
           }
   
           if (targetSlide < 0) {
               if (_.slideCount % _.options.slidesToScroll !== 0) {
                   animSlide = _.slideCount - (_.slideCount % _.options.slidesToScroll);
               } else {
                   animSlide = _.slideCount + targetSlide;
               }
           } else if (targetSlide >= _.slideCount) {
               if (_.slideCount % _.options.slidesToScroll !== 0) {
                   animSlide = 0;
               } else {
                   animSlide = targetSlide - _.slideCount;
               }
           } else {
               animSlide = targetSlide;
           }
   
           _.animating = true;
   
           _.$slider.trigger('beforeChange', [_, _.currentSlide, animSlide]);
   
           oldSlide = _.currentSlide;
           _.currentSlide = animSlide;
   
           _.setSlideClasses(_.currentSlide);
   
           if ( _.options.asNavFor ) {
   
               navTarget = _.getNavTarget();
               navTarget = navTarget.slick('getSlick');
   
               if ( navTarget.slideCount <= navTarget.options.slidesToShow ) {
                   navTarget.setSlideClasses(_.currentSlide);
               }
   
           }
   
           _.updateDots();
           _.updateArrows();
   
           if (_.options.fade === true) {
               if (dontAnimate !== true) {
   
                   _.fadeSlideOut(oldSlide);
   
                   _.fadeSlide(animSlide, function() {
                       _.postSlide(animSlide);
                   });
   
               } else {
                   _.postSlide(animSlide);
               }
               _.animateHeight();
               return;
           }
   
           if (dontAnimate !== true && _.slideCount > _.options.slidesToShow) {
               _.animateSlide(targetLeft, function() {
                   _.postSlide(animSlide);
               });
           } else {
               _.postSlide(animSlide);
           }
   
       };
   
       Slick.prototype.startLoad = function() {
   
           var _ = this;
   
           if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {
   
               _.$prevArrow.hide();
               _.$nextArrow.hide();
   
           }
   
           if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {
   
               _.$dots.hide();
   
           }
   
           _.$slider.addClass('slick-loading');
   
       };
   
       Slick.prototype.swipeDirection = function() {
   
           var xDist, yDist, r, swipeAngle, _ = this;
   
           xDist = _.touchObject.startX - _.touchObject.curX;
           yDist = _.touchObject.startY - _.touchObject.curY;
           r = Math.atan2(yDist, xDist);
   
           swipeAngle = Math.round(r * 180 / Math.PI);
           if (swipeAngle < 0) {
               swipeAngle = 360 - Math.abs(swipeAngle);
           }
   
           if ((swipeAngle <= 45) && (swipeAngle >= 0)) {
               return (_.options.rtl === false ? 'left' : 'right');
           }
           if ((swipeAngle <= 360) && (swipeAngle >= 315)) {
               return (_.options.rtl === false ? 'left' : 'right');
           }
           if ((swipeAngle >= 135) && (swipeAngle <= 225)) {
               return (_.options.rtl === false ? 'right' : 'left');
           }
           if (_.options.verticalSwiping === true) {
               if ((swipeAngle >= 35) && (swipeAngle <= 135)) {
                   return 'down';
               } else {
                   return 'up';
               }
           }
   
           return 'vertical';
   
       };
   
       Slick.prototype.swipeEnd = function(event) {
   
           var _ = this,
               slideCount,
               direction;
   
           _.dragging = false;
           _.swiping = false;
   
           if (_.scrolling) {
               _.scrolling = false;
               return false;
           }
   
           _.interrupted = false;
           _.shouldClick = ( _.touchObject.swipeLength > 10 ) ? false : true;
   
           if ( _.touchObject.curX === undefined ) {
               return false;
           }
   
           if ( _.touchObject.edgeHit === true ) {
               _.$slider.trigger('edge', [_, _.swipeDirection() ]);
           }
   
           if ( _.touchObject.swipeLength >= _.touchObject.minSwipe ) {
   
               direction = _.swipeDirection();
   
               switch ( direction ) {
   
                   case 'left':
                   case 'down':
   
                       slideCount =
                           _.options.swipeToSlide ?
                               _.checkNavigable( _.currentSlide + _.getSlideCount() ) :
                               _.currentSlide + _.getSlideCount();
   
                       _.currentDirection = 0;
   
                       break;
   
                   case 'right':
                   case 'up':
   
                       slideCount =
                           _.options.swipeToSlide ?
                               _.checkNavigable( _.currentSlide - _.getSlideCount() ) :
                               _.currentSlide - _.getSlideCount();
   
                       _.currentDirection = 1;
   
                       break;
   
                   default:
   
   
               }
   
               if( direction != 'vertical' ) {
   
                   _.slideHandler( slideCount );
                   _.touchObject = {};
                   _.$slider.trigger('swipe', [_, direction ]);
   
               }
   
           } else {
   
               if ( _.touchObject.startX !== _.touchObject.curX ) {
   
                   _.slideHandler( _.currentSlide );
                   _.touchObject = {};
   
               }
   
           }
   
       };
   
       Slick.prototype.swipeHandler = function(event) {
   
           var _ = this;
   
           if ((_.options.swipe === false) || ('ontouchend' in document && _.options.swipe === false)) {
               return;
           } else if (_.options.draggable === false && event.type.indexOf('mouse') !== -1) {
               return;
           }
   
           _.touchObject.fingerCount = event.originalEvent && event.originalEvent.touches !== undefined ?
               event.originalEvent.touches.length : 1;
   
           _.touchObject.minSwipe = _.listWidth / _.options
               .touchThreshold;
   
           if (_.options.verticalSwiping === true) {
               _.touchObject.minSwipe = _.listHeight / _.options
                   .touchThreshold;
           }
   
           switch (event.data.action) {
   
               case 'start':
                   _.swipeStart(event);
                   break;
   
               case 'move':
                   _.swipeMove(event);
                   break;
   
               case 'end':
                   _.swipeEnd(event);
                   break;
   
           }
   
       };
   
       Slick.prototype.swipeMove = function(event) {
   
           var _ = this,
               edgeWasHit = false,
               curLeft, swipeDirection, swipeLength, positionOffset, touches, verticalSwipeLength;
   
           touches = event.originalEvent !== undefined ? event.originalEvent.touches : null;
   
           if (!_.dragging || _.scrolling || touches && touches.length !== 1) {
               return false;
           }
   
           curLeft = _.getLeft(_.currentSlide);
   
           _.touchObject.curX = touches !== undefined ? touches[0].pageX : event.clientX;
           _.touchObject.curY = touches !== undefined ? touches[0].pageY : event.clientY;
   
           _.touchObject.swipeLength = Math.round(Math.sqrt(
               Math.pow(_.touchObject.curX - _.touchObject.startX, 2)));
   
           verticalSwipeLength = Math.round(Math.sqrt(
               Math.pow(_.touchObject.curY - _.touchObject.startY, 2)));
   
           if (!_.options.verticalSwiping && !_.swiping && verticalSwipeLength > 4) {
               _.scrolling = true;
               return false;
           }
   
           if (_.options.verticalSwiping === true) {
               _.touchObject.swipeLength = verticalSwipeLength;
           }
   
           swipeDirection = _.swipeDirection();
   
           if (event.originalEvent !== undefined && _.touchObject.swipeLength > 4) {
               _.swiping = true;
               event.preventDefault();
           }
   
           positionOffset = (_.options.rtl === false ? 1 : -1) * (_.touchObject.curX > _.touchObject.startX ? 1 : -1);
           if (_.options.verticalSwiping === true) {
               positionOffset = _.touchObject.curY > _.touchObject.startY ? 1 : -1;
           }
   
   
           swipeLength = _.touchObject.swipeLength;
   
           _.touchObject.edgeHit = false;
   
           if (_.options.infinite === false) {
               if ((_.currentSlide === 0 && swipeDirection === 'right') || (_.currentSlide >= _.getDotCount() && swipeDirection === 'left')) {
                   swipeLength = _.touchObject.swipeLength * _.options.edgeFriction;
                   _.touchObject.edgeHit = true;
               }
           }
   
           if (_.options.vertical === false) {
               _.swipeLeft = curLeft + swipeLength * positionOffset;
           } else {
               _.swipeLeft = curLeft + (swipeLength * (_.$list.height() / _.listWidth)) * positionOffset;
           }
           if (_.options.verticalSwiping === true) {
               _.swipeLeft = curLeft + swipeLength * positionOffset;
           }
   
           if (_.options.fade === true || _.options.touchMove === false) {
               return false;
           }
   
           if (_.animating === true) {
               _.swipeLeft = null;
               return false;
           }
   
           _.setCSS(_.swipeLeft);
   
       };
   
       Slick.prototype.swipeStart = function(event) {
   
           var _ = this,
               touches;
   
           _.interrupted = true;
   
           if (_.touchObject.fingerCount !== 1 || _.slideCount <= _.options.slidesToShow) {
               _.touchObject = {};
               return false;
           }
   
           if (event.originalEvent !== undefined && event.originalEvent.touches !== undefined) {
               touches = event.originalEvent.touches[0];
           }
   
           _.touchObject.startX = _.touchObject.curX = touches !== undefined ? touches.pageX : event.clientX;
           _.touchObject.startY = _.touchObject.curY = touches !== undefined ? touches.pageY : event.clientY;
   
           _.dragging = true;
   
       };
   
       Slick.prototype.unfilterSlides = Slick.prototype.slickUnfilter = function() {
   
           var _ = this;
   
           if (_.$slidesCache !== null) {
   
               _.unload();
   
               _.$slideTrack.children(this.options.slide).detach();
   
               _.$slidesCache.appendTo(_.$slideTrack);
   
               _.reinit();
   
           }
   
       };
   
       Slick.prototype.unload = function() {
   
           var _ = this;
   
           $('.slick-cloned', _.$slider).remove();
   
           if (_.$dots) {
               _.$dots.remove();
           }
   
           if (_.$prevArrow && _.htmlExpr.test(_.options.prevArrow)) {
               _.$prevArrow.remove();
           }
   
           if (_.$nextArrow && _.htmlExpr.test(_.options.nextArrow)) {
               _.$nextArrow.remove();
           }
   
           _.$slides
               .removeClass('slick-slide slick-active slick-visible slick-current')
               .attr('aria-hidden', 'true')
               .css('width', '');
   
       };
   
       Slick.prototype.unslick = function(fromBreakpoint) {
   
           var _ = this;
           _.$slider.trigger('unslick', [_, fromBreakpoint]);
           _.destroy();
   
       };
   
       Slick.prototype.updateArrows = function() {
   
           var _ = this,
               centerOffset;
   
           centerOffset = Math.floor(_.options.slidesToShow / 2);
   
           if ( _.options.arrows === true &&
               _.slideCount > _.options.slidesToShow &&
               !_.options.infinite ) {
   
               _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');
               _.$nextArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');
   
               if (_.currentSlide === 0) {
   
                   _.$prevArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
                   _.$nextArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');
   
               } else if (_.currentSlide >= _.slideCount - _.options.slidesToShow && _.options.centerMode === false) {
   
                   _.$nextArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
                   _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');
   
               } else if (_.currentSlide >= _.slideCount - 1 && _.options.centerMode === true) {
   
                   _.$nextArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
                   _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');
   
               }
   
           }
   
       };
   
       Slick.prototype.updateDots = function() {
   
           var _ = this;
   
           if (_.$dots !== null) {
   
               _.$dots
                   .find('li')
                       .removeClass('slick-active')
                       .end();
   
               _.$dots
                   .find('li')
                   .eq(Math.floor(_.currentSlide / _.options.slidesToScroll))
                   .addClass('slick-active');
   
           }
   
       };
   
       Slick.prototype.visibility = function() {
   
           var _ = this;
   
           if ( _.options.autoplay ) {
   
               if ( document[_.hidden] ) {
   
                   _.interrupted = true;
   
               } else {
   
                   _.interrupted = false;
   
               }
   
           }
   
       };
   
       $.fn.slick = function() {
           var _ = this,
               opt = arguments[0],
               args = Array.prototype.slice.call(arguments, 1),
               l = _.length,
               i,
               ret;
           for (i = 0; i < l; i++) {
               if (typeof opt == 'object' || typeof opt == 'undefined')
                   _[i].slick = new Slick(_[i], opt);
               else
                   ret = _[i].slick[opt].apply(_[i].slick, args);
               if (typeof ret != 'undefined') return ret;
           }
           return _;
       };
   
   }));
   
   
   /***/ }),
   
   /***/ "../src/assets/js/main.js":
   /*!********************************!*\
     !*** ../src/assets/js/main.js ***!
     \********************************/
   /*! no exports provided */
   /***/ (function(module, __webpack_exports__, __webpack_require__) {
   
   "use strict";
   __webpack_require__.r(__webpack_exports__);
   /* harmony import */ var _modules_masonry_layout__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/masonry-layout */ "../src/assets/js/modules/masonry-layout.js");
   /* harmony import */ var _modules_tabs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/tabs */ "../src/assets/js/modules/tabs.js");
   /* harmony import */ var _modules_tabs__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_modules_tabs__WEBPACK_IMPORTED_MODULE_1__);
   /* harmony import */ var _modules_mobile_menu__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/mobile-menu */ "../src/assets/js/modules/mobile-menu.js");
   /* harmony import */ var _modules_mobile_menu__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_modules_mobile_menu__WEBPACK_IMPORTED_MODULE_2__);
   /* harmony import */ var _modules_slick_slider__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/slick-slider */ "../src/assets/js/modules/slick-slider.js");
   /* harmony import */ var _modules_popup__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modules/popup */ "../src/assets/js/modules/popup.js");
   /* harmony import */ var _modules_popup__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_modules_popup__WEBPACK_IMPORTED_MODULE_4__);
   /* harmony import */ var _modules_accordion__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./modules/accordion */ "../src/assets/js/modules/accordion.js");
   /* harmony import */ var _modules_accordion__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_modules_accordion__WEBPACK_IMPORTED_MODULE_5__);
   /* harmony import */ var _modules_fixed_header__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./modules/fixed-header */ "../src/assets/js/modules/fixed-header.js");
   /* harmony import */ var _modules_fixed_header__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_modules_fixed_header__WEBPACK_IMPORTED_MODULE_6__);
   
   
   
   
   
   
   
   
   /***/ }),
   
   /***/ "../src/assets/js/modules/accordion.js":
   /*!*********************************************!*\
     !*** ../src/assets/js/modules/accordion.js ***!
     \*********************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   /* WEBPACK VAR INJECTION */(function($) {var $accordion = $('.js-accordion');
   $('.js-accordion .accordion__section').find('.accordion__body').hide();
   $accordion.on('click', '.accordion__head', function () {
     var $this = $(this);
     $this.parent().toggleClass('is-expanded');
     $this.next().slideToggle();
   });
   /* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))
   
   /***/ }),
   
   /***/ "../src/assets/js/modules/fixed-header.js":
   /*!************************************************!*\
     !*** ../src/assets/js/modules/fixed-header.js ***!
     \************************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   /* WEBPACK VAR INJECTION */(function($) {var $header = $('.js-header');
   var $scrollAfter = $header.height() / 2;
   $(window).on('scroll', function () {
     var $scrollPosition = $(this).scrollTop();
   
     if ($scrollPosition > $scrollAfter) {
       $header.addClass('is-fixed');
     } else {
       $header.removeClass('is-fixed');
     }
   });
   /* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))
   
   /***/ }),
   
   /***/ "../src/assets/js/modules/masonry-layout.js":
   /*!**************************************************!*\
     !*** ../src/assets/js/modules/masonry-layout.js ***!
     \**************************************************/
   /*! no exports provided */
   /***/ (function(module, __webpack_exports__, __webpack_require__) {
   
   "use strict";
   __webpack_require__.r(__webpack_exports__);
   /* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var masonry_layout__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! masonry-layout */ "../node_modules/masonry-layout/masonry.js");
   /* harmony import */ var masonry_layout__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(masonry_layout__WEBPACK_IMPORTED_MODULE_0__);
   
   var $win = $(window);
   var $doc = $(document);
   var $grid = $('.js-masonry');
   $win.on('load', function () {
     if ($grid.length) {
       var elem = $grid.get(0);
       var msnry = new masonry_layout__WEBPACK_IMPORTED_MODULE_0___default.a(elem, {
         horizontalOrder: true,
         columnWidth: '.masonry__grid-sizer',
         gutter: '.masonry__gutter-sizer',
         itemSelector: '.masonry__col',
         percentPosition: true
       });
     }
   });
   /* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))
   
   /***/ }),
   
   /***/ "../src/assets/js/modules/mobile-menu.js":
   /*!***********************************************!*\
     !*** ../src/assets/js/modules/mobile-menu.js ***!
     \***********************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   /* WEBPACK VAR INJECTION */(function($) {var $fixedBody = $('body');
   var $header = $('.js-header');
   var $btnNav = $('.js-nav-mobile');
   $btnNav.on('click', function (event) {
     event.preventDefault();
     $fixedBody.toggleClass('is-fixed');
     $header.toggleClass('is-active');
     $(this).toggleClass('is-active');
   });
   $(window).on('resize', function () {
     var $getWindow = $(window).width();
   
     if ($getWindow > 767) {
       $fixedBody.removeClass('is-fixed');
       $header.removeClass('is-active');
       $btnNav.removeClass('is-active');
     }
   });
   /* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))
   
   /***/ }),
   
   /***/ "../src/assets/js/modules/popup.js":
   /*!*****************************************!*\
     !*** ../src/assets/js/modules/popup.js ***!
     \*****************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   /* WEBPACK VAR INJECTION */(function($) {var $btnPopupClose = $('.js-popup-close');
   var $btnPopup = $('.js-popup-button');
   var $popup = $('.js-popup');
   var $fixedBody = $('body');
   $btnPopupClose.on('click', function (event) {
     event.preventDefault();
     $popup.toggleClass('is-active');
     $fixedBody.toggleClass('is-fixed');
   });
   $btnPopup.on('click', function (event) {
     event.preventDefault();
     $fixedBody.toggleClass('is-fixed');
     var $this = $(this);
     var $btnPopupID = $this.attr('href').replace('#slide-', '');
     $('.js-slider-slides').slick('slickGoTo', $btnPopupID);
     $popup.toggleClass('is-active');
   });
   /* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))
   
   /***/ }),
   
   /***/ "../src/assets/js/modules/slick-slider.js":
   /*!************************************************!*\
     !*** ../src/assets/js/modules/slick-slider.js ***!
     \************************************************/
   /*! no exports provided */
   /***/ (function(module, __webpack_exports__, __webpack_require__) {
   
   "use strict";
   __webpack_require__.r(__webpack_exports__);
   /* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var slick_carousel__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! slick-carousel */ "../node_modules/slick-carousel/slick/slick.js");
   /* harmony import */ var slick_carousel__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(slick_carousel__WEBPACK_IMPORTED_MODULE_0__);
   
   $('.js-slider-slides').slick({
     infinite: false,
     prevArrow: $('.slider__prev'),
     nextArrow: $('.slider__next'),
     speed: 300
   });
   /* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))
   
   /***/ }),
   
   /***/ "../src/assets/js/modules/tabs.js":
   /*!****************************************!*\
     !*** ../src/assets/js/modules/tabs.js ***!
     \****************************************/
   /*! no static exports found */
   /***/ (function(module, exports, __webpack_require__) {
   
   /* WEBPACK VAR INJECTION */(function($) {var $btnTab = $('.js-tabs-nav a');
   var $tabPane = $('.js-tab-pane');
   var $tabsBody = $('.js-tabs-body');
   $btnTab.on('click', function (event) {
     event.preventDefault();
     event.stopPropagation();
     var $getWindow = $(window).width();
     var $this = $(this);
     var $btnTabID = $this.attr('href');
   
     if ($getWindow <= 767) {
       if (!$this.parent().hasClass('is-current')) {
         $this.parent().addClass('is-current');
         $($btnTabID).addClass('is-current');
       } else {
         $this.parent().toggleClass('is-current');
         $($btnTabID).toggleClass('is-current');
       }
     } else if ($getWindow > 767) {
       if (!$this.parent().hasClass('is-current')) {
         $btnTab.parent().removeClass('is-current');
         $this.parent().addClass('is-current');
         $tabPane.removeClass('is-current');
         $($btnTabID).addClass('is-current');
       }
     }
   });
   $getWindow = $(window).width();
   $(window).on('load', function () {
     if ($getWindow <= 767) {
       appendMobileTab();
       $tabPane.removeClass('is-current');
       $btnTab.parent().removeClass('is-current');
     }
   });
   $(window).on('resize', function () {
     if ($getWindow != $(window).width()) {
       $getWindow = $(window).width();
   
       if ($getWindow <= 767) {
         $tabPane.removeClass('is-current');
         $btnTab.parent().removeClass('is-current');
         appendMobileTab();
       } else if ($getWindow > 767) {
         $tabPane.each(function () {
           $(this).appendTo($tabsBody);
         });
         $tabPane.removeClass('is-current');
         $btnTab.parent().removeClass('is-current');
         $tabPane.first().addClass('is-current');
       }
     }
   });
   
   function appendMobileTab() {
     $tabPane.each(function () {
       $(this).appendTo('#link-' + $(this).attr("id"));
     });
   }
   /* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))
   
   /***/ }),
   
   /***/ "jquery":
   /*!*************************!*\
     !*** external "jQuery" ***!
     \*************************/
   /*! no static exports found */
   /***/ (function(module, exports) {
   
   module.exports = jQuery;
   
   /***/ })
   
   /******/ });