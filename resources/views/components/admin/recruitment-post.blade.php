<article class="blog_item">
    <div class="blog_details">
        <a class="d-inline-block" href="single-blog.html">
            <h2>{{$recruitment->title}}</h2>
        </a>
        <div class="mb-3">{!! $recruitment->description !!}</div>
        <ul class="blog-info-link">
            <li><a href="#"><i class="fas fa-calendar"></i> 15-08-2023</a></li>
            <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
            <li>
                <form action="/admin/recruitments/{{$recruitment->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn-delete"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </li>
        </ul>
    </div>
</article>
