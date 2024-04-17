@extends('layouts.app')

@section('content')
    <h1>All Books</h1>

    @if (count($books) > 0)
        <table class="table-auto w-full">  <thead>
                <tr>
                    <th class="px-6 py-3 border border-gray-200">Title</th>
                    <th class="px-6 py-3 border border-gray-200">Author</th>
                    <th class="px-6 py-3 border border-gray-200">Published Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td class="px-6 py-4 border border-gray-200">{{ $book->title }}</td>
                        <td class="px-6 py-4 border border-gray-200">{{ $book->author }}</td>
                        <td class="px-6 py-4 border border-gray-200">
                            @if ($book->date_published)
                                {{ $book->date_published->format('Y-m-d') }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No books found.</p>
    @endif
@endsection