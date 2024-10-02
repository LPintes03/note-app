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



                    <div class="card">s
                        <div class="card-header">
                            <h4>Add Notes
                                <a href="{{ url ('/create') }}" class="btn btn-dark float-end">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <!-- Form -->
                            <form action="{{ url('create') }}" method="POST">
                                @csrf
                                <!-- Title -->
                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{ old('title') }}" />

                                </div>
                                <!-- Content -->
                                <div class="mb-3">
                                    <label>Note Here</label>
                                    <textarea name="content" class="form-control" rows="3">{{ old('content') }}</textarea>

                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-dark">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </x-app-web-layout>
</body>

</html>