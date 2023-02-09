<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>music</title>
   
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.2/axios.min.js" integrity="sha512-NCiXRSV460cHD9ClGDrTbTaw0muWUBf/zB/yLzJavRsPNUl9ODkUVmUHsZtKu17XknhsGlmyVoJxLg/ZQQEeGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
    <!-- js -->
    <script defer src="script.js"></script>
</head>
<body>
    <header class="">
        <figure class="container pt-3">
            <img src="img/logo.jpg" alt="logo spotify" class="logo">
        </figure>
    </header>
    <main>
        <div class="container pt-5" id="app">
            <div class="d-flex flex-wrap justify-content-center align-items-center row-cols-4" :kay="i">
                <div v-for="(disc, i) in discs" class="custom-card d-flex justify-content-center align-items-center flex-column m-3 p-3">
                    <img :src="`${disc.poster}`" class="my-3 album-cover">
                    <span class="fw-bold">{{ disc.title }}</span>
                    <span>{{ disc.author }}</span>
                    <span class="fw-bold">{{ disc.year }}</span>
                </div>
            </div>
        </div>
    </main>
</body>
</html>