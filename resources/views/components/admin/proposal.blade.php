<article class="blog_item">
    <div class="blog_details">
        <a class="d-inline-block" href="#">
            <h2>{{ $proposal->subject }}</h2>
        </a>
        <p>{{ $proposal->body }}</p>
        <ul class="blog-info-link">
            <li><a href="#"><i class="fa fa-user"></i> {{ $proposal->contact }}</a></li>
            <li>
                <form action="/admin/proposals/{{$proposal->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn-delete"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </li>
        </ul>
    </div>
</article>
