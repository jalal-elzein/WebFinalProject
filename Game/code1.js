gdjs.Game_32_45_32Level_321Code = {};
gdjs.Game_32_45_32Level_321Code.forEachIndex2 = 0;

gdjs.Game_32_45_32Level_321Code.forEachObjects2 = [];

gdjs.Game_32_45_32Level_321Code.forEachTemporary2 = null;

gdjs.Game_32_45_32Level_321Code.forEachTotalCount2 = 0;

gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDMidGrassObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDMidGrassObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDMidGrassObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDBridgeObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDBridgeObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDBridgeObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDBlockObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDBlockObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDBlockObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDEndWallObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDEndWallObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDEndWallObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDCloudObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDCloudObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDCloudObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDCloud2Objects1= [];
gdjs.Game_32_45_32Level_321Code.GDCloud2Objects2= [];
gdjs.Game_32_45_32Level_321Code.GDCloud2Objects3= [];
gdjs.Game_32_45_32Level_321Code.GDBushObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDBushObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDBushObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDPlantObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDPlantObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDPlantObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDCoinObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDCoinObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDCoinObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDScoreTextObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDScoreTextObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDScoreTextObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDSlimeObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDSlimeObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDLeftObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDLeftObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDLeftObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDRightObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDRightObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDRightObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDEndPointObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDEndPointObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDEndPointObjects3= [];
gdjs.Game_32_45_32Level_321Code.GDPostObjects1= [];
gdjs.Game_32_45_32Level_321Code.GDPostObjects2= [];
gdjs.Game_32_45_32Level_321Code.GDPostObjects3= [];

gdjs.Game_32_45_32Level_321Code.conditionTrue_0 = {val:false};
gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0 = {val:false};
gdjs.Game_32_45_32Level_321Code.condition1IsTrue_0 = {val:false};
gdjs.Game_32_45_32Level_321Code.condition2IsTrue_0 = {val:false};


gdjs.Game_32_45_32Level_321Code.eventsList0 = function(runtimeScene) {

{

gdjs.copyArray(gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1, gdjs.Game_32_45_32Level_321Code.GDPlayerObjects2);


gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects2.length;i<l;++i) {
    if ( gdjs.Game_32_45_32Level_321Code.GDPlayerObjects2[i].getBehavior("PlatformerObject").isMoving() ) {
        gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = true;
        gdjs.Game_32_45_32Level_321Code.GDPlayerObjects2[k] = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects2[i];
        ++k;
    }
}
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects2.length = k;}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDPlayerObjects2 */
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects2.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDPlayerObjects2[i].setAnimationName("Walk");
}
}}

}


