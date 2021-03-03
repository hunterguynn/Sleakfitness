






let weight = [223.4,222.8,222,222.5,222,223.4,222.4,222,222.8,221.6,220.4,220.8,220.2]




var data = {
    // A labels array that can contain any sort of values
    labels: ['Tue', 'Wed', 'Thu', 'Fri','Sat', 'Sun',"Mon",'Tue', 'Wed', 'Thu', 'Fri','Sat', 'Sun',"Mon"],
    // Our series array that contains series objects or in this case series data arrays
    series: [
       weight
    ]
  };
  
  
  // Create a new line chart object where as first parameter we pass in a selector
  // that is resolving to our chart container element. The Second parameter
  // is the actual data object.
  new Chartist.Line('.ct-chart', data,);
  