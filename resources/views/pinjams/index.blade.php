@extends('cms::layouts.dashboard')

@section('pageTitle') Peminjaman @stop

@section('content')
<div class="container row">


    <div class="col-md-12">
        <div class="pull-right">
            {!! Form::open(['route' => 'pinjams.search']) !!}
            <input class="form-control form-inline pull-right" name="search" placeholder="Search">
            {!! Form::close() !!}
        </div>
        <h1 class="pull-left">Ruangan yang dipinjam</h1>
    </div>

    <div class="col-md-12">
        @if($pinjams->isEmpty())
            <div class="well text-center">No pinjams found.</div>
        @else
            <table class="table">
                <thead>
                    <th>Tanggal</th>
                    <th>Ruang</th>
                    <th>Dari</th>
                    <th>Sampai</th>
                    <th width="50px">Action</th>
                </thead>
                <tbody>
                @foreach($pinjams as $pinjam)
                    <tr>
                        <td>
                            <a href="{!! route('pinjams.edit', [$pinjam->id]) !!}">{{ $pinjam->created_at }}</a>
                        </td>
                        <td>{{app(App\Models\Ruang::class)->find($pinjam->ruang_id)->name}}</td>
                        <td>{{$pinjam->pinjam}}</td>
                        <td>{{$pinjam->kembali}}</td>
                        <td>
                            @if(!$pinjam->status=='1')
                            {!! Form::model($pinjam, ['route' => ['pinjams.update', $pinjam->id], 'method' => 'patch']) !!}
                                {!! csrf_field() !!}
                                <input type="hidden" name="status" value="1">
                                <input type="hidden" name="ruang_id" value="{{$pinjam->ruang_id}}">
                                <button type="submit" class="btn btn-warning"><i class="fa fa-check"></i> Ijinkan</button>
                             {!! Form::close() !!}
                             @endif
                            <a href="{!! route('pinjams.edit', [$pinjam->id]) !!}" class="btn btn-info"><i class="fa fa-pencil"> Edit</i></a>
                            <form method="post" action="{!! route('pinjams.destroy', [$pinjam->id]) !!}">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this pinjam?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="row">
                {!! $pinjams; !!}
            </div>
        @endif
    </div>
</div>
@stop