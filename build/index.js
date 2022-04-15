/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/sass/style.scss":
/*!********************************!*\
  !*** ./assets/sass/style.scss ***!
  \********************************/
/***/ (function() {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nHookWebpackError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Undefined mixin.\n   ╷\n16 │ ┌     @include media( $breakpoint__screen-size--small) {\n17 │ │         font-size: $base--font-size--small-screen-width;\n18 │ └     }\n   ╵\n  assets/sass/base/elements/_body.scss 16:5     @import\n  assets/sass/base/elements/_defaults.scss 4:9  @import\n  assets/sass/base/elements/index.scss 4:9      @import\n  assets/sass/base/index.scss 6:9               @import\n  assets/sass/style.scss 22:9                   root stylesheet\n    at tryRunOrWebpackError (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/webpack/lib/HookWebpackError.js:88:9)\n    at __webpack_require_module__ (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/webpack/lib/Compilation.js:5051:12)\n    at __webpack_require__ (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/webpack/lib/Compilation.js:5008:18)\n    at /home/jason/Projects/ucsc-comm-genesis-child/node_modules/webpack/lib/Compilation.js:5079:20\n    at symbolIterator (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/neo-async/async.js:3485:9)\n    at done (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/neo-async/async.js:3527:9)\n    at Hook.eval [as callAsync] (eval at create (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/tapable/lib/Hook.js:18:14)\n    at /home/jason/Projects/ucsc-comm-genesis-child/node_modules/webpack/lib/Compilation.js:4986:43\n    at symbolIterator (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/neo-async/async.js:3482:9)\n-- inner error --\nError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Undefined mixin.\n   ╷\n16 │ ┌     @include media( $breakpoint__screen-size--small) {\n17 │ │         font-size: $base--font-size--small-screen-width;\n18 │ └     }\n   ╵\n  assets/sass/base/elements/_body.scss 16:5     @import\n  assets/sass/base/elements/_defaults.scss 4:9  @import\n  assets/sass/base/elements/index.scss 4:9      @import\n  assets/sass/base/index.scss 6:9               @import\n  assets/sass/style.scss 22:9                   root stylesheet\n    at Object.<anonymous> (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[3].use[1]!/home/jason/Projects/ucsc-comm-genesis-child/node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[3].use[2]!/home/jason/Projects/ucsc-comm-genesis-child/node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[3].use[3]!/home/jason/Projects/ucsc-comm-genesis-child/assets/sass/style.scss:1:7)\n    at /home/jason/Projects/ucsc-comm-genesis-child/node_modules/webpack/lib/javascript/JavascriptModulesPlugin.js:441:11\n    at Hook.eval [as call] (eval at create (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/tapable/lib/HookCodeFactory.js:19:10), <anonymous>:7:1)\n    at Hook.CALL_DELEGATE [as _call] (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/tapable/lib/Hook.js:14:14)\n    at /home/jason/Projects/ucsc-comm-genesis-child/node_modules/webpack/lib/Compilation.js:5053:39\n    at tryRunOrWebpackError (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/webpack/lib/HookWebpackError.js:83:7)\n    at __webpack_require_module__ (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/webpack/lib/Compilation.js:5051:12)\n    at __webpack_require__ (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/webpack/lib/Compilation.js:5008:18)\n    at /home/jason/Projects/ucsc-comm-genesis-child/node_modules/webpack/lib/Compilation.js:5079:20\n    at symbolIterator (/home/jason/Projects/ucsc-comm-genesis-child/node_modules/neo-async/async.js:3485:9)\n\nGenerated code for /home/jason/Projects/ucsc-comm-genesis-child/node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[3].use[1]!/home/jason/Projects/ucsc-comm-genesis-child/node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[3].use[2]!/home/jason/Projects/ucsc-comm-genesis-child/node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[3].use[3]!/home/jason/Projects/ucsc-comm-genesis-child/assets/sass/style.scss\n1 | throw new Error(\"Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nSassError: Undefined mixin.\\n   ╷\\n16 │ ┌     @include media( $breakpoint__screen-size--small) {\\n17 │ │         font-size: $base--font-size--small-screen-width;\\n18 │ └     }\\n   ╵\\n  assets/sass/base/elements/_body.scss 16:5     @import\\n  assets/sass/base/elements/_defaults.scss 4:9  @import\\n  assets/sass/base/elements/index.scss 4:9      @import\\n  assets/sass/base/index.scss 6:9               @import\\n  assets/sass/style.scss 22:9                   root stylesheet\");");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
!function() {
"use strict";
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _assets_sass_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../assets/sass/style.scss */ "./assets/sass/style.scss");
/* harmony import */ var _assets_sass_style_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_assets_sass_style_scss__WEBPACK_IMPORTED_MODULE_0__);

}();
/******/ })()
;
//# sourceMappingURL=index.js.map