<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>
    <div id="app">
        <!-- override with the default template in Example.vue-->
        <menu-list :items="['one','two','three']">
            <template scope="data">
                <!--h2 v-text="data.item"></h2-->
                <div>
                    <em v-text="data.item"></em>
                </div>
            </template>

        </menu-list>


    </div>
    <script src="/js/app.js"></script>
</body>

</html>