(function($){"use strict"
let basicSlide=document.getElementById('basic-slider');noUiSlider.create(basicSlide,{start:[20,80],connect:true,range:{'min':0,'max':100}});let keyboardslider=document.getElementById('keyboardslider');noUiSlider.create(keyboardslider,{start:10,step:10,range:{'min':0,'max':100}});var handle=keyboardslider.querySelector('.noUi-handle');handle.addEventListener('keydown',function(e){var value=Number(keyboardslider.noUiSlider.get());if(e.which===37){keyboardslider.noUiSlider.set(value-10);}
console.log(e)
console.log(e.which)
if(e.which===39){keyboardslider.noUiSlider.set(value+10);}});function timestamp(str){return new Date(str).getTime();}
var dateSlider=document.getElementById('slider-date');noUiSlider.create(dateSlider,{range:{min:timestamp('2010'),max:timestamp('2016')},step:7*24*60*60*1000,start:[timestamp('2011'),timestamp('2015')],format:wNumb({decimals:0})});var dateValues=[document.getElementById('event-start'),document.getElementById('event-end')];var weekdays=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];var months=["January","February","March","April","May","June","July","August","September","October","November","December"];dateSlider.noUiSlider.on('update',function(values,handle){dateValues[handle].innerHTML=formatDate(new Date(+values[handle]));});function nth(d){if(d>3&&d<21)return 'th';switch(d%10){case 1:return "st";case 2:return "nd";case 3:return "rd";default:return "th";}}
function formatDate(date){return weekdays[date.getDay()]+", "+
date.getDate()+nth(date.getDate())+" "+
months[date.getMonth()]+" "+
date.getFullYear();}
var select=document.getElementById('input-select');for(var i=-20;i<=40;i++){var option=document.createElement("option");option.text=i;option.value=i;select.appendChild(option);}
var html5Slider=document.getElementById('html5');noUiSlider.create(html5Slider,{start:[10,30],connect:true,range:{'min':-20,'max':40}});var inputNumber=document.getElementById('input-number');html5Slider.noUiSlider.on('update',function(values,handle){var value=values[handle];if(handle){inputNumber.value=value;}else{select.value=Math.round(value);}});select.addEventListener('change',function(){html5Slider.noUiSlider.set([this.value,null]);});inputNumber.addEventListener('change',function(){html5Slider.noUiSlider.set([null,this.value]);});var nonLinearSlider=document.getElementById('nonlinear');noUiSlider.create(nonLinearSlider,{connect:true,behaviour:'tap',start:[500,4000],range:{'min':[0],'10%':[500,500],'50%':[4000,1000],'max':[10000]}});var nodes=[document.getElementById('lower-value'),document.getElementById('upper-value')];nonLinearSlider.noUiSlider.on('update',function(values,handle,unencoded,isTap,positions){nodes[handle].innerHTML=values[handle]+', '+positions[handle].toFixed(2)+'%';});var lockedState=false;var lockedSlider=false;var lockedValues=[60,80];var slider1=document.getElementById('slider1');var slider2=document.getElementById('slider2');var lockButton=document.getElementById('lockbutton');var slider1Value=document.getElementById('slider1-span');var slider2Value=document.getElementById('slider2-span');lockButton.addEventListener('click',function(){lockedState=!lockedState;this.textContent=lockedState?'unlock':'lock';});function crossUpdate(value,slider){if(!lockedState)return;var a=slider1===slider?0:1;var b=a?0:1;value-=lockedValues[b]-lockedValues[a];slider.noUiSlider.set(value);}
noUiSlider.create(slider1,{start:60,animate:false,range:{min:50,max:100}});noUiSlider.create(slider2,{start:80,animate:false,range:{min:50,max:100}});slider1.noUiSlider.on('update',function(values,handle){slider1Value.innerHTML=values[handle];});slider2.noUiSlider.on('update',function(values,handle){slider2Value.innerHTML=values[handle];});function setLockedValues(){lockedValues=[Number(slider1.noUiSlider.get()),Number(slider2.noUiSlider.get())];}
slider1.noUiSlider.on('change',setLockedValues);slider2.noUiSlider.on('change',setLockedValues);slider1.noUiSlider.on('slide',function(values,handle){crossUpdate(values[handle],slider2);});slider2.noUiSlider.on('slide',function(values,handle){crossUpdate(values[handle],slider1);});var pipsSlider=document.getElementById('slider-pips');noUiSlider.create(pipsSlider,{range:{min:0,max:100},start:[50],pips:{mode:'count',values:5}});var pips=pipsSlider.querySelectorAll('.noUi-value');function clickOnPip(){var value=Number(this.getAttribute('data-value'));pipsSlider.noUiSlider.set(value);}
for(var i=0;i<pips.length;i++){pips[i].style.cursor='pointer';pips[i].addEventListener('click',clickOnPip);}
var slider=document.getElementById('slider-color');noUiSlider.create(slider,{start:[4000,8000,12000,16000],connect:[false,true,true,true,true],range:{'min':[2000],'max':[20000]}});var connect=slider.querySelectorAll('.noUi-connect');var classes=['c-1-color','c-2-color','c-3-color','c-4-color','c-5-color'];for(var i=0;i<connect.length;i++){connect[i].classList.add(classes[i]);}
var keypressSlider=document.getElementById('keypress');var input0=document.getElementById('input-with-keypress-0');var input1=document.getElementById('input-with-keypress-1');var inputs=[input0,input1];noUiSlider.create(keypressSlider,{start:[20,80],connect:true,tooltips:[true,wNumb({decimals:1})],range:{'min':[0],'10%':[10,10],'50%':[80,50],'80%':150,'max':200}});keypressSlider.noUiSlider.on('update',function(values,handle){inputs[handle].value=values[handle];});inputs.forEach(function(input,handle){input.addEventListener('change',function(){keypressSlider.noUiSlider.setHandle(handle,this.value);});input.addEventListener('keydown',function(e){var values=keypressSlider.noUiSlider.get();var value=Number(values[handle]);var steps=keypressSlider.noUiSlider.steps();var step=steps[handle];var position;switch(e.which){case 13:keypressSlider.noUiSlider.setHandle(handle,this.value);break;case 38:position=step[1];if(position===false){position=1;}
if(position!==null){keypressSlider.noUiSlider.setHandle(handle,value+position);}
break;case 40:position=step[0];if(position===false){position=1;}
if(position!==null){keypressSlider.noUiSlider.setHandle(handle,value-position);}
break;}});});var skipSlider=document.getElementById('skipstep');noUiSlider.create(skipSlider,{range:{'min':0,'10%':10,'20%':20,'30%':30,'50%':50,'60%':60,'70%':70,'90%':90,'max':100},snap:true,start:[20,90]});var skipValues=[document.getElementById('skip-value-lower'),document.getElementById('skip-value-upper')];skipSlider.noUiSlider.on('update',function(values,handle){skipValues[handle].innerHTML=values[handle];});var bigValueSlider=document.getElementById('slider-huge');var bigValueSpan=document.getElementById('huge-value');noUiSlider.create(bigValueSlider,{start:0,step:1,format:wNumb({decimals:0}),range:{min:0,max:13}});var range=['0','2097152','4194304','8388608','16777216','33554432','67108864','134217728','268435456','536870912','1073741824','2147483648','4294967296','8589934592'];bigValueSlider.noUiSlider.on('update',function(values,handle){bigValueSpan.innerHTML=range[values[handle]];});var toggleSlider=document.getElementById('slider-toggle');noUiSlider.create(toggleSlider,{orientation:"vertical",start:0,range:{'min':[0,1],'max':1},format:wNumb({decimals:0})});toggleSlider.noUiSlider.on('update',function(values,handle){if(values[handle]==='1'){toggleSlider.classList.add('off');}else{toggleSlider.classList.remove('off');}});var softSlider=document.getElementById('soft');noUiSlider.create(softSlider,{start:50,range:{min:0,max:100},pips:{mode:'values',values:[20,80],density:4}});softSlider.noUiSlider.on('change',function(values,handle){if(values[handle]<20){softSlider.noUiSlider.set(20);}else if(values[handle]>80){softSlider.noUiSlider.set(80);}});var resultElement=document.getElementById('result');var sliders=document.getElementsByClassName('sliders');var colors=[0,0,0];[].slice.call(sliders).forEach(function(slider,index){noUiSlider.create(slider,{start:127,connect:[true,false],orientation:"vertical",range:{'min':0,'max':255},format:wNumb({decimals:0})});slider.noUiSlider.on('update',function(){colors[index]=slider.noUiSlider.get();var color='rgb('+colors.join(',')+')';resultElement.style.background=color;resultElement.style.color=color;});});var stepSlider=document.getElementById('slider-step');noUiSlider.create(stepSlider,{start:[4000],step:1000,range:{'min':[2000],'max':[10000]}});var stepSliderValueElement=document.getElementById('slider-step-value');stepSlider.noUiSlider.on('update',function(values,handle){stepSliderValueElement.innerHTML=values[handle];});var nonLinearStepSlider=document.getElementById('slider-non-linear-step');noUiSlider.create(nonLinearStepSlider,{start:[500,4000],range:{'min':[0],'10%':[500,500],'50%':[4000,1000],'max':[10000]}});var nonLinearStepSliderValueElement=document.getElementById('slider-non-linear-step-value');nonLinearStepSlider.noUiSlider.on('update',function(values,handle){nonLinearStepSliderValueElement.innerHTML=values[handle];});var snapSlider=document.getElementById('slider-snap');noUiSlider.create(snapSlider,{start:[0,500],snap:true,connect:true,range:{'min':0,'10%':50,'20%':100,'30%':150,'40%':500,'50%':800,'max':1000}});var snapValues=[document.getElementById('slider-snap-value-lower'),document.getElementById('slider-snap-value-upper')];snapSlider.noUiSlider.on('update',function(values,handle){snapValues[handle].innerHTML=values[handle];});var slider=document.getElementById('slider');noUiSlider.create(slider,{start:[80],range:{'min':[0],'max':[100]}});document.getElementById('write-button').addEventListener('click',function(){slider.noUiSlider.set(20);});document.getElementById('read-button').addEventListener('click',function(){alert(slider.noUiSlider.get());});var sliderFormat=document.getElementById('slider-format');noUiSlider.create(sliderFormat,{start:[20000],step:1000,range:{'min':[20000],'max':[80000]},ariaFormat:wNumb({decimals:3}),format:wNumb({decimals:3,thousand:'.',suffix:' (US $)'})});var inputFormat=document.getElementById('input-format');sliderFormat.noUiSlider.on('update',function(values,handle){inputFormat.value=values[handle];});inputFormat.addEventListener('change',function(){sliderFormat.noUiSlider.set(this.value);});var marginSlider=document.getElementById('slider-margin');noUiSlider.create(marginSlider,{start:[20,80],margin:30,range:{'min':0,'max':100}});var marginMin=document.getElementById('slider-margin-value-min'),marginMax=document.getElementById('slider-margin-value-max');marginSlider.noUiSlider.on('update',function(values,handle){if(handle){marginMax.innerHTML=values[handle];}else{marginMin.innerHTML=values[handle];}});var limitSlider=document.getElementById('slider-limit');noUiSlider.create(limitSlider,{start:[10,120],limit:40,behaviour:'drag',connect:true,range:{'min':0,'max':100}});var limitFieldMin=document.getElementById('slider-limit-value-min');var limitFieldMax=document.getElementById('slider-limit-value-max');limitSlider.noUiSlider.on('update',function(values,handle){(handle?limitFieldMax:limitFieldMin).innerHTML=values[handle];});var paddingSlider=document.getElementById('slider-padding');noUiSlider.create(paddingSlider,{start:[20,80],padding:[10,15],range:{'min':0,'max':100}});var paddingMin=document.getElementById('slider-padding-value-min');var paddingMax=document.getElementById('slider-padding-value-max');paddingSlider.noUiSlider.on('update',function(values,handle){if(handle){paddingMax.innerHTML=values[handle];}else{paddingMin.innerHTML=values[handle];}});var verticalSlider=document.getElementById('slider-vertical');noUiSlider.create(verticalSlider,{start:40,orientation:'vertical',range:{'min':0,'max':100}});var directionSlider=document.getElementById('slider-direction');noUiSlider.create(directionSlider,{start:20,direction:'rtl',range:{'min':0,'max':100}});var directionField=document.getElementById('field');directionSlider.noUiSlider.on('update',function(values,handle){directionField.innerHTML=values[handle];});var tooltipSlider=document.getElementById('slider-tooltips');noUiSlider.create(tooltipSlider,{start:[20,80,120],tooltips:[false,wNumb({decimals:1}),true],range:{'min':0,'max':200}});var behaviourSlider=document.getElementById('behaviour');noUiSlider.create(behaviourSlider,{start:[20,40],step:10,behaviour:'drag',connect:true,range:{'min':20,'max':80}});var tapSlider=document.getElementById('tap');noUiSlider.create(tapSlider,{start:40,behaviour:'tap',connect:[false,true],range:{'min':20,'max':80}});var dragFixedSlider=document.getElementById('drag-fixed');noUiSlider.create(dragFixedSlider,{start:[40,60],behaviour:'drag-fixed',connect:true,range:{'min':20,'max':80}});var snapSlider2=document.getElementById('snap');noUiSlider.create(snapSlider2,{start:40,behaviour:'snap',connect:[true,false],range:{'min':20,'max':80}});var hoverSlider=document.getElementById('hover');var field=document.getElementById('hover-val');noUiSlider.create(hoverSlider,{start:20,behaviour:'hover-snap',direction:'rtl',range:{'min':0,'max':10}});hoverSlider.noUiSlider.on('hover',function(value){field.innerHTML=value;});var unconstrainedSlider=document.getElementById('unconstrained');var unconstrainedValues=document.getElementById('unconstrained-values');noUiSlider.create(unconstrainedSlider,{start:[20,50,80],behaviour:'unconstrained-tap',connect:true,range:{'min':0,'max':100}});unconstrainedSlider.noUiSlider.on('update',function(values){unconstrainedValues.innerHTML=values.join(' :: ');});var dragTapSlider=document.getElementById('combined');noUiSlider.create(dragTapSlider,{start:[40,60],behaviour:'drag-tap',connect:true,range:{'min':20,'max':80}});var range_all_sliders={'min':[0],'10%':[500,500],'50%':[4000,1000],'max':[10000]};var pipsRange=document.getElementById('pips-range');noUiSlider.create(pipsRange,{range:range_all_sliders,start:0,pips:{mode:'range',density:3}});var pipsRangeRtl=document.getElementById('pips-range-rtl');noUiSlider.create(pipsRangeRtl,{range:range_all_sliders,start:0,direction:'rtl',pips:{mode:'range',density:3}});var pipsRangeVertical=document.getElementById('pips-range-vertical');noUiSlider.create(pipsRangeVertical,{range:range_all_sliders,start:0,orientation:'vertical',pips:{mode:'range',density:3}});var pipsRangeVerticalRtl=document.getElementById('pips-range-vertical-rtl');noUiSlider.create(pipsRangeVerticalRtl,{range:range_all_sliders,start:0,orientation:'vertical',direction:'rtl',pips:{mode:'range',density:3}});function filterPips(value,type){if(type===0){return value<2000?-1:0;}
return value%1000?2:1;}
var pipsSteps=document.getElementById('pips-steps');noUiSlider.create(pipsSteps,{range:range_all_sliders,start:0,pips:{mode:'steps',density:3,filter:filterPips,format:wNumb({decimals:2,prefix:'€'})}});var pipsPositions=document.getElementById('pips-positions');noUiSlider.create(pipsPositions,{range:range_all_sliders,start:0,pips:{mode:'positions',values:[0,25,50,75,100],density:4}});var positionsStepped=document.getElementById('pips-positions-stepped');noUiSlider.create(positionsStepped,{range:range_all_sliders,start:0,pips:{mode:'positions',values:[0,25,50,75,100],density:4,stepped:true}});var pipsCount=document.getElementById('pips-count');noUiSlider.create(pipsCount,{range:range_all_sliders,start:0,pips:{mode:'count',values:6,density:4}});var pipsCountStepped=document.getElementById('pips-count-stepped');noUiSlider.create(pipsCountStepped,{range:range_all_sliders,start:0,pips:{mode:'count',values:6,density:4,stepped:true}});var pipsValues=document.getElementById('pips-values');noUiSlider.create(pipsValues,{range:range_all_sliders,start:0,pips:{mode:'values',values:[50,552,2251,3200,5000,7080,9000],density:4}});var pipsValuesStepped=document.getElementById('pips-values-stepped');noUiSlider.create(pipsValuesStepped,{range:range_all_sliders,start:0,pips:{mode:'values',values:[50,552,4651,4952,5000,7080,9000],density:4,stepped:true}});var disSlider1=document.getElementById('disable1');var checkbox1=document.getElementById('checkbox1');function toggle(element){if(this.checked){element.setAttribute('disabled',true);}else{element.removeAttribute('disabled');}}
noUiSlider.create(disSlider1,{start:80,connect:[true,false],range:{min:0,max:100}});checkbox1.addEventListener('click',function(){toggle.call(this,disSlider1);});var disSlider2=document.getElementById('disable2');var origins=disSlider2.getElementsByClassName('noUi-origin');var checkbox2=document.getElementById('checkbox2');var checkbox3=document.getElementById('checkbox3');noUiSlider.create(disSlider2,{start:[20,80],range:{min:0,max:100}});checkbox2.addEventListener('click',function(){toggle.call(this,origins[0]);});checkbox3.addEventListener('click',function(){toggle.call(this,origins[1]);});var updateSlider=document.getElementById('slider-update');var updateSliderValue=document.getElementById('slider-update-value');noUiSlider.create(updateSlider,{range:{'min':0,'max':40},start:20,margin:2,step:2});updateSlider.noUiSlider.on('update',function(values,handle){updateSliderValue.innerHTML=values[handle];});var button1=document.getElementById('update-1');var button2=document.getElementById('update-2');function updateSliderRange(min,max){updateSlider.noUiSlider.updateOptions({range:{'min':min,'max':max}});}
button1.addEventListener('click',function(){updateSliderRange(20,50);});button2.addEventListener('click',function(){updateSliderRange(10,40);});})(jQuery);