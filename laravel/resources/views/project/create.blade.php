<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Projects</title>

</head>
<body>
    <div class="container">
        <div id="root">
            <ol>
                @foreach($projects as $project)
                    <li>{{ $project->title }}</li>
                @endforeach
            </ol>
            <form method="post" action="{{ route('projects.store') }}" @submit.prevent="onSubmit" @keydown="form.errors.remove($event.target.name)">
                <div class="field">
                    <label class="label">Title</label>
                    <div class="control">
                        <input class="input" type="text" name="title" v-model="form.title">
                        <span class="help is-danger" v-if="form.errors.has('title')" v-text="form.errors.get('title')"></span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Description</label>
                    <div class="control">
                        <input class="input" type="text" name="description" v-model="form.description">
                        <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
                    </div>
                </div>
                @csrf
                <button class="button" :disabled="form.errors.any()">Submit</button>
            </form>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
