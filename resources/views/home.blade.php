<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note</title>
</head>

<body>

    <<x-app-web-layout>

        <x-slot name="title">
            Note App
        </x-slot>




        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">

                    @if (session('status'))
                    <div class="alert alert-success">{{session('status') }}</div>
                    @endif

                    <div class="">
                        <div class="">
                            <h4>My Notes
                                <a href="{{ route ('createNote') }}" class="btn btn-dark float-end">New Note</a>
                            </h4>
                        </div>

                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ($notes as $note)
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <a href="{{ route('editNote', ['id' => $note->id]) }}" style="color: #493628    ; text-decoration:none"   ><h5 class="card-title">{{ $note->title }} </h5></a>
                                        <p class="card-text">{{ $note->description }}</p>
                                    </div>
                                    <div class="card-footer">
                                    
                                        <a href="{{ route('deleteNote', ['id' => $note->id]) }}" class="btn btn-danger mx-1" onclick="return confirm('Are you sure?')">Delete</a>
                                        <small class="text-body-secondary">{{ \Carbon\Carbon::parse ($note->updated_at)->format('d/m/Y g:i A')    }} </small>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </x-app-web-layout>


</body>

</html>