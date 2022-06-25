@extends('master')

@section('breradcrumb', 'Skills')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Level</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $skill)
                                <tr>
                                    <td scope="col">{{ $loop->index + 1 }}</td>
                                    <td scope="col"> {{ $skill->name }} </td>
                                    <td scope="col"> {{ $skill->level }} </td>
                                    <td scope="col">
                                       <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Actions
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="{{ route('skills.edit', $skill->id) }}">Edit</a></li>

                                                <li>
                                                    <form id = "delete-form-{{ $skill->id }}" action="{{ route('skills.delete', $skill->id) }}" method="POST">
                                                        @csrf

                                                        <a class="dropdown-item" href="{{ route('skills.delete', $skill->id) }}"  onclick="event.preventDefault();
                                                document.getElementById('delete-form-{{ $skill->id }}').submit();">Delete</a>
                                                </form>
                                                </li>
                                            </ul>
                                       </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
