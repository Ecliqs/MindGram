<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Mindsutra Meditation</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Mindsutra Meditation</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .content {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            background-color: #181818;
            width: 240px;
            height: 360px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 1rem;
            margin: 0 10px;
            transition: 0.2s ease-in-out;
        }
        .card:hover {
            background-color: #282828;
        }
        .card .img {
            width: 100%;
            position: relative;
        }
        .card .img img {
            width: 100%;
            border-radius: 2px;
            box-shadow: 0 8px 24px rgba(0,0,0,.5);
        }
        .card .img button {
            background-color: #1db954;
            color: #fff;
            position: absolute;
            right: 8px;
            bottom: 0px;
            -webkit-box-pack: center;
            -webkit-box-align: center;
            align-items: center;
            border: 0;
            border-radius: 50%;
            display: flex;
            font-size: 8px;
            height: 40px;
            width: 40px;
            opacity: 0;
            transition: 0.2s ease-in-out;
            justify-content: center;
            box-shadow: 0 8px 8px rgba(0,0,0,.3);
            cursor: pointer;
        }
        .card:hover .img button {
            transform: translatey(-8px);
            opacity: 1;
        }
        .card .textos {
            color: #fff;
            width: 100%;
            margin-top: 1.2rem;
        }
        .card .textos h2 {
            font-size: 16px;
            font-weight: 600;
            letter-spacing: normal;
            line-height: 24px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .card .textos p {
            color: rgb(179, 179, 179);
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: box;
            margin-top: 4px;
            white-space: normal;
            overflow: hidden;
            white-space: nowrap;
            font-size: 14px;
            font-weight: 400;
            letter-spacing: normal;
            line-height: 16px;
        }
    </style>
    <!-- 10 audio’s on Spotify -->
    <section class="mb-5">
        <div class="container">
            <div class="content">
                <div class="card">
                    <a href="https://open.spotify.com/episode/1Ua7K8no1i7J90UlV4ALRu?si=56R-JQ8ARty3-33Axse2zA&utm_source=copy-link&nd=1" target="_blank" rel="noopener noreferrer" title="Mindsutra WOE to WOW">
                        <div class="img">
                            <img src="{{ asset('images/web/spotify-promo.jpg') }}">
                            <button>
                                <svg height="16" role="img" width="16" viewBox="0 0 24 24" aria-hidden="true"><polygon points="21.57 12 5.98 3 5.98 21 21.57 12" fill="currentColor"></polygon></svg>
                            </button>
                        </div>
                    </a>
                    <div class="textos">
                        <h2>Mindsutra WOE to WOW</h2>
                        <p>A candid conversation with<br/>Dr. Meghna on her book called<br/>Mindsutra.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-web-layout>