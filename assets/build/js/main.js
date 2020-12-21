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

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: /Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/src/js/carousel/index.js: Unexpected token, expected \";\" (22:9)\n\n\u001b[0m \u001b[90m 20 | \u001b[39m}( jQuery ) )\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 21 | \u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 22 | \u001b[39m\u001b[32m\"scripts\"\u001b[39m\u001b[33m:\u001b[39m {\u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m         \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 23 | \u001b[39m    \u001b[32m\"lint\"\u001b[39m\u001b[33m:\u001b[39m \u001b[32m\"eslint --fix --ext .js,.jsx .\"\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 24 | \u001b[39m}\u001b[0m\n\u001b[0m \u001b[90m 25 | \u001b[39m\u001b[0m\n    at Object._raise (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:746:17)\n    at Object.raiseWithData (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:739:17)\n    at Object.raise (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:733:17)\n    at Object.unexpected (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:8807:16)\n    at Object.semicolon (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:8789:40)\n    at Object.parseExpressionStatement (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:11689:10)\n    at Object.parseStatementContent (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:11290:19)\n    at Object.parseStatement (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:11156:17)\n    at Object.parseBlockOrModuleBlockBody (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:11731:25)\n    at Object.parseBlockBody (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:11717:10)\n    at Object.parseTopLevel (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:11087:10)\n    at Object.parse (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:12768:10)\n    at parse (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/parser/lib/index.js:12821:38)\n    at parser (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/core/lib/parser/index.js:54:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/core/lib/transformation/normalize-file.js:93:38)\n    at normalizeFile.next (<anonymous>)\n    at run (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/core/lib/transformation/index.js:31:50)\n    at run.next (<anonymous>)\n    at Function.transform (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/@babel/core/lib/transform.js:27:41)\n    at transform.next (<anonymous>)\n    at step (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/gensync/index.js:254:32)\n    at /Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/gensync/index.js:266:13\n    at async.call.result.err.err (/Applications/MAMP/htdocs/wp-content/themes/project-oleez/assets/node_modules/gensync/index.js:216:11)");

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
console.warn('Hello');



/***/ }),

/***/ "./src/scss/main.scss":
/*!****************************!*\
  !*** ./src/scss/main.scss ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

/******/ });
//# sourceMappingURL=main.js.map