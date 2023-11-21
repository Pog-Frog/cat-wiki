@extends('layouts.app')
@section('title', 'Students')

<script src="{{asset('js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">

@section('content')
    <main class='page'>
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="content" style="margin-top: 2rem;">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <a href="{{ Route('add_breed') }}" class="btn btn-success"><small><i class="fas fa-plus"></i>Add new cat breed</small></a>
                                    </div>
                                    <form method="POST" action="{{ Route('delete_breeds') }}">
                                        @csrf
                                        <table id='cats-table'>
                                            <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Image URL</th>
                                                <th scope="col">Wiki URL</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($cats as $cat)
                                                <tr>
                                                    <td><input type="checkbox" name="cats_remove[]"
                                                               value="{{ $cat->id }}"></td>
                                                    <td>{{ $cat->id }}</td>
                                                    <td>{{ $cat->name }}</td>
                                                    <td>
                                                        <a href="{{ $cat->imageUrl }}" target="_blank">
                                                            View
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ $cat->wikipedia_url }}" target="_blank">
                                                            Open
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <button class="btn btn-danger mt-2" type="submit"><small>Delete selected cats
                                                breeds</small></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

<script>
    $(document).ready(function () {
        $('#cats-table').DataTable();
    });
</script>
