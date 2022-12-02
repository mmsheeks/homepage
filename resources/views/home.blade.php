<x-app>
    <!-- Intro -->
    <section id="intro" class="wrapper featured style1">
        <div class="inner">
            <span class="image"><img src="images/portrait.jpg" alt="" /></span>
            <div class="content">
                <header>
                    <h1>Hey there, I'm Martin</h1>
                    <p>I'm a PHP developer, streamer,<br />
                        and photographer based out of<br />
                        St. Paul, Minnesota.</p>
                </header>
            </div>
        </div>
    </section>

    <!-- One -->
    <section class="wrapper style2 special">
        <div class="inner">
            <header>
                <h2>Find Me Online</h2>
                <p>Here are some places you can find my<br />
                    thoughts and work on the internet.</p>
            </header>
            <ul class="actions fit major style2">
                <li>
                    <x-icon-button url="https://github.com/mmsheeks" icon="brands fa-github">Github</x-icon-button>
                </li>
                <li>
                    <x-icon-button url="https://twitch.tv/zenfrii" icon="brands fa-twitch">Twitch</x-icon-button>
                </li>
                <li>
                    <x-icon-button url="https://twitter.com/zenfrii" icon="brands fa-twitter">Twitter</x-icon-button>
                </li>
                <li>
                    <x-icon-button url="https://instagram.com/mmsheeks" icon="brands fa-instagram">
                        Instagram
                    </x-icon-button>
                </li>
                <li>
                    <x-icon-button url="https://facebook.com/mmsheeks" icon="brands fa-facebook">
                        Facebook
                    </x-icon-button>
                </li>
            </ul>
        </div>
    </section>

    <!-- Two -->
    <section class="wrapper style1 special">
        <div class="inner">
            <header>
                <h2>My Work</h2>
                <p>A brief summary of the work I've done<br />
                    so far, and where I did it.</p>
            </header>
            @foreach ($spotlights as $i => $spotlight)
                <x-spotlight :model="$spotlight" />
            @endforeach
        </div>
    </section>

    <!-- Three -->
    <section class="wrapper style3 special">
        <div class="inner">
            <header>
                <h2>My Values</h2>
                <p>
                    I stand in support of the abolition of policing and prisons.<br />
                    I support the rights of our LGBTQIA+ community members.<br />
                    I believe in mutual support and communal wealth.<br />
                    I believe we have a responsibility to be good stewardts of the world around us.
                </p>

                <p>These are not positions I've come to lightly, and they are values that I hold dearly. I do my best to
                    align the work I do in the world with these values, and to push back against systems of authority
                    where they seek to weaken our communities.</p>

                <p>It is our responsibility to care for ourselves and those around us, and to fight back against
                    fascism, bigotry, and hate wherever they are in the world.</p>
            </header>
        </div>
    </section>

    <!-- Footer -->
    <section id="footer" class="wrapper split style2">
        <div class="copyright">
            <p>&copy; {{ $year }}; Martin Sheeks. All rights reserved.</p>
        </div>
    </section>
</x-app>
