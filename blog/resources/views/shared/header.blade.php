<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lara-Blog</title>
</head>
<body>
        <header>
            <div class="navbar">
                <h2 class="navbar-brand"> Blog</h2>

                <ul class="navbar-list">
                    <li><a href="{{route ('home')}}">Home</a></li>
                    <li><a href="{{route ('posts.index')}}">Archive</a></li>
                    <li><a href="{{route ('users.index')}}">Users</a></li>
                    <li><a href="{{route ('feedbacks.index')}}">Feedback</a></li>
                    <li><a href="{{route ('posts.create')}}">Create new post</a></li>
                </ul>
            </div>
        </header>