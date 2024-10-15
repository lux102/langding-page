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
                                        <li class="breadcrumb-item"><a href="#"> Dự án</a></li>
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
                    <div class="col-lg-4">
                        <x-admin.sidebar :categories="$categories"></x-admin.sidebar>
                    </div>
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="admin-project-header" style="margin-bottom:100px;">
                            <div>
                                <a href="/admin/projects/create"
                                    class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Thêm
                                    dự án</a>
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
                        <div class="blog_left_sidebar">
                            @if (!count($projects))
                                <p class="text-gray text-center">Chưa có mục nào</p>
                            @endif
                            @foreach ($projects as $project)
                            <x-admin.project :project="$project"></x-admin.project>
                            @endforeach

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-master-layout>
