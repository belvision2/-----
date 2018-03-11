   $( document ).ready(function() { 
       
       
  var x = rublesToDollars($('.nine-mod').html(), 27.5);
  function rublesToDollars(str, course) {
  return str.replace(
    /от (\d+)\s+₽/g,
    function (match, rubles, rub_ending) {
      var rubles = parseInt(rubles);
      var dollars = rubles / course;
      return 'от ' + dollars.toFixed() + ' руб';
    });
}
   $('.nine-mod').html(x);
       
       
     
     var x2 = rublesToDollars2($('.nine-mod').html(), 27.5);  
      function rublesToDollars2(str2, course2) {
  return str2.replace(
    /от (\d+)&nbsp;₽/g,
    function (match, rubles2, rub_ending2) {
      var rubles2 = parseInt(rubles2);
      var dollars2 = rubles2 / course2;
      return 'от ' + dollars2.toFixed() + ' руб';
    });
}
  $('.nine-mod').html(x2); 
       
       
       
       
  }); 

