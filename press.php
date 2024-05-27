

<!doctype html>
<html lang="en-US" prefix="og: https://ogp.me/ns#" style="scroll-behavior: smooth;">
<head><meta charset="UTF-8" /><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>(()=>{class RocketLazyLoadScripts{constructor(){this.v="1.2.5.1",this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this.t.bind(this),this.touchStartHandler=this.i.bind(this),this.touchMoveHandler=this.o.bind(this),this.touchEndHandler=this.h.bind(this),this.clickHandler=this.u.bind(this),this.interceptedClicks=[],this.interceptedClickListeners=[],this.l(this),window.addEventListener("pageshow",(t=>{this.persisted=t.persisted,this.everythingLoaded&&this.m()})),document.addEventListener("DOMContentLoaded",(()=>{this.p()})),this.delayedScripts={normal:[],async:[],defer:[]},this.trash=[],this.allJQueries=[]}k(t){document.hidden?t.t():(this.triggerEvents.forEach((e=>window.addEventListener(e,t.userEventHandler,{passive:!0}))),window.addEventListener("touchstart",t.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",t.touchStartHandler),document.addEventListener("visibilitychange",t.userEventHandler))}_(){this.triggerEvents.forEach((t=>window.removeEventListener(t,this.userEventHandler,{passive:!0}))),document.removeEventListener("visibilitychange",this.userEventHandler)}i(t){"HTML"!==t.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),t.target.addEventListener("click",this.clickHandler),this.L(t.target,!0),this.M(t.target,"onclick","rocket-onclick"),this.C())}o(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),t.target.removeEventListener("click",this.clickHandler),this.L(t.target,!1),this.M(t.target,"rocket-onclick","onclick"),this.O()}h(){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}u(t){t.target.removeEventListener("click",this.clickHandler),this.L(t.target,!1),this.M(t.target,"rocket-onclick","onclick"),this.interceptedClicks.push(t),t.preventDefault(),t.stopPropagation(),t.stopImmediatePropagation(),this.O()}D(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach((t=>{t.target.dispatchEvent(new MouseEvent("click",{view:t.view,bubbles:!0,cancelable:!0}))}))}l(t){EventTarget.prototype.addEventListenerBase=EventTarget.prototype.addEventListener,EventTarget.prototype.addEventListener=function(e,i,o){"click"!==e||t.windowLoaded||i===t.clickHandler||t.interceptedClickListeners.push({target:this,func:i,options:o}),(this||window).addEventListenerBase(e,i,o)}}L(t,e){this.interceptedClickListeners.forEach((i=>{i.target===t&&(e?t.removeEventListener("click",i.func,i.options):t.addEventListener("click",i.func,i.options))})),t.parentNode!==document.documentElement&&this.L(t.parentNode,e)}S(){return new Promise((t=>{this.T?this.O=t:t()}))}C(){this.T=!0}O(){this.T=!1}M(t,e,i){t.hasAttribute&&t.hasAttribute(e)&&(event.target.setAttribute(i,event.target.getAttribute(e)),event.target.removeAttribute(e))}t(){this._(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this.R.bind(this)):this.R()}p(){let t=[];document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach((e=>{let i=e.getAttribute("data-rocket-src");if(i&&0!==i.indexOf("data:")){0===i.indexOf("//")&&(i=location.protocol+i);try{const o=new URL(i).origin;o!==location.origin&&t.push({src:o,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}catch(t){}}})),t=[...new Map(t.map((t=>[JSON.stringify(t),t]))).values()],this.j(t,"preconnect")}async R(){this.lastBreath=Date.now(),this.P(this),this.F(this),this.q(),this.A(),this.I(),await this.U(this.delayedScripts.normal),await this.U(this.delayedScripts.defer),await this.U(this.delayedScripts.async);try{await this.W(),await this.H(this),await this.J()}catch(t){console.error(t)}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this.everythingLoaded=!0,this.S().then((()=>{this.D()})),this.N()}A(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)}))}async B(t){if(await this.G(),!0!==t.noModule||!("noModule"in HTMLScriptElement.prototype))return new Promise((e=>{let i;function o(){(i||t).setAttribute("data-rocket-status","executed"),e()}try{if(navigator.userAgent.indexOf("Firefox/")>0||""===navigator.vendor)i=document.createElement("script"),[...t.attributes].forEach((t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),i.setAttribute(e,t.nodeValue))})),t.text&&(i.text=t.text),i.hasAttribute("src")?(i.addEventListener("load",o),i.addEventListener("error",(function(){i.setAttribute("data-rocket-status","failed"),e()})),setTimeout((()=>{i.isConnected||e()}),1)):(i.text=t.text,o()),t.parentNode.replaceChild(i,t);else{const i=t.getAttribute("data-rocket-type"),n=t.getAttribute("data-rocket-src");i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",o),t.addEventListener("error",(function(){t.setAttribute("data-rocket-status","failed"),e()})),n?(t.removeAttribute("data-rocket-src"),t.src=n):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}}catch(i){t.setAttribute("data-rocket-status","failed"),e()}}));t.setAttribute("data-rocket-status","skipped")}async U(t){const e=t.shift();return e&&e.isConnected?(await this.B(e),this.U(t)):Promise.resolve()}I(){this.j([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}j(t,e){var i=document.createDocumentFragment();t.forEach((t=>{const o=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(o){const n=document.createElement("link");n.href=o,n.rel=e,"preconnect"!==e&&(n.as="script"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),i.appendChild(n),this.trash.push(n)}})),document.head.appendChild(i)}P(t){let e={};function i(i,o){return e[o].eventsToRewrite.indexOf(i)>=0&&!t.everythingLoaded?"rocket-"+i:i}function o(t,o){!function(t){e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=i(arguments[0],t),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=i(arguments[0],t),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(o)}function n(e,i){let o=e[i];e[i]=null,Object.defineProperty(e,i,{get:()=>o||function(){},set(n){t.everythingLoaded?o=n:e["rocket"+i]=o=n}})}o(document,"DOMContentLoaded"),o(window,"DOMContentLoaded"),o(window,"load"),o(window,"pageshow"),o(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}F(t){let e;function i(e){return t.everythingLoaded?e:e.split(" ").map((t=>"load"===t||0===t.indexOf("load.")?"rocket-jquery-load":t)).join(" ")}function o(o){if(o&&o.fn&&!t.allJQueries.includes(o)){o.fn.ready=o.fn.init.prototype.ready=function(e){return t.domReadyFired?e.bind(document)(o):document.addEventListener("rocket-DOMContentLoaded",(()=>e.bind(document)(o))),o([])};const e=o.fn.on;o.fn.on=o.fn.init.prototype.on=function(){return this[0]===window&&("string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=i(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{const e=arguments[0][t];delete arguments[0][t],arguments[0][i(t)]=e}))),e.apply(this,arguments),this},t.allJQueries.push(o)}e=o}o(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){o(t)}})}async H(t){const e=document.querySelector("script[data-webpack]");e&&(await async function(){return new Promise((t=>{e.addEventListener("load",t),e.addEventListener("error",t)}))}(),await t.K(),await t.H(t))}async W(){this.domReadyFired=!0,await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this.G(),window.dispatchEvent(new Event("rocket-DOMContentLoaded"))}async J(){await this.G(),document.dispatchEvent(new Event("rocket-readystatechange")),await this.G(),document.rocketonreadystatechange&&document.rocketonreadystatechange(),await this.G(),window.dispatchEvent(new Event("rocket-load")),await this.G(),window.rocketonload&&window.rocketonload(),await this.G(),this.allJQueries.forEach((t=>t(window).trigger("rocket-jquery-load"))),await this.G();const t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this.G(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted}),this.windowLoaded=!0}m(){document.onreadystatechange&&document.onreadystatechange(),window.onload&&window.onload(),window.onpageshow&&window.onpageshow({persisted:this.persisted})}q(){const t=new Map;document.write=document.writeln=function(e){const i=document.currentScript;i||console.error("WPRocket unable to document.write this: "+e);const o=document.createRange(),n=i.parentElement;let s=t.get(i);void 0===s&&(s=i.nextSibling,t.set(i,s));const c=document.createDocumentFragment();o.setStart(c,0),c.appendChild(o.createContextualFragment(e)),n.insertBefore(c,s)}}async G(){Date.now()-this.lastBreath>45&&(await this.K(),this.lastBreath=Date.now())}async K(){return document.hidden?new Promise((t=>setTimeout(t))):new Promise((t=>requestAnimationFrame(t)))}N(){this.trash.forEach((t=>t.remove()))}static run(){const t=new RocketLazyLoadScripts;t.k(t)}}RocketLazyLoadScripts.run()})();</script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <link rel="icon" type="image/png" sizes="16x16" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="228x228" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/coast-228x228.png">
<link rel="manifest" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/manifest.json">
<link rel="shortcut icon" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/favicon.ico">
<link rel="yandex-tableau-widget" href="https://forethought.ai/wp-content/themes/forethought/images/favicon/yandex-browser-manifest.json"> -->


<link rel="shortcut icon" type="image" href="http://www.elloe.ai/wp-content/uploads/2024/04/full.png">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="Forethought">
<meta name="application-name" content="Forethought">
<meta name="mobile-web-app-capable" content="yes">
<meta name="msapplication-TileColor" content="%23ffffff">
<meta name="msapplication-TileImage" content="https://forethought.ai/wp-content/themes/forethought/images/favicon/mstile-144x144.png">
<meta name="msapplication-config" content="https://forethought.ai/wp-content/themes/forethought/images/favicon/browserconfig.xml">
<meta name="theme-color" content="%23ffffff">
<link rel="pingback" href="https://forethought.ai/xmlrpc.php">
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Tiempos-Headline-Black.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Regular.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Light.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Medium.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-SemiBold.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Bold.woff" as="font" type="font/woff" crossorigin>
<meta name="ahrefs-site-verification" content="5985101542cc248746a76bb85a9cc2fe4070be296d19457a95ef483477677111">

<script type="rocketlazyloadscript" async data-rocket-src="https://www.googletagmanager.com/gtag/js?id=UA-147302461-1"></script>
<script type="rocketlazyloadscript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147302461-1');
</script>

<script type="rocketlazyloadscript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TTRVVPZ');</script>

<meta name="google-site-verification" content="yDFQlk0VBp8LIZwaVc0YB8RnLukpIWFgs600B1BplT8" />

<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
_linkedin_partner_id = "2638212";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="rocketlazyloadscript" data-rocket-type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>

<meta name="ahrefs-site-verification" content="1307d40374c00971439669f485756e5704c83c7e7179b2bc1ae7df475237d561">
<script type="rocketlazyloadscript">(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"343062783", enableAutoSpaTracking: true};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://app.termly.io/resource-blocker/1f6592ca-d72a-4c4a-ba3a-42c79c05a336" defer>
			</script>

<title>Press | Forethought</title><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Tiempos-Headline-Black.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Light.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Regular.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Medium.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-SemiBold.woff" crossorigin><link rel="preload" as="font" href="https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Bold.woff" crossorigin><style id="wpr-usedcss">.termly-styles-module-primary-33c456{color:#4672ff}.termly-styles-module-secondary-5c5b6d{color:#00c999}.termly-styles-module-dangerous-6df7c1{color:#ed7474}.termly-styles-module-root-1df63b{font-size:.875em;font-family:Roboto,"Open Sans",Helvetica,Arial}.termly-styles-module-root-1df63b.termly-styles-module-disabled-52fbba{opacity:.5;cursor:not-allowed}.termly-styles-module-root-1df63b:not(.termly-styles-module-disabled-52fbba){cursor:pointer}.termly-styles-module-outline-67acb4{border-width:1px;border-radius:3px;border-style:solid;background:#fff;padding:.625em 2em}.termly-styles-module-outline-67acb4.termly-styles-module-primary-33c456{border-color:#4672ff}.termly-styles-module-outline-67acb4.termly-styles-module-secondary-5c5b6d{border-color:#00c999}.termly-styles-module-outline-67acb4.termly-styles-module-dangerous-6df7c1{border-color:#ed7474}.termly-styles-module-solid-b8cec0{border-width:1px;border-radius:3px;border-style:solid;color:#fff;padding:.625em 2em}.termly-styles-module-solid-b8cec0.termly-styles-module-primary-33c456{border-color:#4672ff;background:#4672ff}.termly-styles-module-solid-b8cec0.termly-styles-module-secondary-5c5b6d{border-color:#00c999;background:#00c999}.termly-styles-module-solid-b8cec0.termly-styles-module-dangerous-6df7c1{border-color:#ed7474;background:#ed7474}.termly-styles-module-text-0d2428{border:none;background:rgba(0,0,0,0);padding:0}.termly-styles-module-root-652774{display:flex;flex-direction:row;font-size:1rem;font-family:Roboto,"Open Sans",Helvetica,Arial;background:#e6e7e8;height:100%;align-items:center;justify-content:center}.termly-styles-module-shadowBox-c32645{display:inline-flex;flex-direction:column;text-align:center;background:#fff;border:1px solid rgba(255,255,255,.3);box-shadow:0 0 15px rgba(0,0,0,.15);border-radius:5px;padding:2em}.termly-styles-module-title-82a29a{font-size:1.25em;font-weight:500;margin-bottom:.75em;line-height:1}.termly-styles-module-content-a10582{font-size:.75em;line-height:1.75}.termly-styles-module-buttons-9f54ab{display:flex;justify-content:center;margin-top:1.25em}.termly-styles-module-buttons-9f54ab>*{margin:0 .5em}.termly-styles-module-root-e11974{display:flex;font-family:Roboto,"Open Sans",Helvetica,Arial;gap:8px}.termly-styles-module-root-e11974.termly-styles-module-disabled-ce19c7{cursor:not-allowed;opacity:.5}.termly-styles-module-root-e11974:not(.termly-styles-module-disabled-ce19c7){cursor:pointer}.termly-styles-module-checkbox-c45fb9{width:18px;height:18px;border:1px solid #e1e3e6;border-radius:3px;background-image:linear-gradient(to top,#f2f4fb,#feffff);display:flex;flex:0 0 18px}.termly-styles-module-checkbox-c45fb9.termly-styles-module-checked-239a89{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMiIgaGVpZ2h0PSI5IiB2aWV3Qm94PSIwIDAgMTIgOSI+CiAgICA8ZGVmcz4KICAgICAgICA8bGluZWFyR3JhZGllbnQgaWQ9ImEiIHgxPSIwJSIgeTE9IjUwJSIgeTI9IjUwJSI+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiMwMEE2REEiLz4KICAgICAgICAgICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjNkY4OUVEIi8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxwYXRoIGZpbGw9InVybCgjYSkiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTYgMTl2LTNINHY1aDEwdi0ySDZ6IiB0cmFuc2Zvcm09InJvdGF0ZSgtNDUgLTEwLjYwNyAxNC42MjEpIi8+Cjwvc3ZnPgo=),linear-gradient(to top,#f2f4fb,#feffff);background-repeat:no-repeat;background-position:center}.termly-styles-module-input-a71c43{display:none}.termly-styles-module-label-9bfc8a{display:flex;align-items:center}.termly-styles-module-root-e1e837{border-radius:3px;border:1px solid #ced4da;color:#363840;font-size:inherit;line-height:1.429;padding:.714em 1.0714em}.termly-styles-module-root-5358ff{height:100%}.termly-styles-module-spinner-f9b18a{animation:2s linear infinite termly-styles-module-rotate-2b52fb;z-index:2;position:relative;width:100%;height:100%;display:flex}.termly-styles-module-spinner-f9b18a .termly-styles-module-path-fbf5d6{stroke:var(--loading-circle-color,hsl(210,70%,75%));stroke-linecap:round;animation:1.5s ease-in-out infinite termly-styles-module-dash-3b98ac}@keyframes termly-styles-module-rotate-2b52fb{100%{transform:rotate(360deg)}}@keyframes termly-styles-module-dash-3b98ac{0%{stroke-dasharray:1,150;stroke-dashoffset:0}50%{stroke-dasharray:90,150;stroke-dashoffset:-35}100%{stroke-dasharray:90,150;stroke-dashoffset:-124}}.termly-styles-module-root-3d61c0{display:flex;font-family:Roboto,"Open Sans",Helvetica,Arial}.termly-styles-module-root-3d61c0.termly-styles-module-disabled-96ea1d{cursor:not-allowed}.termly-styles-module-root-3d61c0:not(.termly-styles-module-disabled-96ea1d){cursor:pointer}.termly-styles-module-input-4d9e6c{display:none}.termly-styles-module-radio-32f70d{width:15px;height:15px;border-radius:9px;border:1px solid #ced0da;background-image:linear-gradient(to top,#f2f4fb,#feffff);display:flex;justify-content:center;align-items:center;gap:5px}.termly-styles-module-radio-32f70d.termly-styles-module-checked-a79bd8 .termly-styles-module-radio__inner-7cb14e{width:7px;height:7px;border-radius:4px;background-color:#239eeb}.termly-styles-module-radio-32f70d.termly-styles-module-disabled-96ea1d{opacity:.5}.termly-styles-root-2c05d3{--previewer-background-color:#f5f6fa}.termly-styles-previewBox-ce1352{background:#f5f6fa;border:1px solid #e8e8e8;border-radius:.25rem;box-shadow:0 2px 4px rgba(226,226,226,.5);margin-bottom:1rem}.termly-styles-button-caaa11{text-transform:uppercase;font-weight:500;display:flex;align-items:center;justify-content:center;width:100%;line-height:1.25rem}.termly-styles-previewButton__icon-73cfb5{height:1.25rem;width:1.25rem;margin-right:.25rem}.termly-styles-root-f04f6d{background-color:#fff;border:1px solid #eee;font-size:.375rem;margin:1rem;max-height:11.625rem;overflow:hidden;position:relative}.termly-styles-document-5d62fb{padding:1rem;background:var(--background)}.termly-styles-document-5d62fb::after{content:"";display:block;position:absolute;left:0;right:0;bottom:0;margin:auto;height:10em;background:linear-gradient(to top,var(--previewer-background-color) 10%,transparent);opacity:1;transition:opacity .2s ease}.termly-styles-title-399c7e{color:var(--title-color);font-family:var(--title-font-family);font-weight:700;text-transform:uppercase}.termly-styles-lastUpdated-43cc72{margin-top:1em;font-size:smaller}.termly-styles-body-1b1bcc{color:var(--body-color);font-family:var(--body-font-family);margin-top:3em;line-height:1.5}.termly-styles-root-8ffd4a{width:100%;background:#fff}@keyframes termly-styles-wave-b89649{0%{background-position:-41rem 0}100%{background-position:41rem 0}}.termly-styles-heading-e8b13b,.termly-styles-paragraph-e33353{height:.9375rem;border-radius:.1875rem;background:linear-gradient(to right,rgba(226,226,226,.5) 0,rgba(226,226,226,.2) 35%,rgba(226,226,226,.5) 70%);animation:2s linear infinite forwards termly-styles-wave-b89649}.termly-styles-heading-e8b13b{width:35%;margin:1.875rem 0 .625rem}.termly-styles-paragraph-e33353{width:100%;margin:.3125rem 0}.termly-styles-root-bd195a{position:fixed;top:0;left:0;height:100%;width:100%;background:rgba(58,67,105,.6);z-index:10000;display:flex;align-items:center;justify-content:center;padding:4rem 0}.termly-styles-modal-6f3b75{width:80%;height:100%;background:#fff;margin:2rem auto;display:flex;flex-direction:column;max-width:75rem}@media only screen and (max-width:48rem){.termly-styles-modal-6f3b75{width:95%}}@media only screen and (max-width:36rem){.termly-styles-root-bd195a{padding:0}.termly-styles-modal-6f3b75{width:100%}}.termly-styles-header-95b0d2{padding:1rem;display:flex;justify-content:flex-end;border-bottom:1px solid #ddd}.termly-styles-body-97cc2f{flex:1}.termly-styles-content-9ce1cd{overflow-y:scroll;padding:1.75rem 4.0625rem 6.25rem}.termly-styles-content-9ce1cd>:last-child{padding-bottom:1.875rem}@media only screen and (max-width:48rem){.termly-styles-content-9ce1cd{padding:2rem}}.termly-styles-text-6d5da6{white-space:nowrap}.termly-styles-button-7be77c{color:#00c999!important;font-size:1rem!important;font-weight:700;text-transform:uppercase;margin-left:1rem}.termly-styles-icon-dc4149{margin-left:.333em}.termly-styles-root-1e411e{border-top:1px solid var(--common-footer-top-border-color,#ced4da);padding-top:.625rem;display:flex;justify-content:var(--common-footer-justify-content,normal)}.termly-styles-links-c9697c{list-style-type:none;margin:0;padding:0;display:flex;flex-direction:row;justify-content:flex-start;flex-wrap:wrap}.termly-styles-links-c9697c .termly-styles-link-94b7af{font-size:.75rem;line-height:1rem;color:#6c7794;white-space:nowrap}.termly-styles-links-c9697c>:not(:last-child){margin-right:1rem}.termly-styles-root-1c73d9{height:100%;display:flex;flex-direction:column;padding:40px;align-items:stretch;background-color:#f5f6fa;font-family:Roboto}.termly-styles-container-678fa0{display:flex;flex-direction:column;align-items:center;margin-top:140px}.termly-styles-logo-105544{height:35px;width:35px}.termly-styles-title-41f08d{color:#013986;font-weight:500;font-size:24px;margin:0}.termly-styles-abstractArt-75267c{height:160px;width:160px;margin-bottom:28px}.termly-styles-bodyText-2870f8{color:#6c7794;max-width:20em;max-width:17em;text-align:center;line-height:1.375}.termly-styles-logo-01be9b{vertical-align:middle}.termly-styles-root-92958f{display:flex;height:100%;justify-content:space-between;align-items:center;height:3.75rem;column-gap:1.5625rem}.termly-styles-leftContent-853734{width:15.125rem;display:flex}.termly-styles-logo-26ba1c{height:1.875rem;width:auto;margin-right:1rem}.termly-styles-middleContent-36abed{flex:1;padding-left:2.5625rem}.termly-styles-text-24adde{color:#363840;font-size:.875rem;font-weight:500;line-height:1;margin-bottom:.5rem}.termly-styles-root-582f89{height:100%;display:flex;justify-content:center;align-items:center}.termly-styles-sizer-9ac43c{height:5rem;width:5rem}.termly-styles-error-9bd53e,.termly-styles-light-2edb58,.termly-styles-success-865349{padding:1.25rem .8125rem;text-align:left;font-size:.75rem;margin:0 0 1.875rem;border-radius:.1875rem;line-height:1.4}.termly-styles-error-9bd53e{color:#ff1e1e;background-color:#ffc6c6;border:.0625rem solid #ff9595}.termly-styles-light-2edb58{color:#ff1e1e;padding:.8125rem 1.25rem;background-color:#fff9f9;border:.0625rem solid #ffd0d0;box-shadow:0 .125rem .25rem 0 rgba(255,208,208,.54)}.termly-styles-success-865349{color:#fff;background-color:#5aca8f;border:.0625rem solid #34b973}.termly-styles-root-49e1cb{text-transform:uppercase}.termly-styles-root-e32e60{font-size:1.5rem;font-weight:500;line-height:1.333;margin:0 0 1rem;color:#000}.termly-styles-container-99fbaf,.termly-styles-tooltip-container-89ffe3{--tooltipBackground:#fff;--tooltipBorder:#c0c0c0;--tooltipColor:#000;background-color:var(--tooltipBackground);border-radius:3px;border:1px solid var(--tooltipBorder);box-shadow:0 2px 4px rgba(0,0,0,.18);color:var(--tooltipColor);display:flex;flex-direction:column;padding:.4rem;transition:opacity .3s;z-index:9999}.termly-styles-arrow-d429b6,.termly-styles-tooltip-arrow-9229ca{height:1rem;position:absolute;width:1rem;pointer-events:none}.termly-styles-arrow-d429b6::before,.termly-styles-tooltip-arrow-9229ca::before{border-style:solid;content:"";display:block;height:0;margin:auto;width:0}.termly-styles-arrow-d429b6::after,.termly-styles-tooltip-arrow-9229ca::after{border-style:solid;content:"";display:block;height:0;margin:auto;position:absolute;width:0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-arrow-d429b6,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-tooltip-arrow-9229ca,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-arrow-d429b6,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca{left:0;margin-top:-.4rem;top:0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-arrow-d429b6::before,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-tooltip-arrow-9229ca::before,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::before,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::before{border-color:transparent transparent var(--tooltipBorder) transparent;border-width:0 .5rem .4rem;position:absolute;top:-1px}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-arrow-d429b6::after,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=bottom] .termly-styles-tooltip-arrow-9229ca::after,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::after,[data-popper-placement*=bottom].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::after{border-color:transparent transparent var(--tooltipBackground) transparent;border-width:0 .5rem .4rem}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-arrow-d429b6,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-tooltip-arrow-9229ca,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-arrow-d429b6,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca{bottom:0;left:0;margin-bottom:-1rem}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-arrow-d429b6::before,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-tooltip-arrow-9229ca::before,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::before,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::before{border-color:var(--tooltipBorder) transparent transparent transparent;border-width:.4rem .5rem 0;position:absolute;top:1px}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-arrow-d429b6::after,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=top] .termly-styles-tooltip-arrow-9229ca::after,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::after,[data-popper-placement*=top].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::after{border-color:var(--tooltipBackground) transparent transparent transparent;border-width:.4rem .5rem 0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-arrow-d429b6,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-tooltip-arrow-9229ca,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-arrow-d429b6,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca{left:0;margin-left:-.7rem}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-arrow-d429b6::before,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-tooltip-arrow-9229ca::before,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::before,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::before{border-color:transparent var(--tooltipBorder) transparent transparent;border-width:.5rem .4rem .5rem 0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-arrow-d429b6::after,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=right] .termly-styles-tooltip-arrow-9229ca::after,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::after,[data-popper-placement*=right].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::after{border-color:transparent var(--tooltipBackground) transparent transparent;border-width:.5rem .4rem .5rem 0;left:6px;top:0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-arrow-d429b6,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-tooltip-arrow-9229ca,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-arrow-d429b6,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca{margin-right:-.7rem;right:0}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-arrow-d429b6::before,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-tooltip-arrow-9229ca::before,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::before,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::before{border-color:transparent transparent transparent var(--tooltipBorder);border-width:.5rem 0 .5rem .4em}.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-arrow-d429b6::after,.termly-styles-tooltip-container-89ffe3[data-popper-placement*=left] .termly-styles-tooltip-arrow-9229ca::after,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-arrow-d429b6::after,[data-popper-placement*=left].termly-styles-container-99fbaf .termly-styles-tooltip-arrow-9229ca::after{border-color:transparent transparent transparent var(--tooltipBackground);border-width:.5rem 0 .5rem .4em;left:3px;top:0}.termly-styles-root-b5f94b{font-weight:400;display:flex}.termly-styles-container-99fbaf{--tooltipBorder:#ced4da;--tooltipBackground:#fff;--tooltipColor:#868e96;border-radius:0;box-shadow:0 0 8px rgba(0,0,0,.1);display:block;max-width:22.0625rem;padding:1rem}.termly-styles-icon-2f3b32{height:1rem;width:auto;margin-left:.5rem}.termly-styles-loading-9ee2d7{height:5rem}:where(.wp-block-button__link){border-radius:9999px;box-shadow:none;padding:calc(.667em + 2px) calc(1.333em + 2px);text-decoration:none}:where(.wp-block-calendar table:not(.has-background) th){background:#ddd}:where(.wp-block-columns){margin-bottom:1.75em}:where(.wp-block-columns.has-background){padding:1.25em 2.375em}:where(.wp-block-post-comments input[type=submit]){border:none}:where(.wp-block-cover-image:not(.has-text-color)),:where(.wp-block-cover:not(.has-text-color)){color:#fff}:where(.wp-block-cover-image.is-light:not(.has-text-color)),:where(.wp-block-cover.is-light:not(.has-text-color)){color:#000}:where(.wp-block-file){margin-bottom:1.5em}:where(.wp-block-file__button){border-radius:2em;display:inline-block;padding:.5em 1em}:where(.wp-block-file__button):is(a):active,:where(.wp-block-file__button):is(a):focus,:where(.wp-block-file__button):is(a):hover,:where(.wp-block-file__button):is(a):visited{box-shadow:none;color:#fff;opacity:.85;text-decoration:none}:where(.wp-block-latest-comments:not([style*=line-height] .wp-block-latest-comments__comment)){line-height:1.1}:where(.wp-block-latest-comments:not([style*=line-height] .wp-block-latest-comments__comment-excerpt p)){line-height:1.8}ol,ul{box-sizing:border-box}:where(.wp-block-navigation.has-background .wp-block-navigation-item a:not(.wp-element-button)),:where(.wp-block-navigation.has-background .wp-block-navigation-submenu a:not(.wp-element-button)){padding:.5em 1em}:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-item a:not(.wp-element-button)),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-submenu a:not(.wp-element-button)),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-submenu button.wp-block-navigation-item__content),:where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-pages-list__item button.wp-block-navigation-item__content){padding:.5em 1em}:where(p.has-text-color:not(.has-link-color)) a{color:inherit}:where(.wp-block-post-excerpt){margin-bottom:var(--wp--style--block-gap);margin-top:var(--wp--style--block-gap)}:where(.wp-block-preformatted.has-background){padding:1.25em 2.375em}:where(.wp-block-pullquote){margin:0 0 1em}:where(.wp-block-search__button){border:1px solid #ccc;padding:6px 10px}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper){border:1px solid #949494;box-sizing:border-box;padding:4px}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input{border:none;border-radius:0;padding:0 4px}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input:focus{outline:0}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) :where(.wp-block-search__button){padding:4px 8px}:where(.wp-block-term-description){margin-bottom:var(--wp--style--block-gap);margin-top:var(--wp--style--block-gap)}:where(pre.wp-block-verse){font-family:inherit}.entry-content{counter-reset:footnotes}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}html :where(.has-border-color){border-style:solid}html :where([style*=border-top-color]){border-top-style:solid}html :where([style*=border-right-color]){border-right-style:solid}html :where([style*=border-bottom-color]){border-bottom-style:solid}html :where([style*=border-left-color]){border-left-style:solid}html :where([style*=border-width]){border-style:solid}html :where([style*=border-top-width]){border-top-style:solid}html :where([style*=border-right-width]){border-right-style:solid}html :where([style*=border-bottom-width]){border-bottom-style:solid}html :where([style*=border-left-width]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}:where(figure){margin:0 0 1em}html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:var(--wp-admin--admin-bar--height,0px)}@media screen and (max-width:600px){html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:0px}}:where(.wp-block-group.has-background){padding:1.25em 2.375em}body{--wp--preset--color--black:#000000;--wp--preset--color--cyan-bluish-gray:#abb8c3;--wp--preset--color--white:#ffffff;--wp--preset--color--pale-pink:#f78da7;--wp--preset--color--vivid-red:#cf2e2e;--wp--preset--color--luminous-vivid-orange:#ff6900;--wp--preset--color--luminous-vivid-amber:#fcb900;--wp--preset--color--light-green-cyan:#7bdcb5;--wp--preset--color--vivid-green-cyan:#00d084;--wp--preset--color--pale-cyan-blue:#8ed1fc;--wp--preset--color--vivid-cyan-blue:#0693e3;--wp--preset--color--vivid-purple:#9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple:linear-gradient(135deg,rgba(6, 147, 227, 1) 0%,rgb(155, 81, 224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan:linear-gradient(135deg,rgb(122, 220, 180) 0%,rgb(0, 208, 130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange:linear-gradient(135deg,rgba(252, 185, 0, 1) 0%,rgba(255, 105, 0, 1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red:linear-gradient(135deg,rgba(255, 105, 0, 1) 0%,rgb(207, 46, 46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray:linear-gradient(135deg,rgb(238, 238, 238) 0%,rgb(169, 184, 195) 100%);--wp--preset--gradient--cool-to-warm-spectrum:linear-gradient(135deg,rgb(74, 234, 220) 0%,rgb(151, 120, 209) 20%,rgb(207, 42, 186) 40%,rgb(238, 44, 130) 60%,rgb(251, 105, 98) 80%,rgb(254, 248, 76) 100%);--wp--preset--gradient--blush-light-purple:linear-gradient(135deg,rgb(255, 206, 236) 0%,rgb(152, 150, 240) 100%);--wp--preset--gradient--blush-bordeaux:linear-gradient(135deg,rgb(254, 205, 165) 0%,rgb(254, 45, 45) 50%,rgb(107, 0, 62) 100%);--wp--preset--gradient--luminous-dusk:linear-gradient(135deg,rgb(255, 203, 112) 0%,rgb(199, 81, 192) 50%,rgb(65, 88, 208) 100%);--wp--preset--gradient--pale-ocean:linear-gradient(135deg,rgb(255, 245, 203) 0%,rgb(182, 227, 212) 50%,rgb(51, 167, 181) 100%);--wp--preset--gradient--electric-grass:linear-gradient(135deg,rgb(202, 248, 128) 0%,rgb(113, 206, 126) 100%);--wp--preset--gradient--midnight:linear-gradient(135deg,rgb(2, 3, 129) 0%,rgb(40, 116, 252) 100%);--wp--preset--font-size--small:13px;--wp--preset--font-size--medium:20px;--wp--preset--font-size--large:36px;--wp--preset--font-size--x-large:42px;--wp--preset--spacing--20:0.44rem;--wp--preset--spacing--30:0.67rem;--wp--preset--spacing--40:1rem;--wp--preset--spacing--50:1.5rem;--wp--preset--spacing--60:2.25rem;--wp--preset--spacing--70:3.38rem;--wp--preset--spacing--80:5.06rem;--wp--preset--shadow--natural:6px 6px 9px rgba(0, 0, 0, .2);--wp--preset--shadow--deep:12px 12px 50px rgba(0, 0, 0, .4);--wp--preset--shadow--sharp:6px 6px 0px rgba(0, 0, 0, .2);--wp--preset--shadow--outlined:6px 6px 0px -3px rgba(255, 255, 255, 1),6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp:6px 6px 0px rgba(0, 0, 0, 1)}:where(.is-layout-flex){gap:.5em}:where(.is-layout-grid){gap:.5em}:where(.wp-block-post-template.is-layout-flex){gap:1.25em}:where(.wp-block-post-template.is-layout-grid){gap:1.25em}:where(.wp-block-columns.is-layout-flex){gap:2em}:where(.wp-block-columns.is-layout-grid){gap:2em}.spin-animation{-webkit-animation:30s linear infinite spin;animation:30s linear infinite spin}.hide{height:0;margin:0;padding:0;text-indent:-998em}.adjustable-element{flex-shrink:0;width:auto;max-width:100%;height:auto;max-height:100%}.fill-the-whole-space{top:0;right:0;bottom:0;left:0}img{image-rendering:-webkit-optimize-contrast}.font-size-12{font-size:.75rem}.font-size-13{font-size:.8125rem}.font-size-14{font-size:.875rem}.font-size-16{font-size:1rem}.font-size-18{font-size:1.125rem}.font-size-21{font-size:1.1875rem}@media (min-width:576px){.font-size-21{font-size:1.2125rem}}@media (min-width:768px){.font-size-21{font-size:1.2375rem}}@media (min-width:992px){.font-size-21{font-size:1.2625rem}}@media (min-width:1200px){.font-size-21{font-size:1.2875rem}}@media (min-width:1400px){.font-size-21{font-size:1.3125rem}.font-size-36{font-size:2.25rem}}.font-size-36{font-size:2.25rem}@media (min-width:576px){.font-size-36{font-size:2.25rem}}@media (min-width:768px){.font-size-36{font-size:2.25rem}}@media (min-width:992px){.font-size-36{font-size:2.25rem}}@media (min-width:1200px){.font-size-36{font-size:2.25rem}}.font-size-45{font-size:1.875rem}@media (min-width:576px){.font-size-45{font-size:2.0625rem}.container{max-width:540px}}@media (min-width:768px){.font-size-45{font-size:2.25rem}.container{max-width:720px}}@media (min-width:992px){.font-size-45{font-size:2.4375rem}.container{max-width:960px}}@media (min-width:1200px){.font-size-45{font-size:2.625rem}}@media (min-width:1400px){.font-size-45{font-size:2.8125rem}}.letter-spacing-200{letter-spacing:2px}.animated-border-bottom{padding-bottom:.125rem;background-image:-webkit-linear-gradient(bottom,currentColor 1px,transparent 0);background-image:linear-gradient(0deg,currentColor 1px,transparent 0);background-size:0 100%;background-repeat:no-repeat;text-decoration:none;-webkit-transition:background-size .4s ease-in-out,opacity .4s ease-in-out;transition:background-size .4s ease-in-out,opacity .4s ease-in-out}.animated-border-bottom:focus,.animated-border-bottom:hover{background-size:100% 100%}.animated-border-bottom--reverse{background-position:100%;background-size:100% 100%}.animated-border-bottom--reverse:focus,.animated-border-bottom--reverse:hover{background-size:0 100%}.lock-position{overflow:hidden}.hover-opacity-0-75:focus,.hover-opacity-0-75:hover{opacity:.75}:root{--bs-blue:#0d6efd;--bs-indigo:#6610f2;--bs-purple:#6f42c1;--bs-pink:#d63384;--bs-red:#dc3545;--bs-orange:#fd7e14;--bs-yellow:#ffc107;--bs-green:#198754;--bs-teal:#20c997;--bs-cyan:#0dcaf0;--bs-white:#fff;--bs-gray:#6c757d;--bs-gray-dark:#343a40;--bs-primary:#7b33fb;--bs-secondary:#0f0f0f;--bs-black-2:#1a1a1a;--bs-black-3:#090b0a;--bs-black:#000;--bs-light-black:#2f2f2f;--bs-blue-light:#edf7fc;--bs-gray:#737373;--bs-gray-2:#c4c4c4;--bs-gray-3:#cdcdcd;--bs-gray-4:#e4e4e4;--bs-gray-5:#d3d3d3;--bs-gray-6:#b4b4b4;--bs-gray-7:#828282;--bs-gray-8:#b3b3b3;--bs-gray-9:#e4eaed;--bs-green:#6bdab6;--bs-blue:#66e0f6;--bs-dark-purple:#2d0968;--bs-orange:#ff9634;--bs-yellow:#f6c043;--bs-font-sans-serif:system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--bs-font-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--bs-gradient:linear-gradient(180deg,hsla(0,0%,100%,0.15),hsla(0,0%,100%,0))}*,:after,:before{box-sizing:border-box}@media (prefers-reduced-motion:no-preference){:root{scroll-behavior:smooth}}body{margin:0;font-family:Lexend,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-size:1rem;font-weight:400;line-height:1.5;color:#2f2f2f;background-color:#fff;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}hr{margin:1rem 0;color:inherit;background-color:currentColor;border:0;opacity:.25}hr:not([size]){height:1px}.h2,h1,h2,h3,h4{margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2}h1{font-size:calc(1.375rem + 1.5vw)}@media (min-width:1200px){h1{font-size:2.5rem}}.h2,h2{font-size:calc(1.325rem + .9vw)}@media (min-width:1200px){.h2,h2{font-size:2rem}}h3{font-size:calc(1.3rem + .6vw)}@media (min-width:1200px){h3{font-size:1.75rem}}h4{font-size:calc(1.275rem + .3vw)}p{margin-top:0;margin-bottom:1rem}address{margin-bottom:1rem;font-style:normal;line-height:inherit}ol,ul{padding-left:2rem}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dd{margin-bottom:.5rem;margin-left:0}b,strong{font-weight:bolder}.small,small{font-size:.875em}sub,sup{position:relative;font-size:.75em;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#0d6efd;text-decoration:underline}a:hover{color:#0a58ca}a:not([href]):not([class]),a:not([href]):not([class]):hover{color:inherit;text-decoration:none}code,pre{font-family:var(--bs-font-monospace);font-size:1em;direction:ltr;unicode-bidi:bidi-override}pre{display:block;margin-top:0;margin-bottom:1rem;overflow:auto;font-size:.875em}pre code{font-size:inherit;color:inherit;word-break:normal}code{font-size:.875em;color:#d63384;word-wrap:break-word}a>code{color:inherit}img,svg{vertical-align:middle}table{caption-side:bottom;border-collapse:collapse}th{text-align:inherit;text-align:-webkit-match-parent}tbody,td,th,tr{border:0 solid;border-color:inherit}label{display:inline-block}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,select{text-transform:none}[role=button]{cursor:pointer}select{word-wrap:normal}select:disabled{opacity:1}[list]::-webkit-calendar-picker-indicator{display:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}::-moz-focus-inner{padding:0;border-style:none}textarea{resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{float:left;width:100%;padding:0;margin-bottom:.5rem;font-size:calc(1.275rem + .3vw);line-height:inherit}legend+*{clear:left}::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-fields-wrapper,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-text,::-webkit-datetime-edit-year-field{padding:0}::-webkit-inner-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:textfield}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-color-swatch-wrapper{padding:0}::file-selector-button{font:inherit}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}iframe{border:0}progress{vertical-align:baseline}[hidden]{display:none!important}.list-unstyled{padding-left:0;list-style:none}.container{width:100%;padding-right:var(--bs-gutter-x,.9375rem);padding-left:var(--bs-gutter-x,.9375rem);margin-right:auto;margin-left:auto}@media (min-width:1200px){legend{font-size:1.5rem}.container{max-width:1140px}}@media (min-width:1400px){.container{max-width:1320px}}.row{--bs-gutter-x:1.875rem;--bs-gutter-y:0;display:-webkit-box;display:flex;flex-wrap:wrap;margin-top:calc(var(--bs-gutter-y)*-1);margin-right:calc(var(--bs-gutter-x)*-.5);margin-left:calc(var(--bs-gutter-x)*-.5)}.row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x)*.5);padding-left:calc(var(--bs-gutter-x)*.5);margin-top:var(--bs-gutter-y)}.col{-webkit-box-flex:1;flex:1 0 0%}.col-auto{width:auto}.col-auto{-webkit-box-flex:0;flex:0 0 auto}.col-4{width:33.33333%}.col-4{-webkit-box-flex:0;flex:0 0 auto}.col-12{-webkit-box-flex:0;flex:0 0 auto;width:100%}@media (min-width:768px){.col-md-4{width:33.33333%}.col-md-4{-webkit-box-flex:0;flex:0 0 auto}}@media (min-width:992px){.col-lg-2{width:16.66667%}.col-lg-2,.col-lg-3{-webkit-box-flex:0;flex:0 0 auto}.col-lg-3{width:25%}.col-lg-5{-webkit-box-flex:0;flex:0 0 auto}.col-lg-5{width:41.66667%}.col-lg-7{-webkit-box-flex:0;flex:0 0 auto}.col-lg-7{width:58.33333%}.col-lg-8{width:66.66667%}.col-lg-8{-webkit-box-flex:0;flex:0 0 auto}.col-lg-12{-webkit-box-flex:0;flex:0 0 auto;width:100%}}.nav{display:-webkit-box;display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem;color:#0d6efd;text-decoration:none;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out}@media (prefers-reduced-motion:reduce){.nav-link{-webkit-transition:none;transition:none}}.nav-link:focus,.nav-link:hover{color:#0a58ca}.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}.navbar{position:relative;display:-webkit-box;display:flex;flex-wrap:wrap;-webkit-box-align:center;align-items:center;-webkit-box-pack:justify;justify-content:space-between;padding-top:.5rem;padding-bottom:.5rem}.navbar>.container{display:-webkit-box;display:flex;flex-wrap:inherit;-webkit-box-align:center;align-items:center;-webkit-box-pack:justify;justify-content:space-between}.navbar-brand{padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;text-decoration:none;white-space:nowrap}.navbar-nav{display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static}.navbar-collapse{flex-basis:100%;-webkit-box-flex:1;flex-grow:1;-webkit-box-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem;-webkit-transition:box-shadow .15s ease-in-out;transition:box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.navbar-toggler{-webkit-transition:none;transition:none}}.navbar-toggler:hover{text-decoration:none}.navbar-toggler:focus{text-decoration:none;outline:0;box-shadow:0 0 0 .25rem}.ratio{position:relative;width:100%}.ratio:before{display:block;padding-top:var(--bs-aspect-ratio);content:""}.ratio>*{position:absolute;top:0;left:0;width:100%;height:100%}.fixed-top{top:0}.fixed-top{position:fixed;right:0;left:0;z-index:1030}.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}.visually-hidden{position:absolute!important;width:1px!important;height:1px!important;padding:0!important;margin:-1px!important;overflow:hidden!important;clip:rect(0,0,0,0)!important;white-space:nowrap!important;border:0!important}.overflow-hidden{overflow:hidden!important}.d-block{display:block!important}.d-flex{display:-webkit-box!important;display:flex!important}.d-inline-flex{display:-webkit-inline-box!important;display:inline-flex!important}.d-none{display:none!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.border{border:1px solid #dee2e6!important}.border-0{border:0!important}.w-100{width:100%!important}.h-100{height:100%!important}.flex-row{-webkit-box-orient:horizontal!important;flex-direction:row!important}.flex-column,.flex-row{-webkit-box-direction:normal!important}.flex-column{-webkit-box-orient:vertical!important;flex-direction:column!important}.flex-wrap{flex-wrap:wrap!important}.justify-content-start{-webkit-box-pack:start!important;justify-content:flex-start!important}.justify-content-center{-webkit-box-pack:center!important;justify-content:center!important}.justify-content-between{-webkit-box-pack:justify!important;justify-content:space-between!important}.align-items-start{-webkit-box-align:start!important;align-items:flex-start!important}.align-items-end{-webkit-box-align:end!important;align-items:flex-end!important}.align-items-center{-webkit-box-align:center!important;align-items:center!important}.m-auto{margin:auto!important}.mx-auto{margin-right:auto!important;margin-left:auto!important}.my-0{margin-top:0!important;margin-bottom:0!important}.mb-0{margin-bottom:0!important}.p-0{padding:0!important}.line-height-1{line-height:1!important}.line-height-1-1{line-height:1.1!important}.line-height-1-3{line-height:1.3!important}.line-height-1-4{line-height:1.4!important}.line-height-1-5{line-height:1.5!important}.line-height-1-7{line-height:1.7!important}.text-end{text-align:right!important}.text-center{text-align:center!important}.text-uppercase{text-transform:uppercase!important}.text-secondary{color:#0f0f0f!important}.text-light-black{color:#2f2f2f!important}.text-gray{color:#737373!important}.text-gray-3{color:#cdcdcd!important}.text-white{color:#fff!important}.bg-secondary{background-color:#0f0f0f!important}.bg-blue-light{background-color:#edf7fc!important}.bg-white{background-color:#fff!important}.bg-transparent{background-color:transparent!important}.rounded-circle{border-radius:50%!important}.visible{visibility:visible!important}.z-index-minus-1{z-index:-1!important}.z-index-1{z-index:1!important}.z-index-2{z-index:2!important}@media (min-width:768px){.d-md-flex{display:-webkit-box!important;display:flex!important}}:root{font-size:100%}body{font-size:1.125rem;line-height:1.7}.h2,h1,h2,h3,h4{margin-bottom:0!important;font-weight:900;font-family:'Tiempos Headline',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'}h1{font-size:2.5rem}@media (min-width:576px){h1{font-size:2.8125rem}}@media (min-width:768px){h1{font-size:3.125rem}}@media (min-width:992px){.d-lg-block{display:block!important}.d-lg-flex{display:-webkit-box!important;display:flex!important}.d-lg-none{display:none!important}.flex-lg-row{-webkit-box-orient:horizontal!important;flex-direction:row!important}.flex-lg-row{-webkit-box-direction:normal!important}.flex-lg-wrap{flex-wrap:wrap!important}.justify-content-lg-center{-webkit-box-pack:center!important;justify-content:center!important}.order-lg-2{-webkit-box-ordinal-group:3!important;order:2!important}.order-lg-3{-webkit-box-ordinal-group:4!important;order:3!important}h1{font-size:3.4375rem}}@media (min-width:1200px){h1{font-size:3.75rem}}.h2,h2{font-size:2.25rem}@media (min-width:576px){.h2,h2{font-size:2.4375rem}}@media (min-width:768px){.h2,h2{font-size:2.625rem}}@media (min-width:992px){.h2,h2{font-size:2.8125rem}}@media (min-width:1200px){.h2,h2{font-size:3rem}}h3{line-height:1.4;font-size:1.75rem}@media (min-width:576px){h3{font-size:1.875rem}}@media (min-width:768px){h3{font-size:2rem}}@media (min-width:992px){h3{font-size:2.125rem}}@media (min-width:1200px){h3{font-size:2.25rem}}h4{font-size:1.25rem}@media (min-width:576px){h4{font-size:1.3125rem}}@media (min-width:768px){h4{font-size:1.375rem}}b,strong{font-weight:700}em{font-style:italic}a{text-decoration:none;-webkit-transition:color .2s ease-in-out;transition:color .2s ease-in-out}div#wpadminbar{position:fixed;top:auto;bottom:0}html[lang]{margin-top:0!important}@font-face{font-weight:900;font-style:normal;font-family:'Tiempos Headline';src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Tiempos-Headline-Black.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Tiempos-Headline-Black.eot) format("eot");font-display:swap}@font-face{font-weight:300;font-style:normal;font-family:Lexend;src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Light.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Light.eot) format("eot");font-display:swap}@font-face{font-weight:400;font-style:normal;font-family:Lexend;src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Regular.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Regular.eot) format("eot");font-display:swap}@font-face{font-weight:500;font-style:normal;font-family:Lexend;src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Medium.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Medium.eot) format("eot");font-display:swap}@font-face{font-weight:600;font-style:normal;font-family:Lexend;src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-SemiBold.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-SemiBold.eot) format("eot");font-display:swap}@font-face{font-weight:700;font-style:normal;font-family:Lexend;src:url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Bold.woff) format("woff"),url(https://forethought.ai/wp-content/themes/forethought/src/fonts/Lexend-Bold.eot) format("eot");font-display:swap}html{--scroll-behavior:unset;scroll-behavior:unset}html [id]{-webkit-scroll-snap-type:block;-ms-scroll-snap-type:block;scroll-snap-type:block;scroll-margin:7rem}.lazyload,.lazyloading{opacity:0}.lazyloaded{opacity:1;-webkit-transition:opacity .2s;transition:opacity .2s}.c-mt-1{margin-top:.25rem}.c-mt-2{margin-top:.25rem}.c-mt-3{margin-top:.5rem}.c-mt-5{margin-top:1rem}.c-mt-6{margin-top:1.5rem}.c-mt-8{margin-top:2.5rem}.c-mt-9{margin-top:3.125rem}.c-mb-7{margin-bottom:2rem}.c-mb-9{margin-bottom:3.125rem}.c-mx-2{margin-left:.25rem;margin-right:.25rem}.c-p-only-3{padding:1rem!important}.c-pt-1{padding-top:.25rem}.c-pt-6{padding-top:1.5rem}.c-pt-8{padding-top:2.5rem}.c-pb-3{padding-bottom:.5rem}.c-pb-6{padding-bottom:1.5rem}.c-pb-8{padding-bottom:2.5rem}.c-px-1{padding-left:.25rem;padding-right:.25rem}.c-py-6{padding-top:1.5rem;padding-bottom:1.5rem}@media (min-width:576px){.c-mt-2{margin-top:.3rem}.c-mt-3{margin-top:.6rem}.c-mt-5{margin-top:1.2rem}.c-mt-6{margin-top:1.8rem}.c-mt-8{margin-top:3rem}.c-mt-9{margin-top:3.75rem}.c-mb-7{margin-bottom:2.4rem}.c-mb-9{margin-bottom:3.75rem}.c-mx-2{margin-left:.3rem;margin-right:.3rem}.c-pt-6{padding-top:1.8rem}.c-pt-8{padding-top:3rem}.c-pb-3{padding-bottom:.6rem}.c-pb-6{padding-bottom:1.8rem}.c-pb-8{padding-bottom:3rem}.c-py-6{padding-top:1.8rem;padding-bottom:1.8rem}}@media (min-width:768px){.c-mt-2{margin-top:.35rem}.c-mt-3{margin-top:.7rem}.c-mt-5{margin-top:1.4rem}.c-mt-6{margin-top:2.1rem}.c-mt-8{margin-top:3.5rem}.c-mt-9{margin-top:4.375rem}.c-mb-7{margin-bottom:2.8rem}.c-mb-9{margin-bottom:4.375rem}.c-mx-2{margin-left:.35rem;margin-right:.35rem}.c-pt-6{padding-top:2.1rem}.c-pt-8{padding-top:3.5rem}.c-pb-3{padding-bottom:.7rem}.c-pb-6{padding-bottom:2.1rem}.c-pb-8{padding-bottom:3.5rem}.c-py-6{padding-top:2.1rem;padding-bottom:2.1rem}.c-mb-md-6{margin-bottom:2.1rem}.c-py-md-4{padding-top:1.05rem;padding-bottom:1.05rem}}@media (min-width:992px){h4{font-size:1.4375rem}.c-mt-2{margin-top:.4rem}.c-mt-3{margin-top:.8rem}.c-mt-5{margin-top:1.6rem}.c-mt-6{margin-top:2.4rem}.c-mt-8{margin-top:4rem}.c-mt-9{margin-top:5rem}.c-mb-7{margin-bottom:3.2rem}.c-mb-9{margin-bottom:5rem}.c-mx-2{margin-left:.4rem;margin-right:.4rem}.c-pt-6{padding-top:2.4rem}.c-pt-8{padding-top:4rem}.c-pb-3{padding-bottom:.8rem}.c-pb-6{padding-bottom:2.4rem}.c-pb-8{padding-bottom:4rem}.c-py-6{padding-top:2.4rem;padding-bottom:2.4rem}.c-mb-md-6{margin-bottom:2.4rem}.c-py-md-4{padding-top:1.2rem;padding-bottom:1.2rem}.c-mt-lg-3{margin-top:.8rem}.c-mt-lg-5{margin-top:1.6rem}.c-mr-lg-3{margin-right:.8rem}.c-pt-lg-8{padding-top:4rem}.c-pb-lg-3{padding-bottom:.8rem}.c-px-lg-6{padding-left:2.4rem;padding-right:2.4rem}}@media (min-width:1200px){h4{font-size:1.5rem}.c-mt-2{margin-top:.45rem}.c-mt-3{margin-top:.9rem}.c-mt-5{margin-top:1.8rem}.c-mt-6{margin-top:2.7rem}.c-mt-8{margin-top:4.5rem}.c-mt-9{margin-top:5.625rem}.c-mb-7{margin-bottom:3.6rem}.c-mb-9{margin-bottom:5.625rem}.c-mx-2{margin-left:.45rem;margin-right:.45rem}.c-pt-6{padding-top:2.7rem}.c-pt-8{padding-top:4.5rem}.c-pb-3{padding-bottom:.9rem}.c-pb-6{padding-bottom:2.7rem}.c-pb-8{padding-bottom:4.5rem}.c-py-6{padding-top:2.7rem;padding-bottom:2.7rem}.c-mb-md-6{margin-bottom:2.7rem}.c-py-md-4{padding-top:1.35rem;padding-bottom:1.35rem}.c-mt-lg-3{margin-top:.9rem}.c-mt-lg-5{margin-top:1.8rem}.c-mr-lg-3{margin-right:.9rem}.c-pt-lg-8{padding-top:4.5rem}.c-pb-lg-3{padding-bottom:.9rem}.c-px-lg-6{padding-left:2.7rem;padding-right:2.7rem}}@media (min-width:1400px){.c-mt-2{margin-top:.5rem}.c-mt-3{margin-top:1rem}.c-mt-5{margin-top:2rem}.c-mt-6{margin-top:3rem}.c-mt-8{margin-top:5rem}.c-mt-9{margin-top:6.25rem}.c-mb-7{margin-bottom:4rem}.c-mb-9{margin-bottom:6.25rem}.c-mx-2{margin-left:.5rem;margin-right:.5rem}.c-pt-6{padding-top:3rem}.c-pt-8{padding-top:5rem}.c-pb-3{padding-bottom:1rem}.c-pb-6{padding-bottom:3rem}.c-pb-8{padding-bottom:5rem}.c-py-6{padding-top:3rem;padding-bottom:3rem}.c-mb-md-6{margin-bottom:3rem}.c-py-md-4{padding-top:1.5rem;padding-bottom:1.5rem}.c-mt-lg-3{margin-top:1rem}.c-mt-lg-5{margin-top:2rem}.c-mr-lg-3{margin-right:1rem}.c-pt-lg-8{padding-top:5rem}.c-pb-lg-3{padding-bottom:1rem}.c-px-lg-6{padding-left:3rem;padding-right:3rem}}.c-mt-0{margin-top:0!important}.c-mr-0{margin-right:0!important}.c-mb-0{margin-bottom:0!important}.c-p-0{padding:0!important}.c-pr-0{padding-right:0!important}.c-px-0{padding-left:0!important}.c-px-0{padding-right:0!important}.font-family-base{font-family:Lexend,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'}.fw-medium{font-weight:500}.fw-semibold{font-weight:600}body,html{overflow-x:hidden}#termly-code-snippet-support .t-CookiePolicyLink{padding-bottom:.125rem;background-image:-webkit-linear-gradient(bottom,currentColor 1px,transparent 0);background-image:linear-gradient(0deg,currentColor 1px,transparent 0);background-size:0 100%;background-repeat:no-repeat;text-decoration:none;-webkit-transition:background-size .4s ease-in-out,opacity .4s ease-in-out;transition:background-size .4s ease-in-out,opacity .4s ease-in-out}#termly-code-snippet-support .t-CookiePolicyLink:focus,#termly-code-snippet-support .t-CookiePolicyLink:hover{background-size:100% 100%}#termly-code-snippet-support .t-CookiePolicyLink{background-position:100%;background-size:100% 100%}#termly-code-snippet-support .t-CookiePolicyLink:focus,#termly-code-snippet-support .t-CookiePolicyLink:hover{background-size:0 100%}#termly-code-snippet-support *{font-family:Lexend,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'!important}#termly-code-snippet-support .t-CookiePolicyLink{text-decoration:none!important}#termly-code-snippet-support button{position:relative!important;z-index:1!important;display:-webkit-inline-box;display:inline-flex;-webkit-box-align:center!important;align-items:center!important;-webkit-box-pack:center!important;justify-content:center!important;overflow:hidden!important;width:auto!important;border:1px solid!important;border-radius:3.125rem!important;font-weight:400!important;font-size:.825rem!important;text-align:center!important;-webkit-transition:.3s!important;transition:all .3s ease!important;padding:.5625rem 1.96875rem!important}@media (min-width:576px){#termly-code-snippet-support button{padding:.6rem 2.1rem!important}}@media (min-width:768px){#termly-code-snippet-support button{padding:.6375rem 2.23125rem!important}}.screen-reader-shortcut-header{position:fixed;top:-1000em}.screen-reader-shortcut-header:focus{top:.4375rem;left:.375rem;z-index:100000;display:block;width:auto;height:auto;padding:.9375rem 1.4375rem .875rem;background:#f1f1f1;color:#0073aa;box-shadow:0 0 2px 2px rgba(0,0,0,.6);font-weight:600;font-size:.875rem;line-height:normal;text-decoration:none}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.125rem}@media (min-width:576px){.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.15rem}}@media (min-width:768px){.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.175rem}}.mobile-navigation{overflow:auto}.mobile-navigation__trigger{position:fixed;opacity:0}.mobile-navigation__trigger:checked~.mobile-navigation__menu{-webkit-transform:translateY(0);transform:translateY(0)}.mobile-navigation__menu{position:fixed;top:0;left:0;z-index:11;overflow:auto;width:100%;height:100%;max-height:100vh;background:#fff;-webkit-transform:translateY(-100%);transform:translateY(-100%);-webkit-transition:opacity .4s ease-in-out,-webkit-transform .4s ease-in-out;transition:opacity .4s ease-in-out,-webkit-transform .4s ease-in-out;transition:transform .4s ease-in-out,opacity .4s ease-in-out;transition:transform .4s ease-in-out,opacity .4s ease-in-out,-webkit-transform .4s ease-in-out}.mobile-navigation__menu .mburger{height:auto;margin-right:-1rem;-webkit-transition:-webkit-transform .2s ease-in-out;transition:-webkit-transform .2s ease-in-out;transition:transform .2s ease-in-out;transition:transform .2s ease-in-out,-webkit-transform .2s ease-in-out}.mobile-navigation__menu .mburger svg path{-webkit-transition:fill .2s ease-in-out;transition:fill .2s ease-in-out}.mobile-navigation__menu .mburger:hover{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.mobile-navigation__menu .mburger:hover svg path{fill:#7b33fb}.mobile-navigation__menu .crunch-button{max-width:23.5rem}.mobile-navigation__menu .dropdown{width:100%}.mobile-navigation__menu .dropdown:after{content:"";display:block;width:calc(100% + 1.875rem);height:1px;margin-top:2rem;margin-left:-.9375rem;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='346' height='2' fill='none'%3E%3Cpath d='M346 1H0' stroke='%23C4C4C4' stroke-width='.989' stroke-dasharray='7.91 7.91'/%3E%3C/svg%3E")}.mobile-navigation__menu .dropdown-toggle{margin-top:2rem;padding:0 .5rem;color:#1a1a1a}.mobile-navigation__menu .dropdown-menu{position:relative;display:-webkit-box;display:flex;flex-wrap:wrap;padding:0;border:none}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{width:50%;margin-top:1.5rem!important}@media (min-width:576px){.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{margin-top:1.8rem!important}}@media (min-width:768px){.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{margin-top:2.1rem!important}}@media (min-width:992px){.c-mt-lg-0{margin-top:0!important}.c-pb-lg-0{padding-bottom:0!important}.c-py-lg-0{padding-top:0!important;padding-bottom:0!important}#termly-code-snippet-support button{padding:.675rem 2.3625rem!important}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.2rem}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{margin-top:2.4rem!important}}@media (min-width:1200px){#termly-code-snippet-support button{padding:.7125rem 2.49375rem!important}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.225rem}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{margin-top:2.7rem!important}}@media (min-width:1400px){#termly-code-snippet-support button{padding:.75rem 2.625rem!important}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{font-size:1.25rem}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper{margin-top:3rem!important}}.mobile-navigation__menu .dropdown-menu .dropdown-item-wrapper .dropdown-item{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;height:100%;padding-right:.5rem;padding-left:.5rem}.mobile-navigation__menu .dropdown-item-icon{width:2.25rem;height:auto;margin-right:1rem}.mobile-navigation__menu .dropdown-item-description{display:none!important}.mobile-navigation__menu .dropdown-item-link{line-height:1.25;white-space:pre-wrap}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link{color:#1a1a1a}.mobile-navigation__menu .dropdown-wrapper .dropdown-item-wrapper .nav-link:after{display:none}.mobile-navigation__menu .dropdown-item{-webkit-transition:color .2s ease-in-out;transition:color .2s ease-in-out}.mobile-navigation__menu .dropdown-item.active,.mobile-navigation__menu .dropdown-item:active,.mobile-navigation__menu .dropdown-item:focus,.mobile-navigation__menu .dropdown-item:hover{background-color:transparent;color:#7b33fb}.mobile-navigation__menu .nav-item,.mobile-navigation__menu .nav-item.dropdown--small .dropdown-menu .dropdown-item-wrapper{width:100%}.mobile-navigation__menu .nav-item .nav-link{margin-top:2rem;padding-right:.5rem;padding-left:.5rem;color:#1a1a1a;-webkit-transition:color .2s ease-in-out;transition:color .2s ease-in-out}.mobile-navigation__menu .nav-item .nav-link.active,.mobile-navigation__menu .nav-item .nav-link:active,.mobile-navigation__menu .nav-item .nav-link:focus,.mobile-navigation__menu .nav-item .nav-link:hover{color:#7b33fb}.mobile-navigation__menu .navbar-button{display:none}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-description{font-size:.875rem}.main-header .navbar .navbar-nav li .nav-link,.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item,.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{font-size:1rem}.main-header .navbar .navbar-nav li.active:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-ancestor:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-parent:not(.navbar-button),.main-header .navbar .navbar-nav li:not(.dropdown):not(.navbar-button) .nav-link{padding-bottom:.125rem;background-image:-webkit-linear-gradient(bottom,currentColor 1px,transparent 0);background-image:linear-gradient(0deg,currentColor 1px,transparent 0);background-size:0 100%;background-repeat:no-repeat;text-decoration:none;-webkit-transition:background-size .4s ease-in-out,opacity .4s ease-in-out;transition:background-size .4s ease-in-out,opacity .4s ease-in-out}.main-header .navbar .navbar-nav li.active:focus:not(.navbar-button),.main-header .navbar .navbar-nav li.active:hover:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-ancestor:focus:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-ancestor:hover:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-parent:focus:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-parent:hover:not(.navbar-button),.main-header .navbar .navbar-nav li:not(.dropdown):not(.navbar-button) .nav-link:focus,.main-header .navbar .navbar-nav li:not(.dropdown):not(.navbar-button) .nav-link:hover{background-size:100% 100%}.main-header .navbar .navbar-nav li.active:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-ancestor:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-parent:not(.navbar-button){background-position:100%;background-size:100% 100%}.main-header .navbar .navbar-nav li.active:focus:not(.navbar-button),.main-header .navbar .navbar-nav li.active:hover:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-ancestor:focus:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-ancestor:hover:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-parent:focus:not(.navbar-button),.main-header .navbar .navbar-nav li.current-menu-parent:hover:not(.navbar-button){background-size:0 100%}.main-header .navbar .mburger,.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:focus,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:hover{background:#3866f5;background:-webkit-linear-gradient(10deg,#3866f5,#bd00ff 100%,#3866f5 200%);background:linear-gradient(80deg,#3866f5,#bd00ff 100%,#3866f5 200%)}.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{position:relative;z-index:1;display:-webkit-inline-box;display:inline-flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;overflow:hidden;border:1px solid;border-radius:3.125rem;background-color:transparent;font-weight:400;text-align:center;-webkit-transition:.3s,color .1s!important;transition:all .3s ease,color .1s ease!important;padding:.5625rem 1.96875rem}@media (min-width:576px){.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding:.6rem 2.1rem}}@media (min-width:768px){.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding:.6375rem 2.23125rem}}.main-header .navbar .navbar-nav li.navbar-button.active a:focus,.main-header .navbar .navbar-nav li.navbar-button.active a:hover,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:focus,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:hover{box-shadow:0 0 .325rem 0 rgba(0,0,0,.3)}.main-header .navbar .navbar-nav li.navbar-button.active a{border:none;color:#fff}.main-header .navbar .navbar-nav li.navbar-button.active a:focus,.main-header .navbar .navbar-nav li.navbar-button.active a:hover{color:#fff!important}.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:focus,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a:hover{border-color:transparent!important;color:#fff!important}.main-header{z-index:10!important;-webkit-transition:-webkit-transform .2s ease-in-out;transition:-webkit-transform .2s ease-in-out;transition:transform .2s ease-in-out;transition:transform .2s ease-in-out,-webkit-transform .2s ease-in-out}.main-header:hover{z-index:11!important;background-color:#fff}.main-header:after{content:"";position:absolute;top:0;left:0;z-index:-1;display:block;width:100%;height:100%;box-shadow:0 0 1.875rem 0 rgba(0,0,0,.1);opacity:0;visibility:hidden;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-header--hide{-webkit-transform:translateY(-100%);transform:translateY(-100%);-webkit-transition:translateY .2s ease-in-out;transition:translateY .2s ease-in-out}.main-header .navbar{-webkit-transition:padding-top .2s ease-in-out,padding-bottom .2s ease-in-out;transition:padding-top .2s ease-in-out,padding-bottom .2s ease-in-out;padding-top:1.5rem;padding-bottom:1.5rem}@media (min-width:576px){.main-header .navbar{padding-top:1.7rem;padding-bottom:1.7rem}}@media (min-width:768px){.main-header .navbar{padding-top:1.9rem;padding-bottom:1.9rem}}.main-header .navbar .navbar-brand{width:13.75rem;height:3.25rem;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-header .navbar .navbar-nav li{position:static}@media (min-width:992px){.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding:.675rem 2.3625rem}.main-header .navbar{padding-top:2.1rem;padding-bottom:2.1rem}.main-header .navbar .navbar-brand{width:14.875rem;height:3.5rem}.main-header .navbar .navbar-nav li{margin-left:.5rem;margin-right:.5rem}.main-header .navbar .navbar-nav li:nth-last-child(2){margin-right:1.25rem}}@media (min-width:1200px){.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding:.7125rem 2.49375rem}.main-header .navbar{padding-top:2.3rem;padding-bottom:2.3rem}.main-header .navbar .navbar-nav li{margin-left:.75rem;margin-right:.75rem}.main-header .navbar .navbar-nav li:nth-last-child(2){margin-right:1.875rem}}@media (min-width:1400px){.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding:.75rem 2.625rem}.main-header .navbar{padding-top:2.5rem;padding-bottom:2.5rem}.main-header .navbar .navbar-nav li{margin-left:1rem;margin-right:1rem}.main-header .navbar .navbar-nav li:nth-last-child(2){margin-right:2.5rem}}.main-header .navbar .navbar-nav li:last-child{margin:0}.main-header .navbar .navbar-nav li:not(.navbar-button) a{padding-top:0}.main-header .navbar .navbar-nav li:not(.navbar-button).active .nav-link,.main-header .navbar .navbar-nav li:not(.navbar-button).current-menu-ancestor .nav-link,.main-header .navbar .navbar-nav li:not(.navbar-button).current-menu-parent .nav-link{position:relative;top:1px;background:0 0;font-weight:600}.main-header .navbar .navbar-nav li.dropdown:hover .dropdown-toggle{color:#737373}.main-header .navbar .navbar-nav li.dropdown:hover .dropdown-wrapper{color:#7b33fb}.main-header .navbar .navbar-nav li.dropdown:hover .dropdown-wrapper .dropdown-menu{opacity:1;visibility:visible;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper{position:relative}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-toggle{position:relative;display:-webkit-box;display:flex;-webkit-box-align:end;align-items:flex-end;padding:0 0 .125rem;border:none}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-toggle:after{content:"";position:absolute;top:50%;right:0;bottom:0;display:none;width:.675rem;height:.375rem;margin-left:0;border:none;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMjAuMDUgMTkwLjY1Ij48cGF0aCBmaWxsPSIjN0U3RTdFIiBkPSJNMTUxLjUyIDE4Ny4xMkwzLjUyIDQwLjMzYTEyIDEyIDAgMDEwLTE3bDE5LjgtMTkuODFhMTIgMTIgMCAwMTE3IDBMMTYwIDEyMiAyNzkuNzMgMy41M2ExMiAxMiAwIDAxMTcgMGwxOS43OSAxOS44YTEyIDEyIDAgMDEwIDE3bC0xNDggMTQ2LjhhMTIgMTIgMCAwMS0xNyAweiIvPjwvc3ZnPg==) no-repeat;-webkit-transform:translateY(-50%);transform:translateY(-50%);-webkit-transition:-webkit-transform .2s ease-in-out;transition:-webkit-transform .2s ease-in-out;transition:transform .2s ease-in-out;transition:transform .2s ease-in-out,-webkit-transform .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu{position:absolute;display:-webkit-box;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-flow:row;flex-wrap:wrap;margin-top:1rem;padding:2rem 1.25rem;border:none;border-radius:1.25rem;box-shadow:0 0 1rem 0 rgba(0,0,0,.11);opacity:0;visibility:hidden;-webkit-transition:visibility 0s .2s,opacity .2s ease-in-out;transition:visibility 0s .2s,opacity .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu:before{content:"";position:absolute;top:-.5rem;right:0;left:0;width:1rem;height:1rem;margin:0 auto;background-color:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu.show{opacity:1;visibility:visible;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper--with-icon .dropdown-item{padding-left:3rem}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper--with-icon .dropdown-item.active{color:#2f2f2f}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper--with-icon .dropdown-item.active .dropdown-item-icon{opacity:1}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item{position:relative;display:block;padding:0;background-color:transparent;color:#2f2f2f}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:not(:first-of-type){border-top:1px solid #e8e8e8}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item.active{background-color:transparent;color:#7b33fb}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:focus,.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:hover{background-color:transparent}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:focus .dropdown-item-icon,.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:hover .dropdown-item-icon{opacity:1}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:focus .dropdown-item-link:after,.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:hover .dropdown-item-link:after{right:-1rem;opacity:1}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:focus .dropdown-item-description,.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item:hover .dropdown-item-description{color:#2f2f2f}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-icon{position:absolute;top:.5rem;left:0;width:2.125rem;height:auto;opacity:.5;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-icon--top-0{top:0}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-link{position:relative;line-height:1.25rem;white-space:break-spaces}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-link:after{content:"";position:absolute;top:50%;right:-.5rem;width:.625rem;height:.625rem;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMS4zOCAxMS4wOSI+PHBhdGggZD0iTTQuODQuNzRMNS40LjE4YS42LjYgMCAwMS44NiAwbDQuOTQgNC45M2EuNi42IDAgMDEwIC44NmwtNC45NCA0Ljk0YS42LjYgMCAwMS0uODYgMGwtLjU2LS41NmEuNjIuNjIgMCAwMTAtLjg4bDMuMDctMi45MUguNjFBLjYxLjYxIDAgMDEwIDZ2LS44NmEuNjEuNjEgMCAwMS42MS0uNjFoNy4zTDQuODUgMS42MWEuNi42IDAgMDEtLjAxLS44N3oiIGZpbGw9IiMyZjJmMmYiLz48L3N2Zz4=) 50% no-repeat;background-size:100% auto;opacity:0;-webkit-transform:translateY(-50%);transform:translateY(-50%);-webkit-transition:opacity .2s ease-in-out .2s,right .2s ease-in-out .2s;transition:opacity .2s ease-in-out .2s,right .2s ease-in-out .2s}.main-header .navbar .navbar-nav li.dropdown .dropdown-wrapper .dropdown-menu .dropdown-item-description{display:block;color:#737373;line-height:1.4;white-space:break-spaces;-webkit-transition:color .2s ease-in-out;transition:color .2s ease-in-out}.main-header .navbar .navbar-nav li.dropdown--small .dropdown-wrapper .dropdown-menu{left:50%;display:block;width:16.875rem;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.main-header .navbar .navbar-nav li.dropdown--small .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper:not(:first-of-type){margin-top:1rem}.main-header .navbar .navbar-nav li.dropdown--large .dropdown-wrapper .dropdown-menu{left:50%;width:37.5rem;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.main-header .navbar .navbar-nav li.dropdown--large .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper{-webkit-box-flex:0;flex:0 0 50%;width:50%;padding:0 .625rem}.main-header .navbar .navbar-nav li.dropdown--large .dropdown-wrapper .dropdown-menu .dropdown-item-wrapper:not(:first-child):not(:nth-child(2)){margin-top:1.75rem}.main-header .navbar .navbar-nav li.navbar-button.active a,.main-header .navbar .navbar-nav li.navbar-button:not(.active) a{padding-top:.825rem;padding-bottom:.825rem}.main-header .navbar .navbar-nav li.navbar-button a{border-color:#2f2f2f;color:#2f2f2f;line-height:1.3}.main-header .navbar .navbar-nav li .nav-link{display:block;border-bottom:1px solid transparent;color:#2f2f2f;line-height:1.25}.main-header .navbar .mburger{--mb-button-size:2.75rem;--mb-bar-height:0.125rem;--mb-bar-spacing:0.375rem;margin-right:-1rem;color:hsla(0,0%,100%,.6);-webkit-transition:color .2s ease-in-out;transition:color .2s ease-in-out}.main-header .navbar .mburger:hover{color:#fff}.main-header .navbar .mburger b{left:50%;width:1.25rem;border-radius:1px;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.main-header--is-window-scrolled{z-index:11!important;background-color:#fff}.main-header--is-window-scrolled:after{opacity:1;visibility:visible}.main-header--is-window-scrolled .navbar{padding-top:1.5rem;padding-bottom:1.5rem}@media (min-width:576px){.main-header--is-window-scrolled .navbar{padding-top:1.4rem;padding-bottom:1.4rem}}@media (min-width:768px){.main-header--is-window-scrolled .navbar{padding-top:1.3rem;padding-bottom:1.3rem}}.main-header--hide .dropdown-menu{display:none!important}.mm-wrapper_opening .mm-menu_opened~.mm-slideout.main-header{z-index:2;background-color:transparent}.return-to-top{right:3rem;bottom:3rem;z-index:5;width:2.75rem;height:2.75rem;background:#a4ebf7;background:-webkit-linear-gradient(left,#a4ebf7,#bef9e6);background:linear-gradient(90deg,#a4ebf7,#bef9e6);box-shadow:0 0 .25rem 0 rgba(0,0,0,.1);text-decoration:none;opacity:0;visibility:hidden}.return-to-top--is-visible{opacity:1;visibility:visible;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.return-to-top--is-visible:hover{opacity:.75}.return-to-top__chevron{width:1.5rem;height:.8125rem}.return-to-top__chevron path{fill:currentColor}.main-footer__primary-menu a,.main-footer__secondary-menu li a{padding-bottom:.125rem;background-image:-webkit-linear-gradient(bottom,currentColor 1px,transparent 0);background-image:linear-gradient(0deg,currentColor 1px,transparent 0);background-size:0 100%;background-repeat:no-repeat;text-decoration:none;-webkit-transition:background-size .4s ease-in-out,opacity .4s ease-in-out;transition:background-size .4s ease-in-out,opacity .4s ease-in-out}.main-footer__primary-menu a:focus,.main-footer__primary-menu a:hover,.main-footer__secondary-menu li a:focus,.main-footer__secondary-menu li a:hover{background-size:100% 100%}.main-footer .entry-content a{color:#0f0f0f!important;font-weight:400!important}.main-footer .entry-content strong{font-weight:600}.main-footer .entry-content strong a{font-weight:600!important}.main-footer__company a,.main-footer__company p{margin-bottom:0}.main-footer__menu-wrapper{display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column}.main-footer__primary-menu a{color:#0f0f0f}@media (min-width:992px){.main-header--is-window-scrolled .navbar{padding-top:1.2rem;padding-bottom:1.2rem}.main-footer__menu-wrapper{-webkit-box-orient:horizontal;-webkit-box-direction:normal;flex-direction:row;-webkit-box-pack:justify;justify-content:space-between;width:-webkit-max-content;width:-moz-max-content;width:max-content;padding:0}.main-footer__primary-menu a{margin-right:1.95rem}.main-footer__secondary-menu-wrapper{align-self:center}}.main-footer__list-container{width:-webkit-fit-content;width:-moz-fit-content;width:fit-content}.main-footer__secondary-menu-wrapper{padding-right:1.28rem}.main-footer__secondary-menu{margin-left:-1rem;margin-right:-1rem}@media (min-width:576px){.main-footer__secondary-menu{margin-left:-1.05rem;margin-right:-1.05rem}}@media (min-width:768px){.main-footer__secondary-menu{margin-left:-1.1rem;margin-right:-1.1rem}}.main-footer__secondary-menu{margin-top:-.5rem}@media (min-width:576px){.main-footer__secondary-menu{margin-top:-.6rem}}@media (min-width:768px){.main-footer__secondary-menu{margin-top:-.7rem}}.main-footer__secondary-menu li{position:relative;margin-top:.5rem}@media (min-width:576px){.main-footer__secondary-menu li{margin-top:.6rem}}@media (min-width:768px){.main-footer__secondary-menu li{margin-top:.7rem}}.main-footer__secondary-menu li{padding-left:1rem;padding-right:1rem}@media (min-width:576px){.main-footer__secondary-menu li{padding-left:1.05rem;padding-right:1.05rem}}@media (min-width:768px){.main-footer__secondary-menu li{padding-left:1.1rem;padding-right:1.1rem}}.main-footer__secondary-menu li:last-child:after{display:none}.main-footer__secondary-menu li:after{content:"";position:absolute;top:50%;right:0;display:block;width:1px;height:1rem;background:#737373;-webkit-transform:translateY(-58%);transform:translateY(-58%)}.main-footer__secondary-menu li a{color:#737373}.main-footer__logo{-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.main-footer__copyrights{width:30vw;min-width:-webkit-fit-content;min-width:-moz-fit-content;min-width:fit-content}#main{padding-top:6.25rem}@media (min-width:576px){#main{padding-top:6.7rem}}@media (min-width:768px){#main{padding-top:7.15rem}}.entry-author ol li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author p a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author span a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author ul li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-content ol li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content p a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content ul li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link){padding-bottom:.125rem;background-image:-webkit-linear-gradient(bottom,currentColor 1px,transparent 0);background-image:linear-gradient(0deg,currentColor 1px,transparent 0);background-size:0 100%;background-repeat:no-repeat;text-decoration:none;-webkit-transition:background-size .4s ease-in-out,opacity .4s ease-in-out;transition:background-size .4s ease-in-out,opacity .4s ease-in-out}.entry-author ol li a:focus:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author ol li a:hover:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author p a:focus:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author p a:hover:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author span a:focus:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author span a:hover:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author ul li a:focus:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author ul li a:hover:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-content ol li a:focus:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content ol li a:hover:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content p a:focus:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content p a:hover:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content ul li a:focus:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content ul li a:hover:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link){background-size:100% 100%}.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:.75em}@media (min-width:576px){.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:.9em}}@media (min-width:768px){.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:1.05em}}.entry-content--text-page h1,.entry-content--text-page h2,.entry-content--text-page h3,.entry-content--text-page h4{margin-bottom:1rem!important}.entry-content--text-page .h2,.entry-content--text-page h1,.entry-content--text-page h2{font-weight:900;font-family:'Tiempos Headline',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'}.entry-content--text-page h3,.entry-content--text-page h4{font-weight:600;font-family:Lexend,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'}.entry-content--text-page h1{font-size:2.5rem}@media (min-width:576px){.entry-content--text-page h1{font-size:2.625rem}}@media (min-width:768px){.entry-content--text-page h1{font-size:2.75rem}}@media (min-width:992px){.main-footer__secondary-menu{margin-left:-1.15rem;margin-right:-1.15rem}.main-footer__secondary-menu{margin-top:-.8rem}.main-footer__secondary-menu li{margin-top:.8rem}.main-footer__secondary-menu li{padding-left:1.15rem;padding-right:1.15rem}.main-footer__social-icons{width:-webkit-fit-content;width:-moz-fit-content;width:fit-content}#main{padding-top:7.6rem}.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:1.2em}.entry-content--text-page h1{font-size:2.875rem}}@media (min-width:1200px){.main-header--is-window-scrolled .navbar{padding-top:1.1rem;padding-bottom:1.1rem}.main-footer__primary-menu a{margin-right:3.3rem}.main-footer__secondary-menu{margin-left:-1.2rem;margin-right:-1.2rem}.main-footer__secondary-menu{margin-top:-.9rem}.main-footer__secondary-menu li{margin-top:.9rem}.main-footer__secondary-menu li{padding-left:1.2rem;padding-right:1.2rem}#main{padding-top:8.05rem}.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:1.35em}.entry-content--text-page h1{font-size:3rem}}.entry-content--text-page .h2,.entry-content--text-page h2{line-height:1.4;font-size:1.75rem}@media (min-width:576px){.entry-content--text-page .h2,.entry-content--text-page h2{font-size:1.875rem}}@media (min-width:768px){.entry-content--text-page .h2,.entry-content--text-page h2{font-size:2rem}}@media (min-width:992px){.entry-content--text-page .h2,.entry-content--text-page h2{font-size:2.125rem}}@media (min-width:1200px){.entry-content--text-page .h2,.entry-content--text-page h2{font-size:2.25rem}}.entry-content--text-page h3{line-height:1.5;font-size:1.25rem}@media (min-width:576px){.entry-content--text-page h3{font-size:1.3125rem}}@media (min-width:768px){.entry-content--text-page h3{font-size:1.375rem}}@media (min-width:992px){.entry-content--text-page h3{font-size:1.4375rem}}@media (min-width:1200px){.entry-content--text-page h3{font-size:1.5rem}}.entry-content--text-page h4{font-size:.875rem;text-transform:uppercase;letter-spacing:.4px}@media (min-width:576px){.entry-content--text-page h4{letter-spacing:.72px}}@media (min-width:768px){.entry-content--text-page h4{letter-spacing:1.04px}}@media (min-width:992px){.entry-content--text-page h4{letter-spacing:1.36px}}@media (min-width:1200px){.entry-content--text-page h4{letter-spacing:1.68px}}@media (min-width:1400px){.main-header--is-window-scrolled .navbar{padding-top:1rem;padding-bottom:1rem}.main-footer__primary-menu a{margin-right:3.5rem}.main-footer__secondary-menu{margin-left:-1.25rem;margin-right:-1.25rem}.main-footer__secondary-menu{margin-top:-1rem}.main-footer__secondary-menu li{margin-top:1rem}.main-footer__secondary-menu li{padding-left:1.25rem;padding-right:1.25rem}#main{padding-top:8.5rem}.panel+.container>.entry-content>:first-of-type:not(.first-element-fix),[class*=acf-block-]+.container>.entry-content>:first-of-type:not(.first-element-fix){margin-top:1.5em}.entry-content--text-page h4{letter-spacing:2px}}.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.375em}@media (min-width:576px){.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.45em}}@media (min-width:768px){.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.525em}}@media (min-width:992px){.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.6em}}@media (min-width:1200px){.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.675em}}@media (min-width:1400px){.entry-content>h2,.entry-content>h3,.entry-content>h4{margin-top:.75em}}.entry-content>p{line-height:1.7;margin-top:.625em}@media (min-width:576px){.entry-content>p{margin-top:.75em}}@media (min-width:768px){.entry-content>p{margin-top:.875em}}.entry-content>p>a[class*=-button]{margin-top:.75em}@media (min-width:576px){.entry-content>p>a[class*=-button]{margin-top:.9em}}@media (min-width:768px){.entry-content>p>a[class*=-button]{margin-top:1.05em}}@media (min-width:992px){.entry-content>p{margin-top:1em}.entry-content>p>a[class*=-button]{margin-top:1.2em}}@media (min-width:1200px){.entry-content>p{margin-top:1.125em}.entry-content>p>a[class*=-button]{margin-top:1.35em}}@media (min-width:1400px){.entry-content>p{margin-top:1.25em}.entry-content>p>a[class*=-button]{margin-top:1.5em}}.entry-content>p a{color:#7b33fb}.entry-content ol li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content p a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link),.entry-content ul li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link){color:#7b33fb;font-weight:600}.entry-content ol li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link)[href*=http],.entry-content p a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link)[href*=http],.entry-content ul li a:not([class*=-button]):not([class*=__button]):not(.sidebar__nav-link)[href*=http]{word-wrap:break-word;word-break:break-word;overflow-wrap:break-word;-webkit-hyphens:auto;-ms-hyphens:auto;hyphens:auto}.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:.75em}@media (min-width:576px){.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:.9em}}@media (min-width:768px){.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:1.05em}}.entry-content sup{top:-.75em;font-size:50%}.entry-content sub{bottom:-.25em;font-size:50%}.entry-content>ul:not(.wp-block-gallery){list-style-type:disc}.entry-content>ol:not(.wp-block-gallery){list-style-type:decimal}.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-right:0;margin-bottom:0;margin-left:0;list-style-position:outside;margin-top:.5em}@media (min-width:576px){.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-top:.6em}}@media (min-width:768px){.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-top:.7em}}@media (min-width:992px){.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:1.2em}.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-top:.8em}}@media (min-width:1200px){.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:1.35em}.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-top:.9em}}@media (min-width:1400px){.entry-content ol li a[class*=-button],.entry-content p a[class*=-button],.entry-content ul li a[class*=-button]{margin-top:1.5em}.entry-content>ol:not(.wp-block-gallery),.entry-content>ul:not(.wp-block-gallery){margin-top:1em}}.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-right:0;list-style-position:outside;margin-top:.5em;margin-left:.5em;margin-bottom:.75em}@media (min-width:576px){.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-top:.6em;margin-left:.6em;margin-bottom:.9em}}@media (min-width:768px){.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-top:.7em;margin-left:.7em;margin-bottom:1.05em}}.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ul{list-style-type:circle}.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ol{list-style-type:lower-latin}.entry-content>ol:not(.wp-block-gallery) li,.entry-content>ul:not(.wp-block-gallery) li{line-height:1.4}.entry-content>ol:not(.wp-block-gallery) li:first-child,.entry-content>ul:not(.wp-block-gallery) li:first-child{margin-top:0}.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{display:block;width:auto;max-width:100%;height:auto;margin-right:auto;margin-left:auto;border-radius:1.25rem;margin-top:1.5em}@media (min-width:576px){.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{margin-top:1.8em}}@media (min-width:768px){.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{margin-top:2.1em}}.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:1.5em}@media (min-width:576px){.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:1.8em}}@media (min-width:768px){.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:2.1em}}@media (min-width:992px){.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-top:.8em;margin-left:.8em;margin-bottom:1.2em}.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{margin-top:2.4em}.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:2.4em}}@media (min-width:1200px){.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-top:.9em;margin-left:.9em;margin-bottom:1.35em}.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{margin-top:2.7em}.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:2.7em}}@media (min-width:1400px){.entry-content>ol:not(.wp-block-gallery) ol,.entry-content>ol:not(.wp-block-gallery) ul,.entry-content>ul:not(.wp-block-gallery) ol,.entry-content>ul:not(.wp-block-gallery) ul{margin-top:1em;margin-left:1em;margin-bottom:1.5em}.entry-content>*>img,.entry-content>.wp-caption,.entry-content>img{margin-top:3em}.entry-content>*>img.add-margin-bottom,.entry-content>.wp-caption.add-margin-bottom,.entry-content>img.add-margin-bottom{margin-bottom:3em}}.entry-content>.wp-caption{display:inline-block;margin-bottom:0}.entry-content>.wp-caption img{margin:0}.entry-content>iframe{width:100%;margin-top:.75em;height:14rem}@media (min-width:576px){.entry-content>iframe{margin-top:.9em;height:17.6rem}}@media (min-width:768px){.entry-content>iframe{margin-top:1.05em;height:21.2rem}}@media (min-width:992px){.entry-content>iframe{margin-top:1.2em;height:24.8rem}}@media (min-width:1200px){.entry-content>iframe{margin-top:1.35em;height:28.4rem}}@media (min-width:1400px){.entry-content>iframe{margin-top:1.5em;height:32rem}}.entry-content>pre{display:block;border-radius:.5rem;background:#3a3a3a;color:#fff;white-space:pre-wrap;word-wrap:break-word;margin-top:.75em;padding:.5em}@media (min-width:576px){.entry-content>pre{margin-top:.9em;padding:.6em}}@media (min-width:768px){.entry-content>pre{margin-top:1.05em;padding:.7em}}@media (min-width:992px){.entry-content>pre{margin-top:1.2em;padding:.8em}}@media (min-width:1200px){.entry-content>pre{margin-top:1.35em;padding:.9em}}@media (min-width:1400px){.entry-content>pre{margin-top:1.5em;padding:1em}}.entry-content>code{padding-right:.25em;padding-left:.25em;border:1px solid #d3d3e7;background:#f4f4f9;color:#ce375c;font-style:italic}.entry-content>table{margin-top:1.5em}@media (min-width:576px){.entry-content>table{margin-top:1.8em}}@media (min-width:768px){.entry-content>table{margin-top:2.1em}}.entry-content>table td,.entry-content>table th{vertical-align:middle;min-width:5rem;padding:1em}.entry-content>table td img,.entry-content>table th img{margin-top:0}.entry-content>table a{color:#7b33fb;font-weight:600}.entry-content>table:not(.wp-block-table){border:1px solid #e5e5e5}.entry-content>table:not(.wp-block-table) tr{border-bottom:1px solid #e5e5e5}.entry-content>table:not(.wp-block-table) tr:last-child:not(:first-child){border:0}.entry-content>table:not(.wp-block-table) td,.entry-content>table:not(.wp-block-table) th{border-right:1px solid #e5e5e5}.entry-content>table:not(.wp-block-table) td:last-child,.entry-content>table:not(.wp-block-table) th:last-child{border:0}.entry-content :last-child{margin-bottom:0}.entry-content :not([class*=c-my-]):not([class*=c-mt-]):first-child{margin-top:0}#singleToc{position:absolute;z-index:0;width:100%;padding-right:calc(var(--bs-gutter-x));-webkit-transform:translateY(-50%);transform:translateY(-50%)}@media (max-width:991.98px){#singleToc{position:fixed!important;top:0;left:0;z-index:2;overflow:hidden;width:100%;max-width:100%!important;height:auto;padding:1.5rem var(--bs-gutter-x,.9375rem);background:#fff;box-shadow:0 0 .5rem #d7d7d7;-webkit-transform:unset!important;transform:unset!important}#singleToc .title{display:none}}#singleToc.hidden{opacity:0}.entry-author img{-webkit-box-flex:0;flex:0 0 5rem;width:5rem;height:5rem}.entry-author ol li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author p a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author span a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link),.entry-author ul li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link){color:#7b33fb;font-weight:600}.entry-author ol li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link)[href*=http],.entry-author p a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link)[href*=http],.entry-author span a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link)[href*=http],.entry-author ul li a:not([class*=-button]):not([class*=__button]):not([class*=social-link]):not(.sidebar__nav-link)[href*=http]{word-wrap:break-word;word-break:break-word;overflow-wrap:break-word;-webkit-hyphens:auto;-ms-hyphens:auto;hyphens:auto}.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:.75em}@media (min-width:576px){.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:.9em}}@media (min-width:768px){.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:1.05em}}.crunch-button__outline--medium{font-size:1rem}.crunch-button__outline--purple-gradient:focus,.crunch-button__outline--purple-gradient:hover{background:#3866f5;background:-webkit-linear-gradient(10deg,#3866f5,#bd00ff 100%,#3866f5 200%);background:linear-gradient(80deg,#3866f5,#bd00ff 100%,#3866f5 200%)}.crunch-button{font-weight:400}.crunch-button__outline{position:relative;z-index:1;display:-webkit-inline-box;display:inline-flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;overflow:hidden;border:1px solid;border-radius:3.125rem;background-color:transparent;font-weight:400;text-align:center;-webkit-transition:.3s,color .1s!important;transition:all .3s ease,color .1s ease!important;padding:.5625rem 1.96875rem}@media (min-width:576px){.crunch-button__outline{padding:.6rem 2.1rem}}@media (min-width:768px){.crunch-button__outline{padding:.6375rem 2.23125rem}}@media (min-width:992px){.entry-content>table{margin-top:2.4em}.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:1.2em}.crunch-button__outline{padding:.675rem 2.3625rem}}@media (min-width:1200px){.entry-content>table{margin-top:2.7em}.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:1.35em}.crunch-button__outline{padding:.7125rem 2.49375rem}}@media (min-width:1400px){.entry-content>table{margin-top:3em}.entry-author ol li a[class*=-button],.entry-author p a[class*=-button],.entry-author span a[class*=-button],.entry-author ul li a[class*=-button]{margin-top:1.5em}.crunch-button__outline{padding:.75rem 2.625rem}}.crunch-button__outline:focus,.crunch-button__outline:hover{box-shadow:0 0 .325rem 0 rgba(0,0,0,.3)}.crunch-button__outline--white-color{border-color:#fff;color:#fff}.crunch-button__outline--white-color:focus,.crunch-button__outline--white-color:hover{background-color:#fff;color:#0f0f0f!important}.crunch-button__outline--purple-gradient:focus,.crunch-button__outline--purple-gradient:hover{border-color:transparent!important;color:#fff!important}.crunch-button__outline--secondary-color{color:#0f0f0f}.crunch-button__outline--secondary-color:focus,.crunch-button__outline--secondary-color:hover{border-color:#0f0f0f;background-color:#0f0f0f;color:#fff}select.gfield_select{font-size:1rem}select.gfield_select{width:100%;padding:.875rem 1.3125rem;border:1px solid #e4eaed;border-radius:0;background:#fff;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMjAuMDUgMTkwLjY1Ij48cGF0aCBmaWxsPSIjN0U3RTdFIiBkPSJNMTUxLjUyIDE4Ny4xMkwzLjUyIDQwLjMzYTEyIDEyIDAgMDEwLTE3bDE5LjgtMTkuODFhMTIgMTIgMCAwMTE3IDBMMTYwIDEyMiAyNzkuNzMgMy41M2ExMiAxMiAwIDAxMTcgMGwxOS43OSAxOS44YTEyIDEyIDAgMDEwIDE3bC0xNDggMTQ2LjhhMTIgMTIgMCAwMS0xNyAweiIvPjwvc3ZnPg==) no-repeat;background-position:right 1.25rem center;background-size:.75rem .5rem;background-repeat:no-repeat;color:#828282;line-height:1.7;-webkit-appearance:none;-moz-appearance:none;appearance:none}select.gfield_select:focus{outline:0}div.chosen-container{width:100%!important;margin-bottom:0}.acf-block-cta{padding-top:6.25rem;padding-bottom:6.25rem}.acf-block-cta__content{max-width:25.625rem}@media (min-width:992px){.acf-block-cta{padding-bottom:9.175rem}.acf-block-cta__decor-wrapper{margin-bottom:-9.175rem}}@media (min-width:1200px){.acf-block-cta{padding-bottom:10.15rem}.acf-block-cta__decor-wrapper{margin-bottom:-10.15rem}}@media (min-width:1400px){.acf-block-cta{padding-bottom:11.125rem}.acf-block-cta__decor-wrapper{margin-bottom:-11.125rem}}.acf-block-cta__decor{top:4rem;left:0;width:100%;margin-top:1.5rem}.acf-block-cta__decor:after{content:"";position:absolute;top:1px;left:23.1875rem;width:100vw;height:3.625rem;background-color:#6bdab6}@media (min-width:992px){.acf-block-cta__decor{position:absolute;top:auto;bottom:0;left:-25%;width:125%;margin-top:0}.acf-block-cta__decor:after{top:0;right:calc(-100vw + 1px);left:auto;height:5.625rem}.acf-block-cta__decor:before{display:none}}.acf-block-cta__decor:before{content:"";position:absolute;bottom:3.875rem;left:calc(-100vw + 1px);width:100vw;height:3.625rem;background-color:#68dee0}.acf-block-cta__decor-svg--desktop{width:61.125rem;height:21.9375rem}.acf-block-cta__decor-svg--mobile{width:23.1875rem;height:16rem}.acf-block-cta__circle{width:15rem;height:15rem;padding:2.25rem}@media (max-width:575.98px){.acf-block-cta__circle{left:3rem}}@media (min-width:992px){.acf-block-cta__circle{width:20rem;height:20rem;padding:2.75rem}.acf-block-cta__circle{left:4rem;margin-bottom:9.125rem}}@media (min-width:75rem) and (max-width:81.25rem){.acf-block-cta__circle{left:2rem;margin-top:-2rem}}.acf-block-cta__circle svg{width:100%;height:100%}.social-icons__item{margin-right:1rem}@media (min-width:576px){.social-icons__item{margin-right:1.05rem}}@media (min-width:768px){.social-icons__item{margin-right:1.1rem}}@media (min-width:992px){.social-icons__item{margin-right:1.15rem}}@media (min-width:1200px){.acf-block-cta__circle{width:23.125rem;height:23.125rem;padding:3.125rem}.acf-block-cta__circle{margin-bottom:7.5rem}.social-icons__item{margin-right:1.2rem}}.social-icons__item .social-link__icon{fill:#0f0f0f;-webkit-transition:fill .2s ease-in-out;transition:fill .2s ease-in-out}.social-icons__item .social-link__icon:focus,.social-icons__item .social-link__icon:hover{fill:#7b33fb}.hero-section-13{padding-top:2rem;padding-bottom:15rem}@media (min-width:576px){.hero-section-13{padding-bottom:19.5rem}}@media (min-width:768px){.hero-section-13{padding-bottom:24rem}}.hero-section-13__image{top:0;left:0;width:100%;height:100%}@media (min-width:992px){.hero-section-13{padding-top:5rem;padding-bottom:14rem}.hero-section-13__title{max-width:38rem}.hero-section-13__image{width:8rem;height:8rem}.hero-section-13__image{top:0;left:8rem}}@media (min-width:1200px){.hero-section-13__title{max-width:50rem}.hero-section-13__image{width:8.9375rem;height:8.9375rem}}@media (min-width:1400px){.social-icons__item{margin-right:1.25rem}.hero-section-13__image{width:9.875rem;height:9.875rem}.hero-section-13__image{top:1.325rem;left:10rem}}.hero-section-13__decors-wrapper{width:120rem;max-width:100%}.hero-section-13__decor-1{width:6rem;height:6rem;left:.937rem;bottom:7rem}@media (min-width:576px){.hero-section-13__decor-1{width:7rem;height:7rem;left:5.2185rem;bottom:9.5rem}}@media (min-width:768px){.hero-section-13__decor-1{width:8rem;height:8rem;left:9.5rem;bottom:12rem}}@media (min-width:992px){.hero-section-13__decor-1{bottom:1.75rem;left:-2rem;width:20rem;height:17.75rem}}@media (min-width:1400px){.hero-section-13__decor-1{bottom:1.75rem;left:-2rem;width:25.5rem;height:22.75rem}}.hero-section-13__decor-1 svg{display:none;width:100%;height:100%}.hero-section-13__decor-2{right:-2rem;bottom:-1.5rem}.hero-section-13__decor-2{width:12.5rem;height:16.625rem}@media (min-width:576px){.hero-section-13__decor-2{right:-4rem;bottom:-3rem}.hero-section-13__decor-2{width:16.4375rem;height:21.84375rem}}@media (min-width:768px){.hero-section-13__decor-2{width:20.375rem;height:27.0625rem}.lottie{background-image:none!important}}@media (min-width:992px){.hero-section-13__decor-1 svg{display:block}.hero-section-13__decor-2{width:24.3125rem;height:32.28125rem;right:-4.5rem;bottom:-2rem}}@media (min-width:1200px){.hero-section-13__decor-2{width:28.25rem;height:37.5rem;right:-5.25rem;bottom:-2.875rem}}@media (min-width:1400px){.hero-section-13__decor-2{right:-6rem;bottom:-3.75rem}}@media (min-width:992px) and (max-width:1199.98px){.hero-section-13__decor-2{width:18.75rem;height:24.875rem}}@media (min-width:1200px) and (max-width:1399.98px){.hero-section-13__decor-2{width:21.25rem;height:28.125rem}}@media (min-width:100rem){.hero-section-13__decor-2{right:-2.25rem;bottom:-5.75rem}}.hero-section-13__decor-2 svg{width:100%;height:100%}.hero-section .crunch-button{display:inline-block}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0)}to{-webkit-transform:rotate(1turn)}}@keyframes spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}.gform_wrapper{overflow:visible!important;margin:0!important}.gform_wrapper form{display:block;width:100%;max-width:100%;margin-top:0}.gform_wrapper form input[type=button]{border:none}.gform_wrapper form button[type=submit]{margin:0}.lottie{grid-template:"A" 1fr;min-width:100vw;background-position:50%;background-size:cover;background-repeat:no-repeat}@media (min-width:576px){.lottie{min-width:0}}@media (min-width:768px) and (max-width:991.98px){.lottie{-webkit-box-align:center;align-items:center;justify-items:center}}.fade{-webkit-transition:opacity .15s linear;transition:opacity .15s linear}@media (prefers-reduced-motion:reduce){.fade{-webkit-transition:none;transition:none}}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.collapsing{height:0;overflow:hidden;-webkit-transition:height .35s;transition:height .35s ease}@media (prefers-reduced-motion:reduce){.collapsing{-webkit-transition:none;transition:none}}.dropdown,.dropend,.dropstart,.dropup{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty:after{margin-left:0}.dropdown-menu{position:absolute;z-index:1000;display:none;min-width:10rem;padding:.5rem 0;margin:0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropup .dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropup .dropdown-toggle:empty:after{margin-left:0}.dropend .dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:0;border-bottom:.3em solid transparent;border-left:.3em solid}.dropend .dropdown-toggle:empty:after{margin-left:0}.dropend .dropdown-toggle:after{vertical-align:0}.dropstart .dropdown-toggle:after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";display:none}.dropstart .dropdown-toggle:before{display:inline-block;margin-right:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:.3em solid;border-bottom:.3em solid transparent}.dropstart .dropdown-toggle:empty:after{margin-left:0}.dropstart .dropdown-toggle:before{vertical-align:0}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid rgba(0,0,0,.15)}.dropdown-item{display:block;width:100%;padding:.25rem 1rem;clear:both;font-weight:400;color:#212529;text-align:inherit;text-decoration:none;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#1e2125;background-color:#e9ecef}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#0d6efd}.dropdown-item.disabled,.dropdown-item:disabled{color:#adb5bd;pointer-events:none;background-color:transparent}.dropdown-menu.show{display:block}:root{--mb-button-size:60px;--mb-bar-width:0.6;--mb-bar-height:4px;--mb-bar-spacing:10px;--mb-animate-timeout:.4s}.mburger{background:0 0;border:none;border-radius:0;color:inherit;display:inline-block;position:relative;box-sizing:border-box;height:var(--mb-button-size);padding:0 0 0 var(--mb-button-size);margin:0;line-height:var(--mb-button-size);vertical-align:middle;-webkit-appearance:none;-moz-appearance:none;appearance:none;outline:0;cursor:pointer}.mburger b{display:block;position:absolute;left:calc(var(--mb-button-size)*(.5 - var(--mb-bar-width)/ 2));width:calc(var(--mb-button-size)*var(--mb-bar-width));height:var(--mb-bar-height);border-radius:calc(var(--mb-bar-height)/2);background:currentColor;color:inherit;opacity:1}.mburger b:first-of-type{bottom:calc(50% + var(--mb-bar-spacing));-webkit-transition:bottom .2s,width .2s,-webkit-transform .2s;transition:bottom .2s ease,width .2s ease,-webkit-transform .2s ease;transition:bottom .2s ease,transform .2s ease,width .2s ease;transition:bottom .2s ease,transform .2s ease,width .2s ease,-webkit-transform .2s ease}.mburger b:nth-of-type(2){top:calc(50% - var(--mb-bar-height)/ 2);-webkit-transition:opacity .2s;transition:opacity .2s ease}.mburger b:nth-of-type(3){top:calc(50% + var(--mb-bar-spacing));-webkit-transition:top .2s,width .2s,-webkit-transform .2s;transition:top .2s ease,width .2s ease,-webkit-transform .2s ease;transition:top .2s ease,transform .2s ease,width .2s ease;transition:top .2s ease,transform .2s ease,width .2s ease,-webkit-transform .2s ease}.mm-wrapper_opened .mburger b:first-of-type{bottom:calc(50% - var(--mb-bar-height)/ 2);-webkit-transform:rotate(45deg);transform:rotate(45deg)}.mm-wrapper_opened .mburger b:nth-of-type(2){opacity:0}.mm-wrapper_opened .mburger b:nth-of-type(3){top:calc(50% - var(--mb-bar-height)/ 2);-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.mburger--spin b:first-of-type{-webkit-transition-delay:.2s,0s;transition-delay:.2s,0s}.mburger--spin b:nth-of-type(2){-webkit-transition-duration:0s;transition-duration:0s;-webkit-transition-delay:.2s;transition-delay:.2s}.mburger--spin b:nth-of-type(3){-webkit-transition-delay:.2s,0s;transition-delay:.2s,0s}.mm-wrapper_opened .mburger--spin b:first-of-type{-webkit-transform:rotate(135deg);transform:rotate(135deg);-webkit-transition-delay:calc(var(--mb-animate-timeout)),calc(var(--mb-animate-timeout) + .2s);transition-delay:calc(var(--mb-animate-timeout)),calc(var(--mb-animate-timeout) + .2s)}.mm-wrapper_opened .mburger--spin b:nth-of-type(2){-webkit-transition-delay:calc(var(--mb-animate-timeout));transition-delay:calc(var(--mb-animate-timeout))}.mm-wrapper_opened .mburger--spin b:nth-of-type(3){-webkit-transform:rotate(225deg);transform:rotate(225deg);-webkit-transition-delay:calc(var(--mb-animate-timeout)),calc(var(--mb-animate-timeout) + .2s);transition-delay:calc(var(--mb-animate-timeout)),calc(var(--mb-animate-timeout) + .2s)}:root{--mm-line-height:20px;--mm-listitem-size:44px;--mm-navbar-size:44px;--mm-offset-top:0;--mm-offset-right:0;--mm-offset-bottom:0;--mm-offset-left:0;--mm-color-border:rgba(0, 0, 0, .1);--mm-color-button:rgba(0, 0, 0, .3);--mm-color-text:rgba(0, 0, 0, .75);--mm-color-text-dimmed:rgba(0, 0, 0, .3);--mm-color-background:#f3f3f3;--mm-color-background-highlight:rgba(0, 0, 0, .05);--mm-color-background-emphasis:hsla(0,0%,100%,0.4);--mm-shadow:0 0 10px rgba(0, 0, 0, .3)}.mm-hidden{display:none!important}.mm-wrapper{overflow-x:hidden;position:relative}.mm-menu{top:0;right:0;bottom:0;left:0;background:#f3f3f3;border-color:rgba(0,0,0,.1);color:rgba(0,0,0,.75);line-height:20px;display:-webkit-box;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;padding:0;margin:0;box-sizing:border-box;position:absolute;top:var(--mm-offset-top);right:var(--mm-offset-right);bottom:var(--mm-offset-bottom);left:var(--mm-offset-left);z-index:0;-ms-scroll-chaining:chained;overscroll-behavior:auto;background:var(--mm-color-background);border-color:var(--mm-color-border);color:var(--mm-color-text);line-height:var(--mm-line-height);-webkit-tap-highlight-color:var(--mm-color-background-emphasis);-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.mm-menu a,.mm-menu a:active,.mm-menu a:hover,.mm-menu a:link,.mm-menu a:visited{text-decoration:none;color:inherit}[dir=rtl] .mm-menu{direction:rtl}.mm-panel{background:#f3f3f3;border-color:rgba(0,0,0,.1);color:rgba(0,0,0,.75);z-index:0;box-sizing:border-box;width:100%;-webkit-overflow-scrolling:touch;overflow:hidden;overflow-y:auto;color:var(--mm-color-text);border-color:var(--mm-color-border);background:var(--mm-color-background);-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0);-webkit-transition:-webkit-transform .4s;transition:-webkit-transform .4s ease;transition:transform .4s ease;transition:transform .4s ease,-webkit-transform .4s ease}.mm-panel:after{height:44px}.mm-panel:not(.mm-hidden){display:block}.mm-panel:after{content:"";display:block;height:var(--mm-listitem-size)}.mm-panel_opened{z-index:1;-webkit-transform:translateZ(0);transform:translateZ(0)}.mm-panel_opened-parent{-webkit-transform:translate3d(-30%,0,0);transform:translate3d(-30%,0,0)}.mm-panel_highest{z-index:2}.mm-panel_noanimation{-webkit-transition:none!important;transition:none!important}.mm-panel_noanimation.mm-panel_opened-parent{-webkit-transform:translateZ(0);transform:translateZ(0)}.mm-panel__content{padding:20px 20px 0}[dir=rtl] .mm-panel:not(.mm-panel_opened){-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}[dir=rtl] .mm-panel.mm-panel_opened-parent{-webkit-transform:translate3d(30%,0,0);transform:translate3d(30%,0,0)}.mm-listitem_vertical>.mm-panel{display:none;width:100%;padding:10px 0 10px 10px;-webkit-transform:none!important;transform:none!important}.mm-listitem_vertical>.mm-panel:after,.mm-listitem_vertical>.mm-panel:before{content:none;display:none}.mm-listitem_opened>.mm-panel{display:block}.mm-listitem_vertical>.mm-listitem__btn{height:44px;height:var(--mm-listitem-size);bottom:auto}.mm-listitem_vertical .mm-listitem:last-child:after{border-color:transparent}.mm-listitem_opened>.mm-listitem__btn:after{-webkit-transform:rotate(225deg);transform:rotate(225deg);right:19px}.mm-btn{-webkit-box-flex:0;flex-grow:0;flex-shrink:0;position:relative;box-sizing:border-box;width:50px;padding:0}.mm-btn:after,.mm-btn:before{border:2px solid rgba(0,0,0,.3);border:2px solid var(--mm-color-button)}.mm-btn_next:after,.mm-btn_prev:before{content:"";border-bottom:none;border-right:none;box-sizing:content-box;display:block;width:8px;height:8px;margin:auto;position:absolute;top:0;bottom:0}.mm-btn_prev:before{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);left:23px;right:auto}.mm-btn_next:after{-webkit-transform:rotate(135deg);transform:rotate(135deg);right:23px;left:auto}.mm-btn_close:after,.mm-btn_close:before{content:"";box-sizing:content-box;display:block;width:5px;height:5px;margin:auto;position:absolute;top:0;bottom:0;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.mm-btn_close:before{border-right:none;border-bottom:none;right:18px}.mm-btn_close:after{border-left:none;border-top:none;right:25px}[dir=rtl] .mm-btn_next:after{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);left:23px;right:auto}[dir=rtl] .mm-btn_prev:before{-webkit-transform:rotate(135deg);transform:rotate(135deg);right:23px;left:auto}[dir=rtl] .mm-btn_close:after,[dir=rtl] .mm-btn_close:before{right:auto}[dir=rtl] .mm-btn_close:before{left:25px}[dir=rtl] .mm-btn_close:after{left:18px}.mm-navbar{min-height:44px;border-bottom:1px solid rgba(0,0,0,.1);background:#f3f3f3;color:rgba(0,0,0,.3);display:-webkit-box;display:flex;min-height:var(--mm-navbar-size);border-bottom:1px solid var(--mm-color-border);background:var(--mm-color-background);color:var(--mm-color-text-dimmed);text-align:center;opacity:1;-webkit-transition:opacity .4s;transition:opacity .4s ease}.mm-navbar>*{min-height:44px}@supports ((position:-webkit-sticky) or (position:sticky)){.mm-navbar_sticky{position:-webkit-sticky;position:sticky;top:0;z-index:1}}.mm-navbar>*{-webkit-box-flex:1;flex-grow:1;display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;box-sizing:border-box}.mm-navbar__title{-webkit-box-flex:1;flex:1 1 50%;display:-webkit-box;display:flex;padding-left:20px;padding-right:20px;overflow:hidden}.mm-navbar__title:not(:last-child){padding-right:0}.mm-navbar__title>span{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}[dir=rtl] .mm-navbar{-webkit-box-orient:horizontal;-webkit-box-direction:reverse;flex-direction:row-reverse}.mm-listview{display:block}.mm-listitem,.mm-listview{list-style:none;padding:0;margin:0}.mm-listitem{color:rgba(0,0,0,.75);border-color:rgba(0,0,0,.1);color:var(--mm-color-text);border-color:var(--mm-color-border);display:block;position:relative;display:-webkit-box;display:flex;flex-wrap:wrap}.mm-listitem:after{content:"";border-color:inherit;border-bottom-width:1px;border-bottom-style:solid;display:block;position:absolute;left:20px;right:0;bottom:0}.mm-listitem a,.mm-listitem a:hover{text-decoration:none}.mm-listitem__btn,.mm-listitem__text{padding:12px;display:block;padding:calc(var(--mm-listitem-size)/ 2 - var(--mm-line-height)/ 2);padding-left:0;padding-right:0;color:inherit}.mm-listitem__text{text-overflow:ellipsis;white-space:nowrap;overflow:hidden;padding-left:20px;padding-right:10px;-webkit-box-flex:1;flex-grow:1;flex-basis:10%}.mm-listitem__btn{background:rgba(3,2,1,0);border-color:inherit;width:auto;padding-right:50px;position:relative}.mm-listitem__btn:not(.mm-listitem__text){border-left-width:1px;border-left-style:solid}.mm-listitem_selected>.mm-listitem__text{background:hsla(0,0%,100%,.4);background:var(--mm-color-background-emphasis)}.mm-listitem_opened>.mm-listitem__btn,.mm-listitem_opened>.mm-panel{background:rgba(0,0,0,.05);background:var(--mm-color-background-highlight)}[dir=rtl] .mm-listitem:after{left:0;right:20px}[dir=rtl] .mm-listitem__text{padding-left:10px;padding-right:20px}[dir=rtl] .mm-listitem__btn{padding-left:50px;border-left-width:0;border-left-style:none}[dir=rtl] .mm-listitem__btn:not(.mm-listitem__text){padding-right:0;border-right-width:1px;border-right-style:solid}.mm-page{box-sizing:border-box;position:relative}.mm-slideout{-webkit-transition:-webkit-transform .4s;transition:-webkit-transform .4s ease;transition:transform .4s ease;transition:transform .4s ease,-webkit-transform .4s ease;z-index:1}.mm-wrapper_opened{overflow-x:hidden;position:relative}.mm-wrapper_opened .mm-page{min-height:100vh}.mm-wrapper_background .mm-page{background:inherit}.mm-menu_offcanvas{position:fixed;right:auto;z-index:0}.mm-menu_offcanvas:not(.mm-menu_opened){display:none}.mm-menu_offcanvas{width:80%;min-width:240px;max-width:440px}.mm-wrapper_opening .mm-menu_offcanvas.mm-menu_opened~.mm-slideout{-webkit-transform:translate3d(80vw,0,0);transform:translate3d(80vw,0,0)}@media (max-width:300px){.mm-wrapper_opening .mm-menu_offcanvas.mm-menu_opened~.mm-slideout{-webkit-transform:translate3d(240px,0,0);transform:translate3d(240px,0,0)}}@media (min-width:550px){.mm-wrapper_opening .mm-menu_offcanvas.mm-menu_opened~.mm-slideout{-webkit-transform:translate3d(440px,0,0);transform:translate3d(440px,0,0)}}.mm-wrapper__blocker{background:rgba(3,2,1,0);overflow:hidden;display:none;position:fixed;top:0;right:0;bottom:0;left:0;z-index:2}.mm-wrapper_blocking,.mm-wrapper_blocking body{overflow:hidden}.mm-wrapper_blocking .mm-wrapper__blocker{display:block}.mm-sronly{border:0!important;clip:rect(1px,1px,1px,1px)!important;-webkit-clip-path:inset(50%)!important;clip-path:inset(50%)!important;white-space:nowrap!important;width:1px!important;min-width:1px!important;height:1px!important;min-height:1px!important;padding:0!important;overflow:hidden!important;position:absolute!important}body.modal-open .mm-slideout{z-index:unset}.popover{position:absolute;top:0;left:0;z-index:1070;display:block;max-width:276px;font-family:Lexend,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}.popover .popover-arrow{position:absolute;display:block;width:1rem;height:.5rem}.popover .popover-arrow:after,.popover .popover-arrow:before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.popover-header{padding:.5rem 1rem;margin-bottom:0;font-size:1rem;background-color:#f0f0f0;border-bottom:1px solid rgba(0,0,0,.2);border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:1rem;color:#212529}.modal{position:fixed;top:0;left:0;z-index:1060;display:none;width:100%;height:100%;overflow-x:hidden;overflow-y:auto;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out,-webkit-transform .3s ease-out;-webkit-transform:translateY(-50px);transform:translateY(-50px)}@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{-webkit-transition:none;transition:none}}.modal.show .modal-dialog{-webkit-transform:none;transform:none}.modal.modal-static .modal-dialog{-webkit-transform:scale(1.02);transform:scale(1.02)}.modal-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-body{position:relative;-webkit-box-flex:1;flex:1 1 auto;padding:1rem}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}}.tns-outer{padding:0!important}.tns-outer [hidden]{display:none!important}.tns-outer [aria-controls],.tns-outer [data-action]{cursor:pointer}.tns-slider{transition:all 0s}.tns-slider>.tns-item{box-sizing:border-box}.tns-no-calc{position:relative;left:0}.tns-autowidth{display:inline-block}.tns-lazy-img{transition:opacity .6s;opacity:.6}.tns-lazy-img.tns-complete{opacity:1}.tns-ah{transition:height 0s}.tns-ovh{overflow:hidden}.tns-visually-hidden{position:absolute;left:-10000em}.tns-transparent{opacity:0;visibility:hidden}.tns-fadeIn{opacity:1;z-index:0}.tns-fadeOut,.tns-normal{opacity:0;z-index:-1}.tns-vpfix{white-space:nowrap}.tns-vpfix>div,.tns-vpfix>li{display:inline-block}.tns-t-subp2{margin:0 auto;width:310px;position:relative;height:10px;overflow:hidden}.tns-t-ct{width:2333.3333333%;width:2333.33333%;position:absolute;right:0}.tns-t-ct:after{content:"";display:table;clear:both}.tns-t-ct>div{width:1.4285714%;width:1.42857%;height:10px;float:left}.acf-block-featured-press__title{max-width:37.5rem}.acf-block-featured-press__content{max-width:34.375rem}.acf-block-featured-press__image--attachment{border-radius:1.25rem;box-shadow:0 .25rem .5rem .125rem rgba(0,0,0,.08)}.resource-preview__item-title{padding-bottom:.125rem;background-image:-webkit-linear-gradient(bottom,currentColor 1px,transparent 0);background-image:linear-gradient(0deg,currentColor 1px,transparent 0);background-size:0 100%;background-repeat:no-repeat;text-decoration:none;-webkit-transition:background-size .4s ease-in-out,opacity .4s ease-in-out;transition:background-size .4s ease-in-out,opacity .4s ease-in-out}.resource-preview__item-title:focus,.resource-preview__item-title:hover{background-size:100% 100%}.resource-preview__link{position:relative;border-top:1px solid #c4c4c4;-webkit-transition:border-color .2s ease-in-out;transition:border-color .2s ease-in-out}.resource-preview__link:hover{border-color:transparent}.resource-preview__link:hover .resource-preview__item-title{background-size:100% 100%}.resource-preview__link:hover:before{opacity:1}.resource-preview__link:before{content:"";position:absolute;top:0;left:-.9375rem;z-index:-1;width:calc(100% + 1.875rem);height:100%;border-radius:.9375rem;background-color:#fff;box-shadow:0 .25rem .5rem 2px rgba(0,0,0,.08);opacity:0;-webkit-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.resource-preview__item-title{display:unset}.pagination-mixitup .mixitup-control{color:#737373}.pagination-mixitup .mixitup-control:hover{color:#2f2f2f}.pagination-mixitup .mixitup-control-next,.pagination-mixitup .mixitup-control-prev{display:none}.pagination-mixitup .mixitup-control-active{color:#2f2f2f!important}@media (max-width:767.98px){.acf-block-text-call-to-action br{display:none}}.acf-block-text-call-to-action__title{font-size:2.25rem}</style>
<meta name="description" content="The latest press mentions of Elloe and our products." />
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
<link rel="canonical" href="https://elloe.ai/press/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Press | Elloe" />
<meta property="og:description" content="The latest press mentions of Elloe and our products." />
<meta property="og:url" content="https://elloe.ai/press/" />
<meta property="og:site_name" content="Forethought" />
<meta property="og:updated_time" content="2024-01-26T09:07:23-08:00" />
<meta property="article:published_time" content="2021-10-11T17:37:36-07:00" />
<meta property="article:modified_time" content="2024-01-26T09:07:23-08:00" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Press | Elloe" />
<meta name="twitter:description" content="The latest press mentions of Elloe and our products." />
<meta name="twitter:label1" content="Time to read" />
<meta name="twitter:data1" content="Less than a minute" />
<script type="application/ld+json" class="rank-math-schema-pro">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://forethought.ai/#organization","name":"Forethought"},{"@type":"WebSite","@id":"https://forethought.ai/#website","url":"https://forethought.ai","name":"Forethought","publisher":{"@id":"https://forethought.ai/#organization"},"inLanguage":"en-US"},{"@type":"BreadcrumbList","@id":"https://forethought.ai/press/#breadcrumb","itemListElement":[{"@type":"ListItem","position":"1","item":{"@id":"https://forethought.ai","name":"Home"}},{"@type":"ListItem","position":"2","item":{"@id":"https://forethought.ai/press/","name":"Press"}}]},{"@type":"WebPage","@id":"https://forethought.ai/press/#webpage","url":"https://forethought.ai/press/","name":"Press | Forethought","datePublished":"2021-10-11T17:37:36-07:00","dateModified":"2024-01-26T09:07:23-08:00","isPartOf":{"@id":"https://forethought.ai/#website"},"inLanguage":"en-US","breadcrumb":{"@id":"https://forethought.ai/press/#breadcrumb"}},{"@type":"Person","@id":"https://forethought.ai/author/it-services/","name":"IT Services","url":"https://forethought.ai/author/it-services/","image":{"@type":"ImageObject","@id":"https://secure.gravatar.com/avatar/9e2c7ce31a351d965ab02283d4881048?s=96&amp;d=mm&amp;r=g","url":"https://secure.gravatar.com/avatar/9e2c7ce31a351d965ab02283d4881048?s=96&amp;d=mm&amp;r=g","caption":"IT Services","inLanguage":"en-US"},"worksFor":{"@id":"https://forethought.ai/#organization"}},{"@type":"Article","headline":"Press | Forethought","datePublished":"2021-10-11T17:37:36-07:00","dateModified":"2024-01-26T09:07:23-08:00","author":{"@id":"https://forethought.ai/author/it-services/","name":"IT Services"},"publisher":{"@id":"https://forethought.ai/#organization"},"description":"The latest press mentions of Forethought and our products.","name":"Press | Forethought","@id":"https://forethought.ai/press/#richSnippet","isPartOf":{"@id":"https://forethought.ai/press/#webpage"},"inLanguage":"en-US","mainEntityOfPage":{"@id":"https://forethought.ai/press/#webpage"}}]}</script>

<link rel="dns-prefetch" href="//code.jquery.com" />
<link rel="dns-prefetch" href="//ajax.googleapis.com" />
<link rel="dns-prefetch" href="//connect.facebook.net" />
<link rel="dns-prefetch" href="//www.google-analytics.com" />
<link rel="dns-prefetch" href="//www.googletagmanager.com" />
<link rel="dns-prefetch" href="//maps.google.com" />
<link rel="dns-prefetch" href="//app.termly.io" />
<link rel="dns-prefetch" href="//d10lpsik1i8c69.cloudfront.net" />
<link rel="dns-prefetch" href="//cdn.truconversion.com" />
<link rel="dns-prefetch" href="//js.hscollectedforms.net" />
<link rel="dns-prefetch" href="//js.hsleadflows.net" />
<link rel="dns-prefetch" href="//js.hs-analytics.net" />
<link rel="dns-prefetch" href="//www.googleadservices.com" />
<style id="wp-block-library-theme-inline-css"></style>
<style id="rank-math-toc-block-style-inline-css"></style>
<style id="classic-theme-styles-inline-css"></style>
<style id="global-styles-inline-css"></style>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/default_page.bundle.js?ver=1713460807" id="default-page-scripts-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/vendor.bundle.js?ver=1713460807" id="vendor-scripts-js" defer></script>
<link rel="https://api.w.org/" href="https://forethought.ai/wp-json/" /><link rel="alternate" type="application/json" href="https://forethought.ai/wp-json/wp/v2/pages/539" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://forethought.ai/xmlrpc.php?rsd" />
<link rel="shortlink" href="https://forethought.ai/?p=539" />
<link rel="alternate" type="application/json+oembed" href="https://forethought.ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforethought.ai%2Fpress%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://forethought.ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforethought.ai%2Fpress%2F&#038;format=xml" />
</head>
<body class="page-template-default page page-id-539">
<img width="99999" height="99999" alt class="hide" style="pointer-events: none; position: absolute; top: 0; left: 0; width: 99vw; height: 99vh; max-width: 99vw; max-height: 99vh;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSI5OTk5OXB4IiBoZWlnaHQ9Ijk5OTk5cHgiIHZpZXdCb3g9IjAgMCA5OTk5OSA5OTk5OSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIGZpbGw9Im5vbmUiIGZpbGwtb3BhY2l0eT0iMCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9Ijk5OTk5IiBoZWlnaHQ9Ijk5OTk5Ij48L3JlY3Q+IDwvZz4gPC9zdmc+">
<!--[if IE]>
            <div class="alert alert-ie" role="alert">
                <string>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
            </div>
        <![endif]-->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTRVVPZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<noscript><img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2638212&fmt=gif" /></noscript>

<a class="screen-reader-shortcut-header" href="#main" tabindex="0">Skip to main content</a>
<div class="main-content">
<?php 
  include 'header.php';
  ?>
<main id="main">
<section class="hero-section hero-section-13 overflow-hidden position-relative">
<div class="container">
<div class="row">
<div class="hero-section-13__content col-lg-12">
<h1 class="hero-section-13__title text-center mx-auto">We’re on the leading edge of AI-first customer experiences.</h1>
</div>
</div>
</div>
<div class="hero-section-13__decors-wrapper position-absolute fill-the-whole-space m-auto h-100 z-index-minus-1">
<div class="hero-section-13__decor-1 position-absolute">
<img src="https://forethought.ai/wp-content/themes/forethought/images/hero-section/img__hero-section-13-1.svg" />
<img width="316" height="316" src="https://forethought.ai/wp-content/uploads/2021/10/press-1.jpg" class="hero-section-13__image d-block adjustable-element rounded-circle position-absolute" alt data-anim="zoom-in" data-anim-zoom-start="0" decoding="async" srcset="https://forethought.ai/wp-content/uploads/2021/10/press-1.jpg 316w, https://forethought.ai/wp-content/uploads/2021/10/press-1-150x150.jpg 150w, https://forethought.ai/wp-content/uploads/2021/10/press-1-100x100.jpg 100w, https://forethought.ai/wp-content/uploads/2021/10/press-1-200x200.jpg 200w, https://forethought.ai/wp-content/uploads/2021/10/press-1-250x250.jpg 250w" sizes="(max-width: 316px) 100vw, 316px" />
</div>
<div class="hero-section-13__decor-2 position-absolute">
<img src="https://forethought.ai/wp-content/themes/forethought/images/hero-section/img__hero-section-13-2.svg" />
</div>
</div>
</section>
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">&#13;
&#13;
</div></div></div></div>&#13;
<section id="acf-block-featured-press-block_7dca51cba35fce10336839c17aa932ed" class="acf-block-featured-press c-mt-0 c-pt-6  c-pb-8 bg-blue-light">&#13;
<div class="container" data-anim="fade-up">&#13;
<div class="row">&#13;
<div class="col-lg-5 order-lg-2">&#13;
&#13;
<div class="acf-block-featured-press__image c-mt-5 c-mt-lg-0">&#13;
<a href="https://forethought.ai/press/forethought-wins-two-new-comparably-awards-best-ceo-for-diversity-and-best-career-growth/" class="hover-opacity-0-75">&#13;
<img decoding="async" width="650" height="325" src="https://forethought.ai/wp-content/uploads/2023/06/Comparably-Summer-2023-650x325.png" class="acf-block-featured-press__image--attachment adjustable-element wp-post-image" alt srcset="https://forethought.ai/wp-content/uploads/2023/06/Comparably-Summer-2023-650x325.png 650w, https://forethought.ai/wp-content/uploads/2023/06/Comparably-Summer-2023-100x50.png 100w, https://forethought.ai/wp-content/uploads/2023/06/Comparably-Summer-2023-200x100.png 200w, https://forethought.ai/wp-content/uploads/2023/06/Comparably-Summer-2023-445x223.png 445w, https://forethought.ai/wp-content/uploads/2023/06/Comparably-Summer-2023-500x250.png 500w, https://forethought.ai/wp-content/uploads/2023/06/Comparably-Summer-2023-600x300.png 600w, https://forethought.ai/wp-content/uploads/2023/06/Comparably-Summer-2023-800x400.png 800w, https://forethought.ai/wp-content/uploads/2023/06/Comparably-Summer-2023-1000x500.png 1000w, https://forethought.ai/wp-content/uploads/2023/06/Comparably-Summer-2023.png 1200w" sizes="(max-width: 650px) 100vw, 650px"> </a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
<div class="col-lg-7">&#13;
&#13;
&#13;
<span class="font-size-12 line-height-1-3 letter-spacing-200 text-uppercase font-family-base fw-semibold d-block c-mt-5">Featured press</span>&#13;
&#13;
&#13;
&#13;
<h2 class="acf-block-featured-press__title h2 c-mt-3" id="-1"><a href="https://elloe.ai/press/forethought-wins-two-new-comparably-awards-best-ceo-for-diversity-and-best-career-growth/" class="text-secondary animated-border-bottom">Elloe Wins Two New Comparably Awards: Best CEO for Diversity and Best Career Growth</a></h2>&#13;
&#13;
&#13;
<div class="acf-block-featured-press__content text-gray c-mt-1">San Francisco, CA, June 15, 2023 &#x2013; Elloe, the renowned generative AI platform for customer support, continues to receive recognition for its outstanding workplace culture and achievements. The company is proud to&#x2026;</div>&#13;
&#13;
&#13;
<a href="https://Elloe.ai/press/forethought-wins-two-new-comparably-awards-best-ceo-for-diversity-and-best-career-growth/" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-5">&#13;
&#13;
Read more &#13;
</a>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</section>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
&#13;
</div></div></div></div>&#13;
<div id="acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e" class="acf-block-press-list c-mt-9 c-mb-9 js-press-list-wrapper">&#13;
<div class="container">&#13;
&#13;
<div class="acf-block-resources-list__list--nogrid">&#13;
&#13;
&#13;
<div class="row js-press-list">&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/forethought-introduces-autoflows-ushers-in-ai-first-customer-support/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-introduc-2">Elloe Introduces Autoflows, Ushers in AI-First Customer Support</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">September 21, 2023</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/forethought-advances-email-based-customer-support-with-new-product-enhancements/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-advances-3">Elloe Advances Email-Based Customer Support with New Product Enhancements</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">July 18, 2023</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/generative-ai-leader-forethought-enhances-suite-with-new-discover-capabilities/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="generative-ai-leader-4">Generative AI Leader Elloe Enhances Suite With New Discover Capabilities</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">June 13, 2023</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/agent-response-generation/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="generative-ai-leader-5">Generative AI Leader Elloe Enhances Suite With Agent Response Generation</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">May 25, 2023</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/mitchell-hanson-joins-forethought-as-vp-of-demand-generation/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="b2b-marketing-expert-6">B2B Marketing Expert Mitchell Hanson Joins Elloe as VP of Demand Generation</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">April 17, 2023</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.einpresswire.com/article/625187817/forethought-wins-three-comparably-awards-for-2023" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-wins-thr-7">Elloe Wins Three Comparably Awards for 2023</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">March 30, 2023</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/forethought-earns-spot-on-g2s-2023-best-software-awards/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="generative-ai-leader-8">Generative AI Leader Elloe Recognized as One of G2&#x2019;s Best Software Products for 2023</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">February 8, 2023</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/go-to-market-veteran-mike-stevens-joins-forethought-as-svp-of-sales/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="go-to-market-veteran-9">Go-to-Market Veteran Mike Stevens Joins Elloe as SVP of Sales</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">January 18, 2023</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/industry-veteran-aaron-verstraete-joins-forethought-as-vp-of-strategic-alliances/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="industry-veteran-aar-10">Industry Veteran Aaron Verstraete Joins Elloe as VP of Strategic Alliances</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">January 5, 2023</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.prnewswire.com/news-releases/forethought-named-as-one-of-cnbcs-top-startups-for-the-enterprise-301670641.html?tc=eml_cleartime" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-named-as-11">Elloe Named as One of CNBC&#x2019;s Top Startups for the Enterprise</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">November 7, 2022</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/forethought-announces-vp-of-engineering/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="engineering-industry-12">Engineering Industry Veteran Alan Lu Joins Elloe as VP of Engineering</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">October 31, 2022</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.prnewswire.com/news-releases/ai-powered-customer-experience-trailblazer-forethought-announces-agenda-for-virtual-forward-conference-301608670.html?tc=eml_cleartime" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-announce-13">Elloe Announces Agenda for Virtual Forward Conference</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">August 25, 2022</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.businesswire.com/news/home/20220615005975/en/Forethought-Launches-Solve-Starter-Packs-Enhancing-Workflow-Builder-Offering" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-launches-14">Elloe Launches AI Co-Pilot Starter Packs, Enhancing Workflow Builder Offering</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">June 15, 2022</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.businesswire.com/news/home/20220602005390/en/Forethought-Announces-Enhancements-to-AI-Platform-with-the-General-Availability-of-Workflow-Builder" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-announce-15">Elloe Announces Enhancements to AI Platform with the General Availability of Workflow Builder</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">June 2, 2022</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.businesswire.com/news/home/20220315005222/en/Forethought-Enhances-Omnichannel-Support-with-Zendesk-Sunshine-Conversations-Integration" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-enhances-16">Elloe Enhances Omnichannel Support with Zendesk Sunshine Conversations Integration?</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">March 15, 2022</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://Elloe.ai/press/industry-veteran-dave-ginsburg-joins-forethought-as-chief-customer-officer/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="industry-veteran-dav-17">Industry Veteran Dave Ginsburg Joins Elloe as Chief Customer Officer</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">January 12, 2022</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.businesswire.com/news/home/20211214006409/en/Forethought-Raises-65-Million-Series-C-to-Accelerate-Digital-Transformation-in-Customer-Service" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-raises-18">Elloe Raises $65 Million Series C to Accelerate Digital Transformation in Customer Service</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">December 15, 2021</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/ai-startup-forethought-and-mila-announce-partnership-to-advance-ai-for-customer-experience/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="ai-startup-forethoug-19">AI Startup Elloe and Mila Announce Partnership to Advance AI for Customer Experience</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">December 7, 2021</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.einpresswire.com/article/556002608/forethought-launches-workflow-builder-amidst-company-branding-refresh" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-unveils-20">Elloe Unveils New Brand and Announces Workflow Builder to Streamline Self-Service</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">November 10, 2021</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.einpresswire.com/article/554439184/forethought-announces-release-of-assist-anywhere-to-accelerate-agent-productivity" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-announce-21">Elloe Announces Release of Assist Anywhere to Accelerate Agent Productivity</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">October 21, 2021</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.einpresswire.com/article/553679478/forethought-named-one-of-forbes-next-billion-dollar-startups" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-named-on-22">Elloe Named One of Forbes&#x2019; Next Billion Dollar Startups</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">October 12, 2021</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/forethought-hires-creator-of-fastapi-sebastian-ramirez/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-hires-cr-23">Elloe Hires Creator of FastAPI</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">June 9, 2021</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.businesswire.com/news/home/20210602005161/en/Forethought%E2%80%99s-AI-Agent-Agatha-Now-Supports-More-Than-100-Languages-Globally" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethoughts-24">Elloe&#x2019;s AI Agent Agatha Now Supports More Than 100 Languages Globally</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">June 2, 2021</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/ai-enterprise-company-recognized-as-best-place-to-work-in-salt-lake-city/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="ai-enterprise-compan-25">AI Enterprise Company Recognized as Best Place to Work in Salt Lake City</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">April 7, 2021</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/tech-leaders-come-together-to-build-out-the-future-of-ai-in-customer-support/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="tech-leaders-come-to-26">Tech Leaders Come Together to Build Out the Future of AI in Customer Support</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">November 25, 2020</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://Elloe.ai/press/ai-for-the-enterprise-innovator-forethought-raises-17-million-series-b-featuring-tech-entertainment-a-listers/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="ai-for-the-enterpris-27">AI For the Enterprise Innovator, Elloe, Raises $17 Million Series B Featuring Tech &amp; Entertainment A-listers</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">October 28, 2020</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/forethought-earns-soc-2-type-ii-certification/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-earns-so-28">Elloe Earns SOC 2 Type II Certification</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">October 23, 2020</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://Elloe.ai/press/intelligent-routing-now-available-in-helpdesk-servicenow/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="triage-now-available-29">Intelligent Routing Now Available in Helpdesk ServiceNow</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">October 14, 2020</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/techcrunch-disrupt-battlefield-2018-winner-forethought-takes-stage-in-2019/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="techcrunch-disrupt-b-30">TechCrunch Disrupt Battlefield 2018 Winner Elloe Takes Stage in 2019</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">October 2, 2019</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://forethought.ai/press/agatha-predictions-now-Intelligent Routing-launch-with-forethought-founder-deon-nicholas-at-techcrunch/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="agatha-predictions-31">Agatha Predictions (Now Intelligent Routing) Launch with Elloe Founder Deon Nicholas at TechCrunch</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">September 13, 2019</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://Elloe.ai/press/techcrunch-disrupt-winner-forethought-launches-nlu-customer-support-routing-tech/" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="techcrunch-disrupt-w-32">TechCrunch Disrupt Winner Elloe Launches NLU Customer Support Routing Tech</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">September 5, 2019</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://news.crunchbase.com/news/forethought-raises-9m-series-a-to-let-ai-augment-customer-service/" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-raises-33">Elloe Raises $9M Series A To Let AI Augment Customer Service</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">December 4, 2018</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://www.forbes.com/30-under-30/2019/enterprise-technology/#636ee521e1d3" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="co-founders-win-forb-34">Co-founders Win Forbes 30 Under 30 Award</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">November 3, 2018</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
<div class="col-12 col-md-4 col-lg-3 c-mb-7 c-mb-md-6 js-press-preview-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e">&#13;
&#13;
&#13;
<div class="resource-preview d-flex w-100 acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e press">&#13;
<a href="https://techcrunch.com/2018/09/05/forethought-looks-to-reshape-enterprise-search-with-ai/" target="_blank" rel="noopener nofollow" class="resource-preview__link w-100 bg-white c-py-6 c-py-md-4">&#13;
&#13;
<h4 class="resource-preview__item-title font-size-18 fw-medium line-height-1-7 text-secondary font-family-base" id="forethought-looks-to-35">Elloe Looks to Reshape Enterprise Search with AI</h4>&#13;
&#13;
&#13;
<span class="d-block font-size-14 line-height-1-4 text-light-black c-mt-2">September 18, 2018</span>&#13;
&#13;
&#13;
&#13;
</a>&#13;
</div>&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
&#13;
</div>&#13;
&#13;
<div class="acf-block-press-list__pagination pagination-mixitup mixitup-page-list d-flex align-items-center justify-content-center c-mt-5 line-height-1 js-press-pagination-acf-block-press-list-block_bd9d730f76bdda6793fa948118e8385e"></div>&#13;
&#13;
</div>&#13;
</div>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
&#13;
</div></div></div></div>&#13;
<div id="acf-block-text-call-to-action-block_f43bbdf8104bc3d3e7ca20271d94b589" class="acf-block-text-call-to-action c-pt-8 c-pb-8 bg-blue-light" data-anim="fade-up">&#13;
<div class="container">&#13;
<div class="row">&#13;
<div class="col-12 col-lg-8 mx-auto text-center">&#13;
&#13;
&#13;
<h2 class="acf-block-text-call-to-action__title font-size-36 line-height-1-4">We spend a lot of time thinking about <br>&#13;
customer success.</h2>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-text-call-to-action__text  entry-content font-size-18 line-height-1-5 text-gray c-px-lg-6 c-mt-6 c-mt-lg-3">&#13;
<p><span style="font-weight: 400;">Elloe puts out frequent articles, webinars, e-books,<br>
</span><span style="font-weight: 400;">and other resources on the topic of customer-centered AI.<br>
Check out our resources for our take on industry news and trends.</span></p>
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<a href="https://Elloe.ai/resources/" target="_self" class="crunch-button crunch-button__outline crunch-button__outline--secondary-color crunch-button__outline--purple-gradient crunch-button__outline--medium c-mt-8 c-mt-lg-5">Our resources</a>&#13;
&#13;
&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content">
&#13;
&#13;
</div></div></div></div>&#13;
&#13;
<section id="acf-block-cta-block_fbc7080ad1965e07ef178c1b6d1d88b6" class="acf-block-cta position-relative bg-secondary c-pt-lg-8 overflow-hidden">&#13;
<div class="container position-relative z-index-1" data-anim="fade-up">&#13;
<div class="row">&#13;
<div class="col-lg-5">&#13;
&#13;
&#13;
<h2 class="font-size-45 text-white" id="think-outside-the-bo-36">Think outside the bot.&#x2122;</h2>&#13;
&#13;
&#13;
&#13;
<div class="acf-block-cta__content entry-content c-mt-5 text-gray-3">&#13;
<p>Everyone hates traditional chatbots.</p>
<p>See a demo of Elloe today and learn how our Generative AI Platform is driving efficiency and ROI for top support teams.</p>
</div>&#13;
&#13;
&#13;
&#13;
&#13;
<a href="https://www.elloe.ai/request-demo/" target="_self" class="crunch-button crunch-button__outline crunch-button__outline--white-color c-mt-6">Request a demo</a>&#13;
&#13;
&#13;
</div>&#13;
<div class="acf-block-cta__decor-wrapper col-lg-7 position-relative c-mt-6 c-mt-lg-0 d-lg-flex align-items-end">&#13;
&#13;
&#13;
<div class="acf-block-cta__circle position-relative z-index-2 mx-auto d-flex align-items-center justify-content-center">&#13;
<div class="acf-block-cta__circle-decor position-absolute fill-the-whole-space h-100 w-100 spin-animation d-flex justify-content-center">&#13;
<img decoding="async" src="https://forethought.ai/wp-content/themes/forethought/images/img__decor-circle.svg" alt="Decor Half Circle Orange" width="100%" height="100%">&#13;
</div>&#13;
<img loading="lazy" decoding="async" width="500" height="500" src="https://forethought.ai/wp-content/uploads/2021/10/think-forward-500x500.jpg" class="adjustable-element lazyload rounded-circle" alt data-lazy="true" srcset="https://forethought.ai/wp-content/uploads/2021/10/think-forward-500x500.jpg 500w, https://forethought.ai/wp-content/uploads/2021/10/think-forward-150x150.jpg 150w, https://forethought.ai/wp-content/uploads/2021/10/think-forward-400x400.jpg 400w, https://forethought.ai/wp-content/uploads/2021/10/think-forward-445x445.jpg 445w, https://forethought.ai/wp-content/uploads/2021/10/think-forward-250x250.jpg 250w" sizes="(max-width: 500px) 100vw, 500px"> </div>&#13;
&#13;
&#13;
<div class="acf-block-cta__decor position-absolute z-index-1">&#13;
<svg width="61.125rem" height="21.9375rem" class="acf-block-cta__decor-svg acf-block-cta__decor-svg--desktop d-none d-lg-block" viewbox="0 0 978 351" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<title>Call to action decor</title>&#13;
<path d="M45 351L45.0001 316.123C45.0002 282.986 71.863 256.123 105 256.123L194 256.123C227.137 256.122 254 229.26 254 196.123L254 105C254 71.8629 280.863 45 314 45L1050 45" stroke="url(#acf-block-cta-block_fbc7080ad1965e07ef178c1b6d1d88b6-1)" stroke-width="90" stroke-linecap="round"></path>&#13;
<defs>&#13;
<lineargradient id="acf-block-cta-block_fbc7080ad1965e07ef178c1b6d1d88b6-1" x1="531.438" y1="50.417" x2="531.691" y2="348.811" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#6BDAB6"></stop>&#13;
<stop offset="1" stop-color="#66E0F6"></stop>&#13;
</lineargradient>&#13;
</defs>&#13;
</svg>&#13;
&#13;
<svg width="23.1875rem" height="16rem" class="acf-block-cta__decor-svg acf-block-cta__decor-svg--mobile d-lg-none" viewbox="0 0 375 258" fill="none" xmlns="http://www.w3.org/2000/svg">&#13;
<title>Call to action decor</title>&#13;
<path d="M-64.4478 228L-64.4477 205.411C-64.4476 183.95 -47.0497 166.552 -25.5884 166.552L32.0533 166.552C53.5147 166.552 70.9126 149.154 70.9126 127.693L70.9126 68.6764C70.9126 47.2149 88.3106 29.8169 109.772 29.8169L586.448 29.8169" stroke="url(#acf-block-cta-block_fbc7080ad1965e07ef178c1b6d1d88b6-2)" stroke-width="58.2891" stroke-linecap="round"></path>&#13;
<defs>&#13;
<lineargradient id="acf-block-cta-block_fbc7080ad1965e07ef178c1b6d1d88b6-2" x1="250.597" y1="33.3253" x2="250.761" y2="226.582" gradientunits="userSpaceOnUse">&#13;
<stop offset="0" stop-color="#6BDAB6"></stop>&#13;
<stop offset="1" stop-color="#66E0F6"></stop>&#13;
</lineargradient>&#13;
</defs>&#13;
</svg>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
</div>&#13;
&#13;
</section>&#13;
<div class="container"><div class="row"><div class="col-12 mx-auto"><div class="entry-content"></div></div></div></div>
</main>
<div class="js-main-footer-wrapper">
<?php 
  include 'footer.php';
  ?>
<a href="#main" aria-label="Return to top" class="return-to-top js-scroll-to js-return-to-top d-none d-md-flex align-items-center justify-content-center position-fixed text-center text-light-black border-0 rounded-circle">
<svg aria-hidden="true" data-prefix="far" data-icon="chevron-up" class="return-to-top__chevron d-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
<title>Icon chevron up</title>
<path fill="currentColor" d="M6.101 359.293L25.9 379.092c4.686 4.686 12.284 4.686 16.971 0L224 198.393l181.13 180.698c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 132.908c-4.686-4.686-12.284-4.686-16.971 0L6.101 342.322c-4.687 4.687-4.687 12.285 0 16.971z"></path>
</svg>
</a>
<!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="rocketlazyloadscript" data-rocket-src="https://solve-widget.forethought.ai/embed.js" data-rocket-type="application/javascript" id="forethought-widget-embed-script" data-api-key="b85ea646-ae19-423f-bb92-523ba589cbdd" data-ft-PIN-TEST data-ft-EMAIL-TEST async></script> -->

<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
(function(d,s,i,r) {
if (d.getElementById(i)){return;}
var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/4131007.js';
e.parentNode.insertBefore(n, e);
})(document,"script","hs-analytics",300000);
</script>

<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="rocket-browser-checker-js-after">
/* <![CDATA[ */
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
/* ]]> */
</script>
<script id="rocket-preload-links-js-extra">
/* <![CDATA[ */
var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/forethought.ai","onHoverDelay":"100","rateThrottle":"3"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="rocket-preload-links-js-after">
/* <![CDATA[ */
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://code.jquery.com/jquery-3.5.0.min.js?ver=3.5.0" id="jquery-core-js" defer></script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://code.jquery.com/jquery-migrate-3.2.0.min.js?ver=3.2.0" id="jquery-migrate-js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="https://forethought.ai/wp-content/cache/min/1/wp-content/themes/forethought/dist/acf_block_press_list.bundle.js?ver=1713461182" id="press-list-block-scripts-js" defer></script>
</body>
</html>