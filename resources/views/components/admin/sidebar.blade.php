<div class="blog_right_sidebar">
    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title">Danh mục</h4>
        <ul class="list cat-list">
            @foreach ($categories as $category)
                <li>
                    <a href="#" class="d-flex">
                        <p>{{$category->name}}</p>
                        <p>({{$category->projects_count}})</p>
                    </a>
                </li>
            @endforeach
            <li>
                <a href="/admin/project-categories" class="">
                    <div class="d-flex align-items-center"><span class="mr-2">Thêm danh mục</span> <i class="fa fa-plus"></i></div>
                </a>
            </li>
        </ul>
    </aside>
</div>
