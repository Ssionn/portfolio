<div class="bottom-0 w-full h-16 mt-36 text-white">
    <div class="flex sm:flex-row sm:justify-evenly items-center">
        <span>
            {{ __('portfolio.links.license_pretext') }}
            <a href="https://github.com/ssionn/portfolio/blob/production/LICENSE" class="font-bold underline"
                target="_blank">
                {{ __('portfolio.links.license') }}
            </a>
        </span>
        <span>© {{ __('portfolio.copyright', ['date' => date('Y')]) }}</span>
        <span>
            {{ __('portfolio.links.github_pretext') }}
            <a href="https://github.com/ssionn/portfolio" class="font-bold underline" target="_blank">
                {{ __('portfolio.links.github') }}
            </a>
        </span>
    </div>
</div>
