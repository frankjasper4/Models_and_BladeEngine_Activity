<table class="table-auto w-full">
    <thead>
        <tr>
            <th class="px-4 py-2 border border-gray-300">Title</th>
            <th class="px-4 py-2 border border-gray-300">Author</th>
            <th class="px-4 py-2 border border-gray-300">ISBN</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
                <td class="px-4 py-2 border border-gray-300">{{ $book->title }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ $book->author }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ $book->isbn }}</td>
            </tr>
        @endforeach
    </tbody>
</table>