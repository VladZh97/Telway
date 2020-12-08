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
/******/ 	return __webpack_require__(__webpack_require__.s = "./resources/js/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/index.js":
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/style.scss */ \"./resources/scss/style.scss\");\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_style_scss__WEBPACK_IMPORTED_MODULE_0__);\n\r\n\r\n\r\n// MENU \r\n\r\nconst burger = document.querySelector('.burger');\r\nconst menu = document.querySelector('.menu');\r\nconst search = document.querySelector('#ajaxsearchlite1');\r\nconst html = document.querySelector('html');\r\n\r\n\r\nconst toggleMenu = () => {\r\n  menu.classList.toggle('active');\r\n  document.body.classList.toggle(\"lock\");\r\n  html.classList.toggle(\"lock\");\r\n  if(menu.classList.contains('active')) {\r\n    search.classList.add('visible')\r\n  } else {\r\n    search.classList.remove('visible');\r\n  }\r\n}\r\n\r\nburger.addEventListener('click', toggleMenu)\r\n\r\n\r\n$(\".slide\").owlCarousel({\r\n  loop: true,\r\n  margin: 5,\r\n  nav: true,\r\n  dots: true,\r\n  smartSpeed: 1500,\r\n  autoplay: true,\r\n  autoplaySpeed: 2000,\r\n  autoplayTimeout: 8000,\r\n  responsive: {\r\n    0: {\r\n      items: 1,\r\n    },\r\n  },\r\n\r\n  navText: [\r\n    '<button type=\"button\" class=\"slick-arrow slick-prev\"><i class=\"fas fa-angle-left\"></button>',\r\n    '<button type=\"button\" class=\"slick-arrow slick-next\"><i class=\"fas fa-angle-right\"></button>',\r\n  ],\r\n});\r\n\r\n$(\".news-page__content\").owlCarousel({\r\n  loop: true,\r\n  margin: 15,\r\n  nav: true,\r\n  dots: true,\r\n  smartSpeed: 1500,\r\n  autoplay: true,\r\n  autoplaySpeed: 2000,\r\n  autoplayTimeout: 6000,\r\n  dotsClass: \"news-page__dots\",\r\n  dotClass: \"news-page__dot\",\r\n  smartSpeed: 1000,\r\n  responsive: {\r\n    0:{\r\n      items:1,\r\n  },\r\n  576: {\r\n      items:2\r\n  },\r\n  768:{\r\n      items:3\r\n  },\r\n  992:{\r\n      items:4\r\n  }\r\n  },\r\n\r\n  navText: [\r\n    '<button type=\"button\" class=\"news-page__prew news-page__arrow\"><i class=\"fas fa-angle-left\"></i></button>',\r\n    '<button type=\"button\" class=\"news-page__next news-page__arrow\"><i class=\"fas fa-angle-right\"></i></button>',\r\n  ],\r\n});\r\n\r\n\r\n\r\nif(document.body.classList.contains('page-template-page-contact')) {\r\n\r\n// MAP\r\nmapboxgl.accessToken =\r\n  \"pk.eyJ1IjoidmxhZHpoIiwiYSI6ImNrZzBxcHpoMDB1ZmsydG9iMHE0YnJ6NDYifQ._kSahmQ3wNJverVwR7NxgA\";\r\nvar map = new mapboxgl.Map({\r\n  container: \"map\",\r\n  style: \"mapbox://styles/vladzh/ckg0u9w4o1jxq19s0tq7ftwaj\",\r\n  center: [19.8041093, 50.0412162],\r\n  zoom: 12,\r\n});\r\n\r\nmap.scrollZoom.disable();\r\nmap.boxZoom.disable();\r\nmap.dragRotate.disable();\r\nmap.keyboard.disable();\r\nmap.doubleClickZoom.disable();\r\nmap.touchZoomRotate.disable();\r\n\r\nvar point = document.createElement(\"div\");\r\npoint.className = \"marker\";\r\npoint.innerHTML = '<i class=\"fas fa-map-marker-alt\"></i>';\r\npoint.style.fontSize = \"32px\";\r\npoint.style.color = \"#EC7714\";\r\n\r\nvar marker = new mapboxgl.Marker(point)\r\n    .setLngLat([19.8041093, 50.0412162])\r\n    .addTo(map);\r\nvar popup = new mapboxgl.Popup({closeButton: true, closeOnClick: false, anchor: 'left'})\r\n    .setLngLat([19.8041093, 50.0412162])\r\n    .setHTML('<h5>Telway Sp. z o.o.</h5><p>Kryspinów 357<br />32-060 Liszki, Polska<br />tel: +48 (12) 222-00-31<br />fax: +48 (12) 222-00-26</p>')\r\n    .addTo(map);\r\n}\n\n//# sourceURL=webpack:///./resources/js/index.js?");

/***/ }),

/***/ "./resources/scss/style.scss":
/*!***********************************!*\
  !*** ./resources/scss/style.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./resources/scss/style.scss?");

/***/ })

/******/ });