{

/* Reuse gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1 */

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length;i<l;++i) {
    if ( !(gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].getBehavior("PlatformerObject").isMoving()) ) {
        gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = true;
        gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[k] = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i];
        ++k;
    }
}
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length = k;}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1 */
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].setAnimationName("Idle");
}
}}

}


};gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDPlayerObjects1Objects = Hashtable.newFrom({"Player": gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDCoinObjects1Objects = Hashtable.newFrom({"Coin": gdjs.Game_32_45_32Level_321Code.GDCoinObjects1});
gdjs.Game_32_45_32Level_321Code.eventsList1 = function(runtimeScene) {

};gdjs.Game_32_45_32Level_321Code.eventsList2 = function(runtimeScene) {

{

/* Reuse gdjs.Game_32_45_32Level_321Code.GDCoinObjects1 */

for(gdjs.Game_32_45_32Level_321Code.forEachIndex2 = 0;gdjs.Game_32_45_32Level_321Code.forEachIndex2 < gdjs.Game_32_45_32Level_321Code.GDCoinObjects1.length;++gdjs.Game_32_45_32Level_321Code.forEachIndex2) {
gdjs.Game_32_45_32Level_321Code.GDCoinObjects2.length = 0;


gdjs.Game_32_45_32Level_321Code.forEachTemporary2 = gdjs.Game_32_45_32Level_321Code.GDCoinObjects1[gdjs.Game_32_45_32Level_321Code.forEachIndex2];
gdjs.Game_32_45_32Level_321Code.GDCoinObjects2.push(gdjs.Game_32_45_32Level_321Code.forEachTemporary2);
if (true) {
{gdjs.evtTools.sound.playSound(runtimeScene, "https://resources.gdevelop-app.com/examples/platformer/coin.wav", false, 100, 1);
}{runtimeScene.getScene().getVariables().getFromIndex(0).add(100);
}{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDCoinObjects2.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDCoinObjects2[i].deleteFromScene(runtimeScene);
}
}}
}

}


};gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDSlimeObjects1Objects = Hashtable.newFrom({"Slime": gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDRightObjects1Objects = Hashtable.newFrom({"Right": gdjs.Game_32_45_32Level_321Code.GDRightObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDSlimeObjects1Objects = Hashtable.newFrom({"Slime": gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDLeftObjects1Objects = Hashtable.newFrom({"Left": gdjs.Game_32_45_32Level_321Code.GDLeftObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDPlayerObjects1Objects = Hashtable.newFrom({"Player": gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDSlimeObjects1Objects = Hashtable.newFrom({"Slime": gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDPlayerObjects1Objects = Hashtable.newFrom({"Player": gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDSlimeObjects1Objects = Hashtable.newFrom({"Slime": gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDPlayerObjects1Objects = Hashtable.newFrom({"Player": gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDCheckpointObjects1Objects = Hashtable.newFrom({"Checkpoint": gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDPlayerObjects1Objects = Hashtable.newFrom({"Player": gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1});
gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDEndPointObjects1Objects = Hashtable.newFrom({"EndPoint": gdjs.Game_32_45_32Level_321Code.GDEndPointObjects1});
gdjs.Game_32_45_32Level_321Code.eventsList3 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length;i<l;++i) {
    if ( gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].getBehavior("PlatformerObject").isJumping() ) {
        gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = true;
        gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[k] = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i];
        ++k;
    }
}
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length = k;}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1 */
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].setAnimationName("Jump");
}
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length;i<l;++i) {
    if ( gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].getBehavior("PlatformerObject").isOnFloor() ) {
        gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = true;
        gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[k] = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i];
        ++k;
    }
}
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length = k;}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {

{ //Subevents
gdjs.Game_32_45_32Level_321Code.eventsList0(runtimeScene);} //End of subevents
}

}


{

gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length;i<l;++i) {
    if ( gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].getBehavior("PlatformerObject").getCurrentSpeed() < 0 ) {
        gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = true;
        gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[k] = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i];
        ++k;
    }
}
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length = k;}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1 */
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].flipX(true);
}
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length;i<l;++i) {
    if ( gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].getBehavior("PlatformerObject").getCurrentSpeed() > 0 ) {
        gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = true;
        gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[k] = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i];
        ++k;
    }
}
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length = k;}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1 */
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].flipX(false);
}
}}

}


{


{
gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1);
{gdjs.evtTools.camera.centerCamera(runtimeScene, (gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length !== 0 ? gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[0] : null), false, "", 0);
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("Coin"), gdjs.Game_32_45_32Level_321Code.GDCoinObjects1);
gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDPlayerObjects1Objects, gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDCoinObjects1Objects, false, runtimeScene, false);
}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {

{ //Subevents
gdjs.Game_32_45_32Level_321Code.eventsList2(runtimeScene);} //End of subevents
}

}


{


{
gdjs.copyArray(runtimeScene.getObjects("ScoreText"), gdjs.Game_32_45_32Level_321Code.GDScoreTextObjects1);
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDScoreTextObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDScoreTextObjects1[i].setString("Score : " + gdjs.evtTools.common.toString(gdjs.evtTools.variable.getVariableNumber(runtimeScene.getScene().getVariables().getFromIndex(0))));
}
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("Right"), gdjs.Game_32_45_32Level_321Code.GDRightObjects1);
gdjs.copyArray(runtimeScene.getObjects("Slime"), gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDSlimeObjects1Objects, gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDRightObjects1Objects, false, runtimeScene, false);
}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1 */
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].returnVariable(gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].getVariables().getFromIndex(0)).setString("right");
}
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("Left"), gdjs.Game_32_45_32Level_321Code.GDLeftObjects1);
gdjs.copyArray(runtimeScene.getObjects("Slime"), gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDSlimeObjects1Objects, gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDLeftObjects1Objects, false, runtimeScene, false);
}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1 */
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].returnVariable(gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].getVariables().getFromIndex(0)).setString("left");
}
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("Slime"), gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length;i<l;++i) {
    if ( gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].getVariableString(gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].getVariables().getFromIndex(0)) == "left" ) {
        gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = true;
        gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[k] = gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i];
        ++k;
    }
}
gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length = k;}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1 */
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].addPolarForce(180, 100, 0);
}
}{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].flipX(false);
}
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("Slime"), gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length;i<l;++i) {
    if ( gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].getVariableString(gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].getVariables().getFromIndex(0)) == "right" ) {
        gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = true;
        gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[k] = gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i];
        ++k;
    }
}
gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length = k;}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1 */
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].addPolarForce(0, 100, 0);
}
}{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].flipX(true);
}
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1);
gdjs.copyArray(runtimeScene.getObjects("Slime"), gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
gdjs.Game_32_45_32Level_321Code.condition1IsTrue_0.val = false;
{
gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDPlayerObjects1Objects, gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDSlimeObjects1Objects, false, runtimeScene, false);
}if ( gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val ) {
{
for(var i = 0, k = 0, l = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length;i<l;++i) {
    if ( gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].getBehavior("PlatformerObject").isFalling() ) {
        gdjs.Game_32_45_32Level_321Code.condition1IsTrue_0.val = true;
        gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[k] = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i];
        ++k;
    }
}
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length = k;}}
if (gdjs.Game_32_45_32Level_321Code.condition1IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1 */
/* Reuse gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1 */
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1[i].deleteFromScene(runtimeScene);
}
}{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].getBehavior("PlatformerObject").setCanJump();
}
}{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].getBehavior("PlatformerObject").simulateJumpKey();
}
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1);
gdjs.copyArray(runtimeScene.getObjects("Slime"), gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
gdjs.Game_32_45_32Level_321Code.condition1IsTrue_0.val = false;
{
gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDPlayerObjects1Objects, gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDSlimeObjects1Objects, false, runtimeScene, false);
}if ( gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val ) {
{
for(var i = 0, k = 0, l = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length;i<l;++i) {
    if ( gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].getBehavior("PlatformerObject").isOnFloor() ) {
        gdjs.Game_32_45_32Level_321Code.condition1IsTrue_0.val = true;
        gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[k] = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i];
        ++k;
    }
}
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length = k;}}
if (gdjs.Game_32_45_32Level_321Code.condition1IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1 */
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[i].setPosition(gdjs.evtTools.variable.getVariableNumber(runtimeScene.getScene().getVariables().getFromIndex(1)),gdjs.evtTools.variable.getVariableNumber(runtimeScene.getScene().getVariables().getFromIndex(2)));
}
}}

}


