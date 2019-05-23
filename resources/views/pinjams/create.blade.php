@extends('cms::layouts.dashboard')

@section('pageTitle') Pinjam Ruangan @stop

@section('content')
<div class="">
    {{ Session::get('message') }}
</div>

<div class="container">

    {!! Form::open(['route' => 'pinjams.store']) !!}

    
    @foreach(app(App\Models\User::class)->where('id', (Auth::user()->id))->get() as $user)

        @input_maker_label('Nama : ')
        @input_maker_create('', ['type' => 'string', 'default_value' => $user->name,'custom'=>'readonly'])

        @input_maker_label('NIM : ')
        @input_maker_create('', ['type' => 'string', 'default_value' => $user->nim,'custom'=>'readonly'])

        @input_maker_label('Telp : ')
        @input_maker_create('', ['type' => 'string', 'default_value' => $user->phone,'custom'=>'readonly'])

    @endforeach
    <br>
    @input_maker_create('ruang_id', ['type' => 'hidden','default_value' => $_GET['id']])

    @input_maker_label('Meminjam Ruangan : ')
    @input_maker_create('', ['type' => 'string', 'default_value' => app(App\Models\Ruang::class)->find($_GET["id"])->name,'custom'=>'readonly'])

    @input_maker_label('Dari : ')
    @input_maker_create('pinjam', ['type' => 'date'])

    @input_maker_label('Sampai : ')
    @input_maker_create('kembali', ['type' => 'date'])
    <br>
    {!! Form::submit('Save') !!}

    {!! Form::close() !!}

</div>
@stop