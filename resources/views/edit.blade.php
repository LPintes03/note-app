<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note</title>
</head>

<body>

    <x-app-web-layout>

        <x-slot name="title">
            Note1
        </x-slot>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">

                    @if (session('status'))
                    <div class="alert alert-success">{{session('status') }}</div>

                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Note
                                <a href="{{ route ('home') }}" class="btn btn-dark float-end">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <!-- Form -->
                            <form action="{{ route('updateNote', ['id' => $note->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <!-- Title -->
                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{ $note->title }}" />

                                </div>
                                <!-- Description -->
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="2">{{ $note->description }}</textarea>

                                </div>
                                <!-- Content -->
                                <div class="mb-3">
                                    <label>Note Here</label>
                                    <textarea name="content" class="form-control" rows="3">{{ $note->content}}</textarea>

                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-dark">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </x-app-web-layout>
</body>

</html>