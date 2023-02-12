{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}

{{-- <!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="Multi-purpose Business html5 template" />
<title>E-bookmadz</title>
<link href="assets/images/favicon/favicon.png" rel="icon" />

<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet" />

<link href="assets/css/vendor.min.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet" />

<script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-MDF43VH');
    </script>

</head>
<body class="body-scroll">

<noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDF43VH" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>


<div class="wrapper clearfix" id="wrapperParallax"> --}}

@include("landing.header.header")


<section class="hero hero-mailchimp bg-primary-alt" id="hero">
    <div class="container">
        <div class="hero-cotainer">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-headline">
                            Perpustakaan <Br> SMKN 2 Indramayu
                        </h1>

                        <div class="hero-bio">
                            {{-- we have on the web development market since 2000 and have been growing ever since. A design studio founded in London and expanded our services & become a multinational firm, offering features Worldwide. --}}
                            {{-- There is No Friend As Loyal as a book. --}}

                        </div>

                        <div class="hero-action text-center">
                            <form class="mb-0 form-action mailchimp">
                                <div class="input-group">
                                    <input class="form-control" type="email" placeholder="Enter E-mail Address" required="required" />
                                    <button class="btn btn--secondary">
                                        <span>
                                            download
                                        </span>
                                    </button>
                                </div>
                            </form>
                            <div class="subscribe-alert"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <img class="img-fluid float-right" src="assets/images/cover/ebook.png" alt="Book Cover" />
                </div>

            </div>
        </div>
    </div>

    <div class="divider-shape-bottom"><svg viewBox="0 0 1920 250" xmlns="http://www.w3.org/2000/svg" style="background: #0f202c" width="100%" preserveAspectRatio="none">
    <path fill="rgb(244, 246, 249, 0.02)" d="M1920 250H0V0s126.707 78.536 349.975 80.05c177.852 1.203 362.805-63.874 553.803-63.874 290.517 0 383.458 57.712 603.992 61.408 220.527 3.696 278.059-61.408 412.23-17.239"></path>
    <path fill="rgb(244, 246, 249, 0.08)" d="M1920 144s-467.917 116.857-1027.243-17.294C369.986 1.322 0 45.578 0 45.578V250h1920V144z"></path>
    <path fill="#FFFFFF" d="M0 195.553s208.547-75.581 701.325-20.768c376.707 41.908 520.834-67.962 722.545-67.962 222.926 0 311.553 83.523 496.129 86.394V250H0v-54.447z"></path>
    </svg>
    </div>
</section>


