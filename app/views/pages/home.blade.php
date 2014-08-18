@extends('layouts.default')

@section('content')
  <div class="jumbotron" ng-controller="CitiesCtrl as city">
    <h1>Welcome to my app!</h1>
    <p>test..1 + 1 = @{{ 1 + 1 }}</p>
    <ul>
        <li ng-repeat="city in cities">@{{ city.name }}</li>
    </ul>
  </div>
@stop