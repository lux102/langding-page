<x-master-layout>
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">LOGIN</h2>
                    <form class="login-form" method="POST" action="/login">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                            <input name="password" type="password" class="form-control" placeholder="">
                        </div>

                        <div class="form-login-check">
                            <button type="submit" class="btn btn-login float-right">Submit</button>
                            <a class="login-back" href="/">Back to homepage</a>
                        </div>

                    </form>
                </div>
                <div class="col-md-8 banner-sec">
                    <img class="d-block img-fluid" src="../assets/img/gallery/pexels-photo.jpg" alt="First slide">
                </div>
            </div>
    </section>
</x-master-layout>