<section class="features text-center" id="feature">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <div class="heading text-center">
                    <h2 class="heading-title">
                        Book Features
                    </h2>
                    <p class="heading-desc">
                        This should be used to tell a story and let your users know a little more about your product or service.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="feature-panel">
                    <div class="feature-icon text-center">
                        <div class="bg-section">
                            <img src="assets/images/icons/bg-icon-1.svg" alt="icon svg" />
                        </div>
                        <img src="assets/images/icons/icon-dollar.svg" alt="Dollar Icon" />
                    </div>

                    <div class="feature-content">
                        <h3>
                            Innovation ideas
                        </h3>
                        <p>
                            We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="feature-panel active">
                    <div class="feature-icon text-center">
                        <div class="bg-section">
                            <img src="assets/images/icons/bg-icon-2.svg" alt="icon svg" />
                        </div>
                        <img src="assets/images/icons/icon-cup.svg" alt="Cup Icon" />
                    </div>

                    <div class="feature-content">
                        <h3>
                            Success Stories
                        </h3>
                        <p>
                            Your logo is the very heart of your identity and branding, let our designers deliver the perfect & dreamy design, make a lasting impression.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="feature-panel">
                    <div class="feature-icon text-center">
                        <div class="bg-section">
                            <img src="assets/images/icons/bg-icon-3.svg" alt="icon svg" />
                        </div>
                        <img src="assets/images/icons/icon-delivery.svg" alt="Delivery Icon" />
                    </div>

                    <div class="feature-content">
                        <h3>
                            Leadership Skills
                        </h3>
                        <p>
                            What separates our agency from all other web design agencies is the ability to offer the most Friendly Experience you can imagine.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center h-100">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="heading">
                    <h2 class="heading-title">
                        About The Book
                    </h2>
                    <p class="heading-desc">
                        After all, as described in Web Design Trends vision dominates. power of simple and communication each make a lasting impression.
                    </p>
                </div>

                <div class="row about-list">
                    <div class="col">
                        <div class="about-item style-1">
                            <div class="about-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="46.603" viewBox="0 0 56.915 46.603">
                                    <g id="icon_and_text_1" data-name="icon and text 1" transform="translate(0 -42.126)">
                                        <path id="Path_3473" data-name="Path 3473" d="M226.836,152.949V125.538a.918.918,0,1,0-1.836,0v27.411a.918.918,0,0,0,1.836,0Z" transform="translate(-197.461 -72.397)" fill="#9775f9" />
                                        <path id="Path_3474" data-name="Path 3474" d="M56,46.245c-1.941,0-4.359-.837-6.92-1.724-3.243-1.123-6.918-2.4-10.73-2.4a10.967,10.967,0,0,0-9.89,5.308,10.967,10.967,0,0,0-9.89-5.308c-3.812,0-7.487,1.273-10.73,2.4-2.561.887-4.979,1.724-6.92,1.724A.918.918,0,0,0,0,47.163V84.139a.918.918,0,0,0,.918.918c2.25,0,4.81-.887,7.52-1.825,3.106-1.075,6.626-2.294,10.129-2.294a9.349,9.349,0,0,1,7.226,2.956.918.918,0,0,0,1.356-1.238A11.188,11.188,0,0,0,18.567,79.1c-3.812,0-7.487,1.273-10.73,2.4a30.637,30.637,0,0,1-6,1.669V48.036a30.36,30.36,0,0,0,6.6-1.78c3.106-1.075,6.626-2.294,10.129-2.294,7.084,0,8.938,5.626,9.013,5.862a.918.918,0,0,0,1.755,0,9.144,9.144,0,0,1,9.013-5.862c3.5,0,7.023,1.219,10.129,2.294a30.355,30.355,0,0,0,6.6,1.78v35.13a30.642,30.642,0,0,1-6-1.669c-3.243-1.123-6.918-2.4-10.73-2.4a11.187,11.187,0,0,0-8.582,3.554.918.918,0,1,0,1.356,1.238,9.349,9.349,0,0,1,7.226-2.956c3.5,0,7.023,1.219,10.129,2.294,2.71.939,5.271,1.825,7.52,1.825a.918.918,0,0,0,.918-.918V47.163A.918.918,0,0,0,56,46.245Z" transform="translate(0 0)" fill="#9775f9" />
                                        <path id="Path_3475" data-name="Path 3475" d="M56,378.337c-1.941,0-4.359-.837-6.92-1.724-3.243-1.123-6.918-2.4-10.73-2.4a11.247,11.247,0,0,0-8.3,3.255H26.865a11.247,11.247,0,0,0-8.3-3.255c-3.812,0-7.487,1.273-10.73,2.4-2.56.887-4.979,1.724-6.92,1.724a.918.918,0,1,0,0,1.836c2.25,0,4.81-.887,7.52-1.825,3.106-1.075,6.626-2.294,10.129-2.294a9.349,9.349,0,0,1,7.226,2.956.918.918,0,0,0,.678.3h3.972a.918.918,0,0,0,.678-.3,9.349,9.349,0,0,1,7.226-2.956c3.5,0,7.023,1.219,10.129,2.294,2.71.939,5.271,1.825,7.52,1.825a.918.918,0,0,0,0-1.836Z" transform="translate(0 -291.445)" fill="#9775f9" />
                                    </g>
                                </svg>
                            </div>

                            <div class="about-item-title">
                                <div>+
                                    <span class="counting">
                                        100
                                    </span>
                                </div>

                                <div>
                                    Total Pages
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="about-item style-2">
                            <div class="about-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="42.102" viewBox="0 0 41.215 42.102">
                                    <g id="dollar_1_" data-name="dollar (1)" transform="translate(-1.947 -1.504)">
                                    <g id="Group_1988" data-name="Group 1988">
                                    <g id="Group_2003" data-name="Group 2003">
                                    <g id="win" transform="translate(1.922 1.504)">
                                        <path id="Path_5670" data-name="Path 5670" d="M.025,39.3l.546,1.228,19.584-8.12,3.412.409L24.8,36.574l-1.638,1.57A1.967,1.967,0,0,0,22.68,40.4l.682,1.706L34.69,37.666l-.614-1.638a1.929,1.929,0,0,0-1.91-1.3H29.913L28.685,31.8l3-1.5a2.051,2.051,0,0,0,1.024-2.525l-3.889-10.44A2.1,2.1,0,0,0,26.16,16.1a.067.067,0,0,0-.068.068L23.226,17.4l-.409-1.024,1.57-1.842a8.03,8.03,0,0,0,1.979-4.367l1.979-2.388a3.584,3.584,0,0,0-.478-5.05,5.711,5.711,0,0,0-.819-.546,3.391,3.391,0,0,0-2.32-.2l-.2-.614A1.973,1.973,0,0,0,21.93.136L7.531,5.322A2,2,0,0,0,6.3,7.915v.068l.341.887a3.781,3.781,0,0,0-1.979,4.64A3.881,3.881,0,0,0,7.8,16.035l3.207.341a8.886,8.886,0,0,0,4.435,1.706l2.252.2.409,1.024a2.032,2.032,0,0,0-.955,1.365L16.675,23,.025,29.751l.478,1.3,9.553-3.821,2.32,6.96Zm32.685-2.866.137.409-8.735,3.48-.2-.409a.946.946,0,0,1,.137-.75l2.32-2.184,2.934-.955h2.729a.685.685,0,0,1,.682.409Zm-4.3-1.638-2.457.819-.887-2.593a1.517,1.517,0,0,0,1.092-.2l1.16-.546ZM26.569,17.2a.677.677,0,0,1,.887.341L28,18.969l-3.344,1.092.409,1.3,3.344-1.092.819,2.184-3.207,1.092.409,1.3,3.275-1.092.819,2.183-3.139,1.024.409,1.3L31,27.158l.341.887a.6.6,0,0,1-.341.819l-5.391,2.661a.865.865,0,0,1-.409.068l-4.64-.546L18.04,23.473l.478-2.525a.722.722,0,0,1,.409-.478ZM26.5,3.411a2.261,2.261,0,0,1,1.16,2.934,2.391,2.391,0,0,1-.341.546L26.5,7.915a10.2,10.2,0,0,0-.409-1.979L25.2,3.275a2.727,2.727,0,0,1,1.3.136ZM6.03,13.169a2.351,2.351,0,0,1,1.16-2.934l.955,2.32a9.886,9.886,0,0,0,1.365,2.32l-1.433-.137A2.282,2.282,0,0,1,6.03,13.169Zm9.69,3.616a7.457,7.457,0,0,1-6.278-4.708l-1.774-4.5a.677.677,0,0,1,.341-.887L22.407,1.5a.753.753,0,0,1,.546,0,.7.7,0,0,1,.341.409l1.5,4.5a7.5,7.5,0,0,1-1.433,7.233L21.247,16.1l.614,1.638L19.4,18.764l-.682-1.706ZM11.353,26.68l1.569-.614,1.706,5.186,1.3-.409L14.151,25.52l2.729-1.092L19.2,31.32l-5.527,2.32Zm0,0" fill="#55dffc" />
                                        <path id="Path_5671" data-name="Path 5671" d="M33.734,11.941v.682H35.1v-.682a3.379,3.379,0,0,1,3.412-3.412V7.164A3.379,3.379,0,0,1,35.1,3.752V3.07H33.734v.682a3.378,3.378,0,0,1-3.412,3.412V8.529A3.379,3.379,0,0,1,33.734,11.941Zm.682-5.732a4.7,4.7,0,0,0,1.638,1.638,4.706,4.706,0,0,0-1.638,1.638,4.706,4.706,0,0,0-1.638-1.638A4.7,4.7,0,0,0,34.417,6.209Zm0,0" fill="#55dffc" />
                                        <path id="Path_5672" data-name="Path 5672" d="M3.71,25.588v.682H5.075v-.682a3.379,3.379,0,0,1,3.412-3.412V20.812A3.379,3.379,0,0,1,5.075,17.4v-.682H3.71V17.4A3.378,3.378,0,0,1,.3,20.812v1.365A3.379,3.379,0,0,1,3.71,25.588Zm.682-5.732A4.7,4.7,0,0,0,6.03,21.494a4.706,4.706,0,0,0-1.638,1.638,4.706,4.706,0,0,0-1.638-1.638,4.7,4.7,0,0,0,1.638-1.638Zm0,0" fill="#55dffc" />
                                        <path id="Path_5673" data-name="Path 5673" d="M37.829,17.4v-.682H36.464V17.4a3.378,3.378,0,0,1-3.412,3.412v1.365a3.379,3.379,0,0,1,3.412,3.412v.682h1.365v-.682a3.379,3.379,0,0,1,3.412-3.412V20.812A3.379,3.379,0,0,1,37.829,17.4Zm-.682,5.732a4.706,4.706,0,0,0-1.638-1.638,4.7,4.7,0,0,0,1.638-1.638,4.7,4.7,0,0,0,1.638,1.638A4.706,4.706,0,0,0,37.146,23.132Zm0,0" fill="#55dffc" />
                                        <path id="Path_5674" data-name="Path 5674" d="M20.292,12.146l.955.955c3.753-3.753.273-9.485.068-9.69l-1.16.751c.068,0,3.139,4.981.137,7.984Zm0,0" fill="#55dffc" />
                                    </g>
                                    </g>
                                    </g>
                                    </g>
                                </svg>
                            </div>

                            <div class="about-item-title">
                                <div>+
                                    <span class="counting">
                                        16
                                    </span>
                                </div>

                                <div>
                                    Great Aword
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="about-item style-3">
                            <div class="about-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="43.305" viewBox="0 0 56.915 43.305">
                                    <g id="icon_and_text_2" data-name="icon and text 2" transform="translate(0 -43.774)">
                                        <path id="Path_3476" data-name="Path 3476" d="M55.024,18.621,32.337,7.538a9.292,9.292,0,0,0-7.237,0L1.891,18.621A2.8,2.8,0,0,0,0,21.1c0,.587.261,1.63,1.891,2.477l1.891.913V34.92A3.194,3.194,0,0,0,1.76,37.854a3.237,3.237,0,0,0,1.956,2.934L.782,50.11H9L6.063,40.787A3.159,3.159,0,0,0,6,34.92V25.6l3.455,1.7v13.56a1.052,1.052,0,0,0,.2.587A23.677,23.677,0,0,0,28.425,50.11a23.543,23.543,0,0,0,18.711-8.671,1.052,1.052,0,0,0,.2-.587v-13.5l7.693-3.781A2.8,2.8,0,0,0,56.915,21.1,2.914,2.914,0,0,0,55.024,18.621ZM45.245,40.527a21.8,21.8,0,0,1-16.82,7.563A21.8,21.8,0,0,1,11.6,40.527V28.2l13.5,6.454a8.792,8.792,0,0,0,3.586.717,7.939,7.939,0,0,0,3.651-.782L45.245,28.27Zm8.866-18.776L46.288,25.6a.749.749,0,0,0-.717.391L31.424,32.834a7.238,7.238,0,0,1-5.476,0L8.54,24.489l20.015-2.347a1.015,1.015,0,0,0-.2-2.021L5.15,22.859,2.8,21.751a1.315,1.315,0,0,1-.717-.587c0-.065.13-.326.717-.587L26.013,9.429a6.735,6.735,0,0,1,2.673-.522,6.608,6.608,0,0,1,2.738.522L54.112,20.512c.587.261.717.522.717.652A1.793,1.793,0,0,1,54.112,21.751Z" transform="translate(0 36.97)" fill="#f67362" />
                                    </g>
                                </svg>
                            </div>

                            <div class="about-item-title">
                                <div>+
                                    <span class="counting">
                                        1,000
                                    </span>
                                </div>

                                <div>
                                    Active Readers
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-6 text-md-center mx-md-auto">
                <img class="img-fluid float-right float-md-none" src="assets/images/cover/book-2.png" alt="Book Cover" />
            </div>
        </div>
    </div>
