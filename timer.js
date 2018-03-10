   $( document ).ready(function() { 

  function rublesToDollars(str, course) {
  return str.replace(
    /от (\d+)\s+₽/g,
    function (match, rubles, rub_ending, copecks_match, copecks, copecks_ending) {
      var rubles = parseInt(rubles);
      if (copecks) {
        rubles += parseInt(copecks) / 100;
      }
      var dollars = rubles / course;
      return 'от ' + dollars.toFixed(2) + ' руб';
    });
}
  var x = rublesToDollars($('table').html(), 27.5);
  $('table').html(x);
        
        
function rublesToDollars2(str2, course2) {
  return str2.replace(
    /от (\d+)&nbsp;₽/g,
    function (match, rubles2, rub_ending2, copecks_match2, copecks2, copecks_ending2) {
      var rubles2 = parseInt(rubles2);
      if (copecks2) {
        rubles2 += parseInt(copecks2) / 100;
      }
      var dollars2 = rubles2 / course2;
      return 'от ' + dollars2.toFixed(2) + ' руб';
    });
}
  var x2 = rublesToDollars2($('table').html(), 27.5);
  $('table').html(x2);
        
       }); 