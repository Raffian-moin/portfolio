@extends('master')

@section('breradcrumb', 'Skills')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                {!! Form::open(['route' => 'skills.store']) !!}
                    @csrf
                    @include('admin.skill.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
