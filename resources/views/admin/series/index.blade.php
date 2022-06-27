@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <h2 class="display-4 mb-3">Series List</h2>

        <form action="#" method="post"> {{-- {{route('admin.series.store')}} --}}
            @csrf
            <div class="input-group mb-3">


                <input type="text" name="name" id="name" class="form-control me-3 rounded-pill" placeholder="Category Name" aria-label="Recipient's username"
                    aria-describedby="button-addon2">

                <button class="btn btn-primary text-white rounded-pill px-4" type="submit" id="button-addon2">Add</button>

            </div>
        </form>

        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($series as $serie)
                    <tr>
                        <td>{{ $serie->id }}</td>
                        <td>{{ $serie->name }}</td>
                        <td>
                            <form action="#" method="post"> {{-- {{route('admin.series.destroy', $serie->id)}} --}}
                            
                            @csrf

                            @method('DELETE')

                            <button class="btn btn-danger btn-sm text-white" type="submit">Delete</button>
                            
                            </form>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td scope="row">No Serie to show</td>
                    </tr>
                @endforelse



            </tbody>
        </table>


    </div>
@endsection