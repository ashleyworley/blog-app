

<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Blog.app
    </h1>

    <h2 class="inline-flex mt-2">By Ash <img class="object-scale-down w-10 h-5" src="/images/ernes_Busta_-_mail.svg"
        alt="Envelope"></h2 >



    <p class="text-sm mt-14">
        A brand new blog where you can read my thoughts and opinions!
    </p>

    <div class="mt-8 space-y-2 lg:space-y-0 lg:space-x-4">
        <!--  Category -->
        <div class="relative bg-gray-100 lg:inline-flex rounded-xl">

        {{-- Javascript to navigate to categories --}}
        <div x-data="{show: false }" @click.away="show = false" >
                <button
                    @click="show = ! show"
                    class="flex w-full py-2 pl-3 text-sm font-semibold text-left pr-9 lg:w-32 lg:inline-flex"
                >
                    Categories

                <svg class="absolute transform -rotate-90 pointer-events-none" style="right: 12px;" width="22"P
                    height="22" viewBox="0 0 22 22">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path fill="#222"
                            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>

                </button>


            <div x-show="show" class="absolute z-50 w-full py-2 mt-2 bg-gray-100 rounded-xl" style="display: none">
                @foreach ($categories as $category)
                    <a href="/categories/{{ $category->slug }}"
                        class="block px-4 text-sm leading-6 text-left hover:bg-gray-300 focus:bg-gray-300 hover:text-white focus:text-white"
                        >{{ ucwords($category->name) }}</a>
                @endforeach

            </div>
        </div>


        </div>

        <!-- Other Filters -->
         <div class="relative flex items-center bg-gray-100 lg:inline-flex rounded-xl">
            <select class="flex-1 py-2 pl-3 text-sm font-semibold bg-transparent appearance-none pr-9">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <svg class="absolute transform -rotate-90 pointer-events-none" style="right: 12px;" width="22"
                 height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222"
                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </div>

        <!-- Search -->
        <div class="relative flex items-center px-3 py-2 bg-gray-100 lg:inline-flex rounded-xl">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                       class="text-sm font-semibold placeholder-black bg-transparent">
            </form>
        </div>
    </div>
</header>
