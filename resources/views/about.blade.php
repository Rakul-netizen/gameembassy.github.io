@extends('layout.index')
@section('title', 'about')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('asset/icon/ge.png') }}" type="image/png">
    <style>
        #container {
            background: white;
            padding: 20px 0 20px 20px;
        }
    </style>
</head>

<body>
    @section('main-content')
        <div style="background-color: white;">
            <div class="container" id="container">
                <h3>About Us</h3>
                <p>
                    Welcome to the Game Embassy — your ultimate warp zone into the gaming multiverse.

                    We’re not just button mashers — we’re players with passion. Whether it’s chasing high scores, grinding
                    through RPG side quests, or testing out the latest battle royales, we live and breathe games. Our
                    mission?
                    To share that love with fellow gamers through fresh, honest, and entertaining content.

                    From hidden indie treasures to triple-A epics, we cover it all. Expect game reviews with personality,
                    news
                    that actually matters, and deep dives into the stories, mechanics, and madness behind your favorite
                    titles.
                </p>
                <h3>What We’re About</h3>
                <p>
                    Gaming isn’t just something we do. It’s who we are. We grew up leveling up, learning boss patterns,
                    rage-quitting, and building friendships through shared pixels and epic wins.

                    At Game Embassy, we bring that lifelong love of gaming into every post, stream, and article we
                    create. Whether you're into the nostalgia of retro games or hyped for the next-gen titles dropping this
                    year
                    — we’re right there with you.

                    Here’s what we bring to the table:
                </p>
                <h3>Powered by Passion</h3>
                <p>
                    We’re creators, collectors, and competitors. Some of us grew up with Game Boys under our pillows, others
                    never left the LAN party scene — but together, we’re all about leveling up the gaming community.

                    So grab your headset, dive into our latest posts, and hit that start button.
                    Let’s play.
                </p>
                <h3>Our Content</h3>
                <p>
                <ul>
                    <li><b>Lore & Theory</b> – For those who need to know every backstory and hidden ending.</li>
                    <li><b>Tips, Builds, & Guides</b> – Helping you git gud without the stress.</li>
                    <li><b>Video & Streams</b> – Twitch recaps, top moments, and Let’s Plays from the team.</li>
                </ul>
                </p>
                <h3>Powered by Passion</h3>
                <p>
                    We’re creators, collectors, speedrunners, and Sunday-night grinders. Some of us still have our old
                    consoles plugged in, others are on day 672 of their daily log-in streak. But one thing unites us — the
                    belief that gaming connects people in ways nothing else can.

                    This blog started as a side quest — now it’s our main mission. And just like in any great co-op game, we
                    couldn’t do it without you.
                </p>
            </div>
        </div>
    @endsection
</body>

</html>
