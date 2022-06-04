<div class="max-h-full pb-24 my-auto bg-white dark:bg-gray-800">
    <div class="text-center p-10">
        <h1 class="font-bold text-5xl dark:text-white">Phonology</h1>
    </div>
    <div class="col-md-7">
        <form method="POST" action="/search">
            @csrf
            <div class="row row-search">
                <button class="btn"><i class="fa fa-search btn-search"></i></button>
                <input type="text" name="search" class="search-box" placeholder="Type your favorite smartphone">
            </div>
        </form>
    </div>

    <div class="grid grid-cols-3 gap-8 mx-10 mt-10 pb-10">
    @foreach($unique as $data)
        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->phoneName }}</h5>
            </div>
        </div>
    @endforeach
    </div>
</div>