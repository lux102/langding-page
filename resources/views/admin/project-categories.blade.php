<x-master-layout>
    <div>
        <div class="slider-area ">
            <div class="d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap py-3">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                        <li class="breadcrumb-item"><a href="#"> Danh mục</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <div class="admin-project-header" style="margin-bottom:100px;">
                            <div>
                            </div>
                            <div class="blog_right_sidebar">
                                <aside class="search_widget">
                                    <form action="#">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder='Search Keyword'
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Search Keyword'">
                                                <div class="input-group-append">
                                                    <button class="btns" type="button"><i
                                                            class="ti-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </aside>
                            </div>
                        </div>
                        <div class="">
                            @if (!count($categories))
                            <p class="text-gray text-center">Chưa có mục nào</p>
                            @endif
                            @foreach ($categories as $category)
                            <article class="blog_item">
                                <div class="blog_details">
                                    <a class="d-inline-block" href="#">
                                        <h2>{{ $category->name }}</h2>
                                    </a>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                        <li>
                                            <form action="/admin/project-categories/{{$category->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn-delete"><i class="fas fa-trash"></i>
                                                    Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            @endforeach
                        </div>
                        <div>
                            <form action="/admin/project-categories" method="POST">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="name"></label>
                                    <input name="name" type="text" class="form-control" id="name"
                                        aria-describedby="name" placeholder="Tên danh mục">
                                    @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-master-layout>
