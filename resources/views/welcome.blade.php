@extends('layouts.app')

@section('body')

<!-- Page Features -->
    <div class="row text-center">

    @foreach($jobs as $job)
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
          <h4 class="card-title">{{ $job->title }}</h4>
          <p class="card-text">{{ $job->description }}</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
      @endforeach

      {{ $jobs->links() }}

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection
