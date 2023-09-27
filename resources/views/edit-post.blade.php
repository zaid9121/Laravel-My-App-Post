<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="border:2px solid black; background-color:rgb(136, 205, 228);">
    <h1>Edit Post</h1>
    <form action="/edit-post/{{$post->id}}" method="POST">
    @csrf
    @method('PUT') 
    <input type="text" name ="title" value="{{$post->title}}"><br>
    <textarea name="body"  cols="" rows="">{{$post->body}}</textarea><br><br>
    <button>Save Changes</button>
    </form>
    </div>
</body>
</html>