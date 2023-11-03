<form action={{ url("/test/{$test->id}") }} method="POST">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{ $test->name }}"/>
    </div>

    <div>
        <label>Description</label>
        <textarea name="description">{{ $test->description }}</textarea>
    </div>

    <button type="submit">Submit</button>
</form>
