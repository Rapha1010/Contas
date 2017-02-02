	<h3>Home</h3>

	<!--Panel Line Chart-->
	<div class="panel panel-default">
		<div class="panel-heading"><h3 class="panel-title">Line Chart</h3></div>
		<div class="panel-body">
		<div id="line-example" style="height:250px;"></div>
		</div>
	</div>

	<!--Panel Bar Chart-->
	<div class="panel panel-default">
		<div class="panel-heading"><h3 class="panel-title">Bar Chart</h3></div>
		<div class="panel-body">
		<div id="bar-example" style="height:250px;"></div> 
		</div>
	</div>

	<!--Panel Area Chart-->
	<div class="panel panel-default">
		<div class="panel-heading"><h3 class="panel-title">Area Chart</h3></div>
		<div class="panel-body">
		<div id="area-example" style="height:250px;"></div>
		</div>
	</div>

<script>
	new Morris.Line({
	  // ID of the element in which to draw the chart.
	  element: 'line-example',
	  // Chart data records -- each entry in this array corresponds to a point on
	  // the chart.
	  data: [
	    { year: '2008', value: 20 },
	    { year: '2009', value: 10 },
	    { year: '2010', value: 5 },
	    { year: '2011', value: 5 },
	    { year: '2012', value: 20 }
	  ],
	  // The name of the data record attribute that contains x-values.
	  xkey: 'year',
	  // A list of names of data record attributes that contain y-values.
	  ykeys: ['value'],
	  // Labels for the ykeys -- will be displayed when you hover over the
	  // chart.
	  labels: ['Value']
	});
</script>

<script>
	Morris.Bar({
  element: 'bar-example',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
</script>

<script>
	new Morris.Area({
	  // ID of the element in which to draw the chart.
	  element: 'area-example',
	  // Chart data records -- each entry in this array corresponds to a point on
	  // the chart.
	  data: [
	    { year: '2008', value: 20 },
	    { year: '2009', value: 10 },
	    { year: '2010', value: 5 },
	    { year: '2011', value: 5 },
	    { year: '2012', value: 20 }
	  ],
	  // The name of the data record attribute that contains x-values.
	  xkey: 'year',
	  // A list of names of data record attributes that contain y-values.
	  ykeys: ['value'],
	  // Labels for the ykeys -- will be displayed when you hover over the
	  // chart.
	  labels: ['Value']
	});
</script>