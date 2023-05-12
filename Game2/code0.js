gdjs.Main_32MenuCode = {};
gdjs.Main_32MenuCode.GDStartButtonObjects1= [];
gdjs.Main_32MenuCode.GDStartButtonObjects2= [];
gdjs.Main_32MenuCode.GDExitButtonObjects1= [];
gdjs.Main_32MenuCode.GDExitButtonObjects2= [];
gdjs.Main_32MenuCode.GDCloudObjects1= [];
gdjs.Main_32MenuCode.GDCloudObjects2= [];
gdjs.Main_32MenuCode.GDGroundObjects1= [];
gdjs.Main_32MenuCode.GDGroundObjects2= [];


gdjs.Main_32MenuCode.mapOfGDgdjs_46Main_9532MenuCode_46GDStartButtonObjects1Objects = Hashtable.newFrom({"StartButton": gdjs.Main_32MenuCode.GDStartButtonObjects1});
gdjs.Main_32MenuCode.eventsList0 = function(runtimeScene) {

{


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Game - Level 1", false);
}}

}


};gdjs.Main_32MenuCode.mapOfGDgdjs_46Main_9532MenuCode_46GDExitButtonObjects1Objects = Hashtable.newFrom({"ExitButton": gdjs.Main_32MenuCode.GDExitButtonObjects1});
gdjs.Main_32MenuCode.eventsList1 = function(runtimeScene) {

{


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
if (isConditionTrue_0) {
{gdjs.evtTools.window.openURL("../Pages/game-leaderboard.php", runtimeScene);
}}

}


};gdjs.Main_32MenuCode.mapOfGDgdjs_46Main_9532MenuCode_46GDStartButtonObjects1Objects = Hashtable.newFrom({"StartButton": gdjs.Main_32MenuCode.GDStartButtonObjects1});
gdjs.Main_32MenuCode.mapOfGDgdjs_46Main_9532MenuCode_46GDExitButtonObjects1Objects = Hashtable.newFrom({"ExitButton": gdjs.Main_32MenuCode.GDExitButtonObjects1});
gdjs.Main_32MenuCode.eventsList2 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("StartButton"), gdjs.Main_32MenuCode.GDStartButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.input.cursorOnObject(gdjs.Main_32MenuCode.mapOfGDgdjs_46Main_9532MenuCode_46GDStartButtonObjects1Objects, runtimeScene, true, false);
if (isConditionTrue_0) {
/* Reuse gdjs.Main_32MenuCode.GDStartButtonObjects1 */
{for(var i = 0, len = gdjs.Main_32MenuCode.GDStartButtonObjects1.length ;i < len;++i) {
    gdjs.Main_32MenuCode.GDStartButtonObjects1[i].setAnimationName("Pressed");
}
}
{ //Subevents
gdjs.Main_32MenuCode.eventsList0(runtimeScene);} //End of subevents
}

}


{

gdjs.copyArray(runtimeScene.getObjects("ExitButton"), gdjs.Main_32MenuCode.GDExitButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.input.cursorOnObject(gdjs.Main_32MenuCode.mapOfGDgdjs_46Main_9532MenuCode_46GDExitButtonObjects1Objects, runtimeScene, true, false);
if (isConditionTrue_0) {
/* Reuse gdjs.Main_32MenuCode.GDExitButtonObjects1 */
{for(var i = 0, len = gdjs.Main_32MenuCode.GDExitButtonObjects1.length ;i < len;++i) {
    gdjs.Main_32MenuCode.GDExitButtonObjects1[i].setAnimationName("Pressed");
}
}
{ //Subevents
gdjs.Main_32MenuCode.eventsList1(runtimeScene);} //End of subevents
}

}


{

gdjs.copyArray(runtimeScene.getObjects("StartButton"), gdjs.Main_32MenuCode.GDStartButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.input.cursorOnObject(gdjs.Main_32MenuCode.mapOfGDgdjs_46Main_9532MenuCode_46GDStartButtonObjects1Objects, runtimeScene, true, true);
if (isConditionTrue_0) {
/* Reuse gdjs.Main_32MenuCode.GDStartButtonObjects1 */
{for(var i = 0, len = gdjs.Main_32MenuCode.GDStartButtonObjects1.length ;i < len;++i) {
    gdjs.Main_32MenuCode.GDStartButtonObjects1[i].setAnimationName("Idle");
}
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("ExitButton"), gdjs.Main_32MenuCode.GDExitButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.input.cursorOnObject(gdjs.Main_32MenuCode.mapOfGDgdjs_46Main_9532MenuCode_46GDExitButtonObjects1Objects, runtimeScene, true, true);
if (isConditionTrue_0) {
/* Reuse gdjs.Main_32MenuCode.GDExitButtonObjects1 */
{for(var i = 0, len = gdjs.Main_32MenuCode.GDExitButtonObjects1.length ;i < len;++i) {
    gdjs.Main_32MenuCode.GDExitButtonObjects1[i].setAnimationName("Idle");
}
}}

}


};

gdjs.Main_32MenuCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.Main_32MenuCode.GDStartButtonObjects1.length = 0;
gdjs.Main_32MenuCode.GDStartButtonObjects2.length = 0;
gdjs.Main_32MenuCode.GDExitButtonObjects1.length = 0;
gdjs.Main_32MenuCode.GDExitButtonObjects2.length = 0;
gdjs.Main_32MenuCode.GDCloudObjects1.length = 0;
gdjs.Main_32MenuCode.GDCloudObjects2.length = 0;
gdjs.Main_32MenuCode.GDGroundObjects1.length = 0;
gdjs.Main_32MenuCode.GDGroundObjects2.length = 0;

gdjs.Main_32MenuCode.eventsList2(runtimeScene);

return;

}

gdjs['Main_32MenuCode'] = gdjs.Main_32MenuCode;
