 @foreach ($agents as $agent)
<div class="col-md-4 mb-3">
    <div class="card-box-d">
        <div class="card-img-d">
            <img src="{{ asset('img/agent-'.$agent->id.'.jpg') }}" alt="" class="img-d img-fluid">
        </div>
        <div class="card-overlay card-overlay-hover">
            <div class="card-header-d">
                <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                        <a href="{{route('front.agents.show', $agent->id)}}" class="link-two">{{$agent->name}}</a>
                    </h3>
                </div>
            </div>
            <div class="card-body-d">
                
                <div class="info-agents color-a">
                    <p>
                        <strong>Phone: </strong> {{$agent->phone}}</p>
                    <p>
                        <strong>Email: </strong> {{$agent->email}}</p>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endforeach