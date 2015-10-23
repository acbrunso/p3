@extends('layout.master')

@section('content')
{!! Form::open() !!}
  <?php

  isset($request->numOfUsers) ? $n=$request->numOfUsers : $n=1;
  echo Form::selectRange('numOfUsers', 1, 20,  $n) . "   ";
  echo Form::label('numOfUsers', 'Number of Users');
  echo '<br><br>';
  isset($request->birthdate) ? $selected=true : $selected=false;
	echo Form::checkbox('birthdate', 'birthdate', $selected);
  echo Form::label('birthdate', 'Birthdate');
  echo '<br>';
  isset($request->address) ? $selected=true : $selected=false;
  echo Form::checkbox('address', 'address', $selected);
  echo Form::label('address', 'Address');
  echo '<br>';
  isset($request->profile) ? $selected=true : $selected=false;
  echo Form::checkbox('profile', 'profile', $selected);
  echo Form::label('profile', 'Profile');
  echo '<br><br>';
  	echo Form::submit('Submit');
  ?>
{!! Form::close() !!}


<p>
  @if(isset($users))
    @foreach($users as $user)
      <h3> {{ $user->name }} </h3>
      <?php
      if(isset($request->birthdate)) {
        echo '&nbsp&nbsp&nbsp<b>Birthdate: </b>' . $user->date($format = 'Y-m-d', $max = "now"); echo '<br>';
      }
      ?>
      {!! isset($request->address) ? '&nbsp&nbsp&nbsp<b>Address:</b> ' . $user->address . '<br>'  : '' !!}
      {!! isset($request->profile) ? '&nbsp&nbsp&nbsp<b>Profile:</b> ' . $user->text : '' !!}
      @endforeach
  @endif
</p>

@stop
