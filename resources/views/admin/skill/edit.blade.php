@extends('master')

@section('breradcrumb', 'Skills')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                {{-- {{ dd($skill->id) }} --}}
                {!! Form::model($skill, ['method' => 'PUT', 'route' => ['skills.update', $skill->id]]) !!}
                    @csrf
                    @include('admin.skill.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
