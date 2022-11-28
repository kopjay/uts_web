@extends('layout')

@section('content')

        @foreach ($publishers as $p)
            <div class="bg-secondary" style="text-align: left; color:#fff; ;">
                <div class="container">
                <h3>{{$p->name}}</h3>
                <h3>Address - {{$p->address}}</h3>
                <h3>Phone - {{$p->phone}}</h3>
                <h3>Email - {{$p->email}}</h3>
                </div>
            </div>
        

            <section style="margin-top: 50px;">
            <div class="container">
                <div class="row">
                <?php $data = \App\Models\Books::where(['publisher_id' => $p->id])->get(); ?>
                @foreach ($data as $b)
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
        @endforeach
      
@endsection