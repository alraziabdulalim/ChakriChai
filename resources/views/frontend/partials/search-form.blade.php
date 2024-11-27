<form class="mt-10" action="" method="GET">
    <div class="relative w-full">
        <svg class="absolute hidden text-white sm:block left-4 md:left-8 top-5 md:top-7" width="20" height="20"
            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M3.85587 1.61739C5.19014 0.725854 6.75882 0.25 8.36354 0.25H8.36358C10.5154 0.250137 12.579 1.105 14.1006 2.62655C15.6221 4.14811 16.477 6.21174 16.4771 8.36355V8.36359C16.4771 9.96831 16.0013 11.537 15.1097 12.8713C14.9533 13.1054 14.7852 13.3305 14.6065 13.5459L19.5303 18.4697C19.8232 18.7626 19.8232 19.2374 19.5303 19.5303C19.2374 19.8232 18.7625 19.8232 18.4696 19.5303L13.5458 14.6065C12.9234 15.1232 12.2239 15.5467 11.4685 15.8596C9.98591 16.4737 8.35454 16.6344 6.78065 16.3213C5.20677 16.0082 3.76107 15.2355 2.62636 14.1008C1.49165 12.9661 0.718908 11.5204 0.405843 9.94648C0.0927783 8.37259 0.253454 6.74122 0.867553 5.25866C1.48165 3.77609 2.52159 2.50892 3.85587 1.61739ZM8.36349 1.75C7.05546 1.75001 5.77681 2.13789 4.68922 2.86459C3.60162 3.5913 2.75394 4.6242 2.25337 5.83268C1.75281 7.04116 1.62183 8.37093 1.87702 9.65384C2.13221 10.9368 2.76209 12.1152 3.68702 13.0401C4.61195 13.965 5.79038 14.5949 7.07329 14.8501C8.3562 15.1053 9.68597 14.9743 10.8945 14.4738C12.1029 13.9732 13.1358 13.1255 13.8625 12.0379C14.5892 10.9503 14.9771 9.67167 14.9771 8.36364M8.36354 1.75C10.1175 1.75012 11.7997 2.44695 13.0399 3.68721C14.2802 4.92748 14.977 6.6096 14.9771 8.36359"
                fill="currentColor"></path>
        </svg>
        <input type="search" name="search" value="{{ request('search', '') }}"
            placeholder="e.g. FullStack Laravel & VueJS Developer"
            class="text-white bg-white/5 ring-1 ring-inset ring-white/10 outline-none rounded-xl pl-4 sm:pl-12 md:pl-20 pr-28 h-[60px] md:h-[72px] w-full" />

        <button type="submit"
            class="bg-indigo-500 hover:bg-indigo-500/60 transition px-5 py-3 rounded-lg text-white text-base font-medium absolute right-1.5 md:right-3 top-1.5 md:top-3">
            Search
        </button>
    </div>
</form>
