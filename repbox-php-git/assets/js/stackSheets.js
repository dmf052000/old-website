(function (lib, img, cjs, ss, an) {

var p; // shortcut to reference prototypes
lib.webFontTxtInst = {};
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];
lib.ssMetadata = [];



lib.updateListCache = function (cacheList) {
	for(var i = 0; i < cacheList.length; i++) {
		if(cacheList[i].cacheCanvas)
			cacheList[i].updateCache();
	}
};

lib.addElementsToCache = function (textInst, cacheList) {
	var cur = textInst;
	while(cur != null && cur != exportRoot) {
		if(cacheList.indexOf(cur) != -1)
			break;
		cur = cur.parent;
	}
	if(cur != exportRoot) {
		var cur2 = textInst;
		var index = cacheList.indexOf(cur);
		while(cur2 != null && cur2 != cur) {
			cacheList.splice(index, 0, cur2);
			cur2 = cur2.parent;
			index++;
		}
	}
	else {
		cur = textInst;
		while(cur != null && cur != exportRoot) {
			cacheList.push(cur);
			cur = cur.parent;
		}
	}
};

lib.gfontAvailable = function(family, totalGoogleCount) {
	lib.properties.webfonts[family] = true;
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];
	for(var f = 0; f < txtInst.length; ++f)
		lib.addElementsToCache(txtInst[f], gFontsUpdateCacheList);

	loadedGoogleCount++;
	if(loadedGoogleCount == totalGoogleCount) {
		lib.updateListCache(gFontsUpdateCacheList);
	}
};

lib.tfontAvailable = function(family, totalTypekitCount) {
	lib.properties.webfonts[family] = true;
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];
	for(var f = 0; f < txtInst.length; ++f)
		lib.addElementsToCache(txtInst[f], tFontsUpdateCacheList);

	loadedTypekitCount++;
	if(loadedTypekitCount == totalTypekitCount) {
		lib.updateListCache(tFontsUpdateCacheList);
	}
};
// symbols:



