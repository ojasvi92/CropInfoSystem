<?php
$file="export.tsv";
//define variables
//$p_state="";
//$p_city="";
$season ="";
//$pins=$_GET['pincode'];
$state=$_GET['state'];
//$state=$_GET['state'];
//$city=$_GET['city'];
//$district=$_GET['district'];
$year=$_GET['year'];
//$year=$_GET['year'];
$crop=$_GET['crop'];
//$crop=$_GET['crop'];
$today=date("M");
//variables defined
//check for season
require 'season.php';
//checked

//connect to database
$con=mysqli_connect("localhost","Mavericks","barfi","mavericks");
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
//connection made

//check variables
if(($state=="")&&($crop=="")&&($year=="none"))
{
	echo "Please enter a choice";
	exit();
}

elseif(($state=="")&&($crop=="")&&($year!=""))
{
	//display production , landuse & prices data for the selected year for all the crops and all the states 
	$query= "SELECT * FROM season WHERE YEAR='$year'";
}
elseif(($state=="")&&($crop!="")&&($year=="none"))
{
	//display production data for a particular crop every year in every state
	$query= "SELECT * FROM season WHERE CROP='$crop'";
}
elseif(($state=="")&&($crop!="")&&($year!=""))
{
	//display production and land use data for a particular crop in a particular year across the country
	$query= "SELECT * FROM season WHERE YEAR='$year' AND CROP='$crop'";
}
elseif(($state!="")&&($crop=="")&&($year=="none"))
{
	//display production stats of every crop in a state for all the years
	$query= "SELECT * FROM season WHERE STATE='$state'";
}
elseif(($state!="")&&($crop=="")&&($year!=""))
{
	//display production stats of all crops in a particular state in a particular year
	$query= "SELECT * FROM season WHERE STATE='$state' AND YEAR='$year'";
}
elseif(($state!="")&&($crop!="")&&($year=="none"))
{
	//display production stats of a crop in a particular state in for every year
	$query= "SELECT * FROM season WHERE STATE='$state' AND CROP='$crop'";
}
elseif(($state!="")&&($crop!="")&&($year!=""))
{
	//display production stats of a crop in a particular state in a particular year
	$query= "SELECT * FROM season WHERE STATE='$state' AND YEAR='$year' AND CROP='$crop'";
}


$res = mysqli_query($con, $query);
$fest="year"."\t"."state"."\t"."district"."\t"."crop"."\t"."season"."\t"."area"."\t"."production"."\n";
while($rowcrop = mysqli_fetch_array($res))
{
$test=$rowcrop[0]."\t".$rowcrop[1]."\t".$rowcrop[2]."\t".$rowcrop[3]."\t".$rowcrop[4]."\t".$rowcrop[5]."\t".$rowcrop[6]."\n";
$fest.=$test;
file_put_contents($file, $fest);
//print_r($test);
}

//header('location: index_original.html');
//$rowcrop = mysqli_fetch_array($res);
//print_r($rowcrop);
?>
<style>

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  position: relative;
  width: 80%;
}

.axis text {
  font: 10px sans-serif;
}

.axis path,
.axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.bar {
  fill: #2E5CE6;
  fill-opacity: .9;
}

.x.axis path {
  display: none;
}

label {
  position: absolute;
  top: 10px;
  right: 10px;
}

</style>
<label><input type="checkbox"> Sort values</label>
<script src="d3.v3.min.js"></script>
<script>

var margin = {top: 10, right: 100, bottom: 30, left: 100},
    width = 960 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

var formatPercent = d3.format(".");

var x = d3.scale.ordinal()
    .rangeRoundBands([0, width], .1, 1);

var y = d3.scale.linear()
    .range([height, 0]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")
    .tickFormat(formatPercent);

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

d3.tsv("export.tsv", function (error, data) {

  data.forEach(function (d) {
    d.production = +d.production;
  });

  x.domain(data.map(function (d) { return d.year; }));
  y.domain([0, d3.max(data, function (d) { return d.production; })]);

  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis);

  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Production");

  svg.selectAll(".bar")
      .data(data)
    .enter().append("rect")
      .attr("class", "bar")
      .attr("x", function (d) { return x(d.year); })
      .attr("width", x.rangeBand())
      .attr("y", function (d) { return y(d.production); })
      .attr("height", function (d) { return height - y(d.production); });

  d3.select("input").on("change", change);

  var sortTimeout = setTimeout(function() {
    d3.select("input").property("checked", true).each(change);
  }, 2000);

  function change() {
    clearTimeout(sortTimeout);

    // Copy-on-write since tweens are evaluated after a delay.
    var x0 = x.domain(data.sort(this.checked
        ? function (a, b) { return b.production - a.production; }
        : function (a, b) { return d3.ascending(a.year, b.year); })
        .map(function (d) { return d.year; }))
        .copy();

    var transition = svg.transition().duration(750),
        delay = function(d, i) { return i * 50; };

    transition.selectAll(".bar")
        .delay(delay)
        .attr("x", function (d) { return x0(d.year); });

    transition.select(".x.axis")
        .call(xAxis)
      .selectAll("g")
        .delay(delay);
  }
});

</script>