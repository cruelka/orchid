
@extends('layouts.head')

@section('content')

    <div class="news container">
        <div class="news__item">
            <div class="row">

                <div class="col-xs-12 col-md-7">
                    <div class="news__item-inner">
                        <img class="news__item-img" src="/storage/{{$data->image}}" alt="Image">

                        <div class="news-card__title">
                            {{$data->title}}
                        </div>

                        <div class="news-item__body">
                            {!! $data->body !!}
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-5">
                    <div class="sidebar">

                        <div class="sidebar__item">
                            <div class="sidebar__item-header">
                                Last news
                            </div>
                            <div class="sidebar__item-body">
                                @foreach($posts as $post)
                                    <a href="/post/{{$post->slug}}" class="sidebar__news">
                                        <div class="sidebar__news-img" style="background:url(/storage/{{$post->image}})"></div>
                                        <div class="sidebar__news-title">{{$post->title}}</div>
                                        <div class="sidebar__news-tags">{{$post->meta_keywords}}</div>
                                    </a>

                                @endforeach
                            </div>
                        </div>



                    </div>

                </div>
            </div>

            <div class="row mt-2">
                <div class="col-xs-12" style="display: block;margin: 0 auto;">

                    <div class="subscribe__inner">

                        <div class="subscribe__heading text-center">
                            Sign up for monthly news <br>
                        </div>

                        <form class="form-inline subscribe__form">

                            <div class="form-group mb-2">


                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only">E-Mail</label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-success mb-2">Confirm</button>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

@endsection
