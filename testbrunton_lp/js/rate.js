
var dates = []

 var startDate = new Date(new Date().getFullYear(),new Date().getMonth() , new Date().getDate()); //YYYY-MM-DD
 //var startDate = new Date(); //YYYY-MM-DD
 var endDate = new Date("2020-02-29"); //YYYY-MM-DDvar lastDate = new Date(dates[2], dates[0], 0);

var getDateArray = function(start, end) {
 var
   arr = new Array(),
   dt = new Date(start);
 while (dt <= end) {
    //  console.log(dt);
     var _mnth=dt.getMonth()+1;
     var output = ((''+_mnth).length<2 ? '0' : '') +_mnth + '/' +     
     ((''+dt.getDate()).length<2 ? '0' : '') + dt.getDate()+ '/' +dt.getFullYear();
   arr.push(dt);
   dates[dt]='Rs20303';
   dt.setDate(dt.getDate() + 1);
   }
 return arr;
 }
var dateArr = getDateArray(startDate, endDate);
console.log(dates);
//   dates[new Date('02/01/2020')]='Rs500';

var current_date = new Date();
var _c_from_month=current_date.getMonth()+1;

$('#datepicker01').datepicker({
    showButtonPanel: false,
    minDate : "+1",
    onChangeMonthYear :function(r,m){
        _c_from_month=m;
    },
    
    beforeShowDay: function(date) {
        var _mnth=date.getMonth()+1;
        if(_mnth==_c_from_month){
            
        var hlText = dates[date]; 
        console.log(date);
        var date2 = new Date(date);
        var tglAja = date2.getDate();
        if (hlText) {
             updateDatePickerCells(tglAja,hlText);
            return [true, "", hlText];
        }
        else {
            return [true, '', ''];
        }
    }
    },
   
});


function updateDatePickerCells(a,b) {
    var num = parseInt(a);
    setTimeout(function () {
        $('.ui-datepicker td > *').each(function (idx, elem) {
            if((idx+1)==num){
                value=b;   
            }else{
                 value=0;   
            }
    
            var className = 'datepicker-content-' + value.toString();
            // console.log(value+'-'+a);
            if(value == 0)
                addCSSRule('.ui-datepicker td a.' + className + ':after {content: "\\a0";}'); //&nbsp;
            else
                addCSSRule('.ui-datepicker td a.' + className + ':after {content: "' + value + '";}');
            $(this).addClass(className);
        });
    }, 0);
}


var current_date = new Date();
var _c_to_month=current_date.getMonth()+1;

$('#datepicker02').datepicker({
    showButtonPanel: false,
    //minDate: 0,
    minDate : "+1",
    onChangeMonthYear :function(r,m){
        _c_to_month=m;
    },
    // numberOfMonths:[1,2],
    beforeShowDay: function(date) {
        var _mnth=date.getMonth()+1;
        if(_mnth==_c_to_month){

      var hlText = dates[date]; 
      var date2 = new Date(date);
      var tglAja = date2.getDate();
        if (hlText) {
             updateDatePickerCells(tglAja,hlText);
            return [true, "", hlText];
        }
        else {
            return [true, '', ''];
        }
    }
    },
    
});

 
var dynamicCSSRules = [];
function addCSSRule(rule) {
    if ($.inArray(rule, dynamicCSSRules) == -1) {
        $('head').append('<style>' + rule + '</style>');
        dynamicCSSRules.push(rule);
    }
}






    



 
