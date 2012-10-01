//	HYPE.documents["zombies"]

(function HYPE_DocumentLoader() {
	var resourcesFolderName = "zombies_Resources";
	var documentName = "zombies";
	var documentLoaderFilename = "zombies_hype_generated_script.js";

	// find the URL for this script's absolute path and set as the resourceFolderName
	try {
		var scripts = document.getElementsByTagName('script');
		for(var i = 0; i < scripts.length; i++) {
			var scriptSrc = scripts[i].src;
			if(scriptSrc != null && scriptSrc.indexOf(documentLoaderFilename) != -1) {
				resourcesFolderName = scriptSrc.substr(0, scriptSrc.lastIndexOf("/"));
				break;
			}
		}
	} catch(err) {	}

	// Legacy support
	if (typeof window.HYPE_DocumentsToLoad == "undefined") {
		window.HYPE_DocumentsToLoad = new Array();
	}
 
	// load HYPE.js if it hasn't been loaded yet
	if(typeof HYPE_124 == "undefined") {
		if(typeof window.HYPE_124_DocumentsToLoad == "undefined") {
			window.HYPE_124_DocumentsToLoad = new Array();
			window.HYPE_124_DocumentsToLoad.push(HYPE_DocumentLoader);

			var headElement = document.getElementsByTagName('head')[0];
			var scriptElement = document.createElement('script');
			scriptElement.type= 'text/javascript';
			scriptElement.src = resourcesFolderName + '/' + 'HYPE.js?hype_version=124';
			headElement.appendChild(scriptElement);
		} else {
			window.HYPE_124_DocumentsToLoad.push(HYPE_DocumentLoader);
		}
		return;
	}
	
	// guard against loading multiple times
	if(HYPE.documents[documentName] != null) {
		return;
	}
	
	var hypeDoc = new HYPE_124();
	
	var attributeTransformerMapping = {b:"i",c:"i",bC:"i",d:"i",aS:"i",M:"i",e:"f",N:"i",f:"d",aT:"i",O:"i",g:"c",aU:"i",P:"i",Q:"i",aV:"i",R:"c",aW:"f",S:"i",aI:"i",T:"i",l:"d",aX:"i",aJ:"i",m:"c",n:"c",aK:"i",aZ:"i",X:"i",A:"c",Y:"i",aL:"i",B:"c",C:"c",D:"c",t:"i",E:"i",G:"c",bA:"c",a:"i",bB:"i"};

var scenes = [{onSceneAnimationCompleteAction:{type:3,timelineIdentifier:"kTimelineDefaultIdentifier"},timelines:{kTimelineDefaultIdentifier:{framesPerSecond:30,animations:[{f:"2",t:0,d:1,i:"e",e:"0.000000",r:1,s:"0.000000",o:"4"},{f:"2",t:0,d:3.5333333,i:"e",e:"1.000000",r:1,s:"1.000000",o:"5"},{f:"2",t:1,d:2,i:"e",e:"1.000000",s:"0.000000",o:"4"},{f:"2",t:3,d:6.4666662,i:"e",e:"1.000000",s:"1.000000",o:"4"},{f:"2",t:3.5333333,d:0.4666667,i:"a",e:-31,r:1,s:158,o:"5"},{f:"2",t:3.5333333,d:0.4666667,i:"b",e:123,r:1,s:123,o:"5"},{f:"2",t:3.5333333,d:5.9333329,i:"e",e:"1.000000",s:"1.000000",o:"5"},{f:"2",t:4,d:6,i:"a",e:-31,s:-31,o:"5"},{f:"2",t:4.9666667,d:0.033333302,i:"e",e:"1.000000",r:1,s:"0.000000",o:"6"},{f:"2",t:5,d:4.4666662,i:"e",e:"1.000000",s:"1.000000",o:"6"},{f:"2",t:6,d:0,i:"e",e:"1.000000",r:1,s:"0.000000",o:"8"},{f:"2",t:6,d:3.4666662,i:"e",e:"1.000000",s:"1.000000",o:"8"},{f:"2",t:6.9666667,d:0.033333302,i:"e",e:"1.000000",r:1,s:"0.000000",o:"9"},{f:"2",t:7,d:2.4666662,i:"e",e:"1.000000",s:"1.000000",o:"9"},{f:"2",t:9.4666662,d:0.56666756,i:"e",e:"0.000000",s:"1.000000",o:"9"},{f:"2",t:9.4666662,d:0.56666756,i:"e",e:"0.000000",s:"1.000000",o:"8"},{f:"2",t:9.4666662,d:0.56666756,i:"e",e:"0.000000",s:"1.000000",o:"6"},{f:"2",t:9.4666662,d:0.56666756,i:"e",e:"0.000000",s:"1.000000",o:"4"},{f:"2",t:9.4666662,d:0.53333378,i:"e",e:"0.006691",s:"1.000000",o:"5"},{f:"2",t:10,d:0.033333778,i:"a",e:142,s:-31,o:"5"},{f:"2",t:10,d:0.033333778,i:"e",e:"0.000000",s:"0.006691",o:"5"}],identifier:"kTimelineDefaultIdentifier",name:"Main Timeline",duration:10.033334}},sceneIndex:0,perspective:"600px",initialValues:{"3":{aV:8,w:"FDEM",x:"visible",a:16,Z:"break-word",b:4,j:"absolute",r:"inline",z:"2",k:"div",aS:8,aT:8,s:"Times,'Times New Roman',Georgia,Serif",t:48,y:"preserve",aU:8,G:"#FFFFFF"},"8":{aV:8,w:"Plan.",x:"visible",a:55,Z:"break-word",b:267,j:"absolute",r:"inline",z:"6",aS:8,k:"div",aT:8,y:"preserve",t:24,e:"0.000000",aU:8,G:"#FFFFFF"},"4":{aU:8,G:"#FFFFFF",c:200,aV:8,r:"inline",d:18,e:"0.000000",s:"Times,'Times New Roman',Georgia,Serif",t:14,Z:"break-word",w:"Federal Department<div>of Emergency Management</div>",j:"absolute",x:"visible",k:"div",y:"preserve",z:"3",aS:8,aT:8,a:-18,F:"center",b:58},"9":{aV:8,w:"Stay Alive.",x:"visible",a:26,Z:"break-word",b:315,j:"absolute",r:"inline",z:"7",aS:8,k:"div",aT:8,y:"preserve",t:24,e:"0.000000",aU:8,G:"#FFFFFF"},"5":{aU:8,bB:3,c:227,G:"#EB3B37",aV:8,r:"inline",d:18,e:"1.000000",s:"'Arial Black',Gadget,Sans-Serif",bC:0,X:1,t:28,Y:30,Z:"break-word",w:"ZOMBIE ATTACKS!\n",j:"absolute",x:"visible",aZ:0,k:"div",y:"preserve",z:"4",aS:8,E:-2,aT:8,a:158,F:"center",bA:"#000000",b:123},"6":{aV:8,w:"Prepare.",x:"visible",a:34,Z:"break-word",b:223,j:"absolute",r:"inline",z:"5",aS:8,k:"div",aT:8,y:"preserve",t:24,e:"0.000000",aU:8,G:"#FFFFFF"},"2":{o:"content-box",w:"",h:"underwater.jpg",p:"no-repeat",x:"visible",a:-148,q:"100% 100%",b:0,j:"absolute",r:"inline",c:533,z:"1",k:"div",d:400,s:"Times,'Times New Roman',Georgia,Serif",e:"1.000000"}},oid:"1",backgroundColor:"#FFFFFF",name:"Untitled Scene"}];


	
	var javascripts = [];


	
	var Custom = {};
	var javascriptMapping = {};
	for(var i = 0; i < javascripts.length; i++) {
		try {
			javascriptMapping[javascripts[i].identifier] = javascripts[i].name;
			eval("Custom." + javascripts[i].name + " = " + javascripts[i].source);
		} catch (e) {
			hypeDoc.log(e);
			Custom[javascripts[i].name] = (function () {});
		}
	}
	
	hypeDoc.setAttributeTransformerMapping(attributeTransformerMapping);
	hypeDoc.setScenes(scenes);
	hypeDoc.setJavascriptMapping(javascriptMapping);
	hypeDoc.Custom = Custom;
	hypeDoc.setCurrentSceneIndex(0);
	hypeDoc.setMainContentContainerID("zombies_hype_container");
	hypeDoc.setResourcesFolderName(resourcesFolderName);
	hypeDoc.setShowHypeBuiltWatermark(0);
	hypeDoc.setShowLoadingPage(false);
	hypeDoc.setDrawSceneBackgrounds(true);
	hypeDoc.setDocumentName(documentName);

	HYPE.documents[documentName] = hypeDoc.API;

	hypeDoc.documentLoad(this.body);
}());

