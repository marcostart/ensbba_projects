@extends('layouts.page')

@section('style')
    <!-- <style>
        .search-input .input-group-text{
            background-color: white;
            border: none;
        }

        .search-input .form-control{
            background-color: white;
            border: none
        }

        .search-input .form-control:focus{
            background-color: white;
            border: none;
            box-shadow: none
        }

        .search-input{
            box-shadow: 0px 0px 7px 2px #cbcbcb
        }

    </style> -->
    <style media="screen">
        .transparent{
            border-top: solid 2px rgba(0, 0, 0, 0.1);
            border-bottom: solid 2px rgba(0, 0, 0, 0.1);
            background-color: rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 5%;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
          /* height: 30px;
          width: 30px; */
          outline: black;
          /* background-size: 100%, 100%; */

          background-image: none;

        }
        .carousel-control-next-icon:after
        {
          content: '>';
          font-size: 35px;
          color: blue;
          border-radius: 50%;
          border: 1px solid blue;
          padding: 5px;
        }

        .carousel-control-prev-icon:after {
          content: '<';
          font-size: 35px;
          color: blue;
          border-radius: 50%;
          border: 1px solid blue;
          padding: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="transparent">
        <h4 style="font-weight: bold;text-align: center;margin:1px;">Recherche à l'ENSBBA</h4>
    </div>
    <div class="container" id = "carEv" style="margin-bottom: 5%;">
        <div id="recipe2" class="carousel slide row" data-bs-ride="carousel">
            <ul class="carousel-indicators">
              <li data-bs-target="#recipe2" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#recipe2" data-bs-slide-to="1"></li>
              <li data-bs-target="#recipe2" data-bs-slide-to="2"></li>
            </ul>
            <div class="col-1">
                <a class="carousel-control-prev bg-transparent" href="#recipe2" role="button" data-bs-slide="prev" style="color: black !important;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
            </div>
            <div class="col-10">
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item justify-content-center active">

                            <img src="/images/deuxieme_js_ensbba.jpg" class="" style="">

                    </div>

                    <div class="carousel-item justify-content-center">

                            <img src="/images/deuxieme_js_ensbba.jpg" class="" style="">

                    </div>

                    <div class="carousel-item justify-content-center">

                            <img src="/images/deuxieme_js_ensbba.jpg" class="" style="">

                    </div>

                </div>
            </div>
            <div class="col-1">
                <a class="carousel-control-next bg-transparent" href="#recipe2" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 20%;">
        <div class="row">
            <div style="color: #3b7ddd;">
                <span class="text-uppercase h4 fw-bold">LES ENSEIGNANTS-CHERCHEURS DE L'ENSBBA</span>
                <span class=""><hr></span>
            </div>
            <div class="mb-4 mx-4">
                <div class="row teachers">


                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body" style="">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/badoussi.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold"> Marius Eric BADOUSSI  </span></a>
                                            </div>
                                            <div class="my-2">
                                                Maître-Assistant
                                            </div>
                                            <div class="my-2 text-center">
                                                Technologie Alimentaire/Microbiologie Alimentaire
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body" style="">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/cachon.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold">Fresnel Boris CACHON </span></a>
                                            </div>
                                            <div class="my-2">
                                                Maître-Assistant
                                            </div>
                                            <div class="my-2 text-center">
                                                Biochimie- Toxicologie
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body" style="">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/chabi-sika.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold"> Kamirou CHABI SIKA BAKARI  </span></a>
                                            </div>
                                            <div class="my-2 text-center">
                                                Maître-Assistant
                                            </div>
                                            <div class="my-2 text-center">
                                                Biochimie, Biologie Moléculaire
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body" style="">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/dassou.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold"> Anicet Gbèblonoudo DASSOU </span></a>
                                            </div>
                                            <div class="my-2">
                                                Maître-Assistant
                                            </div>
                                            <div class="my-2 text-center">
                                                Entomologie agricole / Protection des végétaux
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body" style="height: 300px !important;">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/ewedje.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold"> Eben-Ezer B.K. EWEDJE </span></a>
                                            </div>
                                            <div class="my-2">
                                                Maitre de Conférences
                                            </div>
                                            <div class="my-2 text-center">
                                                Botanique, Ecologie végétale, Génétique forestière
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/gbemavo.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold"> Charlemagne D.S.J. GBEMAVO </span></a>
                                            </div>
                                            <div class="my-2">
                                                Maître-Assistant
                                            </div>
                                            <div class="my-2 text-center">
                                                Biométrie, Foresterie
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body" style="">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/koudjina.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold"> Simplice KOUDJINA </span></a>
                                            </div>
                                            <div class="my-2">
                                                Maître-Assistant
                                            </div>
                                            <div class="my-2 text-center">
                                                Chimie Computationnelle et Architecture Moléculaire
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body" style="">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/loko.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold"> Yêyinou Laura Estelle LOKO épouse KONE </span></a>
                                            </div>
                                            <div class="my-2">
                                                Maître de Conférences
                                            </div>
                                            <div class="my-2 text-center">
                                                Ressources phytogénétiques et Protection des cultures
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body" style="height: 320px !important;">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/tchogou.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold"> Atchadé Pascal TCHOGOU  </span></a>
                                            </div>
                                            <div class="my-2">
                                                Maître-Assistant
                                            </div>
                                            <div class="my-2 text-center">
                                                Histologie-Hématologie
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body" style="height: 100% !important;">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/toffa.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold"> D. Mondoukpè Joelle M. B. TOFFA </span></a>
                                            </div>
                                            <div class="my-2">
                                                Maître-Assistant
                                            </div>
                                            <div class="my-2 text-center">
                                                Environnement et Santé-Protection des cultures
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body" style="height: 100% !important;">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/tchakpa.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold"> Cyrille TCHAKPA </span></a>
                                            </div>
                                            <div class="my-2">
                                                Maître-Assistant
                                            </div>
                                            <div class="my-2 text-center">
                                                Géographie et Environnement
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 my-3">
                        <div class="card shadow">
                            <div class="card-body" style="height: 100% !important;">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;">
                                            <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                <div class="w-100 h-100 rounded-circle" style="background-image: url('/images/enseignants/vodounhe.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column align-items-center">
                                            <div class="my-2">
                                                <a href="{{route('teacher')}}/yeyinou-laura-estelle-lOKO-epouse-kone" style="color: black; text-decoration:none;"><span class="fw-bold"> Sènan VODOUHE  </span></a>
                                            </div>
                                            <div class="my-2">
                                                Maître de Conférences
                                            </div>
                                            <div class="my-2 text-center">
                                                Nutrition humaine/Santé
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <script type="text/javascript">
        // let items = document.querySelectorAll('#carEv .carousel .carousel-item')
        // items.forEach((el) => {
        //     const minPerSlide = 1
        //     let next = el.nextElementSibling
        //     for (var i=1; i<minPerSlide; i++) {
        //         if (!next) {
        //             // wrap carousel by using first child
        //             next = items[0]
        //         }
        //         let cloneChild = next.cloneNode(true)
        //         el.appendChild(cloneChild.children[0])
        //         next = next.nextElementSibling
        //     }
        // })

    </script>

    <!-- <script>
        $(".search-input .form-control").on("keyup", function (e) {

            url="{{route('search')}}/"+e.target.value

            $.get(url).then((result) => {
                // console.log(result);
                let teachers = result
                let parent = $('.teachers')
                parent.empty()
                let i = 1
                teachers.forEach(teacher => {
                    let image = i==1 ? `url('{{"/images/directrice.jpg"}}')` : `url('{{"/images/default-user.jpg"}}')`
                    i++
                    let name = "Yêyinou Laura Estelle LOKO épouse KONE"
                    let level = "Enseignante-Chercheure"
                    let tel = "+22997656000 / +22994154445"
                    let slug = "yeyinou-laura-estelle-lOKO-epouse-kone"
                    let url ="{{route('teacher')}}/"+slug

                    parent.append(
                        `
                            <div class="col-md-4 col-sm-12 my-3">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <a href="${url}" style="color: black; text-decoration:none;">
                                                    <div class="bg-white rounded-circle" style="width: 150px; height: 150px;">
                                                        <div class="w-100 h-100 rounded-circle" style="background-image: ${image}; background-size: cover; background-position: center; background-repeat: no-repeat ">

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="">
                                                <div class="d-flex flex-column align-items-center">
                                                    <div class="my-2">
                                                        <a href="${url}" style="color: black; text-decoration:none;"><span class="fw-bold"> ${name} </span></a>
                                                    </div>
                                                    <div class="my-2">
                                                        ${level}
                                                    </div>
                                                    <div class="my-2">
                                                        ${tel}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `
                    )
                });
            }).catch((err) => {
                console.log(err);
            });
        })
    </script> -->
@endsection
