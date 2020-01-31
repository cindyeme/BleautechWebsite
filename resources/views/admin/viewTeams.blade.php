<div class="col-md-8">
                @if(count($teams) > 0)

                @foreach($teams->all() as $team)
                    <li>{{$team->id}}</li>
                    <li>{{$team->name}}</li>
                    <li>{{$team->title}}</li>
                    <img src="{{$team->image_Url}}" alt="" width="50px" height="50px">
                    <li>{{$team->story}}</li>
                    <li>{{$team->created_at}}</li>
                    <li role="presentation">
                            <a href='{{ url("/deleteTeam/{$team->id}") }}'>
                                <span class="fa fa-trash">Delete</span>
                            </a>
                        </li>
                       
                @endforeach
                @else
                <h2>NO team FOR NOW</h2>

                @endif

                </div>