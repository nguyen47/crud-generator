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

	<h2>Table User</h2>

	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Remember Token</th>
			<th>Created At</th>
			<th>Updated At</th>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->password}}</td>
			<td>{{$user->remember_token}}</td>
			<td>{{$user->created_at}}</td>
			<td>{{$user->updated_at}}</td>
		</tr>
		@endforeach
	</table>

</body>
</html>
