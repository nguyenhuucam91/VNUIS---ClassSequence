<form action={{ url('/test/fake-store') }} method="POST">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name" />
    </div>

    <div>
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>

    <button type="submit">Submit</button>
</form>
