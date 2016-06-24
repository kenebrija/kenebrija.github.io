@extends('master')

@section('title')
	<title> Projects</title>

@stop

@section('page-stylesheet')

	{{ Html::style('css/projects.css') }}

@stop

@section('content')

<div class="button_container">
	<a href="{{ url('projects/create') }}" class="btn1">Create Project</a>
	<a href="{{ url('persons/create') }}" class="btn1">Create Person</a>
</div>
	<div class="projects">
		<table>
			<tr>
				<th>Project Name</th>
				<th>Budget</th>
				<th>Tasks</th>
			</tr>
			<?php
				foreach ($projects as $projects) {
					echo "<tr>";
						echo "<td> $projects->p_name </td>";
						echo "<td> &#8369 ";
						
						$budget = intval($projects->p_budget);
						echo number_format((float)$budget, 2, '.', '');
						echo "</td>";
						echo "<td> <a href='projects/assignments/$projects->id'> Assignments </a> </td>";
					echo "</tr>";
			    	
				}
			?>
		</table>
		
	</div>
	


@stop