{


gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
gdjs.copyArray(runtimeScene.getObjects("Left"), gdjs.Game_32_45_32Level_321Code.GDLeftObjects1);
gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1);
gdjs.copyArray(runtimeScene.getObjects("Right"), gdjs.Game_32_45_32Level_321Code.GDRightObjects1);
{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDLeftObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDLeftObjects1[i].hide();
}
}{for(var i = 0, len = gdjs.Game_32_45_32Level_321Code.GDRightObjects1.length ;i < len;++i) {
    gdjs.Game_32_45_32Level_321Code.GDRightObjects1[i].hide();
}
}{runtimeScene.getScene().getVariables().getFromIndex(1).setNumber((( gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length === 0 ) ? 0 :gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[0].getPointX("")));
}{runtimeScene.getScene().getVariables().getFromIndex(2).setNumber((( gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length === 0 ) ? 0 :gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1[0].getPointY("")));
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("Checkpoint"), gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects1);
gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDPlayerObjects1Objects, gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDCheckpointObjects1Objects, false, runtimeScene, false);
}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
/* Reuse gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects1 */
{runtimeScene.getScene().getVariables().getFromIndex(1).setNumber((( gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects1.length === 0 ) ? 0 :gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects1[0].getPointX("")));
}{runtimeScene.getScene().getVariables().getFromIndex(2).setNumber((( gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects1.length === 0 ) ? 0 :gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects1[0].getPointY("")));
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("EndPoint"), gdjs.Game_32_45_32Level_321Code.GDEndPointObjects1);
gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1);

gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = false;
{
gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDPlayerObjects1Objects, gdjs.Game_32_45_32Level_321Code.mapOfGDgdjs_46Game_9532_9545_9532Level_95321Code_46GDEndPointObjects1Objects, false, runtimeScene, false);
}if (gdjs.Game_32_45_32Level_321Code.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Main Menu", false);
}}

}


};

gdjs.Game_32_45_32Level_321Code.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.Game_32_45_32Level_321Code.GDPlayerObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDPlayerObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDMidGrassObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDMidGrassObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDMidGrassObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDBridgeObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDBridgeObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDBridgeObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDBlockObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDBlockObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDBlockObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDEndWallObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDEndWallObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDEndWallObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCloudObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCloudObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCloudObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCloud2Objects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCloud2Objects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCloud2Objects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDBushObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDBushObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDBushObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDPlantObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDPlantObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDPlantObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCoinObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCoinObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCoinObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDScoreTextObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDScoreTextObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDScoreTextObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDSlimeObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDSlimeObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDSlimeObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDLeftObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDLeftObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDLeftObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDRightObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDRightObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDRightObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDCheckpointObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDEndPointObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDEndPointObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDEndPointObjects3.length = 0;
gdjs.Game_32_45_32Level_321Code.GDPostObjects1.length = 0;
gdjs.Game_32_45_32Level_321Code.GDPostObjects2.length = 0;
gdjs.Game_32_45_32Level_321Code.GDPostObjects3.length = 0;

gdjs.Game_32_45_32Level_321Code.eventsList3(runtimeScene);

return;

}

gdjs['Game_32_45_32Level_321Code'] = gdjs.Game_32_45_32Level_321Code;
