@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->

<section class="hero-section">

    <div class="container">

        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">

        <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>

        <h3 class="mb-4">{{ $portfolio['title'] }}</h3>

        <p class="lead mb-4">{{ $portfolio['bio'] }}</p>

    </div>

</section>

<!-- About Section -->

<section id="about" class="section">

    <div class="container">

        <h2 class="section-title">About Me</h2>

        <p>As a professional basketball player</p>
        <p>I've mastered the art of precision, teamwork, and pushing myself to perform under pressure. Off the court, I channel that same dedication into my love for cooking, where I approach every dish with the same focus and creativity I bring to the game. Whether it’s strategizing a play or perfecting a recipe, both require attention to detail and the willingness to learn.</p>
        <p>Cooking allows me to express my creativity and unwind, while basketball keeps me disciplined and sharp. This portfolio reflects my journey through both passions always striving for excellence, whether I'm on the court or in the kitchen.</p>
    </div>

</section>

<!-- Projects Section -->

<section id="projects" class="section bg-light">

    <div class="container">

        <h2 class="section-title">My Projects</h2>

        <p>My Project is Balancing Precision and Passion.</p>
        <p>This project chronicles my dual journey as a professional basketball player and an avid home cook.</p>
        <p>On the court, I’ve learned the importance of strategy, teamwork, and pushing my limits values that seamlessly translate into my kitchen where I craft dishes with the same focus and creativity. From game-winning shots to perfecting a new recipe, both passions demand precision, discipline, and an unyielding drive for excellence.</p>
        <p>This project blends my athletic career with my love for food, showcasing how both pursuits shape who I am.</p>

    </div>

</section>

@endsection