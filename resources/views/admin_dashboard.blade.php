@extends('common')

@section('content')
<style type="text/css">
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
	<table>
		<tr>
		    <th>Sl no</th>
		    <th>Name</th>
		    <th>Email</th>
	  	</tr>
	  	@forelse ($users as $i => user)
			<tr>
				<td>{{++$i}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
			</tr>
		@empty
    		<p>No users</p>
		@endforelse
	</table>

@endsection