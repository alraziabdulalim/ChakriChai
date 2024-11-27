@extends('layouts.frontend')

@section('main_content')
    <!-- Hero Section -->
    <section id="hero" class="bg-gray-900">
        <div class="relative isolate pt-14">
            <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="
              clip-path: polygon(
                74.1% 44.1%,
                100% 61.6%,
                97.5% 26.9%,
                85.5% 0.1%,
                80.7% 2%,
                72.5% 32.5%,
                60.2% 62.4%,
                52.4% 68.1%,
                47.5% 58.3%,
                45.2% 34.5%,
                27.5% 76.7%,
                0.1% 64.9%,
                17.9% 100%,
                27.6% 76.8%,
                76.1% 97.7%,
                74.1% 44.1%
              );
            ">
                </div>
            </div>
            <div class="py-24 sm:py-32 lg:pb-40">
                <div class="px-6 mx-auto max-w-7xl lg:px-8">
                    <div class="max-w-2xl mx-auto text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                            <span class="font-extrabold text-indigo-300">Chakri Chai</span> the
                            ultimate job seeker's toolkit
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-gray-300">
                            Seeking your dream job or the perfect candidate? Explore our
                            vast network of opportunities across industries.
                        </p>

                        @include('frontend.partials.search-form')
                    </div>
                </div>
            </div>
            <div
                class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-50rem)]">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="
              clip-path: polygon(
                74.1% 44.1%,
                100% 61.6%,
                97.5% 26.9%,
                85.5% 0.1%,
                80.7% 2%,
                72.5% 32.5%,
                60.2% 62.4%,
                52.4% 68.1%,
                47.5% 58.3%,
                45.2% 34.5%,
                27.5% 76.7%,
                0.1% 64.9%,
                17.9% 100%,
                27.6% 76.8%,
                76.1% 97.7%,
                74.1% 44.1%
              );
            ">
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
    <main class="mb-10">
        <div class="container max-w-6xl px-5 mx-auto my-10 xl:my-8 md:px-2">
            <div class="grid grid-cols-12 lg:gap-12">
                <div class="col-span-12" id="find-job">
                    <!-- Section Header -->
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-semibold text-gray-300">Latest Jobs</h3>
                        <p class="text-base text-white/60">{{ number_format($chakris->count()) }}
                            {{ str('Result')->plural($chakris->count()) }} Found</p>
                    </div>
                    <!-- /Section Header -->
                    <!-- Job Listings -->
                    <div>
                        @include('frontend.partials.job-card')
                    </div>
                    <!-- /Job Listings -->
                </div>
            </div>
        </div>
    </main>
@endsection
