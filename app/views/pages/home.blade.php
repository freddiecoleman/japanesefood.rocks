@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Cities of Japan</h1>
    <p>Info about the cities will be here.. you can order them and stuff... yeah AngularJS is kind of cool like that...</p>
  </div>
  <table class="table" ng-controller="CitiesCtrl as city">
      <tr>
          <th ng-click="predicate='name'">Name</th>
          <th ng-click="predicate='population'">Population</th>
      </tr>
      <tr ng-repeat="city in cities | orderBy:predicate">
          <td>@{{ city.name }}</td>
          <td>@{{ city.population }}</td>
      </tr>
    </table>
@stop