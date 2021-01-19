"use strict";$(document).ready(function(){var e=document.querySelector(".cursor"),t=0,n=0,o=0,i=0;TweenMax.to({},.01,{repeat:-1,onRepeat:function(){t+=(o-t)/9,n+=(i-n)/9,TweenMax.set(e,{css:{left:t-12,top:n-12}})}}),$(document).on("mousemove",function(e){o=e.clientX,i=e.clientY}),$(".hero-carousel").on("mouseenter",function(){$(".cursor").addClass("active")}),$(".hero-carousel").on("mouseleave",function(){$(".cursor").removeClass("active")}),$(".hero-carousel a").on("mouseenter",function(){$(".cursor").removeClass("active")}),$(".hero-carousel a").on("mouseleave",function(){$(".cursor").addClass("active")})}),$(document).ready(function(){document.querySelector(".player");var n=document.querySelector("#video"),e=document.querySelector(".play-btn"),t=document.querySelector(".volume-btn"),o=document.querySelector(".volume-filled"),i=(document.querySelector(".time-current"),document.querySelector(".time-total"),document.querySelector(".fullscreen"),1);function r(){n.paused?n.play():n.pause(),e.classList.toggle("paused")}function l(){e.classList.toggle("playing")}e.addEventListener("click",r),n.addEventListener("click",r),n.addEventListener("play",l),n.addEventListener("pause",l),n.addEventListener("ended",l),t.addEventListener("click",function(){n.volume?(i=n.volume,n.volume=0,t.classList.add("muted"),o.style.width=0):(n.volume=i,t.classList.remove("muted"),o.style.width="".concat(100*i,"%"))}),window.addEventListener("mousedown",function(){return!0}),window.addEventListener("mouseup",function(){return!1}),window.addEventListener("keydown",function(e){switch(e.key){case" ":r();case"ArrowRight":n.currentTime+=5;case"ArrowLeft":n.currentTime-=5;default:return}});var s=null,a=document.getElementById("video-canvas"),d=a.getContext("2d");function c(){var e=n.videoWidth,t=n.videoHeight;a.width=e,a.height=t,d.drawImage(n,0,0,e,t);d.getImageData(0,0,e,t).data}n.addEventListener("play",function(){setInterval(c,301)}),n.addEventListener("pause",function(){clearTimeout(s)})}),$(document).ready(function(){$(".hero-carousel").flickity({autoPlay:3e3}),$(window).scroll(function(){var e=$(".navbar");200<=$(window).scrollTop()?e.addClass("fixed"):e.removeClass("fixed")}),$("#contact-modal-trigger").on("submit",function(e){e.preventDefault(),$(".modal").modal("toggle"),$("#name_input").val($("#placeholder_name_input").val())})}),$(document).ready(function(){gsap.registerPlugin(ScrollTrigger);var t=new LocomotiveScroll({el:document.querySelector(".smooth-container"),smooth:!0});t.on("scroll",ScrollTrigger.update),ScrollTrigger.scrollerProxy(".smooth-container",{scrollTop:function(e){return arguments.length?t.scrollTo(e,0,0):t.scroll.instance.scroll.y},getBoundingClientRect:function(){return{top:0,left:0,width:window.innerWidth,height:window.innerHeight}},pinType:document.querySelector(".smooth-container").style.transform?"transform":"fixed"});var e,n=document.querySelector(".wisdom");n&&(gsap.set(n,{backgroundColor:"#FFF"}),(e=gsap.timeline({scrollTrigger:{trigger:n,scrub:!0,scroller:".smooth-container"}})).to(n,{duration:1,backgroundColor:"#13989e",ease:"none"}),e.to(n,{duration:1,backgroundColor:"#fff",ease:"none"})),$(".animate-heading").each(function(e,t){ScrollTrigger.create({trigger:t,onEnter:function(){gsap.fromTo(t,{x:400,y:0,autoAlpha:0},{duration:3,x:0,y:0,autoAlpha:1,ease:"expo",overwrite:"auto"})},onEnterBack:function(){gsap.fromTo(t,{x:400,y:0,autoAlpha:0},{duration:3,x:0,y:0,autoAlpha:1,ease:"expo",overwrite:"auto"})},onLeave:function(){gsap.fromTo(t,{x:0,y:0,autoAlpha:1},{duration:2.5,x:-400,y:0,autoAlpha:0,ease:"expo",overwrite:"auto"})},end:function(){return"top 10%"},scroller:".smooth-container"})});var o,i,r=document.querySelector(".navigation");ScrollTrigger.create({trigger:".page-content",scroller:".smooth-container",start:"top top",end:"bottom bottom",onUpdate:function(e){var t;o=e.progress.toFixed(2),i=e.direction,"0.00"===o?t="navigation navigation--top":"1.00"===o?t="navigation navigation--notTop navigation--bottom":(t="navigation navigation--notTop",1===i&&768<$(window).width()&&!$(".hamburger").hasClass("is-active")&&(console.log($(window).width()),t+=" navigation--unpinned")),r.className=t}}),ScrollTrigger.addEventListener("refresh",function(){return t.update()}),ScrollTrigger.refresh(),void 0===Cookies.get("viewed-video")?($(".home .hamburger").addClass("close-video-btn is-active"),$(".navigation__logo-dark").hide(),$(".home").addClass("video-playing"),$(".video-playing .page-content > :not(.player-container)").hide(),$(".hamburger").on("click",function(e){e.preventDefault(),Cookies.set("viewed-video",1),$(this).toggleClass("is-active"),$(this).removeClass("close-video-btn"),$(".navigation__logo-dark").fadeIn("slow"),$(".video-playing .page-content > :not(.player-container)").show(),$(".player-container").fadeOut("slow",function(){$(this).remove(),ScrollTrigger.refresh()})})):($(".player-container").remove(),$(".hamburger").on("click",function(e){$(this).toggleClass("is-active"),$(".overlay").toggleClass("active"),$(".page-content").toggleClass("smaller")}))});var _gsScope="undefined"!=typeof module&&module.exports&&"undefined"!=typeof global?global:window;!function(n){function x(e){var t=e.nodeType,n="";if(1===t||9===t||11===t){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=x(e)}else if(3===t||4===t)return e.nodeValue;return n}function I(e,t,n,o){var i;return(n=n||z(e,null))?i=(e=n.getPropertyValue(t.replace(r,"-$1").toLowerCase()))||n.length?e:n[t]:e.currentStyle&&(i=(n=e.currentStyle)[t]),o?i:parseInt(i,10)||0}function l(e){return!!(e.length&&e[0]&&(e[0].nodeType&&e[0].style&&!e.nodeType||e[0].length&&e[0][0]))}function S(e){return(e.charCodeAt(0)-55296<<10)+(e.charCodeAt(1)-56320)+65536}function a(e,t){var n=-1!==(e=e||"").indexOf("++"),o=1;return n&&(e=e.split("++").join("")),function(){return"<"+t+s+(e?" class='"+e+(n?o++:"")+"'>":">")}}function j(e,t,n){var o=e.nodeType;if(1===o||9===o||11===o)for(e=e.firstChild;e;e=e.nextSibling)j(e,t,n);else 3!==o&&4!==o||(e.nodeValue=e.nodeValue.split(t).join(n))}function F(e,t){for(var n=t.length;-1<--n;)e.push(t[n])}function d(e){for(var t=[],n=e.length,o=0;o!==n;t.push(e[o++]));return t}function D(e,t,n){for(var o;e&&e!==t;){if(o=e._next||e.nextSibling)return o.textContent.charAt(0)===n;e=e.parentNode||e._parent}return!1}function P(e){for(var t,n=d(e.childNodes),o=n.length,i=0;i<o;i++)(t=n[i])._isSplit?P(t):(i&&3===t.previousSibling.nodeType?t.previousSibling.nodeValue+=(3===t.nodeType?t:t.firstChild).nodeValue:3!==t.nodeType&&e.insertBefore(t.firstChild,t),e.removeChild(t))}function c(e,t,n,o){var i,r,l=d(e.childNodes),s=l.length,a="absolute"===t.position||!0===t.absolute;if(3!==e.nodeType||1<s){for(t.absolute=!1,i=0;i<s;i++)3===(r=l[i]).nodeType&&!/\S+/.test(r.nodeValue)||(a&&3!==r.nodeType&&"inline"===I(r,"display",null,!0)&&(r.style.display="inline-block",r.style.position="relative"),r._isSplit=!0,c(r,t,n,o));return t.absolute=a,void(e._isSplit=!0)}!function(e,t,n,o){var i,r,l,s,a,d,c,u=t.span?"span":"div",p=t.type||t.split||"chars,words,lines",h=(p.indexOf("words"),-1!==p.indexOf("chars")),g="absolute"===t.position||!0===t.absolute,f=t.wordDelimiter||" ",v=" "!==f?"":g?"&#173; ":" ",m=t.span?"</span>":"</div>",y=!0,p=G.createElement("div"),g=e.parentNode;for(g.insertBefore(p,e),p.textContent=e.nodeValue,g.removeChild(e),p=-1!==(i=x(e=p)).indexOf("<"),!1!==t.reduceWhiteSpace&&(i=i.replace(b," ").replace(w,"")),p&&(i=i.split("<").join("{{LT}}")),s=i.length,r=(" "===i.charAt(0)?v:"")+n(),l=0;l<s;l++)if((a=i.charAt(l))===f&&i.charAt(l-1)!==f&&l){for(r+=y?m:"",y=!1;i.charAt(l+1)===f;)r+=v,l++;l===s-1?r+=v:")"!==i.charAt(l+1)&&(r+=v+n(),y=!0)}else"{"===a&&"{{LT}}"===i.substr(l,6)?(r+=h?o()+"{{LT}}</"+u+">":"{{LT}}",l+=5):55296<=a.charCodeAt(0)&&a.charCodeAt(0)<=56319||65024<=i.charCodeAt(l+1)&&i.charCodeAt(l+1)<=65039?(d=S(i.substr(l,2)),c=S(i.substr(l+2,2)),c=127462<=d&&d<=127487&&127462<=c&&c<=127487||127995<=c&&c<=127999?4:2,r+=h&&" "!==a?o()+i.substr(l,c)+"</"+u+">":i.substr(l,c),l+=c-1):r+=h&&" "!==a?o()+a+"</"+u+">":a;e.outerHTML=r+(y?m:""),p&&j(g,"{{LT}}","<")}(e,t,n,o)}var i=n.GreenSockGlobals||n,e=function(e){var t,n=e.split("."),o=i;for(t=0;t<n.length;t++)o[n[t]]=o=o[n[t]]||{};return o}("com.greensock.utils"),G=document,z=G.defaultView?G.defaultView.getComputedStyle:function(){},r=/([A-Z])/g,w=/(?:\r|\n|\t\t)/g,b=/(?:\s\s+)/g,s=" style='position:relative;display:inline-block;"+(G.all&&!G.addEventListener?"*display:inline;*zoom:1;'":"'"),o=e.SplitText=i.SplitText=function(e,t){if("string"==typeof e&&(e=o.selector(e)),!e)throw"cannot split a null element.";this.elements=l(e)?function(e){for(var t,n,o=[],i=e.length,r=0;r<i;r++)if(t=e[r],l(t))for(n=t.length,n=0;n<t.length;n++)o.push(t[n]);else o.push(t);return o}(e):[e],this.chars=[],this.words=[],this.lines=[],this._originals=[],this.vars=t||{},this.split(t)},e=o.prototype;e.split=function(e){this.isSplit&&this.revert(),this.vars=e=e||this.vars,this._originals.length=this.chars.length=this.words.length=this.lines.length=0;for(var t,n,o,i=this.elements.length,r=e.span?"span":"div",l=("absolute"===e.position||e.absolute,a(e.wordsClass,r)),s=a(e.charsClass,r);-1<--i;)o=this.elements[i],this._originals[i]=o.innerHTML,t=o.clientHeight,n=o.clientWidth,c(o,e,l,s),function(e,t,n,o,i,r,l){var s,a,d,c,u,p,h,g,f,v,m,y,x=z(e),S=I(e,"paddingLeft",x),w=-999,b=I(e,"borderBottomWidth",x)+I(e,"borderTopWidth",x),C=I(e,"borderLeftWidth",x)+I(e,"borderRightWidth",x),T=I(e,"paddingTop",x)+I(e,"paddingBottom",x),_=I(e,"paddingLeft",x)+I(e,"paddingRight",x),$=.2*I(e,"fontSize"),L=I(e,"textAlign",x,!0),N=[],A=[],k=[],E=t.wordDelimiter||" ",q=t.span?"span":"div",x=t.type||t.split||"chars,words,lines",B=i&&-1!==x.indexOf("lines")?[]:null,W=-1!==x.indexOf("words"),H=-1!==x.indexOf("chars"),R="absolute"===t.position||!0===t.absolute,V=t.linesClass,O=-1!==(V||"").indexOf("++"),M=[];for(B&&1===e.children.length&&e.children[0]._isSplit&&(e=e.children[0]),O&&(V=V.split("++").join("")),d=(a=e.getElementsByTagName("*")).length,u=[],s=0;s<d;s++)u[s]=a[s];if(B||R)for(s=0;s<d;s++)((p=(c=u[s]).parentNode===e)||R||H&&!W)&&(y=c.offsetTop,B&&p&&Math.abs(y-w)>$&&"BR"!==c.nodeName&&(h=[],B.push(h),w=y),R&&(c._x=c.offsetLeft,c._y=y,c._w=c.offsetWidth,c._h=c.offsetHeight),B&&((c._isSplit&&p||!H&&p||W&&p||!W&&c.parentNode.parentNode===e&&!c.parentNode._isSplit)&&(h.push(c),c._x-=S,D(c,e,E)&&(c._wordEnd=!0)),"BR"===c.nodeName&&c.nextSibling&&"BR"===c.nextSibling.nodeName&&B.push([])));for(s=0;s<d;s++)p=(c=u[s]).parentNode===e,"BR"!==c.nodeName?(R&&(f=c.style,W||p||(c._x+=c.parentNode._x,c._y+=c.parentNode._y),f.left=c._x+"px",f.top=c._y+"px",f.position="absolute",f.display="block",f.width=c._w+1+"px",f.height=c._h+"px"),!W&&H?c._isSplit?(c._next=c.nextSibling,c.parentNode.appendChild(c)):c.parentNode._isSplit?(c._parent=c.parentNode,!c.previousSibling&&c.firstChild&&(c.firstChild._isFirst=!0),c.nextSibling&&" "===c.nextSibling.textContent&&!c.nextSibling.nextSibling&&M.push(c.nextSibling),c._next=c.nextSibling&&c.nextSibling._isFirst?null:c.nextSibling,c.parentNode.removeChild(c),u.splice(s--,1),d--):p||(y=!c.nextSibling&&D(c.parentNode,e,E),c.parentNode._parent&&c.parentNode._parent.appendChild(c),y&&c.parentNode.appendChild(G.createTextNode(" ")),t.span&&(c.style.display="inline"),N.push(c)):c.parentNode._isSplit&&!c._isSplit&&""!==c.innerHTML?A.push(c):H&&!c._isSplit&&(t.span&&(c.style.display="inline"),N.push(c))):B||R?(c.parentNode&&c.parentNode.removeChild(c),u.splice(s--,1),d--):W||e.appendChild(c);for(s=M.length;-1<--s;)M[s].parentNode.removeChild(M[s]);if(B){for(R&&(v=G.createElement(q),e.appendChild(v),m=v.offsetWidth+"px",y=v.offsetParent===e?0:e.offsetLeft,e.removeChild(v)),f=e.style.cssText,e.style.cssText="display:none;";e.firstChild;)e.removeChild(e.firstChild);for(g=" "===E&&(!R||!W&&!H),s=0;s<B.length;s++){for(h=B[s],(v=G.createElement(q)).style.cssText="display:block;text-align:"+L+";position:"+(R?"absolute;":"relative;"),V&&(v.className=V+(O?s+1:"")),k.push(v),d=h.length,a=0;a<d;a++)"BR"!==h[a].nodeName&&(c=h[a],v.appendChild(c),g&&c._wordEnd&&v.appendChild(G.createTextNode(" ")),R&&(0===a&&(v.style.top=c._y+"px",v.style.left=S+y+"px"),c.style.top="0px",y&&(c.style.left=c._x-y+"px")));0===d?v.innerHTML="&nbsp;":W||H||(P(v),j(v,String.fromCharCode(160)," ")),R&&(v.style.width=m,v.style.height=c._h+"px"),e.appendChild(v)}e.style.cssText=f}R&&(l>e.clientHeight&&(e.style.height=l-T+"px",e.clientHeight<l&&(e.style.height=l+b+"px")),r>e.clientWidth&&(e.style.width=r-_+"px",e.clientWidth<r&&(e.style.width=r+C+"px"))),F(n,N),F(o,A),F(i,k)}(o,e,this.chars,this.words,this.lines,n,t);return this.chars.reverse(),this.words.reverse(),this.lines.reverse(),this.isSplit=!0,this},e.revert=function(){if(!this._originals)throw"revert() call wasn't scoped properly.";for(var e=this._originals.length;-1<--e;)this.elements[e].innerHTML=this._originals[e];return this.chars=[],this.words=[],this.lines=[],this.isSplit=!1,this},o.selector=n.$||n.jQuery||function(e){var t=n.$||n.jQuery;return t?(o.selector=t)(e):"undefined"==typeof document?e:document.querySelectorAll?document.querySelectorAll(e):document.getElementById("#"===e.charAt(0)?e.substr(1):e)},o.version="0.5.6"}(_gsScope),function(){function e(){return(_gsScope.GreenSockGlobals||_gsScope).SplitText}"function"==typeof define&&define.amd?define([],e):"undefined"!=typeof module&&module.exports&&(module.exports=e())}();