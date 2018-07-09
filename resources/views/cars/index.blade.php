<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Table Car</h2>

<table>
  <tr>
    		<th>Id</th>
			<th>Title</th>
			<th>Description</th>
	  </tr>
  @foreach($cars as $car)
  <tr>
  			<td>{{$car->id}}</td>
			<td>{{$car->title}}</td>
			<td>{{$car->description}}</td>
	  </tr>
  @endforeach
</table>

</body>
</html>
