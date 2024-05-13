<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create Page</title>
    <style>
        body {
            padding: 100px;
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <form action="{{route('posts.store')}}" method="POST" class="form border p-4">
                @csrf
                <h3>create post</h3>
                <a href="{{route('posts.index')}}">
                    <button type="button" class="btn btn-sm btn-info float-end my-4"><-- Back</button></a>
                <div>
                    <label for="title">Title</label>
                    <input class="form-control" type="text" id="title" name="title" value="" placeholder="Enter Title here">
                </div>
                <div><label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter Content here"></textarea>
                </div>
                <div>
                    <label for="desc">Description</label>
                    <input class="form-control" type="text" id="desc" name="desc" value="" placeholder="Enter description here">
                </div>
                <button class="btn btn-sm btn-primary my-4">Create</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>