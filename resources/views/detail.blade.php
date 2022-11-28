@extends('layout')

@section('content')
    
        <div class="bg-secondary" style="text-align: left; color:#fff; ;">
          <div class="container">
            <h3>Book Detail</h3>
          </div>
        </div>

        <section style="margin-top: 50px;">
          <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('images/'.$data->image.'.jpg')}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="card" style="width: 18rem;">
                        <p>Title : {{$data->title}}</p>
                        <p>Author : {{$data->author}}</p>
                        <p>Publisher : {{$data->publisher->name}}</p>
                        <p>Year : {{$data->year}}</p>
                        <p>Synopsis : <br>{{$data->synopsis}}</p>
                    </div>
                </div>
            </div>
          </div>
        </section>
      
@endsection