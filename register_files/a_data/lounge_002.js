!function(){"use strict";var a=window.document,b={STYLES:"https://c.disquscdn.com/next/embed/styles/lounge.9974049bf7b0591e5d4f055cb67f3ee3.css",RTL_STYLES:"https://c.disquscdn.com/next/embed/styles/lounge_rtl.db01b3fbb1c89235aadd25e6ad764a5b.css","lounge/main":"https://c.disquscdn.com/next/embed/lounge.bundle.4180262f1aa52e0f0340aac9fc52a8d8.js","discovery/main":"https://c.disquscdn.com/next/embed/discovery.bundle.05463248c2ace681de05d193251bc001.js","remote/config":"https://disqus.com/next/config.js","common/vendor_extensions/highlight":"https://c.disquscdn.com/next/embed/highlight.6fbf348532f299e045c254c49c4dbedf.js"};window.require={baseUrl:"https://c.disquscdn.com/next/current/embed",paths:["lounge/main","discovery/main","remote/config","common/vendor_extensions/highlight"].reduce(function(a,c){return a[c]=b[c].slice(0,-3),a},{})};var c=a.createElement("script");c.onload=function(){require(["common/main"],function(a){a.init("lounge",b)})},c.src="https://c.disquscdn.com/next/embed/common.bundle.880980e048a2432334f13013030456ac.js",a.body.appendChild(c)}();