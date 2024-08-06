@extends('layouts.main')

@section('container')
    <div class="container my-5">
        <h1 class="text-center mb-4">{{ $title }}</h1>

        @if(!empty($achievements))
            <div class="row">
                @foreach($achievements as $achievement)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            @if(!empty($achievement['image']))
                                <img src="{{ asset($achievement['image']) }}" class="card-img-top" alt="{{ $achievement['title'] }}" style="cursor: pointer;" data-toggle="modal" data-target="#imageModal{{ $loop->index }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $achievement['title'] }}</h5>
                                <p class="card-text">{{ $achievement['description'] }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for each image -->
                    <div class="modal fade" id="imageModal{{ $loop->index }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel{{ $loop->index }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imageModalLabel{{ $loop->index }}">{{ $achievement['title'] }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset($achievement['image']) }}" class="img-fluid" alt="{{ $achievement['title'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">Tidak ada prestasi yang ditemukan.</p>
        @endif
    </div>

    <!-- Add jQuery and Bootstrap JS for modal functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNirpP6u7aJXXhniRaxL7BDPGAaweobEPobWUF/2lOO3y8dM4QAXRBLPWuJe8ak" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4Ag04A1EwB5IKJrBtc1L6tx1z1xjbxLnHhL4jw54y4dlJpG4fo+d" crossorigin="anonymous"></script>
@endsection
