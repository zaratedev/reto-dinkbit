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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 40);
/******/ })
/************************************************************************/
/******/ ({

/***/ 40:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(41);


/***/ }),

/***/ 41:
/***/ (function(module, exports) {

var sliderRode = document.getElementById("sliderRode");
var sliderFortnight = document.getElementById("sliderFortnight");
// Values of slides
var valueRode = sliderRode.value;
var valueFortnight = sliderFortnight.value;
$(document).ready(function () {
  // get table of amortization
  generateTableAmortization(valueRode, valueFortnight);
});

sliderRode.oninput = function () {
  var labelRode = document.getElementById("labelRode");

  labelRode.innerHTML = '$' + this.value;
  valueRode = this.value;
  // get table of amortization
  generateTableAmortization(valueRode, valueFortnight);
};

sliderFortnight.oninput = function () {
  var labelFortnight = document.getElementById("labelFortnight");
  labelFortnight.innerHTML = this.value;
  valueFortnight = this.value;
  // get table of amortization
  generateTableAmortization(valueRode, valueFortnight);
};

function generateTableAmortization(rode, fortnight) {
  var labelPayment = document.getElementById("labelPayment");

  axios({
    method: 'POST',
    url: 'generate-table-amortization',
    data: {
      rode: rode,
      fortnight: fortnight
    }
  }).then(function (response) {
    var table = response.data.table;
    $("#tbody").empty();
    $.each(table, function (index, value) {
      labelPayment.innerHTML = '$' + value.payment;
      var row = '<tr><td>' + value.numberPayment + '</td><td>' + value.outstandingBalance + '</td><td>' + value.amortization + '</td><td>' + value.interest + '</td><td>' + value.iva + '</td><td>' + value.payment + '</td></tr>';
      $("#tableAmortization").append(row);
    });
  });
}

/***/ })

/******/ });