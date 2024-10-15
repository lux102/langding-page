<div class="container">
    <div class="project-heading mb-35">
        <div class="row align-items-end">
            <div class="col-lg-6">

                <div class="section-tittle section-tittle3">
                    <div class="front-text">
                        <h3 style="font-size: 50px; font-weight: 700;" class="">DỰ ÁN</h3>
                    </div>
                    <span class="back-text">DỰ ÁN</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="properties__button">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach ($categories as $category)
                            <a class="nav-item nav-link" id="project-category-{{$category->id}}-tab" data-toggle="tab"
                                href="#project-category-{{$category->id}}" role="tab" aria-controls="nav-design"
                                aria-selected="false">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <div class="tab-content active" id="nav-tabContent">

                @foreach ($categories as $category)
                <div class="tab-pane fade {{ $category->id == $categories[0]->id  ? "active show" : "" }}" id="project-category-{{$category->id}}" role="tabpanel"
                    aria-labelledby="nav-home-tab">
                    <div class="project-caption">
                        <div class="row">
                            @if (isset($projects[$category->id]))
                            @foreach ($projects[$category->id] as $project)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-project mb-30 cursor-pointer" id="project-{{$project->id}}">
                                    <div class="project-img"
                                        style='background-image: url("{{$project->media[0]->path}}");background-repeat:no-repeat;background-size: cover;background-position:center;'>
                                        <div class="backdrop"
                                            style="-webkit-backdrop-filter: blur(5px);backdrop-filter: blur(5px);background-color: rgba(255, 255, 255, 0.4);">
                                            <img src="{{$project->media[0]->path}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="project-cap">
                                        <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                        <h4><a href="#">{{$project->name}}</a></h4>
                                        <h5><a href="#">Diện tích: {{$project->area}}</a></h5>
                                        <h5><a href="#">Công năng: {{$project->description}}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
    @push('scripts')
    <script>
        const projectGroups = {{ Js::from($projects) }}
        for (const key in projectGroups) {
            const projects = projectGroups[key];
            projects.forEach(project => {
                document.getElementById(`project-${project.id}`).addEventListener("click", () => {
                    new Fancybox(project.media.map(item => ({
                            src: item.path,
                        }))
                    );
                });
            });
        }
    </script>
    @endpush
</div>
