{{--github--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Dish</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 text-gray-800 font-sans min-h-screen flex items-center justify-center px-4">

<div class="bg-white border-2 border-gray-300 rounded-lg shadow-lg p-8 w-full max-w-xl">
    <h1 class="text-3xl font-bold text-amber-900 mb-6 text-center">✏️ Edit Dish</h1>

    <form action="/edit-post/{{$post->id}}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-gray-700 font-medium mb-2" for="title">Dish Name</label>
            <input
                type="text"
                name="title"
                id="title"
                value="{{$post->title}}"
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-amber-400"
            />
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-2" for="body">Description</label>
            <textarea
                name="body"
                id="body"
                rows="5"
                class="w-full px-4 py-2 border border-gray-300 rounded resize-none focus:outline-none focus:ring-2 focus:ring-amber-400"
            >{{$post->body}}</textarea>
        </div>

        <div class="text-center">
            <button
                type="submit"
                class="bg-amber-600 hover:bg-amber-700 text-white py-2 px-6 rounded shadow"
            >
                💾 Save Changes
            </button>
        </div>
    </form>
</div>

</body>
</html>
