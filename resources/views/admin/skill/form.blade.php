<div class="card-body">
    @include('message')

    <h4 class="card-title">Add Skill</h4>
    <div class="form-group row">
        <label for="name" class="col-sm-3 text-end control-label col-form-label">Name</label>
        <div class="col-sm-9">
            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name'])  !!}
            {{-- <input type="text" name="name" class="form-control" id="name" placeholder="Name Here"/> --}}
        </div>
    </div>
    <div class="form-group row">
        <label for="level" class="col-sm-3 text-end control-label col-form-label">Level</label>
        <div class="col-sm-9">
            {!! Form::number('level', null,  ['class' => 'form-control', 'id' => 'level']) !!}
            {{-- <input type="number" name="level" class="form-control" id="level"/> --}}
        </div>
    </div>
</div>

<div class="border-top">
    <div class="card-body">
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </div>
</div>
