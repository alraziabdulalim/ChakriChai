<!-- Job Card -->
@forelse ($chakris as $chakri)
    <div
        class="flex flex-col gap-6 p-6 mt-8 text-white transition outline-none hover:bg-gray-600/30 hover:duration-500 rounded-xl group bg-white/5 ring-1 ring-inset ring-white/10">
        <div class="flex items-center justify-between">
            <div class="flex flex-col items-start gap-6 md:flex-row md:items-center">
                <img alt="{{ $chakri->company_name }}" loading="lazy" class="w-16 h-16 p-2 bg-gray-700 rounded-xl"
                    style="color: transparent" src="{{ $chakri->company_logo }}" />
                <div>
                    <p class="text-sm font-medium text-indigo-400">
                        {{ $chakri->company_name }}
                    </p>
                    <h6
                        class="mt-1 text-lg font-semibold text-white transition group-hover:opacity-90 group-hover:duration-300">
                        <a href="{{ route('frontend.chakri_details', $chakri->id) }}">{{ $chakri->title }}</a>
                    </h6>
                    <div class="flex items-center gap-2 mt-3">
                        <p class="px-2 py-1 text-xs rounded-md bg-gray-300/30 w-fit text-white/70">
                            {{ $chakri->employment_type->getLabel() }}
                        </p>
                        <p class="px-2 py-1 text-xs rounded-md bg-gray-300/30 w-fit text-white/70">
                            {{ $chakri->salary }}
                        </p>
                        <p class="px-2 py-1 text-xs rounded-md bg-gray-300/30 w-fit text-white/70">
                            {{ $chakri->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
            </div>
            <a class="hidden md:flex items-center gap-1.5 px-4 py-2.5 text-indigo-300 bg-gray-300/30 group-hover:bg-indigo-500 group-hover:text-white rounded-lg transition group-hover:duration-500"
                href="{{ route('frontend.chakri_details', $chakri->id) }}">
                View Job
                <span>
                    <svg width="18" height="18" viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.86409 2.59846C7.12037 2.34218 7.53588 2.34218 7.79216 2.59846L11.7297 6.53596C11.9859 6.79224 11.9859 7.20776 11.7297 7.46404L7.79216 11.4015C7.53588 11.6578 7.12037 11.6578 6.86409 11.4015C6.6078 11.1453 6.6078 10.7297 6.86409 10.4735L9.6813 7.65625H2.73438C2.37194 7.65625 2.07812 7.36244 2.07812 7C2.07812 6.63756 2.37194 6.34375 2.73438 6.34375H9.6813L6.86409 3.52654C6.6078 3.27026 6.6078 2.85474 6.86409 2.59846Z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                </span>
            </a>
        </div>
        <p class="mt-5 text-base text-white/60">
            {{ str($chakri->description)->limit(200) }}
        </p>
    </div>
@empty
    <h4 class="my-4 text-center text-xl font-semibold text-white/80">
        No jobs posted yet. Come back later!
    </h4>
@endforelse
<!-- /Job Card -->
