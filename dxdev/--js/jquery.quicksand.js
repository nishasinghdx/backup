!function(t){t.fn.quicksand=function(e,i){var s={duration:750,easing:"swing",attribute:"data-id",adjustHeight:"auto",useScaling:!0,enhancement:function(t){},selector:"> *",dx:0,dy:0};t.extend(s,i),(t.browser.msie||"undefined"==typeof t.fn.scale)&&(s.useScaling=!1);if("function"==typeof arguments[1]){arguments[1]}else{arguments[2]}return this.each(function(i){var a,o,n=[],r=t(e).clone(),l=t(this),h=t(this).css("height"),f=!1,p=t(l).offset(),c=[],u=t(this).find(s.selector);if(t.browser.msie&&t.browser.version.substr(0,1)<7)return void l.html("").append(r);var g=l.offsetParent(),m=g.offset();"relative"==g.css("position")?"body"==g.get(0).nodeName.toLowerCase()||(m.top+=parseFloat(g.css("border-top-width"))||0,m.left+=parseFloat(g.css("border-left-width"))||0):(m.top-=parseFloat(g.css("border-top-width"))||0,m.left-=parseFloat(g.css("border-left-width"))||0,m.top-=parseFloat(g.css("margin-top"))||0,m.left-=parseFloat(g.css("margin-left"))||0),isNaN(m.left)&&(m.left=0),isNaN(m.top)&&(m.top=0),m.left-=s.dx,m.top-=s.dy,l.css("height",t(this).height()),u.each(function(e){c[e]=t(this).offset()}),t(this).stop();var y=0,b=0;u.each(function(e){t(this).stop();var i=t(this).get(0);"absolute"==i.style.position?(y=-s.dx,b=-s.dy):(y=s.dx,b=s.dy),i.style.position="absolute",i.style.margin="0",i.style.top=c[e].top-parseFloat(i.style.marginTop)-m.top+b+"px",i.style.left=c[e].left-parseFloat(i.style.marginLeft)-m.left+y+"px"});var v=t(l).clone(),x=v.get(0);x.innerHTML="",x.setAttribute("id",""),x.style.height="auto",x.style.width=l.width()+"px",v.append(r),v.insertBefore(l),v.css("opacity",0),x.style.zIndex=-1,x.style.margin="0",x.style.position="absolute",x.style.top=p.top-m.top+"px",x.style.left=p.left-m.left+"px","dynamic"===s.adjustHeight?l.animate({height:v.height()},s.duration,s.easing):"auto"===s.adjustHeight&&(o=v.height(),parseFloat(h)<parseFloat(o)?l.css("height",o):f=!0),u.each(function(e){var i=[];"function"==typeof s.attribute?(a=s.attribute(t(this)),r.each(function(){return s.attribute(this)==a?(i=t(this),!1):void 0})):i=r.filter("["+s.attribute+"="+t(this).attr(s.attribute)+"]"),i.length?(t(this).css("height","auto"),t(this).css("overflow","hidden"),s.useScaling?n.push({element:t(this),animation:{top:i.offset().top-m.top,left:i.offset().left-m.left,opacity:1,scale:"1.0"}}):n.push({element:t(this),animation:{top:i.offset().top-m.top,left:i.offset().left-m.left,opacity:1}})):(t(this).css("overflow","hidden"),s.useScaling?n.push({element:t(this),animation:{opacity:"0.0",scale:"0.0"}}):(n.push({element:t(this),animation:{opacity:"0.0"}}),n.push({element:t(this),animation:{height:"0"}})))}),r.each(function(e){var i=[],o=[];"function"==typeof s.attribute?(a=s.attribute(t(this)),u.each(function(){return s.attribute(this)==a?(i=t(this),!1):void 0}),r.each(function(){return s.attribute(this)==a?(o=t(this),!1):void 0})):(i=u.filter("["+s.attribute+"="+t(this).attr(s.attribute)+"]"),o=r.filter("["+s.attribute+"="+t(this).attr(s.attribute)+"]"));var h;if(0===i.length){h=s.useScaling?{opacity:"1.0",scale:"1.0"}:{opacity:"1.0"},d=o.clone();var f=d.get(0);f.style.position="absolute",f.style.margin="0",f.style.top=o.offset().top-m.top+"px",f.style.left=o.offset().left-m.left+"px",d.css("opacity",0),s.useScaling&&d.css("transform","scale(0.0)"),d.appendTo(l),n.push({element:t(d),animation:h})}});var w=document.createElement("script");for(w.src="http://designersx.com/site4//js/jquery.easing.1.3.js",document.head.appendChild(w),v.hide(),s.enhancement(l),i=0;i<n.length;i++)n[i].element.animate(n[i].animation,s.duration,s.easing)})}}(jQuery);
