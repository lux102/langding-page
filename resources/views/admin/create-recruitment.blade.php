<x-master-layout>
    <div>
        <div class="slider-area ">
            <div class="d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap py-3">
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                        <li class="breadcrumb-item"><a href="#">Thêm tin tuyển dụng</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <form action="/admin/recruitments" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                                <label for="project">Tiêu đề</label>
                                <input name="title" type="text" class="form-control" id="project"
                                    aria-describedby="project" placeholder="Tiêu đề">
                                @error('title')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="recruitment-description">Mô tả</label>
                                <textarea name="description" class="form-control hidden" id="recruitment-description"
                                    placeholder="Thông tin tuyển dụng" rows="3"></textarea>
                                <div style="height: 200px;" id="recruitement-editor"></div>
                                @error('description')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        var quill = new Quill('#recruitement-editor', {
            placeholder: 'Mô tả',
            theme: 'snow',
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById("recruitment-description").value = quill.container.firstChild.innerHTML;
        })
    </script>
</x-master-layout>
