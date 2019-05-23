@extends('cms::layouts.dashboard')

@section('pageTitle') Edit Ruangan @stop

@section('content')


<div class="container">

    {!! Form::model($ruang, ['route' => ['ruangs.update', $ruang->id], 'method' => 'patch']) !!}

    @input_maker_label('Nama Ruangan: ')
    

    @if (!Auth::user()->hasrole('admin'))
    @input_maker_create('', ['type' => 'string','custom'=>'readonly', 'default_value'=>$ruang->name])
    @else
    @input_maker_create('name', ['type' => 'string'], $ruang)
    {!! Form::submit('Update') !!}
    @endif

    {!! Form::close() !!}
</div>

@stop
