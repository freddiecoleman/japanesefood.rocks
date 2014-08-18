@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Welcome to my app!</h1>
    <p>test..1 + 1 = @{{ 1 + 1 }}</p>
  </div>
  <table class="table" ng-controller="CitiesCtrl as city">
      <tr>
          <th>Name</th>
          <th>Population</th>
      </tr>
      <tr ng-repeat="city in cities">
          <td>@{{ city.name }}</td>
          <td>@{{ city.population }}</td>
      </tr>
    </table>
@stop