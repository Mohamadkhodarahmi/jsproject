@props(['comment'])


<section style="background-color: #eee; border-radius: 9px ;" >
    <div class="container  py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
                <div class="card ">
                    <div class="card-body ">
                        <div class="d-flex flex-start align-items-center">
{{--                            <img class="rounded-circle shadow-1-strong me-3"--}}
{{--                                 src="" alt="avatar" width="60"--}}
{{--                                 height="60" />--}}
                            <div>
                                <h6 class="fw-bold text-primary mb-1">{{$comment->user->name}}</h6>
                                <p class="text-muted small mb-0">
{{--                                   {{$comment->}}--}}
                                </p>
                            </div>
                        </div>

                        <p class="mt-3 mb-4 pb-2">
                            {{$comment->body}}
                        </p>


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
