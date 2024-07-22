<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>

    <body class="bg-gradient-to-b min-h-screen from-[#577FBA] via-[#5BA4CC] to-[#5CADD2]">
        <header class="flex justify-center items-center h-24 sm:px-44 mt-8 sm:mt-0">
            <div class="flex flex-col md:flex-row justify-start items-center space-y-6 sm:space-y-0 sm:w-full">
                <div class="inline-flex space-x-4 items-center">
                    <a href="https://x.com/Ssionn2_" target="_blank">
                        <img src="{{ asset('storage/images/x-logo.svg') }}" class="h-6 w-6 hover:scale-125 transition ease-in-out delay-150" alt="X Logo"/>
                    </a>
                    <a href="https://github.com/ssionn" target="_blank">
                        <img src="{{ asset('storage/images/github-mark-white.svg') }}" class="h-6 w-6 hover:scale-125 transition ease-in-out delay-150" alt="GitHub Logo"/>
                    </a>
                    <a href="https://www.linkedin.com/in/ssionn/" target="_blank">
                        <img src="{{ asset('storage/images/linkedIn.png') }}" class="h-6 w-6 hover:scale-125 transition ease-in-out delay-150" alt="LinkedIn Logo"/>
                    </a>
                </div>
            </div>
        </header>

        <main class="flex flex-col items-center space-y-16">
            <div class="container mx-auto max-w-6xl p-4 sm:p-6 lg:p-8">
                <div class="flex flex-col md:flex-row items-center md:justify-start md:space-x-8">
                    <div class="w-full md:w-1/2">
                        <img
                            src="{{ asset('storage/images/me.jpeg') }}"
                            alt="Casper's portrait"
                            class="rounded-2xl w-72 h-72 object-cover mx-auto md:mx-0 shadow-lg"
                        >
                    </div>
                    <div class="w-full md:w-1/2 text-center md:text-left mt-6 md:mt-0">
                        <h1 class="text-5xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-pink-600">
                            Hi, My name is Casper
                        </h1>
                        <p class="text-xl text-white">
                            Passionate PHP developer specializing in Laravel and Symfony. I craft elegant solutions to complex problems, always eager to learn and apply new technologies. Gaming enthusiast and tech hobbyist, I'm on a mission to create intuitive digital experiences that push boundaries.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container mx-auto max-w-6xl p-4 sm:p-6 lg:p-8 mt-20">
                <h2 class="text-4xl font-bold text-white mb-8 text-center">Projects</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($projects as $project)
                        <a href="https://github.com/{{ $project->owner }}/{{ $project->repo }} }}" target="_blank" class="flex flex-col bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 opacity-0 translate-y-4 transition-all duration-700 ease-out h-full" data-project-card>
                            <img class="object-cover w-full h-48 rounded-t-lg" src="{{ asset('storage/images/projects/' . $project['repo'] . '.png') }}" alt="{{ $project['repo'] }} Project">
                            <div class="flex flex-col justify-between p-4 flex-grow">
                                <div>
                                    <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $project['owner'] }}/{{ $project['repo'] }}</h3>
                                    <p class="mb-3 font-normal text-gray-700">
                                        {{-- You might want to add a description field to your $projects array in the controller --}}
                                        {{ $project['description'] ?? 'An awesome project.' }}
                                    </p>
                                </div>
                                <div class="flex flex-wrap items-center text-sm text-gray-500 gap-4 mt-auto pt-4 border-t border-gray-200">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                                        <span class="pt-1">{{ $projectStats[$project['repo']]['contributors'] ?? 0 }} Contributors</span>
                                    </span>
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                        <span class="pt-1">{{ $projectStats[$project['repo']]['commits'] ?? 0 }} Commits</span>
                                    </span>
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                                        <span class="pt-1">{{ $projectStats[$project['repo']]['stars'] ?? 0 }} Stars</span>
                                    </span>
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="pt-1">{{ $projectStats[$project['repo']]['forks'] ?? 0 }} Forks</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </main>
    </body>
</html>
