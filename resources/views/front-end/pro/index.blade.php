<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{('adminpanel/template/images/favicon.PNG')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Projects</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500"/>
    <link rel="stylesheet" href="{{asset('styles/projects.css')}}"/>
    <style>
        .arrow-2-jnD {
            flex-shrink
            :
                0;
            height
            :
                0;
            margin-top
            :
                1.9rem;
            object-fit
            :
                contain;
            vertical-align
            :
                top;
            width
            :
                2.9rem;
        }
        .frame-33-pyj {
            margin: 0rem 34.5rem 6.3rem 56.6rem;
            width: calc(100% - 69.1rem);
            height: 2.5rem;
            display: flex;
            column-gap: 3.7rem;
            align-items: flex-start;
            flex-shrink: 0;
        }
        .group-30-8zR {
            height: 100%;
            display: flex;
            align-items: flex-start;
            flex-shrink: 0;
        }
        .vector-hGq {
            margin-right: 0.925rem;
            width: 1.875rem;
            height: 2.5rem;
            object-fit: contain;
            vertical-align: top;
            flex-shrink: 0;
        }
        .featured-eC5 {
            margin-top: 0.1rem;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 500;
            line-height: 1.25;
            color: #a664fa;
            font-family: Roboto, 'Source Sans Pro';
            white-space: nowrap;
            flex-shrink: 0;
        }
         .group-31-mGh {
            height: 100%;
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }
       .vector-vQV {
            margin-right: 1.5125rem;
            width: 2.1875rem;
            height: 2.5rem;
            object-fit: contain;
            vertical-align: top;
            flex-shrink: 0;
        }
         .developer-guides-fcy {
            margin-bottom: 0.2rem;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 500;
            line-height: 1.25;
            color: #000000;
            font-family: Roboto, 'Source Sans Pro';
            white-space: nowrap;
            flex-shrink: 0;
        }
        .group-32-BrD {
            display: flex;
            align-items: flex-end;
            flex-shrink: 0;
        }
         .vector-MEu {
            margin-right: 1.4rem;
            width: 2.7rem;
            height: 1.8rem;
            object-fit: contain;
            vertical-align: top;
            flex-shrink: 0;
        }
        .case-studies-Vc1 {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 500;
            line-height: 1.25;
            color: #000000;
            font-family: Roboto, 'Source Sans Pro';
            white-space: nowrap;
            flex-shrink: 0;
        }
    </style>
</head>
<body>
<div class="projects-27F">
    <div class="auto-group-xegd-xWh">
        <div class="auto-group-vcez-fR7">
            <div class="auto-group-zicu-aY5">
                <div class="frame-10-7Y1">
                    <a href="{{ route('home') }}" class="home-3Rf">HOME</a>
                    <a href="{{ route('pro') }}" class="projects-kL5">PROJECTS</a>
                    <a href="{{ route('blogs') }}"  class="blogs-H57">BLOGS</a>
                    <a href="{{ route('about') }}" class="about-1Wu">ABOUT</a>
                </div>
                <div class="group-5-9t1">
                    <img class="group-4-7pq" src="./assets/group-4-JS1.png"/>
                    <img class="vector-fLZ" src="./assets/vector-FnV.png"/>
                </div>
            </div>

            <a href="{{route('contact')}}" class="frame-PnM">start a project</a>
        </div>

        <p class="see-all-our-work-UYu">See All Our Work</p>
        <div class="frame-33-pyj">
            <div class="group-30-8zR">
                {{--                <img class="vector-hGq" src="./assets/vector-Spm.png"/>--}}
                <a class="featured-eC5">ALL</a>
            </div>
            <div class="group-31-mGh">
                {{--                <img class="vector-vQV" src="./assets/vector-dZo.png"/>--}}
                <a class="developer-guides-fcy">DESIGN</a>
            </div>
            <div class="group-32-BrD">
                {{--                <img class="vector-MEu" src="./assets/vector-n2H.png"/>--}}
                <a class="case-studies-Vc1">DEVELOPMENT</a>
            </div>
        </div>
        <p class="check-out-some-projects-we-have-done-some-of-them-are-samples-to-develop-creativity-some-are-hobbies-and-some-are-projects-that-our-customers-wanted-to-show-off-BCR">Check out some projects we have done. Some of them are samples to develop creativity, some are hobbies and some are projects that our customers wanted to show off.</p>
        <div class="frame-47-1BT">
            @foreach($projects as $project)
                <a href="{{ route('wahlbeck', ['id' => $project->id]) }}" class="group-6-8Wy">
                    <p class="wahlbeck-sci-fi-audiobooks-MuX">{{ $project->title }}</p>
                    <div class="rectangle-19-etd"></div>
                    <div class="rectangle-20-NJq" style="background-image: url('{{ asset($project->image1) }}');"></div>
                    <p class="lorem-ipsum-dolor-sit-amet-consectetur-consectetur-vulputate-quis-enim-vel-volutpat-sed-posuere-in-faucibus-ut-velit-vivamus-aQu">
                        {{ $project->description1 }}
                    </p>
                </a>
            @endforeach
{{--            <a href="{{ route('floater') }}" class="group-6-Ae1">--}}
{{--                <p class="wahlbeck-sc-fi-audiobooks-KG1">--}}
{{--                    Wahlbeck--}}
{{--                    <br/>--}}
{{--                    Sc-Fi Audiobooks--}}
{{--                </p>--}}
{{--                <p class="the-floater-app-ogy">The Floater App</p>--}}
{{--                <div class="rectangle-19-hXT">--}}
{{--                </div>--}}
{{--                <div class="rectangle-20-ceR">--}}
{{--                </div>--}}
{{--                <p class="lorem-ipsum-dolor-sit-amet-consectetur-purus-at-interdum-sed-ac-quis-pretium-scelerisque-ultricies-risus-donec-viverra-aenean-Vy7">Lorem ipsum dolor sit amet consectetur. Purus at interdum sed ac quis pretium scelerisque ultricies risus. Donec viverra aenean.</p>--}}
{{--            </a>--}}
{{--            <a href="{{ route('floater') }}" class="group-6-iL5">--}}
{{--                <p class="wahlbeck-sc-fi-audiobooks-F57">--}}
{{--                    Wahlbeck--}}
{{--                    <br/>--}}
{{--                    Sc-Fi Audiobooks--}}
{{--                </p>--}}
{{--                <p class="the-floater-app-k1s">The Floater App</p>--}}
{{--                <div class="rectangle-19-q3K">--}}
{{--                </div>--}}
{{--                <div class="rectangle-20-A5b">--}}
{{--                </div>--}}
{{--                <p class="lorem-ipsum-dolor-sit-amet-consectetur-purus-at-interdum-sed-ac-quis-pretium-scelerisque-ultricies-risus-donec-viverra-aenean-emT">Lorem ipsum dolor sit amet consectetur. Purus at interdum sed ac quis pretium scelerisque ultricies risus. Donec viverra aenean.</p>--}}
{{--            </a>--}}
{{--            <a href="{{ route('floater') }}" class="group-6-4aH">--}}
{{--                <p class="wahlbeck-sc-fi-audiobooks-1Ed">--}}
{{--                    Wahlbeck--}}
{{--                    <br/>--}}
{{--                    Sc-Fi Audiobooks--}}
{{--                </p>--}}
{{--                <p class="the-floater-app-7Hf">The Floater App</p>--}}
{{--                <div class="rectangle-19-byX">--}}
{{--                </div>--}}
{{--                <div class="rectangle-20-8Tf">--}}
{{--                </div>--}}
{{--                <p class="lorem-ipsum-dolor-sit-amet-consectetur-purus-at-interdum-sed-ac-quis-pretium-scelerisque-ultricies-risus-donec-viverra-aenean-ctd">Lorem ipsum dolor sit amet consectetur. Purus at interdum sed ac quis pretium scelerisque ultricies risus. Donec viverra aenean.</p>--}}
{{--            </a>--}}
        </div>
        <img class="arrow-2-jnD" src="./assets/right-arrow.png"/>
    </div>
    <img class="arrow-2-jnD" src="./assets/arrow-right.png"/>
    <div class="auto-group-pjs1-Ev1">
        <div class="auto-group-tdyy-ZhP">
            <div class="group-18-uFT">
                <img class="group-4-EYd" src="./assets/group-4-1Ly.png"/>
                <img class="vector-ZL1" src="./assets/vector-ghb.png"/>
            </div>
            <div class="frame-22-gvR">
                <a  class="about-us-Q5j">About Us</a>
                <a  class="blog-j81">Blog</a>
                <a href="{{ route('terms') }}" class="terms-conditions-GNq">Terms &amp; Conditions</a>
                <a href="{{ route('privacy') }}" class="privacy-policy-PyF">Privacy Policy</a>
            </div>
            <div class="frame-21-Ldb">
                <img class="frame-GGM" src="./assets/frame-9vm.png"/>
                <img class="group-Bu7" src="./assets/group-o2u.png"/>
                <img class="icons8-tiktok-1-XTB" src="./assets/icons8-tiktok-1.png"/>
            </div>
        </div>
        <div class="group-19-rEZ">
            <p class="subscribe-now-AFF">SUBSCRIBE NOW</p>
            <div class="auto-group-5gvz-6Po">
                <p class="your-email-STf">Your email</p>
                <div class="auto-group-1emb-AuT">
                    <img class="polygon-1-XED" src="./assets/polygon-1-XVX.png"/>
                </div>
            </div>
        </div>
        <div class="group-47-2wf">
            <img class="vector-Myw" src="./assets/vector-NKw.png"/>
            <p class="all-rights-reserved-7TK"> 2023. All Rights Reserved.</p>
        </div>
    </div>
</div>
</body>
