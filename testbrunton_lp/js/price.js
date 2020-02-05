//$('#datepicker01').datepicker({
    $("#datepicker01").datepicker(function getPrices(){
//window.onload = function getPrices() {
    var aankomst = new Date();
    var vertrek = new Date(aankomst.getTime() + (48 * 60 * 60 * 1000));
    var maand = aankomst.getMonth();
    var verblijfDagen = [];
    var day = 1000*60*60*24;
    var diff = (vertrek.getTime()- aankomst.getTime())/day;


    
    //calculate all seperate days from arrival date to departure date and put them in an array   
    for(var i=0;i<=diff; i++)
    {
       var xx = aankomst.getTime()+day*i;
       var yy = new Date(xx);
       var zz = (yy.getDate()+"-"+(yy.getMonth()+1)+"-"+yy.getFullYear());
       var parts = zz.split('-');
       var zzDate = new Date(parts[2],parts[1]-1,parts[0]);
       //check if this date is in the correct Date structure
       alert(zzDate instanceof Date);
       verblijfDagen.push(zzDate)
    }
    //check if all the days are in the array
    alert (verblijfDagen);
    
    //declare the period of the different seasons and the daily cost rate during this season 
    var peakSeason = {startDate: new Date(2020,10-1,01), endDate: new Date(2020,12-1,31), costRate: 5090};
    var midSeason = {startDate: new Date(2020,5-1,1), endDate: new Date(2020,9-1,30), costRate: 4090};
    var lowSeason = {startDate: new Date(2020,1-1,1), endDate: new Date(2020,4-1,30), costRate: 3090};
    var allSeasons = [peakSeason, midSeason, lowSeason]
    //check if this date is in the correct Date structure
    alert(lowSeason.startDate instanceof Date);
    //check if the date is correct
    alert (lowSeason.startDate);

    var totalPrice = 0;
for (var u = 0; u < verblijfDagen.length; u++) {
  for(var j = 0; j < allSeasons.length; j++) {
    if (verblijfDagen[u] >= allSeasons[j].startDate && verblijfDagen[u] <= allSeasons[j].endDate) {
      //Add costRate of this date to totalPrice
      totalPrice = totalPrice + allSeasons[j].costRate;
    }
  }
}
});