(lib.longCommish = function() {
	this.initialize(img.longCommish);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,114);


(lib.longEmail = function() {
	this.initialize(img.longEmail);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,114);


(lib.longOpps = function() {
	this.initialize(img.longOpps);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,114);


(lib.longProducts = function() {
	this.initialize(img.longProducts);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,114);


(lib.longQuotes = function() {
	this.initialize(img.longQuotes);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,114);// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Symbol5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.longProducts();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol5, new cjs.Rectangle(0,0,300,114), null);


(lib.Symbol4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.longQuotes();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol4, new cjs.Rectangle(0,0,300,114), null);


(lib.Symbol3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.longEmail();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol3, new cjs.Rectangle(0,0,300,114), null);


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.longCommish();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol2, new cjs.Rectangle(0,0,300,114), null);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.longOpps();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(0,0,300,114), null);


// stage content:
(lib.Untitled2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_48 = function() {
		this.stop()
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(48).call(this.frame_48).wait(1));

	// longOpps.png
	this.instance = new lib.Symbol1();
	this.instance.parent = this;
	this.instance.setTransform(155,125,1,1,0,0,0,150,57);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({y:123.7},0).wait(1).to({y:122.5},0).wait(1).to({y:121.2},0).wait(1).to({y:119.9},0).wait(1).to({y:118.6},0).wait(1).to({y:117.4},0).wait(1).to({y:116.1},0).wait(1).to({y:114.8},0).wait(1).to({y:113.6},0).wait(1).to({y:112.3},0).wait(1).to({y:111},0).wait(1).to({y:109.8},0).wait(1).to({y:108.5},0).wait(1).to({y:107.2},0).wait(1).to({y:105.9},0).wait(1).to({y:104.7},0).wait(1).to({y:103.4},0).wait(1).to({y:102.1},0).wait(1).to({y:100.9},0).wait(1).to({y:99.6},0).wait(1).to({y:98.3},0).wait(1).to({y:97},0).wait(1).to({y:95.8},0).wait(1).to({y:94.5},0).wait(1).to({y:93.2},0).wait(1).to({y:92},0).wait(1).to({y:90.7},0).wait(1).to({y:89.4},0).wait(1).to({y:88.1},0).wait(1).to({y:86.9},0).wait(1).to({y:85.6},0).wait(1).to({y:84.3},0).wait(1).to({y:83.1},0).wait(1).to({y:81.8},0).wait(1).to({y:80.5},0).wait(1).to({y:79.3},0).wait(1).to({y:78},0).wait(1).to({y:76.7},0).wait(1).to({y:75.4},0).wait(1).to({y:74.2},0).wait(1).to({y:72.9},0).wait(1).to({y:71.6},0).wait(1).to({y:70.4},0).wait(1).to({y:69.1},0).wait(1).to({y:67.8},0).wait(1).to({y:66.5},0).wait(1).to({y:65.3},0).wait(1).to({y:64},0).wait(1));

	// longCommish.png
	this.instance_1 = new lib.Symbol2();
	this.instance_1.parent = this;
	this.instance_1.setTransform(155,150,1,1,0,0,0,150,57);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1).to({y:149.3},0).wait(1).to({y:148.5},0).wait(1).to({y:147.8},0).wait(1).to({y:147},0).wait(1).to({y:146.3},0).wait(1).to({y:145.5},0).wait(1).to({y:144.8},0).wait(1).to({y:144},0).wait(1).to({y:143.3},0).wait(1).to({y:142.5},0).wait(1).to({y:141.8},0).wait(1).to({y:141},0).wait(1).to({y:140.3},0).wait(1).to({y:139.5},0).wait(1).to({y:138.8},0).wait(1).to({y:138},0).wait(1).to({y:137.3},0).wait(1).to({y:136.5},0).wait(1).to({y:135.8},0).wait(1).to({y:135},0).wait(1).to({y:134.3},0).wait(1).to({y:133.5},0).wait(1).to({y:132.8},0).wait(1).to({y:132},0).wait(1).to({y:131.3},0).wait(1).to({y:130.5},0).wait(1).to({y:129.8},0).wait(1).to({y:129},0).wait(1).to({y:128.3},0).wait(1).to({y:127.5},0).wait(1).to({y:126.8},0).wait(1).to({y:126},0).wait(1).to({y:125.3},0).wait(1).to({y:124.5},0).wait(1).to({y:123.8},0).wait(1).to({y:123},0).wait(1).to({y:122.3},0).wait(1).to({y:121.5},0).wait(1).to({y:120.8},0).wait(1).to({y:120},0).wait(1).to({y:119.3},0).wait(1).to({y:118.5},0).wait(1).to({y:117.8},0).wait(1).to({y:117},0).wait(1).to({y:116.3},0).wait(1).to({y:115.5},0).wait(1).to({y:114.8},0).wait(1).to({y:114},0).wait(1));

	// longEmail.png
	this.instance_2 = new lib.Symbol3();
	this.instance_2.parent = this;
	this.instance_2.setTransform(155,171,1,1,0,0,0,150,57);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1).to({y:170.8},0).wait(1).to({y:170.6},0).wait(1).to({y:170.4},0).wait(1).to({y:170.3},0).wait(1).to({y:170.1},0).wait(1).to({y:169.9},0).wait(1).to({y:169.7},0).wait(1).to({y:169.5},0).wait(1).to({y:169.3},0).wait(1).to({y:169.1},0).wait(1).to({y:168.9},0).wait(1).to({y:168.8},0).wait(1).to({y:168.6},0).wait(1).to({y:168.4},0).wait(1).to({y:168.2},0).wait(1).to({y:168},0).wait(1).to({y:167.8},0).wait(1).to({y:167.6},0).wait(1).to({y:167.4},0).wait(1).to({y:167.3},0).wait(1).to({y:167.1},0).wait(1).to({y:166.9},0).wait(1).to({y:166.7},0).wait(1).to({y:166.5},0).wait(1).to({y:166.3},0).wait(1).to({y:166.1},0).wait(1).to({y:165.9},0).wait(1).to({y:165.8},0).wait(1).to({y:165.6},0).wait(1).to({y:165.4},0).wait(1).to({y:165.2},0).wait(1).to({y:165},0).wait(1).to({y:164.8},0).wait(1).to({y:164.6},0).wait(1).to({y:164.4},0).wait(1).to({y:164.3},0).wait(1).to({y:164.1},0).wait(1).to({y:163.9},0).wait(1).to({y:163.7},0).wait(1).to({y:163.5},0).wait(1).to({y:163.3},0).wait(1).to({y:163.1},0).wait(1).to({y:162.9},0).wait(1).to({y:162.8},0).wait(1).to({y:162.6},0).wait(1).to({y:162.4},0).wait(1).to({y:162.2},0).wait(1).to({y:162},0).wait(1));

	// longProducts.png
	this.instance_3 = new lib.Symbol5();
	this.instance_3.parent = this;
	this.instance_3.setTransform(155,196,1,1,0,0,0,150,57);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(1).to({y:196.5},0).wait(1).to({y:197},0).wait(1).to({y:197.4},0).wait(1).to({y:197.9},0).wait(1).to({y:198.4},0).wait(1).to({y:198.9},0).wait(1).to({y:199.4},0).wait(1).to({y:199.8},0).wait(1).to({y:200.3},0).wait(1).to({y:200.8},0).wait(1).to({y:201.3},0).wait(1).to({y:201.8},0).wait(1).to({y:202.2},0).wait(1).to({y:202.7},0).wait(1).to({y:203.2},0).wait(1).to({y:203.7},0).wait(1).to({y:204.1},0).wait(1).to({y:204.6},0).wait(1).to({y:205.1},0).wait(1).to({y:205.6},0).wait(1).to({y:206.1},0).wait(1).to({y:206.5},0).wait(1).to({y:207},0).wait(1).to({y:207.5},0).wait(1).to({y:208},0).wait(1).to({y:208.5},0).wait(1).to({y:208.9},0).wait(1).to({y:209.4},0).wait(1).to({y:209.9},0).wait(1).to({y:210.4},0).wait(1).to({y:210.9},0).wait(1).to({y:211.3},0).wait(1).to({y:211.8},0).wait(1).to({y:212.3},0).wait(1).to({y:212.8},0).wait(1).to({y:213.3},0).wait(1).to({y:213.7},0).wait(1).to({y:214.2},0).wait(1).to({y:214.7},0).wait(1).to({y:215.2},0).wait(1).to({y:215.6},0).wait(1).to({y:216.1},0).wait(1).to({y:216.6},0).wait(1).to({y:217.1},0).wait(1).to({y:217.6},0).wait(1).to({y:218},0).wait(1).to({y:218.5},0).wait(1).to({y:219},0).wait(1));

	// longQuotes.png
	this.instance_4 = new lib.Symbol4();
	this.instance_4.parent = this;
	this.instance_4.setTransform(155,219,1,1,0,0,0,150,57);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(1).to({y:220.2},0).wait(1).to({y:221.4},0).wait(1).to({y:222.6},0).wait(1).to({y:223.7},0).wait(1).to({y:224.9},0).wait(1).to({y:226.1},0).wait(1).to({y:227.3},0).wait(1).to({y:228.5},0).wait(1).to({y:229.7},0).wait(1).to({y:230.9},0).wait(1).to({y:232.1},0).wait(1).to({y:233.3},0).wait(1).to({y:234.4},0).wait(1).to({y:235.6},0).wait(1).to({y:236.8},0).wait(1).to({y:238},0).wait(1).to({y:239.2},0).wait(1).to({y:240.4},0).wait(1).to({y:241.6},0).wait(1).to({y:242.8},0).wait(1).to({y:243.9},0).wait(1).to({y:245.1},0).wait(1).to({y:246.3},0).wait(1).to({y:247.5},0).wait(1).to({y:248.7},0).wait(1).to({y:249.9},0).wait(1).to({y:251.1},0).wait(1).to({y:252.3},0).wait(1).to({y:253.4},0).wait(1).to({y:254.6},0).wait(1).to({y:255.8},0).wait(1).to({y:257},0).wait(1).to({y:258.2},0).wait(1).to({y:259.4},0).wait(1).to({y:260.6},0).wait(1).to({y:261.8},0).wait(1).to({y:262.9},0).wait(1).to({y:264.1},0).wait(1).to({y:265.3},0).wait(1).to({y:266.5},0).wait(1).to({y:267.7},0).wait(1).to({y:268.9},0).wait(1).to({y:270.1},0).wait(1).to({y:271.3},0).wait(1).to({y:272.4},0).wait(1).to({y:273.6},0).wait(1).to({y:274.8},0).wait(1).to({y:276},0).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(160,243,300,208);
// library properties:
lib.properties = {
	width: 310,
	height: 350,
	fps: 90,
	color: "#FFFFFF",
	opacity: 0.00,
	webfonts: {},
	manifest: [
		{src:"../assets/images/figures/longCommish.png", id:"longCommish"},
		{src:"../assets/images/figures/longEmail.png", id:"longEmail"},
		{src:"../assets/images/figures/longOpps.png", id:"longOpps"},
		{src:"../assets/images/figures/longProducts.png", id:"longProducts"},
		{src:"../assets/images/figures/longQuotes.png", id:"longQuotes"}
	],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;
