(globalThis.webpackChunkweb_starter_jc_wp=globalThis.webpackChunkweb_starter_jc_wp||[]).push([[1],[,(i,n,t)=>{"use strict";function e(i,n){for(var t=0;t<n.length;t++){var e=n[t];e.enumerable=e.enumerable||!1,e.configurable=!0,"value"in e&&(e.writable=!0),Object.defineProperty(i,e.key,e)}}t.r(n),t.d(n,{default:()=>s});const s=function(){function i(n){var t=this;!function(i,n){if(!(i instanceof n))throw new TypeError("Cannot call a class as a function")}(this,i),this.el=n,this.summary=n.querySelector("[data-details-summary]"),this.content=n.querySelector("[data-details-content]"),this.animation=null,this.isClosing=!1,this.isExpanding=!1,this.summary.addEventListener("click",(function(i){t.onClick(i)}))}var n,t;return n=i,(t=[{key:"onClick",value:function(i){i.preventDefault(),this.el.style.overflow="hidden",this.isClosing||!this.el.open?this.open():(this.isExpanding||this.el.open)&&this.shrink()}},{key:"shrink",value:function(){var i=this;this.isClosing=!0;var n="".concat(this.el.offsetHeight,"px"),t="".concat(this.summary.offsetHeight,"px");this.animation&&this.animation.cancel(),this.animation=this.el.animate({height:[n,t]},{duration:400,easing:"ease-out"}),this.animation.onfinish=function(){return i.onAnimationFinish(!1)},this.animation.oncancel=function(){i.isClosing=!1}}},{key:"open",value:function(){var i=this;this.el.style.height="".concat(this.el.offsetHeight,"px"),this.el.open=!0,window.requestAnimationFrame((function(){return i.expand()}))}},{key:"expand",value:function(){var i=this;this.isExpanding=!0;var n="".concat(this.el.offsetHeight,"px"),t="".concat(this.summary.offsetHeight+this.content.offsetHeight,"px");this.animation&&this.animation.cancel(),this.animation=this.el.animate({height:[n,t]},{duration:400,easing:"ease-out"}),this.animation.onfinish=function(){return i.onAnimationFinish(!0)},this.animation.oncancel=function(){return i.isExpanding=!1}}},{key:"onAnimationFinish",value:function(i){this.el.open=i,this.animation=null,this.isClosing=!1,this.isExpanding=!1,this.el.style.height="",this.el.style.overflow=""}}])&&e(n.prototype,t),i}()}]]);