@extends('/layouts.main')

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-3">
        @foreach($trains as $train)
        <div class="col my-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$train->company}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$train->train_code}}</h6>
                    <div class="direction ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                    <th scope="col">Departure</th>
                                    <th scope="col">Arrive</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$train->from}}</td>
                                    <td>{{$train->to}}</td>
                                    <td>{{$train->departure}}</td>
                                    <td>{{$train->arrive}}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="info ">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Cancelled</th>
                                    <th scope="col">In Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    @if(!$train->is_cancelled)
                                    <td><i class="{{ $train->is_cancelled ? 'fa-solid fa-circle-check' : 'fa-solid fa-circle-xmark'}}"></i></td>
                                    <td><i class="{{ $train->is_in_time ? 'fa-solid fa-circle-check' : 'fa-solid fa-circle-xmark'}}"></i></td>
                                    @endif
                                    @if($train->is_cancelled)
                                    <td><i class="{{ $train->is_cancelled ? 'fa-solid fa-circle-check' : 'fa-solid fa-circle-xmark'}}"></i></td>
                                    <td></td>
                                    @endif

                                    <!-- <td><i class="{{ $train->is_in_time ? 'fa-solid fa-circle-check' : 'fa-solid fa-circle-xmark'}}"></i></td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href=" #" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection