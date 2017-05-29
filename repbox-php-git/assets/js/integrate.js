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



(lib._365 = function() {
	this.initialize(img._365);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,156,36);


(lib.adobe = function() {
	this.initialize(img.adobe);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib.dropbox = function() {
	this.initialize(img.dropbox);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib.excel = function() {
	this.initialize(img.excel);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib.filebox = function() {
	this.initialize(img.filebox);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,256,256);


(lib.gmail = function() {
	this.initialize(img.gmail);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib.outlook = function() {
	this.initialize(img.outlook);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,128,128);


(lib.whitebox = function() {
	this.initialize(img.whitebox);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,534,534);// helper functions:

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


(lib.Symbol6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.excel();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.781,0.781);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol6, new cjs.Rectangle(0,0,100,100), null);


(lib.Symbol5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.outlook();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.672,0.672);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol5, new cjs.Rectangle(0,0,86,86), null);


(lib.Symbol4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.gmail();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.688,0.688);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol4, new cjs.Rectangle(0,0,88,88), null);


(lib.Symbol3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.adobe();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.563,0.563);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol3, new cjs.Rectangle(0,0,72,72), null);


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.dropbox();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.688,0.688);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol2, new cjs.Rectangle(0,0,88,88), null);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib._365();
	this.instance.parent = this;
	this.instance.setTransform(0,0,1.256,1.256);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(0,0,196,45.3), null);


// stage content:
(lib.Untitled1 = function(mode,startPosition,loop) {
if (loop == null) { loop = false; }	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.filebox();
	this.instance.parent = this;
	this.instance.setTransform(303,272,0.641,0.641);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(80));

	// white-box.png
	this.instance_1 = new lib.whitebox();
	this.instance_1.parent = this;
	this.instance_1.setTransform(275,295,0.412,0.303);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(80));

	// 365.png
	this.instance_2 = new lib.Symbol1();
	this.instance_2.parent = this;
	this.instance_2.setTransform(385,349.6,1,1,0,0,0,98,22.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1).to({y:348},0).wait(1).to({y:346.4},0).wait(1).to({y:344.8},0).wait(1).to({y:343.2},0).wait(1).to({y:341.6},0).wait(1).to({y:340},0).wait(1).to({y:338.3},0).wait(1).to({y:336.7},0).wait(1).to({y:335.1},0).wait(1).to({y:333.5},0).wait(1).to({y:331.9},0).wait(1).to({y:330.3},0).wait(1).to({y:328.7},0).wait(1).to({y:327.1},0).wait(1).to({y:325.5},0).wait(1).to({y:323.9},0).wait(1).to({y:322.3},0).wait(1).to({y:320.7},0).wait(1).to({y:319.1},0).wait(1).to({y:317.4},0).wait(1).to({y:315.8},0).wait(1).to({y:314.2},0).wait(1).to({y:312.6},0).wait(1).to({y:311},0).wait(1).to({y:309.4},0).wait(1).to({y:307.8},0).wait(1).to({y:306.2},0).wait(1).to({y:304.6},0).wait(1).to({y:303},0).wait(1).to({y:301.4},0).wait(1).to({y:299.8},0).wait(1).to({y:298.2},0).wait(1).to({y:296.5},0).wait(1).to({y:294.9},0).wait(1).to({y:293.3},0).wait(1).to({y:291.7},0).wait(1).to({y:290.1},0).wait(1).to({y:288.5},0).wait(1).to({y:286.9},0).wait(1).to({y:285.3},0).wait(1).to({y:283.7},0).wait(1).to({y:282.1},0).wait(1).to({y:280.5},0).wait(1).to({y:278.9},0).wait(1).to({y:277.3},0).wait(1).to({y:275.7},0).wait(1).to({y:274},0).wait(1).to({y:272.4},0).wait(1).to({y:270.8},0).wait(1).to({y:269.2},0).wait(1).to({y:267.6},0).wait(1).to({y:266},0).wait(1).to({y:264.4},0).wait(1).to({y:262.8},0).wait(1).to({y:261.2},0).wait(1).to({y:259.6},0).wait(1).to({y:258},0).wait(1).to({y:256.4},0).wait(1).to({y:254.8},0).wait(1).to({y:253.1},0).wait(1).to({y:251.5},0).wait(1).to({y:249.9},0).wait(1).to({y:248.3},0).wait(1).to({y:246.7},0).wait(1).to({y:245.1},0).wait(1).to({y:243.5},0).wait(1).to({y:241.9},0).wait(1).to({y:240.3},0).wait(1).to({y:238.7},0).wait(1).to({y:237.1},0).wait(1).to({y:235.5},0).wait(1).to({y:233.9},0).wait(1).to({y:232.2},0).wait(1).to({y:230.6},0).wait(1).to({y:229},0).wait(1).to({y:227.4},0).wait(1).to({y:225.8},0).wait(1).to({y:224.2},0).wait(1).to({y:222.6},0).wait(1));

	// outlook.png
	this.instance_3 = new lib.Symbol5();
	this.instance_3.parent = this;
	this.instance_3.setTransform(378,367,1,1,0,0,0,43,43);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(1).to({x:375.1,y:364.5},0).wait(1).to({x:372.1,y:362},0).wait(1).to({x:369.2,y:359.4},0).wait(1).to({x:366.3,y:356.9},0).wait(1).to({x:363.3,y:354.4},0).wait(1).to({x:360.4,y:351.9},0).wait(1).to({x:357.4,y:349.4},0).wait(1).to({x:354.5,y:346.8},0).wait(1).to({x:351.6,y:344.3},0).wait(1).to({x:348.6,y:341.8},0).wait(1).to({x:345.7,y:339.3},0).wait(1).to({x:342.8,y:336.8},0).wait(1).to({x:339.8,y:334.3},0).wait(1).to({x:336.9,y:331.7},0).wait(1).to({x:334,y:329.2},0).wait(1).to({x:331,y:326.7},0).wait(1).to({x:328.1,y:324.2},0).wait(1).to({x:325.2,y:321.7},0).wait(1).to({x:322.2,y:319.1},0).wait(1).to({x:319.3,y:316.6},0).wait(1).to({x:316.3,y:314.1},0).wait(1).to({x:313.4,y:311.6},0).wait(1).to({x:310.5,y:309.1},0).wait(1).to({x:307.5,y:306.5},0).wait(1).to({x:304.6,y:304},0).wait(1).to({x:301.7,y:301.5},0).wait(1).to({x:298.7,y:299},0).wait(1).to({x:295.8,y:296.5},0).wait(1).to({x:292.9,y:293.9},0).wait(1).to({x:289.9,y:291.4},0).wait(1).to({x:287,y:288.9},0).wait(1).to({x:284,y:286.4},0).wait(1).to({x:281.1,y:283.9},0).wait(1).to({x:278.2,y:281.4},0).wait(1).to({x:275.2,y:278.8},0).wait(1).to({x:272.3,y:276.3},0).wait(1).to({x:269.4,y:273.8},0).wait(1).to({x:266.4,y:271.3},0).wait(1).to({x:263.5,y:268.8},0).wait(1).to({x:260.6,y:266.2},0).wait(1).to({x:257.6,y:263.7},0).wait(1).to({x:254.7,y:261.2},0).wait(1).to({x:251.7,y:258.7},0).wait(1).to({x:248.8,y:256.2},0).wait(1).to({x:245.9,y:253.6},0).wait(1).to({x:242.9,y:251.1},0).wait(1).to({x:240,y:248.6},0).wait(1).to({x:237.1,y:246.1},0).wait(1).to({x:234.1,y:243.6},0).wait(1).to({x:231.2,y:241.1},0).wait(1).to({x:228.3,y:238.5},0).wait(1).to({x:225.3,y:236},0).wait(1).to({x:222.4,y:233.5},0).wait(1).to({x:219.5,y:231},0).wait(1).to({x:216.5,y:228.5},0).wait(1).to({x:213.6,y:225.9},0).wait(1).to({x:210.6,y:223.4},0).wait(1).to({x:207.7,y:220.9},0).wait(1).to({x:204.8,y:218.4},0).wait(1).to({x:201.8,y:215.9},0).wait(1).to({x:198.9,y:213.3},0).wait(1).to({x:196,y:210.8},0).wait(1).to({x:193,y:208.3},0).wait(1).to({x:190.1,y:205.8},0).wait(1).to({x:187.2,y:203.3},0).wait(1).to({x:184.2,y:200.7},0).wait(1).to({x:181.3,y:198.2},0).wait(1).to({x:178.3,y:195.7},0).wait(1).to({x:175.4,y:193.2},0).wait(1).to({x:172.5,y:190.7},0).wait(1).to({x:169.5,y:188.2},0).wait(1).to({x:166.6,y:185.6},0).wait(1).to({x:163.7,y:183.1},0).wait(1).to({x:160.7,y:180.6},0).wait(1).to({x:157.8,y:178.1},0).wait(1).to({x:154.9,y:175.6},0).wait(1).to({x:151.9,y:173},0).wait(1).to({x:149,y:170.5},0).wait(1).to({x:146.1,y:168},0).wait(1));

	// gmail.png
	this.instance_4 = new lib.Symbol4();
	this.instance_4.parent = this;
	this.instance_4.setTransform(391,349,1,1,0,0,0,44,44);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(1).to({x:387.1,y:348.7},0).wait(1).to({x:383.2,y:348.5},0).wait(1).to({x:379.3,y:348.2},0).wait(1).to({x:375.5,y:348},0).wait(1).to({x:371.6,y:347.7},0).wait(1).to({x:367.7,y:347.5},0).wait(1).to({x:363.8,y:347.2},0).wait(1).to({x:359.9,y:347},0).wait(1).to({x:356,y:346.7},0).wait(1).to({x:352.1,y:346.5},0).wait(1).to({x:348.3,y:346.2},0).wait(1).to({x:344.4,y:346},0).wait(1).to({x:340.5,y:345.7},0).wait(1).to({x:336.6,y:345.5},0).wait(1).to({x:332.7,y:345.2},0).wait(1).to({x:328.8,y:344.9},0).wait(1).to({x:324.9,y:344.7},0).wait(1).to({x:321.1,y:344.4},0).wait(1).to({x:317.2,y:344.2},0).wait(1).to({x:313.3,y:343.9},0).wait(1).to({x:309.4,y:343.7},0).wait(1).to({x:305.5,y:343.4},0).wait(1).to({x:301.6,y:343.2},0).wait(1).to({x:297.7,y:342.9},0).wait(1).to({x:293.9,y:342.7},0).wait(1).to({x:290,y:342.4},0).wait(1).to({x:286.1,y:342.2},0).wait(1).to({x:282.2,y:341.9},0).wait(1).to({x:278.3,y:341.7},0).wait(1).to({x:274.4,y:341.4},0).wait(1).to({x:270.6,y:341.2},0).wait(1).to({x:266.7,y:340.9},0).wait(1).to({x:262.8,y:340.6},0).wait(1).to({x:258.9,y:340.4},0).wait(1).to({x:255,y:340.1},0).wait(1).to({x:251.1,y:339.9},0).wait(1).to({x:247.2,y:339.6},0).wait(1).to({x:243.4,y:339.4},0).wait(1).to({x:239.5,y:339.1},0).wait(1).to({x:235.6,y:338.9},0).wait(1).to({x:231.7,y:338.6},0).wait(1).to({x:227.8,y:338.4},0).wait(1).to({x:223.9,y:338.1},0).wait(1).to({x:220,y:337.9},0).wait(1).to({x:216.2,y:337.6},0).wait(1).to({x:212.3,y:337.4},0).wait(1).to({x:208.4,y:337.1},0).wait(1).to({x:204.5,y:336.8},0).wait(1).to({x:200.6,y:336.6},0).wait(1).to({x:196.7,y:336.3},0).wait(1).to({x:192.8,y:336.1},0).wait(1).to({x:189,y:335.8},0).wait(1).to({x:185.1,y:335.6},0).wait(1).to({x:181.2,y:335.3},0).wait(1).to({x:177.3,y:335.1},0).wait(1).to({x:173.4,y:334.8},0).wait(1).to({x:169.5,y:334.6},0).wait(1).to({x:165.6,y:334.3},0).wait(1).to({x:161.8,y:334.1},0).wait(1).to({x:157.9,y:333.8},0).wait(1).to({x:154,y:333.6},0).wait(1).to({x:150.1,y:333.3},0).wait(1).to({x:146.2,y:333.1},0).wait(1).to({x:142.3,y:332.8},0).wait(1).to({x:138.4,y:332.5},0).wait(1).to({x:134.6,y:332.3},0).wait(1).to({x:130.7,y:332},0).wait(1).to({x:126.8,y:331.8},0).wait(1).to({x:122.9,y:331.5},0).wait(1).to({x:119,y:331.3},0).wait(1).to({x:115.1,y:331},0).wait(1).to({x:111.2,y:330.8},0).wait(1).to({x:107.4,y:330.5},0).wait(1).to({x:103.5,y:330.3},0).wait(1).to({x:99.6,y:330},0).wait(1).to({x:95.7,y:329.8},0).wait(1).to({x:91.8,y:329.5},0).wait(1).to({x:87.9,y:329.3},0).wait(1).to({x:84.1,y:329},0).wait(1));

	// dropbox.png
	this.instance_5 = new lib.Symbol2();
	this.instance_5.parent = this;
	this.instance_5.setTransform(379,338,1,1,0,0,0,44,44);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(1).to({x:381.9,y:335.8},0).wait(1).to({x:384.8,y:333.5},0).wait(1).to({x:387.7,y:331.3},0).wait(1).to({x:390.6,y:329.1},0).wait(1).to({x:393.5,y:326.9},0).wait(1).to({x:396.4,y:324.6},0).wait(1).to({x:399.3,y:322.4},0).wait(1).to({x:402.2,y:320.2},0).wait(1).to({x:405.1,y:317.9},0).wait(1).to({x:408,y:315.7},0).wait(1).to({x:410.9,y:313.5},0).wait(1).to({x:413.8,y:311.3},0).wait(1).to({x:416.7,y:309},0).wait(1).to({x:419.6,y:306.8},0).wait(1).to({x:422.5,y:304.6},0).wait(1).to({x:425.4,y:302.4},0).wait(1).to({x:428.3,y:300.1},0).wait(1).to({x:431.2,y:297.9},0).wait(1).to({x:434.1,y:295.7},0).wait(1).to({x:437,y:293.4},0).wait(1).to({x:439.9,y:291.2},0).wait(1).to({x:442.8,y:289},0).wait(1).to({x:445.7,y:286.8},0).wait(1).to({x:448.6,y:284.5},0).wait(1).to({x:451.5,y:282.3},0).wait(1).to({x:454.4,y:280.1},0).wait(1).to({x:457.3,y:277.9},0).wait(1).to({x:460.2,y:275.6},0).wait(1).to({x:463.1,y:273.4},0).wait(1).to({x:466,y:271.2},0).wait(1).to({x:468.9,y:268.9},0).wait(1).to({x:471.8,y:266.7},0).wait(1).to({x:474.7,y:264.5},0).wait(1).to({x:477.6,y:262.3},0).wait(1).to({x:480.5,y:260},0).wait(1).to({x:483.4,y:257.8},0).wait(1).to({x:486.3,y:255.6},0).wait(1).to({x:489.2,y:253.3},0).wait(1).to({x:492.1,y:251.1},0).wait(1).to({x:494.9,y:248.9},0).wait(1).to({x:497.8,y:246.7},0).wait(1).to({x:500.7,y:244.4},0).wait(1).to({x:503.6,y:242.2},0).wait(1).to({x:506.5,y:240},0).wait(1).to({x:509.4,y:237.7},0).wait(1).to({x:512.3,y:235.5},0).wait(1).to({x:515.2,y:233.3},0).wait(1).to({x:518.1,y:231.1},0).wait(1).to({x:521,y:228.8},0).wait(1).to({x:523.9,y:226.6},0).wait(1).to({x:526.8,y:224.4},0).wait(1).to({x:529.7,y:222.2},0).wait(1).to({x:532.6,y:219.9},0).wait(1).to({x:535.5,y:217.7},0).wait(1).to({x:538.4,y:215.5},0).wait(1).to({x:541.3,y:213.2},0).wait(1).to({x:544.2,y:211},0).wait(1).to({x:547.1,y:208.8},0).wait(1).to({x:550,y:206.6},0).wait(1).to({x:552.9,y:204.3},0).wait(1).to({x:555.8,y:202.1},0).wait(1).to({x:558.7,y:199.9},0).wait(1).to({x:561.6,y:197.6},0).wait(1).to({x:564.5,y:195.4},0).wait(1).to({x:567.4,y:193.2},0).wait(1).to({x:570.3,y:191},0).wait(1).to({x:573.2,y:188.7},0).wait(1).to({x:576.1,y:186.5},0).wait(1).to({x:579,y:184.3},0).wait(1).to({x:581.9,y:182.1},0).wait(1).to({x:584.8,y:179.8},0).wait(1).to({x:587.7,y:177.6},0).wait(1).to({x:590.6,y:175.4},0).wait(1).to({x:593.5,y:173.1},0).wait(1).to({x:596.4,y:170.9},0).wait(1).to({x:599.3,y:168.7},0).wait(1).to({x:602.2,y:166.5},0).wait(1).to({x:605.1,y:164.2},0).wait(1).to({x:608,y:162},0).wait(1));

	// excel.png
	this.instance_6 = new lib.Symbol6();
	this.instance_6.parent = this;
	this.instance_6.setTransform(373,364,1,1,0,0,0,50,50);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(1).to({y:360.2},0).wait(1).to({y:356.5},0).wait(1).to({y:352.7},0).wait(1).to({y:349},0).wait(1).to({y:345.2},0).wait(1).to({y:341.4},0).wait(1).to({y:337.7},0).wait(1).to({y:333.9},0).wait(1).to({y:330.2},0).wait(1).to({y:326.4},0).wait(1).to({y:322.7},0).wait(1).to({y:318.9},0).wait(1).to({y:315.1},0).wait(1).to({y:311.4},0).wait(1).to({y:307.6},0).wait(1).to({y:303.9},0).wait(1).to({y:300.1},0).wait(1).to({y:296.3},0).wait(1).to({y:292.6},0).wait(1).to({y:288.8},0).wait(1).to({y:285.1},0).wait(1).to({y:281.3},0).wait(1).to({y:277.5},0).wait(1).to({y:273.8},0).wait(1).to({y:270},0).wait(1).to({y:266.3},0).wait(1).to({y:262.5},0).wait(1).to({y:258.8},0).wait(1).to({y:255},0).wait(1).to({y:251.2},0).wait(1).to({y:247.5},0).wait(1).to({y:243.7},0).wait(1).to({y:240},0).wait(1).to({y:236.2},0).wait(1).to({y:232.4},0).wait(1).to({y:228.7},0).wait(1).to({y:224.9},0).wait(1).to({y:221.2},0).wait(1).to({y:217.4},0).wait(1).to({y:213.6},0).wait(1).to({y:209.9},0).wait(1).to({y:206.1},0).wait(1).to({y:202.4},0).wait(1).to({y:198.6},0).wait(1).to({y:194.9},0).wait(1).to({y:191.1},0).wait(1).to({y:187.3},0).wait(1).to({y:183.6},0).wait(1).to({y:179.8},0).wait(1).to({y:176.1},0).wait(1).to({y:172.3},0).wait(1).to({y:168.5},0).wait(1).to({y:164.8},0).wait(1).to({y:161},0).wait(1).to({y:157.3},0).wait(1).to({y:153.5},0).wait(1).to({y:149.7},0).wait(1).to({y:146},0).wait(1).to({y:142.2},0).wait(1).to({y:138.5},0).wait(1).to({y:134.7},0).wait(1).to({y:131},0).wait(1).to({y:127.2},0).wait(1).to({y:123.4},0).wait(1).to({y:119.7},0).wait(1).to({y:115.9},0).wait(1).to({y:112.2},0).wait(1).to({y:108.4},0).wait(1).to({y:104.6},0).wait(1).to({y:100.9},0).wait(1).to({y:97.1},0).wait(1).to({y:93.4},0).wait(1).to({y:89.6},0).wait(1).to({y:85.8},0).wait(1).to({y:82.1},0).wait(1).to({y:78.3},0).wait(1).to({y:74.6},0).wait(1).to({y:70.8},0).wait(1).to({y:67.1},0).wait(1));

	// adobe.png
	this.instance_7 = new lib.Symbol3();
	this.instance_7.parent = this;
	this.instance_7.setTransform(386,334,1,1,0,0,0,36,36);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(1).to({x:389.6,y:333.9},0).wait(1).to({x:393.2,y:333.7},0).wait(1).to({x:396.7,y:333.6},0).wait(1).to({x:400.3,y:333.5},0).wait(1).to({x:403.9,y:333.4},0).wait(1).to({x:407.5,y:333.2},0).wait(1).to({x:411.1,y:333.1},0).wait(1).to({x:414.7,y:333},0).wait(1).to({x:418.2,y:332.9},0).wait(1).to({x:421.8,y:332.7},0).wait(1).to({x:425.4,y:332.6},0).wait(1).to({x:429,y:332.5},0).wait(1).to({x:432.6,y:332.4},0).wait(1).to({x:436.2,y:332.2},0).wait(1).to({x:439.7,y:332.1},0).wait(1).to({x:443.3,y:332},0).wait(1).to({x:446.9,y:331.8},0).wait(1).to({x:450.5,y:331.7},0).wait(1).to({x:454.1,y:331.6},0).wait(1).to({x:457.6,y:331.5},0).wait(1).to({x:461.2,y:331.3},0).wait(1).to({x:464.8,y:331.2},0).wait(1).to({x:468.4,y:331.1},0).wait(1).to({x:472,y:331},0).wait(1).to({x:475.6,y:330.8},0).wait(1).to({x:479.1,y:330.7},0).wait(1).to({x:482.7,y:330.6},0).wait(1).to({x:486.3,y:330.5},0).wait(1).to({x:489.9,y:330.3},0).wait(1).to({x:493.5,y:330.2},0).wait(1).to({x:497,y:330.1},0).wait(1).to({x:500.6,y:329.9},0).wait(1).to({x:504.2,y:329.8},0).wait(1).to({x:507.8,y:329.7},0).wait(1).to({x:511.4,y:329.6},0).wait(1).to({x:515,y:329.4},0).wait(1).to({x:518.5,y:329.3},0).wait(1).to({x:522.1,y:329.2},0).wait(1).to({x:525.7,y:329.1},0).wait(1).to({x:529.3,y:328.9},0).wait(1).to({x:532.9,y:328.8},0).wait(1).to({x:536.5,y:328.7},0).wait(1).to({x:540,y:328.6},0).wait(1).to({x:543.6,y:328.4},0).wait(1).to({x:547.2,y:328.3},0).wait(1).to({x:550.8,y:328.2},0).wait(1).to({x:554.4,y:328.1},0).wait(1).to({x:557.9,y:327.9},0).wait(1).to({x:561.5,y:327.8},0).wait(1).to({x:565.1,y:327.7},0).wait(1).to({x:568.7,y:327.5},0).wait(1).to({x:572.3,y:327.4},0).wait(1).to({x:575.9,y:327.3},0).wait(1).to({x:579.4,y:327.2},0).wait(1).to({x:583,y:327},0).wait(1).to({x:586.6,y:326.9},0).wait(1).to({x:590.2,y:326.8},0).wait(1).to({x:593.8,y:326.7},0).wait(1).to({x:597.4,y:326.5},0).wait(1).to({x:600.9,y:326.4},0).wait(1).to({x:604.5,y:326.3},0).wait(1).to({x:608.1,y:326.2},0).wait(1).to({x:611.7,y:326},0).wait(1).to({x:615.3,y:325.9},0).wait(1).to({x:618.8,y:325.8},0).wait(1).to({x:622.4,y:325.6},0).wait(1).to({x:626,y:325.5},0).wait(1).to({x:629.6,y:325.4},0).wait(1).to({x:633.2,y:325.3},0).wait(1).to({x:636.8,y:325.1},0).wait(1).to({x:640.3,y:325},0).wait(1).to({x:643.9,y:324.9},0).wait(1).to({x:647.5,y:324.8},0).wait(1).to({x:651.1,y:324.6},0).wait(1).to({x:654.7,y:324.5},0).wait(1).to({x:658.3,y:324.4},0).wait(1).to({x:661.8,y:324.3},0).wait(1).to({x:665.4,y:324.1},0).wait(1).to({x:669,y:324},0).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(659,500.5,220.1,185);
// library properties:
lib.properties = {
	width: 768,
	height: 457,
	fps: 120,
	color: "#FFFFFF",
	opacity: 0.00,
	webfonts: {},
	manifest: [
		{src:"../assets/images/figures/_365.png", id:"_365"},
		{src:"../assets/images/figures/adobe.png", id:"adobe"},
		{src:"../assets/images/figures/dropbox.png", id:"dropbox"},
		{src:"../assets/images/figures/excel.png", id:"excel"},
		{src:"../assets/images/figures/filebox.png", id:"filebox"},
		{src:"../assets/images/figures/gmail.png", id:"gmail"},
		{src:"../assets/images/figures/outlook.png", id:"outlook"},
		{src:"../assets/images/figures/whitebox.png", id:"whitebox"}
	],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;
