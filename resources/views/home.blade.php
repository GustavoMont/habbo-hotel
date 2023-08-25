<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Habbo - Hotel real</title>
</head>

<body class="bg-white min-h-screen">
    <main class="min-h-full">
        <div
            class="px-4 md:px-20 py-10 h-screen flex flex-col gap-10 justify-center transform -translate-y-40 bg-rose-700 rounded-b-[100px] lg:rounded-b-[250px]">

            <h1 class="title main-title text-5xl text-amber-300">Habbo, O hotel real!</h1>

            <div class="flex gap-5 overflow-x-scroll p-5 w-full">
                @foreach ($rooms as $room)
                    <div class="max-w-sm p-6 shrink-0 bg-white border border-gray-200 rounded-lg shadow">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                {{ $room['title'] }}
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 ">
                            {{ $room['description'] }}
                        </p>
                        <button disabled href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            ${{ $room['price'] }}
                        </button>
                    </div>
                @endforeach
            </div>
            <p class="text-white text-3xl font-sans text-center">
                Habbo Hotel: Onde Sonhos Se Tornam Estadias Inesquecíveis!
            </p>
            <p class="text-white text-[8px] text-right">
                (by ChatGpt)
            </p>
        </div>
    </main>
    <section class="bg-white -mt-40 px-4 py-10 md:px-20">
        <h2 class="main-title title text-3xl text-rose-600">Avaliações</h2>
        <div class="flex gap-5 overflow-x-scroll p-5 w-full">
            @foreach ($reviews as $review)
                <div class="max-w-md shrink-0 py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                    <div class="flex justify-center md:justify-end -mt-16">
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500"
                            src={{ $review['avatar'] }}>
                    </div>
                    <div>
                        <h2 class="text-gray-800 text-3xl font-semibold">{{ $review['client'] }}</h2>
                        <p class="mt-2 text-gray-600">
                            {{ $review['testemony'] }}
                        </p>
                    </div>
                    <div class="flex items-center gap-0.5">
                        {{ $review['stars'] }}
                        <svg class="w-5 h-5 fill-current text-yellow-400" viewBox="0 0 24 24">
                            <path
                                d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                        </svg>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</body>

</html>
