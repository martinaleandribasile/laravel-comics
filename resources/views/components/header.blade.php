@php
    $links = [
        [
            'links' => '#',
            'title' => 'CHARACTER',
        ],
        [
            'links' => '#',
            'title' => 'COMICS',
        ],
        [
            'links' => '#',
            'title' => 'MOVIES',
        ],
        [
            'links' => '#',
            'title' => 'TV',
        ],
        [
            'links' => '#',
            'title' => 'GAMES',
        ],
        [
            'links' => '#',
            'title' => 'COLLECTIBLES',
        ],
        [
            'links' => '#',
            'title' => 'CHARACTER',
        ],
        [
            'links' => '#',
            'title' => 'FANS',
        ],
        [
            'links' => '#',
            'title' => 'NEWS',
        ],
        [
            'links' => '#',
            'title' => 'SHOP',
        ],
    ];

@endphp

<header>
    <div class="bg-blu">
        <div class="boxcontainer">
            <div class="header-blu">
                <p>DC POWER VISA</p>
                <p>ADDITIONAL DC SITES</p>
            </div>
        </div>
    </div>
    <div class="boxcontainer">
        <div class="linksbox">
            <div class="himgbox"> <img src="{{ asset('images/dc-logo.png') }}" alt=""></div>
            <div class="links">
                @foreach ($links as $link)
                    <a href="{{ $link['links'] }}">{{ $link['title'] }}</a>
                @endforeach
            </div>
            <div class="hsearch">
                <input type="search" name="search" id="search" placeholder="Search">
                <i class="bi bi-search"></i>
            </div>
        </div>
    </div>
    <div class="jumbo">

    </div>

</header>