</section>

<section class="author bg-gray" id="author">
    <div class="container">
        <div class="row align-items-center h-100">
            <div class="col-12 col-md-12 col-lg-6 text-md-center mx-md-auto">
                <img class="img-fluid float-right float-md-none mb-30" src="assets/images/cover/author.png" alt="Author" />
            </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="heading mb-50">
                        <h2 class="heading-title">
                            About The Author
                        </h2>
                        <p class="heading-desc">
                            The author name is Herry Khan. bron in 1930, has been in volved in gliding for more than fifty years. with the gold C badge and two dia monds, he has flown about one hundred, diffrerent types of sailplane, including twen ty of those described in this work.
                        </p>
                    </div>

                    <div class="author-education">
                        <h3>
                            Education Backgroud
                        </h3>

                        <div class="education-list">
                            <div class="row">
                                <div class="col">
                                    <div class="education-item style-1">
                                        <div class="education-title">
                                            Harvard University
                                        </div>
                                        <div class="education-period">
                                            Since 2012
                                        </div>
                                        <div class="education-desc">
                                            I am completed master degree from Harvard university 2012
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="education-item style-2">
                                        <div class="education-title">
                                            Newyork University
                                        </div>
                                        <div class="education-period">
                                            Since 2016
                                        </div>
                                        <div class="education-desc">
                                            I am completed master degree from Newyork university 2016
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>


