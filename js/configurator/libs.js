!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.ES6Promise=e()}(this,function(){"use strict";function t(t){var e=typeof t;return null!==t&&("object"===e||"function"===e)}function e(t){return"function"==typeof t}function r(t){D=t}function n(t){N=t}function i(){return void 0!==k?function(){k(l)}:o()}function o(){var t=setTimeout;return function(){return t(l,1)}}function l(){for(var t=0;t<C;t+=2){(0,F[t])(F[t+1]),F[t]=void 0,F[t+1]=void 0}C=0}function s(t,e){var r=this,n=new this.constructor(c);void 0===n[$]&&S(n);var i=r._state;if(i){var o=arguments[i-1];N(function(){return L(i,n,o,r._result)})}else Y(r,n,t,e);return n}function a(t){var e=this;if(t&&"object"==typeof t&&t.constructor===e)return t;var r=new e(c);return g(r,t),r}function c(){}function u(){return new TypeError("You cannot resolve a promise with itself")}function h(){return new TypeError("A promises callback cannot return that same promise.")}function f(t){try{return t.then}catch(t){return V.error=t,V}}function d(t,e,r,n){try{t.call(e,r,n)}catch(t){return t}}function p(t,e,r){N(function(t){var n=!1,i=d(r,e,function(r){n||(n=!0,e!==r?g(t,r):y(t,r))},function(e){n||(n=!0,w(t,e))},"Settle: "+(t._label||" unknown promise"));!n&&i&&(n=!0,w(t,i))},t)}function v(t,e){e._state===J?y(t,e._result):e._state===Q?w(t,e._result):Y(e,void 0,function(e){return g(t,e)},function(e){return w(t,e)})}function b(t,r,n){r.constructor===t.constructor&&n===s&&r.constructor.resolve===a?v(t,r):n===V?(w(t,V.error),V.error=null):void 0===n?y(t,r):e(n)?p(t,r,n):y(t,r)}function g(e,r){e===r?w(e,u()):t(r)?b(e,r,f(r)):y(e,r)}function m(t){t._onerror&&t._onerror(t._result),X(t)}function y(t,e){t._state===G&&(t._result=e,t._state=J,0!==t._subscribers.length&&N(X,t))}function w(t,e){t._state===G&&(t._state=Q,t._result=e,N(m,t))}function Y(t,e,r,n){var i=t._subscribers,o=i.length;t._onerror=null,i[o]=e,i[o+J]=r,i[o+Q]=n,0===o&&t._state&&N(X,t)}function X(t){var e=t._subscribers,r=t._state;if(0!==e.length){for(var n=void 0,i=void 0,o=t._result,l=0;l<e.length;l+=3)n=e[l],i=e[l+r],n?L(r,n,i,o):i(o);t._subscribers.length=0}}function W(t,e){try{return t(e)}catch(t){return V.error=t,V}}function L(t,r,n,i){var o=e(n),l=void 0,s=void 0,a=void 0,c=void 0;if(o){if(l=W(n,i),l===V?(c=!0,s=l.error,l.error=null):a=!0,r===l)return void w(r,h())}else l=i,a=!0;r._state!==G||(o&&a?g(r,l):c?w(r,s):t===J?y(r,l):t===Q&&w(r,l))}function T(t,e){try{e(function(e){g(t,e)},function(e){w(t,e)})}catch(e){w(t,e)}}function _(){return Z++}function S(t){t[$]=Z++,t._state=void 0,t._result=void 0,t._subscribers=[]}function R(){return new Error("Array Methods must be provided an Array")}function E(t){return new tt(this,t).promise}function H(t){var e=this;return new e(O(t)?function(r,n){for(var i=t.length,o=0;o<i;o++)e.resolve(t[o]).then(r,n)}:function(t,e){return e(new TypeError("You must pass an array to race."))})}function A(t){var e=this,r=new e(c);return w(r,t),r}function P(){throw new TypeError("You must pass a resolver function as the first argument to the promise constructor")}function M(){throw new TypeError("Failed to construct 'Promise': Please use the 'new' operator, this object constructor cannot be called as a function.")}function x(){var t=void 0;if("undefined"!=typeof global)t=global;else if("undefined"!=typeof self)t=self;else try{t=Function("return this")()}catch(t){throw new Error("polyfill failed because global object is unavailable in this environment")}var e=t.Promise;if(e){var r=null;try{r=Object.prototype.toString.call(e.resolve())}catch(t){}if("[object Promise]"===r&&!e.cast)return}t.Promise=et}var j=void 0;j=Array.isArray?Array.isArray:function(t){return"[object Array]"===Object.prototype.toString.call(t)};var O=j,C=0,k=void 0,D=void 0,N=function(t,e){F[C]=t,F[C+1]=e,2===(C+=2)&&(D?D(l):z())},B="undefined"!=typeof window?window:void 0,I=B||{},K=I.MutationObserver||I.WebKitMutationObserver,U="undefined"==typeof self&&"undefined"!=typeof process&&"[object process]"==={}.toString.call(process),q="undefined"!=typeof Uint8ClampedArray&&"undefined"!=typeof importScripts&&"undefined"!=typeof MessageChannel,F=new Array(1e3),z=void 0;z=U?function(){return function(){return process.nextTick(l)}}():K?function(){var t=0,e=new K(l),r=document.createTextNode("");return e.observe(r,{characterData:!0}),function(){r.data=t=++t%2}}():q?function(){var t=new MessageChannel;return t.port1.onmessage=l,function(){return t.port2.postMessage(0)}}():void 0===B&&"function"==typeof require?function(){try{var t=Function("return this")().require("vertx");return k=t.runOnLoop||t.runOnContext,i()}catch(t){return o()}}():o();var $=Math.random().toString(36).substring(2),G=void 0,J=1,Q=2,V={error:null},Z=0,tt=function(){function t(t,e){this._instanceConstructor=t,this.promise=new t(c),this.promise[$]||S(this.promise),O(e)?(this.length=e.length,this._remaining=e.length,this._result=new Array(this.length),0===this.length?y(this.promise,this._result):(this.length=this.length||0,this._enumerate(e),0===this._remaining&&y(this.promise,this._result))):w(this.promise,R())}return t.prototype._enumerate=function(t){for(var e=0;this._state===G&&e<t.length;e++)this._eachEntry(t[e],e)},t.prototype._eachEntry=function(t,e){var r=this._instanceConstructor,n=r.resolve;if(n===a){var i=f(t);if(i===s&&t._state!==G)this._settledAt(t._state,e,t._result);else if("function"!=typeof i)this._remaining--,this._result[e]=t;else if(r===et){var o=new r(c);b(o,t,i),this._willSettleAt(o,e)}else this._willSettleAt(new r(function(e){return e(t)}),e)}else this._willSettleAt(n(t),e)},t.prototype._settledAt=function(t,e,r){var n=this.promise;n._state===G&&(this._remaining--,t===Q?w(n,r):this._result[e]=r),0===this._remaining&&y(n,this._result)},t.prototype._willSettleAt=function(t,e){var r=this;Y(t,void 0,function(t){return r._settledAt(J,e,t)},function(t){return r._settledAt(Q,e,t)})},t}(),et=function(){function t(e){this[$]=_(),this._result=this._state=void 0,this._subscribers=[],c!==e&&("function"!=typeof e&&P(),this instanceof t?T(this,e):M())}return t.prototype.catch=function(t){return this.then(null,t)},t.prototype.finally=function(t){var e=this,r=e.constructor;return e.then(function(e){return r.resolve(t()).then(function(){return e})},function(e){return r.resolve(t()).then(function(){throw e})})},t}();return et.prototype.then=s,et.all=E,et.race=H,et.resolve=a,et.reject=A,et._setScheduler=r,et._setAsap=n,et._asap=N,et.polyfill=x,et.Promise=et,et.polyfill(),et}),Object.assign||Object.defineProperty(Object,"assign",{enumerable:!1,configurable:!0,writable:!0,value:function(t,e){"use strict";if(void 0===t||null===t)throw new TypeError("Cannot convert first argument to object");for(var r=Object(t),n=1;n<arguments.length;n++){var i=arguments[n];if(void 0!==i&&null!==i)for(var o=Object.keys(Object(i)),l=0,s=o.length;l<s;l++){var a=o[l],c=Object.getOwnPropertyDescriptor(i,a);void 0!==c&&c.enumerable&&(r[a]=i[a])}}return r}}),function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.PerfectScrollbar=e()}(this,function(){"use strict";function t(t){return getComputedStyle(t)}function e(t,e){for(var r in e){var n=e[r];"number"==typeof n&&(n+="px"),t.style[r]=n}return t}function r(t){var e=document.createElement("div");return e.className=t,e}function n(t,e){if(!g)throw new Error("No element matching method supported");return g.call(t,e)}function i(t){t.remove?t.remove():t.parentNode&&t.parentNode.removeChild(t)}function o(t,e){return Array.prototype.filter.call(t.children,function(t){return n(t,e)})}function l(t,e){var r=t.element.classList,n=m.state.scrolling(e);r.contains(n)?clearTimeout(y[e]):r.add(n)}function s(t,e){y[e]=setTimeout(function(){return t.isAlive&&t.element.classList.remove(m.state.scrolling(e))},t.settings.scrollingThreshold)}function a(t,e){l(t,e),s(t,e)}function c(t){if("function"==typeof window.CustomEvent)return new CustomEvent(t);var e=document.createEvent("CustomEvent");return e.initCustomEvent(t,!1,!1,void 0),e}function u(t,e,r,n,i){var o=r[0],l=r[1],s=r[2],u=r[3],h=r[4],f=r[5];void 0===n&&(n=!0),void 0===i&&(i=!1);var d=t.element;t.reach[u]=null,d[s]<1&&(t.reach[u]="start"),d[s]>t[o]-t[l]-1&&(t.reach[u]="end"),e&&(d.dispatchEvent(c("ps-scroll-"+u)),e<0?d.dispatchEvent(c("ps-scroll-"+h)):e>0&&d.dispatchEvent(c("ps-scroll-"+f)),n&&a(t,u)),t.reach[u]&&(e||i)&&d.dispatchEvent(c("ps-"+u+"-reach-"+t.reach[u]))}function h(t){return parseInt(t,10)||0}function f(t){return n(t,"input,[contenteditable]")||n(t,"select,[contenteditable]")||n(t,"textarea,[contenteditable]")||n(t,"button,[contenteditable]")}function d(e){var r=t(e);return h(r.width)+h(r.paddingLeft)+h(r.paddingRight)+h(r.borderLeftWidth)+h(r.borderRightWidth)}function p(t,e){return t.settings.minScrollbarLength&&(e=Math.max(e,t.settings.minScrollbarLength)),t.settings.maxScrollbarLength&&(e=Math.min(e,t.settings.maxScrollbarLength)),e}function v(t,r){var n={width:r.railXWidth};r.isRtl?n.left=r.negativeScrollAdjustment+t.scrollLeft+r.containerWidth-r.contentWidth:n.left=t.scrollLeft,r.isScrollbarXUsingBottom?n.bottom=r.scrollbarXBottom-t.scrollTop:n.top=r.scrollbarXTop+t.scrollTop,e(r.scrollbarXRail,n);var i={top:t.scrollTop,height:r.railYHeight};r.isScrollbarYUsingRight?r.isRtl?i.right=r.contentWidth-(r.negativeScrollAdjustment+t.scrollLeft)-r.scrollbarYRight-r.scrollbarYOuterWidth:i.right=r.scrollbarYRight-t.scrollLeft:r.isRtl?i.left=r.negativeScrollAdjustment+t.scrollLeft+2*r.containerWidth-r.contentWidth-r.scrollbarYLeft-r.scrollbarYOuterWidth:i.left=r.scrollbarYLeft+t.scrollLeft,e(r.scrollbarYRail,i),e(r.scrollbarX,{left:r.scrollbarXLeft,width:r.scrollbarXWidth-r.railBorderXWidth}),e(r.scrollbarY,{top:r.scrollbarYTop,height:r.scrollbarYHeight-r.railBorderYWidth})}function b(t,e){function r(e){p[f]=v+g*(e[a]-b),l(t,d),T(t),e.stopPropagation(),e.preventDefault()}function n(){s(t,d),t.event.unbind(t.ownerDocument,"mousemove",r)}var i=e[0],o=e[1],a=e[2],c=e[3],u=e[4],h=e[5],f=e[6],d=e[7],p=t.element,v=null,b=null,g=null;t.event.bind(t[u],"mousedown",function(e){v=p[f],b=e[a],g=(t[o]-t[i])/(t[c]-t[h]),t.event.bind(t.ownerDocument,"mousemove",r),t.event.once(t.ownerDocument,"mouseup",n),e.stopPropagation(),e.preventDefault()})}var g="undefined"!=typeof Element&&(Element.prototype.matches||Element.prototype.webkitMatchesSelector||Element.prototype.msMatchesSelector),m={main:"ps",element:{thumb:function(t){return"ps__thumb-"+t},rail:function(t){return"ps__rail-"+t},consuming:"ps__child--consume"},state:{focus:"ps--focus",active:function(t){return"ps--active-"+t},scrolling:function(t){return"ps--scrolling-"+t}}},y={x:null,y:null},w=function(t){this.element=t,this.handlers={}},Y={isEmpty:{configurable:!0}};w.prototype.bind=function(t,e){void 0===this.handlers[t]&&(this.handlers[t]=[]),this.handlers[t].push(e),this.element.addEventListener(t,e,!1)},w.prototype.unbind=function(t,e){var r=this;this.handlers[t]=this.handlers[t].filter(function(n){return!(!e||n===e)||(r.element.removeEventListener(t,n,!1),!1)})},w.prototype.unbindAll=function(){var t=this;for(var e in t.handlers)t.unbind(e)},Y.isEmpty.get=function(){var t=this;return Object.keys(this.handlers).every(function(e){return 0===t.handlers[e].length})},Object.defineProperties(w.prototype,Y);var X=function(){this.eventElements=[]};X.prototype.eventElement=function(t){var e=this.eventElements.filter(function(e){return e.element===t})[0];return e||(e=new w(t),this.eventElements.push(e)),e},X.prototype.bind=function(t,e,r){this.eventElement(t).bind(e,r)},X.prototype.unbind=function(t,e,r){var n=this.eventElement(t);n.unbind(e,r),n.isEmpty&&this.eventElements.splice(this.eventElements.indexOf(n),1)},X.prototype.unbindAll=function(){this.eventElements.forEach(function(t){return t.unbindAll()}),this.eventElements=[]},X.prototype.once=function(t,e,r){var n=this.eventElement(t),i=function(t){n.unbind(e,i),r(t)};n.bind(e,i)};var W=function(t,e,r,n,i){void 0===n&&(n=!0),void 0===i&&(i=!1);var o;if("top"===e)o=["contentHeight","containerHeight","scrollTop","y","up","down"];else{if("left"!==e)throw new Error("A proper axis should be provided");o=["contentWidth","containerWidth","scrollLeft","x","left","right"]}u(t,r,o,n,i)},L={isWebKit:"undefined"!=typeof document&&"WebkitAppearance"in document.documentElement.style,supportsTouch:"undefined"!=typeof window&&("ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch),supportsIePointer:"undefined"!=typeof navigator&&navigator.msMaxTouchPoints,isChrome:"undefined"!=typeof navigator&&/Chrome/i.test(navigator&&navigator.userAgent)},T=function(t){var e=t.element;t.containerWidth=e.clientWidth,t.containerHeight=e.clientHeight,t.contentWidth=e.scrollWidth,t.contentHeight=e.scrollHeight,e.contains(t.scrollbarXRail)||(o(e,m.element.rail("x")).forEach(function(t){return i(t)}),e.appendChild(t.scrollbarXRail)),e.contains(t.scrollbarYRail)||(o(e,m.element.rail("y")).forEach(function(t){return i(t)}),e.appendChild(t.scrollbarYRail)),!t.settings.suppressScrollX&&t.containerWidth+t.settings.scrollXMarginOffset<t.contentWidth?(t.scrollbarXActive=!0,t.railXWidth=t.containerWidth-t.railXMarginWidth,t.railXRatio=t.containerWidth/t.railXWidth,t.scrollbarXWidth=p(t,h(t.railXWidth*t.containerWidth/t.contentWidth)),t.scrollbarXLeft=h((t.negativeScrollAdjustment+e.scrollLeft)*(t.railXWidth-t.scrollbarXWidth)/(t.contentWidth-t.containerWidth))):t.scrollbarXActive=!1,!t.settings.suppressScrollY&&t.containerHeight+t.settings.scrollYMarginOffset<t.contentHeight?(t.scrollbarYActive=!0,t.railYHeight=t.containerHeight-t.railYMarginHeight,t.railYRatio=t.containerHeight/t.railYHeight,t.scrollbarYHeight=p(t,h(t.railYHeight*t.containerHeight/t.contentHeight)),t.scrollbarYTop=h(e.scrollTop*(t.railYHeight-t.scrollbarYHeight)/(t.contentHeight-t.containerHeight))):t.scrollbarYActive=!1,t.scrollbarXLeft>=t.railXWidth-t.scrollbarXWidth&&(t.scrollbarXLeft=t.railXWidth-t.scrollbarXWidth),t.scrollbarYTop>=t.railYHeight-t.scrollbarYHeight&&(t.scrollbarYTop=t.railYHeight-t.scrollbarYHeight),v(e,t),t.scrollbarXActive?e.classList.add(m.state.active("x")):(e.classList.remove(m.state.active("x")),t.scrollbarXWidth=0,t.scrollbarXLeft=0,e.scrollLeft=0),t.scrollbarYActive?e.classList.add(m.state.active("y")):(e.classList.remove(m.state.active("y")),t.scrollbarYHeight=0,t.scrollbarYTop=0,e.scrollTop=0)},_={"click-rail":function(t){t.event.bind(t.scrollbarY,"mousedown",function(t){return t.stopPropagation()}),t.event.bind(t.scrollbarYRail,"mousedown",function(e){var r=e.pageY-window.pageYOffset-t.scrollbarYRail.getBoundingClientRect().top>t.scrollbarYTop?1:-1;t.element.scrollTop+=r*t.containerHeight,T(t),e.stopPropagation()}),t.event.bind(t.scrollbarX,"mousedown",function(t){return t.stopPropagation()}),t.event.bind(t.scrollbarXRail,"mousedown",function(e){var r=e.pageX-window.pageXOffset-t.scrollbarXRail.getBoundingClientRect().left>t.scrollbarXLeft?1:-1;t.element.scrollLeft+=r*t.containerWidth,T(t),e.stopPropagation()})},"drag-thumb":function(t){b(t,["containerWidth","contentWidth","pageX","railXWidth","scrollbarX","scrollbarXWidth","scrollLeft","x"]),b(t,["containerHeight","contentHeight","pageY","railYHeight","scrollbarY","scrollbarYHeight","scrollTop","y"])},keyboard:function(t){function e(e,n){var i=r.scrollTop;if(0===e){if(!t.scrollbarYActive)return!1;if(0===i&&n>0||i>=t.contentHeight-t.containerHeight&&n<0)return!t.settings.wheelPropagation}var o=r.scrollLeft;if(0===n){if(!t.scrollbarXActive)return!1;if(0===o&&e<0||o>=t.contentWidth-t.containerWidth&&e>0)return!t.settings.wheelPropagation}return!0}var r=t.element,i=function(){return n(r,":hover")},o=function(){return n(t.scrollbarX,":focus")||n(t.scrollbarY,":focus")};t.event.bind(t.ownerDocument,"keydown",function(n){if(!(n.isDefaultPrevented&&n.isDefaultPrevented()||n.defaultPrevented)&&(i()||o())){var l=document.activeElement?document.activeElement:t.ownerDocument.activeElement;if(l){if("IFRAME"===l.tagName)l=l.contentDocument.activeElement;else for(;l.shadowRoot;)l=l.shadowRoot.activeElement;if(f(l))return}var s=0,a=0;switch(n.which){case 37:s=n.metaKey?-t.contentWidth:n.altKey?-t.containerWidth:-30;break;case 38:a=n.metaKey?t.contentHeight:n.altKey?t.containerHeight:30;break;case 39:s=n.metaKey?t.contentWidth:n.altKey?t.containerWidth:30;break;case 40:a=n.metaKey?-t.contentHeight:n.altKey?-t.containerHeight:-30;break;case 32:a=n.shiftKey?t.containerHeight:-t.containerHeight;break;case 33:a=t.containerHeight;break;case 34:a=-t.containerHeight;break;case 36:a=t.contentHeight;break;case 35:a=-t.contentHeight;break;default:return}t.settings.suppressScrollX&&0!==s||t.settings.suppressScrollY&&0!==a||(r.scrollTop-=a,r.scrollLeft+=s,T(t),e(s,a)&&n.preventDefault())}})},wheel:function(e){function r(t,r){var n=0===l.scrollTop,i=l.scrollTop+l.offsetHeight===l.scrollHeight,o=0===l.scrollLeft,s=l.scrollLeft+l.offsetWidth===l.offsetWidth;return!(Math.abs(r)>Math.abs(t)?n||i:o||s)||!e.settings.wheelPropagation}function n(t){var e=t.deltaX,r=-1*t.deltaY;return void 0!==e&&void 0!==r||(e=-1*t.wheelDeltaX/6,r=t.wheelDeltaY/6),t.deltaMode&&1===t.deltaMode&&(e*=10,r*=10),e!==e&&r!==r&&(e=0,r=t.wheelDelta),t.shiftKey?[-r,-e]:[e,r]}function i(e,r,n){if(!L.isWebKit&&l.querySelector("select:focus"))return!0;if(!l.contains(e))return!1;for(var i=e;i&&i!==l;){if(i.classList.contains(m.element.consuming))return!0;var o=t(i);if([o.overflow,o.overflowX,o.overflowY].join("").match(/(scroll|auto)/)){var s=i.scrollHeight-i.clientHeight;if(s>0&&!(0===i.scrollTop&&n>0||i.scrollTop===s&&n<0))return!0;var a=i.scrollLeft-i.clientWidth;if(a>0&&!(0===i.scrollLeft&&r<0||i.scrollLeft===a&&r>0))return!0}i=i.parentNode}return!1}function o(t){var o=n(t),s=o[0],a=o[1];if(!i(t.target,s,a)){var c=!1;e.settings.useBothWheelAxes?e.scrollbarYActive&&!e.scrollbarXActive?(a?l.scrollTop-=a*e.settings.wheelSpeed:l.scrollTop+=s*e.settings.wheelSpeed,c=!0):e.scrollbarXActive&&!e.scrollbarYActive&&(s?l.scrollLeft+=s*e.settings.wheelSpeed:l.scrollLeft-=a*e.settings.wheelSpeed,c=!0):(l.scrollTop-=a*e.settings.wheelSpeed,l.scrollLeft+=s*e.settings.wheelSpeed),T(e),(c=c||r(s,a))&&!t.ctrlKey&&(t.stopPropagation(),t.preventDefault())}}var l=e.element;void 0!==window.onwheel?e.event.bind(l,"wheel",o):void 0!==window.onmousewheel&&e.event.bind(l,"mousewheel",o)},touch:function(e){function r(t,r){var n=u.scrollTop,i=u.scrollLeft,o=Math.abs(t),l=Math.abs(r);if(l>o){if(r<0&&n===e.contentHeight-e.containerHeight||r>0&&0===n)return 0===window.scrollY&&r>0&&L.isChrome}else if(o>l&&(t<0&&i===e.contentWidth-e.containerWidth||t>0&&0===i))return!0;return!0}function n(t,r){u.scrollTop-=r,u.scrollLeft-=t,T(e)}function i(t){return t.targetTouches?t.targetTouches[0]:t}function o(t){return!(t.pointerType&&"pen"===t.pointerType&&0===t.buttons||(!t.targetTouches||1!==t.targetTouches.length)&&(!t.pointerType||"mouse"===t.pointerType||t.pointerType===t.MSPOINTER_TYPE_MOUSE))}function l(t){if(o(t)){var e=i(t);h.pageX=e.pageX,h.pageY=e.pageY,f=(new Date).getTime(),null!==p&&clearInterval(p)}}function s(e,r,n){if(!u.contains(e))return!1;for(var i=e;i&&i!==u;){if(i.classList.contains(m.element.consuming))return!0;var o=t(i);if([o.overflow,o.overflowX,o.overflowY].join("").match(/(scroll|auto)/)){var l=i.scrollHeight-i.clientHeight;if(l>0&&!(0===i.scrollTop&&n>0||i.scrollTop===l&&n<0))return!0;var s=i.scrollLeft-i.clientWidth;if(s>0&&!(0===i.scrollLeft&&r<0||i.scrollLeft===s&&r>0))return!0}i=i.parentNode}return!1}function a(t){if(o(t)){var e=i(t),l={pageX:e.pageX,pageY:e.pageY},a=l.pageX-h.pageX,c=l.pageY-h.pageY;if(s(t.target,a,c))return;n(a,c),h=l;var u=(new Date).getTime(),p=u-f;p>0&&(d.x=a/p,d.y=c/p,f=u),r(a,c)&&t.preventDefault()}}function c(){e.settings.swipeEasing&&(clearInterval(p),p=setInterval(function(){e.isInitialized?clearInterval(p):d.x||d.y?Math.abs(d.x)<.01&&Math.abs(d.y)<.01?clearInterval(p):(n(30*d.x,30*d.y),d.x*=.8,d.y*=.8):clearInterval(p)},10))}if(L.supportsTouch||L.supportsIePointer){var u=e.element,h={},f=0,d={},p=null;L.supportsTouch?(e.event.bind(u,"touchstart",l),e.event.bind(u,"touchmove",a),e.event.bind(u,"touchend",c)):L.supportsIePointer&&(window.PointerEvent?(e.event.bind(u,"pointerdown",l),e.event.bind(u,"pointermove",a),e.event.bind(u,"pointerup",c)):window.MSPointerEvent&&(e.event.bind(u,"MSPointerDown",l),e.event.bind(u,"MSPointerMove",a),e.event.bind(u,"MSPointerUp",c)))}}},S=function(n,i){var o=this;if(void 0===i&&(i={}),"string"==typeof n&&(n=document.querySelector(n)),!n||!n.nodeName)throw new Error("no element is specified to initialize PerfectScrollbar");this.element=n,n.classList.add(m.main),this.settings={handlers:["click-rail","drag-thumb","keyboard","wheel","touch"],maxScrollbarLength:null,minScrollbarLength:null,scrollingThreshold:1e3,scrollXMarginOffset:0,scrollYMarginOffset:0,suppressScrollX:!1,suppressScrollY:!1,swipeEasing:!0,useBothWheelAxes:!1,wheelPropagation:!1,wheelSpeed:1};for(var l in i)o.settings[l]=i[l];this.containerWidth=null,this.containerHeight=null,this.contentWidth=null,this.contentHeight=null;var s=function(){return n.classList.add(m.state.focus)},a=function(){return n.classList.remove(m.state.focus)};this.isRtl="rtl"===t(n).direction,this.isNegativeScroll=function(){var t=n.scrollLeft,e=null;return n.scrollLeft=-1,e=n.scrollLeft<0,n.scrollLeft=t,e}(),this.negativeScrollAdjustment=this.isNegativeScroll?n.scrollWidth-n.clientWidth:0,this.event=new X,this.ownerDocument=n.ownerDocument||document,this.scrollbarXRail=r(m.element.rail("x")),n.appendChild(this.scrollbarXRail),this.scrollbarX=r(m.element.thumb("x")),this.scrollbarXRail.appendChild(this.scrollbarX),this.scrollbarX.setAttribute("tabindex",0),this.event.bind(this.scrollbarX,"focus",s),this.event.bind(this.scrollbarX,"blur",a),this.scrollbarXActive=null,this.scrollbarXWidth=null,this.scrollbarXLeft=null;var c=t(this.scrollbarXRail);this.scrollbarXBottom=parseInt(c.bottom,10),isNaN(this.scrollbarXBottom)?(this.isScrollbarXUsingBottom=!1,this.scrollbarXTop=h(c.top)):this.isScrollbarXUsingBottom=!0,this.railBorderXWidth=h(c.borderLeftWidth)+h(c.borderRightWidth),e(this.scrollbarXRail,{display:"block"}),this.railXMarginWidth=h(c.marginLeft)+h(c.marginRight),e(this.scrollbarXRail,{display:""}),this.railXWidth=null,this.railXRatio=null,this.scrollbarYRail=r(m.element.rail("y")),n.appendChild(this.scrollbarYRail),this.scrollbarY=r(m.element.thumb("y")),this.scrollbarYRail.appendChild(this.scrollbarY),this.scrollbarY.setAttribute("tabindex",0),this.event.bind(this.scrollbarY,"focus",s),this.event.bind(this.scrollbarY,"blur",a),this.scrollbarYActive=null,this.scrollbarYHeight=null,this.scrollbarYTop=null;var u=t(this.scrollbarYRail);this.scrollbarYRight=parseInt(u.right,10),isNaN(this.scrollbarYRight)?(this.isScrollbarYUsingRight=!1,this.scrollbarYLeft=h(u.left)):this.isScrollbarYUsingRight=!0,this.scrollbarYOuterWidth=this.isRtl?d(this.scrollbarY):null,this.railBorderYWidth=h(u.borderTopWidth)+h(u.borderBottomWidth),e(this.scrollbarYRail,{display:"block"}),this.railYMarginHeight=h(u.marginTop)+h(u.marginBottom),e(this.scrollbarYRail,{display:""}),this.railYHeight=null,this.railYRatio=null,this.reach={x:n.scrollLeft<=0?"start":n.scrollLeft>=this.contentWidth-this.containerWidth?"end":null,y:n.scrollTop<=0?"start":n.scrollTop>=this.contentHeight-this.containerHeight?"end":null},this.isAlive=!0,this.settings.handlers.forEach(function(t){return _[t](o)}),this.lastScrollTop=n.scrollTop,this.lastScrollLeft=n.scrollLeft,this.event.bind(this.element,"scroll",function(t){return o.onScroll(t)}),T(this)};return S.prototype.update=function(){this.isAlive&&(this.negativeScrollAdjustment=this.isNegativeScroll?this.element.scrollWidth-this.element.clientWidth:0,e(this.scrollbarXRail,{display:"block"}),e(this.scrollbarYRail,{display:"block"}),this.railXMarginWidth=h(t(this.scrollbarXRail).marginLeft)+h(t(this.scrollbarXRail).marginRight),this.railYMarginHeight=h(t(this.scrollbarYRail).marginTop)+h(t(this.scrollbarYRail).marginBottom),e(this.scrollbarXRail,{display:"none"}),e(this.scrollbarYRail,{display:"none"}),T(this),W(this,"top",0,!1,!0),W(this,"left",0,!1,!0),e(this.scrollbarXRail,{display:""}),e(this.scrollbarYRail,{display:""}))},S.prototype.onScroll=function(t){this.isAlive&&(T(this),W(this,"top",this.element.scrollTop-this.lastScrollTop),W(this,"left",this.element.scrollLeft-this.lastScrollLeft),this.lastScrollTop=this.element.scrollTop,this.lastScrollLeft=this.element.scrollLeft)},S.prototype.destroy=function(){this.isAlive&&(this.event.unbindAll(),i(this.scrollbarX),i(this.scrollbarY),i(this.scrollbarXRail),i(this.scrollbarYRail),this.removePsClasses(),this.element=null,this.scrollbarX=null,this.scrollbarY=null,this.scrollbarXRail=null,this.scrollbarYRail=null,this.isAlive=!1)},S.prototype.removePsClasses=function(){this.element.className=this.element.className.split(" ").filter(function(t){return!t.match(/^ps([-_].+|)$/)}).join(" ")},S});
