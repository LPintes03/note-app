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



                    <div class="card">
                        <div class="card-header">
                            <h4>My Notes
                                <a href="{{ route ('createNote') }}" class="btn btn-dark float-end">New Note</a>
                            </h4>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped table-hover">
                                <thead>

                                </thead>
                                <tbody class="table-group-divider"> 
                                    @foreach ($notes as $note)
                                    <tr>
                                        <td>{{ $note->title }} <br> {{ $note->description }}</td>
                                        <td>
                                            <a href="{{ route('editNote', ['id' => $note->id]) }}" class="btn btn-success mx-2">Edit</a>
                                            <a href="{{ route('deleteNote', ['id' => $note->id]) }}" class="btn btn-danger mx-1" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                            
                                    </tr>
                                        @endforeach
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>

            </x-app-web-layout>


</body>

</html>