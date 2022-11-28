@extends('layout')

@section('content')
    
        <div class="bg-secondary" style="text-align: left; color:#fff; ;">
          <div class="container">
            <h3>Book List</h3>
          </div>
        </div>

        <section style="margin-top: 50px;">
          <div class="container">
            <div class="row">

              @foreach ($books as $b)
                <div class="col-sm-3">
                  <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/'.$b->image.'.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$b->title}}</h5>
                      <p class="card-text">by <br> {{$b->author}}</p>
                      <a href="{{url($b->id)}}" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
                </div>
              @endforeach
              
            </div>
          </div>
        </section>
      
@endsection