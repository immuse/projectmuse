
@extends('layout')

@section('content')

<style type="text/css">
  .ui.list,.content,.ui.header {
    padding-left: 15%;
    text-align: left;
    color: white;
  }

  .date {
    color: grey;
    font-size:0.5em;
  }
</style>

<div class="row">
  <h1 class="ui header">Good evening,</h1>
  <p class="content">THIS IS YOUR GOAL TODAY</p>
</div>

<div class="ui list">
    <div class="item">
      <i class="checkmark box icon"></i>
      <div class="content">
        Go to the stores <a class='date'>2016-8-21</a>
      </div>
    </div>

  <div class="item">
    <i class="checkmark box icon"></i>
    <div class="content">
      Finish the screencast <a class='date'>2016-8-21</a>
    </div>
  </div>

  <div class="item">
    <i class="checkmark box icon"></i>
    <div class="content">
      Clean up the store <a class='date'>2016-8-21</a>
    </div>
  </div>

  <div class="item">
    <i class="square outline icon"></i>
    <div class="content">
      Peal the apple<a class='date'>2016-8-21</a>
    </div>
  </div>

  <div class="item">
    <i class="square outline icon"></i>
    <div class="content">
      Make fun of Joseph<a class='date'>2016-8-21</a>
    </div>
  </div>
</div>
</div>



@stop