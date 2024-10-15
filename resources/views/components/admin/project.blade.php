<article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="{{$project->media[0]->path}}" alt="">
        <a href="#" class="blog_item_date">
            <h3>{{ date('d', strtotime($project->created_at)) }}</h3>
            <p>{{ date('M', strtotime($project->created_at)) }}</p>
        </a>
    </div>
    <div class="blog_details">
        <a class="d-inline-block" href="#">
            <h2>{{ $project->name }}</h2>
        </a>
        <p>Công năng {{ $project->description }}</p>
        <ul class="blog-info-link">
            <li><a href="#"><i class="fa fa-user"></i> {{ $project->category->name }}</a></li>
            <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
            <li>
                <form action="/admin/projects/{{$project->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn-delete"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </li>
        </ul>
    </div>
</article>
