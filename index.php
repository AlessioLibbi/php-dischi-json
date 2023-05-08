<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disco Party</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- link Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- link Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="header-mine ">
            <i class="fa-brands fa-spotify fa-2xl mx-5 p-5" style="color: #60d768;"></i>
        </div>
        <div class="container-fluid p-4 position-relative">
            <div class="container  ">
                <div class="row row-cols-3">
                    <div v-for="(disk,index) in dati" key="index" class="col d-flex justify-content-center">
                        <div @click="showMe(index)" class="card text-center mt-3 " style="width: 15rem; height:370px; background-color: #112030; color: white; padding: 30px; cursor: pointer;">
                            <img :src=disk.poster class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{disk.title}}</h5>
                                <p class="card-text"> {{disk.author}}</p>
                                <p class="card-text">{{disk.year}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-show="show == true" class=" mine-container-fluid position-absolute top-50 start-50 translate-middle">

                <i @click="show = false" class="fa-regular fa-circle-xmark fa-shake" style="color: #06e014; cursor:pointer;"></i>
                <div class="card my-card text-center mt-3 d-flex " style="width: 15rem; height:370px; background-color: #112030; color: white; padding: 30px; cursor: pointer;">
                    <img :src=diskToShow.poster class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{diskToShow.title}}</h5>
                        <p class="card-text">{{diskToShow.author}}</p>
                        <p class="card-text">{{diskToShow.year}}</p>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>