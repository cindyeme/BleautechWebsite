<div class="col-md-8">
                @if(count($blogs) > 0) 

                @foreach($blogs->all() as $blog)
                    <li>{{$blog->id}}</li>
                    <li>{{$blog->blog_title}}</li>
                    <img src="{{$blog->image_Url}}" alt="" width="50px" height="50px">
                    <li>{{$blog->story}}</li>
                    <li>{{$blog->created_at}}</li>
                    <li role="presentation">
                            <a href='{{ url("/delete/{$blog->id}") }}'>
                                <span class="fa fa-trash">Delete</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href='{{ url("/edit/{$blog->id}") }}'>
                                <span class="fa fa-trash">Edit Blog</span>
                            </a>
                        </li>

                        <li role="presentation">
                            <a href='{{ url("/view/{$blog->id}") }}'>
                                <span class="fa fa-eye">View</span>
                            </a>
                        </li>
                @endforeach
                @else
                <h2>NO blog FOR NOW</h2>

                @endif

                </div>