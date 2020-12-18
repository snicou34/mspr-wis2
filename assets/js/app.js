(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/app"],{

/***/ "./src/js/app.js":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

try {
  window.$ = window.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");

  __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");
} catch (_unused) {
  console.error('BUG');
}

__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");

__webpack_require__(/*! ./sticky */ "./src/js/sticky.js");

/***/ }),

/***/ "./src/js/sticky.js":
/*!**************************!*\
  !*** ./src/js/sticky.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! jquery-sticky */ "./node_modules/jquery-sticky/jquery.sticky.js");
/*** ---- EXERCICE 2 ---- ***/


document.addEventListener('DOMContentLoaded', function () {
  $("#sticker-list").sticky({
    topSpacing: 130
  });
  $("#sticker-options").sticky({
    topSpacing: 130
  });
});

/***/ }),

/***/ "./src/scss/app.scss":
/*!***************************!*\
  !*** ./src/scss/app.scss ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************!*\
  !*** multi ./src/js/app.js ./src/scss/app.scss ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Applications/MAMP/htdocs/mspr1-wis2/src/js/app.js */"./src/js/app.js");
module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/mspr1-wis2/src/scss/app.scss */"./src/scss/app.scss");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);