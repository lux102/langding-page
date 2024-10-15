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
                                        <li class="breadcrumb-item"><a href="#">Thêm dự án</a></li>
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
                    <div class="col-lg-4">
                        <x-admin.sidebar :categories="$categories"></x-admin.sidebar>
                    </div>
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <form action="/admin/projects" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                                <label for="project">Tên dự án</label>
                                <input name="name" type="text" class="form-control" id="project"
                                    aria-describedby="project" placeholder="Tên dự án">
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Loại dự án</label>
                                <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="project-completed-at">Ngày hoàn thành</label>
                                <input name="completed_at" class="form-control" id="project-completed-at"
                                    placeholder="Ví dụ: 09-10-2022">
                                @error('completed_at')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="project-area">Diện tích</label>
                                <input name="area" class="form-control" id="project-area" placeholder="Ví dụ: 10x20m">
                                @error('area')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="project-description">Mô tả</label>
                                <textarea name="description" class="form-control" id="project-description"
                                    placeholder="Mô tả về dự án" rows="3"></textarea>
                                @error('description')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="project-images">Hình ảnh</label>
                                <input name="files[]" type="file" accept="image/*" class="form-control-file"
                                    id="project-images" multiple="multiple">
                                @error('files')
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
</x-master-layout>
