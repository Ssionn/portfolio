<div class="flex flex-col items-center justify-center" id="projects">
    <div
        class="flex flex-col items-center sm:items-start sm:flex-row justify-center space-x-0 sm:space-x-16 sm:space-y-0 space-y-12">
        <div class="flex flex-col justify-center items-center space-y-4 sm:space-y-0">
            <h1 class="text-3xl sm:text-4xl font-bold text-primary-superdark mb-16">
                {{ __('portfolio.projects.header') }}
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-8">
                @foreach ($projects as $project)
                    <div
                        class="flex flex-col items-center justify-center bg-white rounded-lg p-2 hover:scale-105 transition ease-in-out duration-700">
                        <a href="https://github.com/{{ $project->owner }}/{{ $project->repo }}">
                            <img src="{{ $project->getGithubImageAttribute() }}" class="">

                            <div class="inline-flex justify-center items-center space-x-2 w-full mt-2">
                                <span
                                    class="text-primary-superdark text-sm font-semibold p-2">{{ __('portfolio.projects.data.commits', ['commit_count' => $project->commit_count]) }}</span>
                                <span
                                    class="text-primary-superdark text-sm font-semibold p-2">{{ __('portfolio.projects.data.stars', ['star_count' => $project->star_count]) }}</span>
                                <span
                                    class="text-primary-superdark text-sm font-semibold p-2">{{ __('portfolio.projects.data.forks', ['fork_count' => $project->fork_count]) }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
