<x-master-layout>
    <div>
        <div class="slider-area ">
            <div class="d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                        <li class="breadcrumb-item"><a href="#">Thêm biện pháp thi công</a></li>
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
                        <form>
                            <div class="form-group">
                                <label for="project">Tên dự án</label>
                                <input type="text" class="form-control" id="project"
                                    aria-describedby="project" placeholder="Tên dự án">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Loại dự án</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Dự án thiết kế</option>
                                  <option>Dự án thi công</option>
                                  <option>Dự án shopdrawing</option>
                                </select>
                              </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mô tả</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mô tả về dự án" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Hình ảnh</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-master-layout>