<section class="testimonials" id="testimonials">
<div class="container">
<div class="row clearfix">
<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
<div class="heading text-center">
<h2 class="heading-title">Customer Stories</h2>
<p class="heading-desc">This should be used to tell a story and let your users know a little more about your product or service. How can you benefit them?</p>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-md-12 col-lg-4">
<div class="testimonial-panel style-1">
<div class="testimonial-body">
<div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
<p>It is the greatest media and web development agency i've ever. easy user interface to the powerfull servives To do it , so I give him 5 out of 5 for there good and amazing services. Thanks you</p>
<div class="testimonial-author">
<div class="testimonial-img"><img src="assets/images/testimonials/avatar-1.png" alt="avatar author" /></div>
<div class="testimonial-info">
<p>John R Michal</p><img class="testimonial-rating" src="assets/images/testimonials/4-stars.svg" alt="4 Stars" />
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-12 col-lg-4">
<div class="testimonial-panel style-2">
<div class="testimonial-body">
<div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
<p>My project was a simple task, but the persistence of kolaso web development team turend an very awesome and grear project make me very happy Thanks you so much for this project.</p>
<div class="testimonial-author">
<div class="testimonial-img"><img src="assets/images/testimonials/avatar-2.png" alt="avatar author" /></div>
<div class="testimonial-info">
<p>Micheal Lewis</p><img class="testimonial-rating" src="assets/images/testimonials/5-stars.svg" alt="5 Stars" />
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-12 col-lg-4">
<div class="testimonial-panel style-3">
<div class="testimonial-body">
<div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
<p>i am realy very proud of beeing first use this project, fantastice and awesome design, Well code and Extremely good work. Quick reply and very professional for just don't Know to say for this team.</p>
<div class="testimonial-author">
<div class="testimonial-img"><img src="assets/images/testimonials/avatar-3.png" alt="avatar author" /></div>
<div class="testimonial-info">
<p>Bronston Milton</p><img class="testimonial-rating" src="assets/images/testimonials/5-stars.svg" alt="5 Stars" />
</div>
</div>
</div>
</div>
</div>
</div>

