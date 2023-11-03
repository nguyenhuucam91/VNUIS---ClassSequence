<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test index page</title>
</head>
<body>

<a href="{{ url('test/create') }}">Create new</a>
<a href="{{ url('test/fake-create') }}">Create fake new</a>
    <ul>
        @foreach ($testsWithDifferentAlias as $test)
            <li>
                <span>{{ $test->name }}</span>
                <a href="{{ url("/test/{$test->id}/edit") }}">Edit</a>
                <a href="{{ url("/test/{$test->id}/delete") }}">Delete</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
