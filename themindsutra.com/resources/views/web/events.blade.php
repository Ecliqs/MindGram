<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>All Events</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>All Events</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="clubs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h2 class="text-center">Mindsutra Book Clubs</h2>
                </div>
            </div>
            <div class="row">
                @foreach($events as $event)
                @if($event->event_type == 'Book Club')
                <div class="col-md-4 mb-3">
                    <div class="rounded h-100 bg-white">
                        <div class="ms-image">
                            <a href="#">
                                <img src="{{ asset('images/web/book-clubs/'.$event->image) }}" width="100%" height="100%" alt="Placeholder" title="Placeholder" loading="lazy" typeof="Image" class="image-style-listing-image">
                            </a>
                        </div>
                        <div class="ms-details p-3">
                            <div class="node-title">{{ $event->title }}</div>
                            <div class="ms-field_difficulty small"></div>
                            <div class="ms-field_time small">{{ $event->date }} at {{ $event->time }}</div>
                            <div class="ms-field_suitable_for">
                                <div class="ms-field_time small">{{ $event->description }}</div>
                                <span class="badge rounded-pill bg-dark">Venue: Zoom</span>
                            </div>
                            <a class="btn btn-buy btn-lg" data-bs-toggle="modal" data-bs-target="#register{{ $event->id }}">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="register{{ $event->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" enctype="multipart/form-data" action="{{ route('eventRegistration') }}">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name">
                                        <input type="hidden" class="event" name="event" value="<?php echo $event['id']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-buy btn-lg">Register Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="clubs mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Mindsutra Workshops</h2>
                </div>
            </div>
            <div class="row">
                @foreach($events as $event)
                @if($event->event_type == 'Workshop')
                <div class="col-md-4 mb-3">
                    <div class="rounded h-100 bg-white">
                        <div class="ms-image">
                            <a href="#">
                                <img src="{{ asset('images/web/workshops/'.$event->image ) }}" width="100%" height="100%" alt="{{ $event->title }}" title="{{ $event->title }}" loading="lazy" typeof="Image" class="image-style-listing-image">
                            </a>
                        </div>
                        <div class="ms-details text-center p-3">
                            <div class="node-title">{{ $event->title }}</div>
                            <div class="ms-field_difficulty small">{{ $event->description }}</div>
                            <div class="ms-field_time small">Date: {{ $event->date }} at {{ $event->time }}<br/>Venue: Zoom</div>
                            <a class="btn btn-buy btn-lg" data-bs-toggle="modal" data-bs-target="#register{{ $event->id }}">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="register{{ $event->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" enctype="multipart/form-data" action="{{ route('eventRegistration') }}">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name">
                                        <input type="hidden" class="workshop" name="workshop" value="<?php echo $event['id']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-buy btn-lg">Register Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

</x-web-layout>