</div>

</section>
<div class="pt-20 pb-20">
<div class="container">
<div class="row">
<div class="col">
<hr />
</div>
</div>
</div>
</div>

<section class="pricing pt-80" id="pricing">
<div class="container">
<div class="row clearfix">
<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
<div class="heading text-center">
<h2 class="heading-title">Our Best Pricing Plan</h2>
<p class="heading-desc">This should be used to tell a story and let your users know a little more about your product or service. How can you benefit them?</p>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-md-12 col-lg-6">
<div class="pricing-holder">
<div class="pricing-panel active">

<div class="pricing-head">
<div class="pricing-name">Standard</div>
<div class="currency">$29<span class="per"> / month</span></div>
</div>

<div class="pricing-body">
<ul class="pricing-list list-unstyled">
<li>crm auto cync</li>
<li>click to call back</li>
<li>track energy costs </li>
<li>predictive dialing </li>
</ul><a class="btn btn--primary" href="javascript:void(0)"><span>Download</span></a>
</div>
</div>
<div class="pricing-panel">

<div class="pricing-head">
<div class="pricing-name">Advanced</div>
<div class="currency">$49<span class="per"> / month</span></div>
</div>

<div class="pricing-body">
<ul class="pricing-list list-unstyled">
<li>crm auto cync</li>
<li>click to call back</li>
<li>track energy costs </li>
<li>predictive dialing </li>
</ul><a class="btn btn--primary" href="javascript:void(0)"><span>Download</span></a>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-12 col-lg-6">
<div class="accordion accordion-1" id="accordion01">
<div class="card style-1">
<div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-1">What should be included in a book ?</a></div>
<div class="collapse show" id="collapse01-1" data-parent="#accordion01">
<div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information.</div>
</div>
</div>

