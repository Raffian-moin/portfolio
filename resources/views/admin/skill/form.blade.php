<div class="card-body">
    @include('message')
    
    <h4 class="card-title">Add Skill</h4>
    <div class="form-group row">
        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Name</label>
        <div class="col-sm-9">
            <input type="text" name="name" class="form-control" id="fname" placeholder="Name Here"/>
        </div>
    </div>
    <div class="form-group row">
        <label for="level" class="col-sm-3 text-end control-label col-form-label">Level</label>
        <div class="col-sm-9">
            <input type="number" name="level" class="form-control" id="level"/>
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
