<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @auth
        <p>Concrates you are logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Log out</button>
        </form>
        <div style="border:2px solid black; background-color:rgb(136, 205, 228);">
            <h2>Create a New Post</h2>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="post title"><br>
                <textarea name="body" placeholder="body content..." cols="" rows=""></textarea><br><br>
                <button>Save Post</button>
            </form>
        </div>

        <div style="border:2px solid black; background-color:rgba(187, 187, 187, 0.667);">
            <h2>All Posts</h2>
            @foreach($posts as $post)
               <div style="background-color: rgba(128, 128, 128, 0.719); padding: 20px; margin: 7px;">
               <h3>{{$post['title']}} By {{$post->user->name}}</h3> 
               {{$post['body']}}
               <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
               <form action="/delete-post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
               </form>
            </div>
            @endforeach
        </div>
    @else
    <div style="border:2px solid black; background-color:rgb(136, 205, 228);">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name"><br>
            <input name="email" type="text" placeholder="email"><br>
            <input name="password" type="text" placeholder="password"><br><br>
            <button>Register</button>
        </form>
    </div>

    <div style="border:2px solid black; background-color:rgb(136, 205, 228);">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name"><br>
            <input name="loginpassword" type="text" placeholder="password"><br><br>
            <button>Log in</button>
        </form>
    </div>

    @endauth


</body>

</html>