<div class="card style-2">
<div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-2">I'm looking for the Best Novels List ?</a></div>
<div class="collapse" id="collapse01-2" data-parent="#accordion01">
<div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information.</div>
</div>
</div>

<div class="card style-4">
<div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-3">What are the five parts of a book?</a></div>
<div class="collapse" id="collapse01-3" data-parent="#accordion01">
<div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information.</div>
</div>
</div>

<div class="card style-3">
<div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-4">What’s the next book in this series?</a></div>
<div class="collapse" id="collapse01-4" data-parent="#accordion01">
<div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information.	</div>
</div>
</div>

</div>

</div>
</div>

</div>

</section>


<section class="cta pt-0 pb-0" id="action">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="action-container">
{{-- <div class="bg-section"><img src="assets/images/background/bg-cta.png" alt="background cta" /></div> --}}
<div class="row align-items-center h-100">
<div class="col-12 col-md-4 col-lg-4">
<div class="cta-cover"><img class="img-fluid" src="assets/images/cover/book-cover-2.png" alt="book cover" /></div>
</div>
<div class="col-12 col-md-8 col-lg-8">
<h3>Want To Read This book ? <Br> Get A Free Preview.</h3>
<div class="form-action">
<form class="mb-0 form-action mailchimp">
<div class="input-group">
<input class="form-control" type="email" placeholder="Enter E-mail Address" required="required" />
<button class="btn btn--secondary"><span>download</span></button>
</div>

</form>
<div class="subscribe-alert"></div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>

</section>


<footer class="footer" id="footer">
<div class="footer-top">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 col-lg-3">
<div class="footer-logo"><a class="logo" href="index.html"><img class="logo logo-light" src="assets/images/logo/logo-footer.png" alt="Ebookyo Logo" /></a></div>
</div>
<div class="col-12 col-md-12 col-lg-7">
<ul class="list-unstyled footer-navigation">
<li><a href="javascript:void(0)">Home</a></li>
<li><a href="javascript:void(0)">Features</a></li>
<li><a href="javascript:void(0)">Video </a></li>
<li><a href="javascript:void(0)">Services</a></li>
<li><a href="javascript:void(0)">Testimonials</a></li>
</ul>
</div>
<div class="col-12 col-md-12 col-lg-2">
<div class="footer-social">
<ul class="list-unstyled">
<li> <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
<li> <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
<li> <a href="javascript:void(0)"><i class="fab fa-dribbble"></i></a></li>
<li> <a href="javascript:void(0)"><i class="fab fa-behance"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<hr />
</div>
<div class="container">
<div class="row">
<div class="col-12 col-md-12 col-lg-12 text--center">
<div class="footer-copyright"><span>2020 &copy; <a href="https://themeforest.net/user/zytheme/portfolio?ref=zytheme">zytheme</a>. All rights reserved.</span></div>
</div>
</div>
</div>
</div>

</footer>
</div>

<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>
