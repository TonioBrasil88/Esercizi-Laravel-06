<x-layout title="Homepage">

<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <h1>My Movies</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row my-5">

       @foreach ($movies as $movie)
        <x-moviecard
            :movie="$movie"
        />
        @endforeach
   


    </div>
</div>

</x-layout>

    
