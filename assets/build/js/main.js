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
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/carousel/index.js":
/*!**********************************!*\
  !*** ./src/js/carousel/index.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

(function ($) {
  var SlickCarousel = /*#__PURE__*/function () {
    function SlickCarousel() {
      _classCallCheck(this, SlickCarousel);

      this.initiateCarousel();
    }

    _createClass(SlickCarousel, [{
      key: "initiateCarousel",
      value: function initiateCarousel() {
        $('.hero-section').slick({
          autoplay: false,
          autoplaySpeed: 1000,
          slidesToShow: 1,
          slidesToScroll: 1
        });
        $('.project-carousel-container').slick({
          autoplay: false,
          autoplaySpeed: 1000,
          slidesToShow: 1
        });
      }
    }]);

    return SlickCarousel;
  }();

  new SlickCarousel();
})(jQuery);

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/main.scss */ "./src/scss/main.scss");
/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_main_scss__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _carousel__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./carousel */ "./src/js/carousel/index.js");
/* harmony import */ var _carousel__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_carousel__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _menus__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./menus */ "./src/js/menus/index.js");
/* harmony import */ var _menus__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_menus__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _search__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./search */ "./src/js/search/index.js");
/* harmony import */ var _search__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_search__WEBPACK_IMPORTED_MODULE_3__);





/***/ }),

/***/ "./src/js/menus/index.js":
/*!*******************************!*\
  !*** ./src/js/menus/index.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

var secondaryMenuBtn = document.querySelector('.header-secondary-menu-icon-wrap');
var secondaryMenu = document.querySelector('.header-secondary-menu-items-wrap');
var closeSecondaryMenuBtn = document.querySelector('.close-secondary-menu');

if (secondaryMenuBtn) {
  secondaryMenuBtn.addEventListener('click', function () {
    if (secondaryMenu.classList.contains('open')) {
      secondaryMenu.classList.remove('open');
    } else {
      secondaryMenu.classList.add('open');
    }
  });
}

if (closeSecondaryMenuBtn) {
  closeSecondaryMenuBtn.addEventListener('click', function () {
    if (secondaryMenu) {
      secondaryMenu.classList.remove('open');
    }
  });
}

/***/ }),

/***/ "./src/js/search/index.js":
/*!********************************!*\
  !*** ./src/js/search/index.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var searchForm = document.getElementById('header-search-form-wrap');
var searchOpenBtn = document.getElementById('search-btn-icon');
var searchCloseBtn = document.getElementById('search-form-close-btn');

if (searchCloseBtn) {
  searchCloseBtn.addEventListener('click', function () {
    searchForm.classList.remove('open');
  });
}

if (searchOpenBtn) {
  searchOpenBtn.addEventListener('click', function () {
    if (searchForm.classList.contains('open')) {
      searchForm.classList.remove('open');
    } else {
      searchForm.classList.add('open');
    }
  });
}

/***/ }),

/***/ "./src/scss/main.scss":
/*!****************************!*\
  !*** ./src/scss/main.scss ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nError: Missing binding /Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/node-sass/vendor/darwin-x64-72/binding.node\nNode Sass could not find a binding for your current environment: OS X 64-bit with Node.js 12.x\n\nFound bindings for the following environments:\n  - OS X 64-bit with Node.js 10.x\n\nThis usually happens because your environment has changed since running `npm install`.\nRun `npm rebuild node-sass` to download the binding for your current environment.\n    at module.exports (/Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/node-sass/lib/binding.js:15:13)\n    at Object.<anonymous> (/Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/node-sass/lib/index.js:14:35)\n    at Module._compile (/Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/v8-compile-cache/v8-compile-cache.js:192:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:1157:10)\n    at Module.load (internal/modules/cjs/loader.js:985:32)\n    at Function.Module._load (internal/modules/cjs/loader.js:878:14)\n    at Module.require (internal/modules/cjs/loader.js:1025:19)\n    at require (/Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/v8-compile-cache/v8-compile-cache.js:161:20)\n    at getDefaultSassImpl (/Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/sass-loader/dist/index.js:198:10)\n    at Object.loader (/Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/sass-loader/dist/index.js:80:29)\n    at /Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/webpack/lib/NormalModule.js:316:20\n    at /Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/loader-runner/lib/LoaderRunner.js:367:11\n    at /Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/loader-runner/lib/LoaderRunner.js:233:18\n    at runSyncOrAsync (/Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/loader-runner/lib/LoaderRunner.js:143:3)\n    at iterateNormalLoaders (/Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/loader-runner/lib/LoaderRunner.js:232:2)\n    at Array.<anonymous> (/Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/loader-runner/lib/LoaderRunner.js:205:4)\n    at Storage.finished (/Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/enhanced-resolve/lib/CachedInputFileSystem.js:55:16)\n    at /Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/enhanced-resolve/lib/CachedInputFileSystem.js:91:9\n    at /Applications/MAMP/htdocs/wordpress/wp-content/themes/oleez/assets/node_modules/graceful-fs/graceful-fs.js:123:16\n    at FSReqCallback.readFileAfterClose [as oncomplete] (internal/fs/read_file_context.js:63:3)");

/***/ })

/******/ });
//# sourceMappingURL=main.js.map