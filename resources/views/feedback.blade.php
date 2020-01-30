<div class="col-md-8">
                @if(count($feedbacks) > 0)

                @foreach($feedbacks->all() as $feedback)
                    <li>{{$feedback->id}}</li>
                    <li>{{$feedback->firstname}}</li>
                    <li>{{$feedback->lastname}}</li>
                    <li>{{$feedback->email}}</li>
                    <li>{{$feedback->subject}}</li>
                    <li>{{$feedback->message}}</li>
                    <li>{{$feedback->created_at}}</li>
                @endforeach
                @else
                <h2>NO FEEDBACK FOR NOW</h2>

                @endif

                </div>