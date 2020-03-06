@extends('layouts.app')

@section('body')

<form method="POST" action="{{ route('jobs.store') }}">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" name='title' class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Contract Type</label>
    <input type="text" name='contract_type' class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Employer ID</label>
    <input type="text" name='employer_id' class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" name='skill_id' id="exampleFormControlSelect1">
      @foreach($skills as $skill)
        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
      @endforeach
    </select>
  </div>
 <div class="form-group">
    <label for="exampleFormControlInput">Salary</label>
    <input type="number" name='salary' class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea name='description' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button class='btn btn-success btn-lg' type="submit">Submit</button>
</form>

@endsection
