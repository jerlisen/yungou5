var moveing = false;
function $(id) { return document.getElementById(id); }
function moveElement(elementID,final_x,final_y,interval) {
  if (!document.getElementById) return false;
  if (!document.getElementById(elementID)) return false;
  var elem = document.getElementById(elementID);
  if (elem.movement) {
    clearTimeout(elem.movement);
  }
  if (!elem.style.left) {
    elem.style.left = "0px";
  }
  if (!elem.style.top) {
    elem.style.top = "0px";
  }
  var xpos = parseInt(elem.style.left);
  var ypos = parseInt(elem.style.top);
  if (xpos == final_x && ypos == final_y) {
 moveing=false;
    return true;
  }
  if (xpos < final_x) {
    var dist = Math.ceil((final_x - xpos)/10);//Math.ceil求最小的整数，但不小于本身
    xpos = xpos + dist;
  }
  if (xpos > final_x) {
    var dist = Math.ceil((xpos - final_x)/10);
    xpos = xpos - dist;
  }
  if (ypos < final_y) {
    var dist = Math.ceil((final_y - ypos)/10);
    ypos = ypos + dist;
  }
  if (ypos > final_y) {
    var dist = Math.ceil((ypos - final_y)/10);
    ypos = ypos - dist;
  }
  elem.style.left = xpos + "px";
  elem.style.top = ypos + "px";
  var repeat = "moveElement('"+elementID+"',"+final_x+","+final_y+","+interval+")";
  elem.movement = setTimeout(repeat,interval);
}
function next(previousBtn,nextBtn,scrollID,highlightID) {
 if(moveing) return;
 moveing = true;
 var vTop = parseInt($(scrollID).style.top);
 var vLeft = parseInt($(scrollID).style.left);
 if (vLeft <= -1776) return moveing=false;
 if(vLeft == -1184) {
  $(nextBtn).className = 'last_btn';
 }
 var finalLeft = vLeft - 592;
 moveElement(scrollID,finalLeft,vTop,5);
 $(previousBtn).className = 'previous';
 var highLightList = $(highlightID).getElementsByTagName('span');
 for (var i=0; i<highLightList.length; i++) {
  if (highLightList[i].className == 'current') {
    var currentNum = i;
  }  
 }
 highLightList[currentNum].className = '';
 highLightList[currentNum+1].className = 'current';
}
function previous(previousBtn,nextBtn,scrollID,highlightID) {
 if(moveing) return;
 moveing = true;
 var vTop = parseInt($(scrollID).style.top);
 var vLeft = parseInt($(scrollID).style.left);
 if (vLeft >= 0) return moveing=false;
 if(vLeft == -592) {
  $(previousBtn).className = 'first_btn';
 }
 var finalLeft = vLeft + 592;
 moveElement(scrollID,finalLeft,vTop,5);
 $(nextBtn).className = 'next';
 var highLightList = $(highlightID).getElementsByTagName('span');
 for (var i=0; i<highLightList.length; i++) {
  if (highLightList[i].className == 'current') {
    var currentNum = i;
  }  
 }
 highLightList[currentNum].className = '';
 highLightList[currentNum-1].className = 'current';
}