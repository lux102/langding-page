<x-layout>
    <div>
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
                data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>Liên Hệ Với Chúng Tôi</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                        <li class="breadcrumb-item"><a href="#">Liên hệ</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Yêu cầu báo giá</h2>
                    </div>
                    <div class="col-lg-8">
                        @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form class="form-contact contact_form" action="/proposals" method="post"
                            novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                            placeholder="Nhập tiêu đề">
                                        @error('subject')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="body" id="message" cols="30" rows="9"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Nhập tin nhắn của bạn'"
                                            placeholder="Nhập tin nhắn của bạn"></textarea>
                                        @error('body')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Nhập tên của bạn'"
                                            placeholder="Nhập tên của bạn">
                                        @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="contact" id="email" type="text"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Nhập địa chỉ email hoặc số điện thoại'" placeholder="Email/Phone">
                                        @error('contact')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Gửi</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Tx Dĩ An,Tỉnh Bình Dương</h3>
                                <p>Số 01, Đường Nguyễn Du</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>0865 369 793</h3>
                                <p>Thứ 2 - Chủ nhật 8:00 - 17:30</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><a href="mailto:nghiagiaphat@gmail.com"
                                        class="__cf_email__">nghiagiaphat@gmail.com</a>
                                </h3>
                                <p>Gửi yêu cầu tới chúng tôi bất kỳ lúc nào bạn muốn!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
