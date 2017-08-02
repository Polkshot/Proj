<html ng-app="appname">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
	<script src="js/angular/angular.min.js"></script>	
	<script src="js/indexPage.js"></script>
</head>
<body ng-controller="IndexPageController">
	<table class="table table-bordered">
		<thead>
			<th> Id </th>
			<th> Nome </th>
			<th> Idade </th>
			<th> Sexo </th>
		</thead>
		<tbody ng-repeat="l in lista">
			<tr>{{l.Id}}</tr>
			<tr>{{l.Nome}}</tr>
			<tr>{{l.Idade}}</tr>
			<tr>{{l.Sexo}}</tr>
		</tbody>
	</table>
<body>
</html>