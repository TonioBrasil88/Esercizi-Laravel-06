<div class="col-12 col-md-3 my-3">
    <div class="card" style="width: 18rem;">
        <img src="{{ Storage::url($movie->img) }}" class="card-img-top" alt="{ $movie->img }">
        <div class="card-body">
            <h5 class="card-title"> {!! Str::limit($movie->title, 25) !!}</h5>
            <p class="card-text">
                {{ Str::limit($movie->description, 60) }}
            </p>
            <p class="d-flex justify-content-between">
            <h6><span class="badge bg-info">{{ $movie->genre }}</span></h6>
            <span><strong>Director: </strong>{{ $movie->director }}</span>
            </p>
            <div class="d-flex justify-content-between">
                <a href="{{ route('movie.show', $movie) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                <a href="{{ route('movie.edit', $movie) }}" class="btn btn-warning"><i
                        class="fa-solid fa-pen text-danger"></i></a>
                <form action="{{ route('movie.delete', $movie) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"><iclass="fa-regular fa-trash-can text-light"></button>
                </form>
            </div>
        </div>
    </div>
</div>
