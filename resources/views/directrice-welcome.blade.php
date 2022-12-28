@extends('layouts.page')

@section('style')
    <style>

    .ltl-underline{
        border-top: 3px solid var(--bs-primary);
        width: 50px
    }
    </style>
@endsection

@section('content')
    <div class="container my-4">
        <div class="title d-flex align-items-center flex-column">
            <span class="fs-1 fw-bold text-uppercase">Mot de bienvenue de la directrice</span>
            <div class="ltl-underline"></div>
        </div>
        <div class="content my-4">
            <div class="row">
                <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                    <div class="rounded-circle w-75 p-2" style="">
                        <img src="{{"/images/directrice.jpg"}}" alt="" class="rounded-circle w-100" style="border: 5px solid var(--bs-primary);">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi veritatis dolorum impedit repudiandae exercitationem aut distinctio, dolores quas inventore deleniti tempore omnis reprehenderit tenetur iure magni dolorem, facere quisquam. Reprehenderit? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id sed unde cumque itaque voluptatibus praesentium doloribus quam iste voluptatem eveniet dignissimos debitis libero expedita corrupti error, eligendi, aspernatur dolorem quibusdam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, repellendus alias officia voluptatibus, laboriosam officiis odit corrupti placeat, veritatis fugit culpa adipisci. Nulla repudiandae omnis doloremque rerum incidunt quae iste? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora cupiditate obcaecati aspernatur aliquam amet ab quibusdam accusantium, tenetur est repellat laudantium distinctio eveniet dolores aliquid perspiciatis! Nulla ex odio ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus facere nobis animi quam at! Temporibus illo nisi cumque incidunt expedita natus, libero velit adipisci molestiae asperiores consequuntur sunt soluta repellat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit consequuntur sint sunt unde architecto aut doloremque impedit consequatur aliquid quod expedita vel ea, voluptatem, tempora ullam soluta et libero veniam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, nam similique! Eum nostrum dignissimos impedit ad illo, explicabo beatae eligendi commodi distinctio quibusdam nam in dolorum doloremque, repudiandae aut alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ut optio possimus! Impedit alias rerum, laborum quo, eius reiciendis eos debitis dignissimos, quos laboriosam maxime dicta. Adipisci, fuga eligendi. Eaque! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas officiis omnis tempore, laudantium iusto deserunt amet sunt alias quos quaerat distinctio culpa nihil aliquam, velit eius maxime necessitatibus nam quae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit amet at rem necessitatibus nostrum voluptatum, temporibus quia ex inventore dolores repudiandae dolorem a eveniet asperiores blanditiis, aliquid nobis exercitationem dicta? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos animi, quaerat vel sit autem hic blanditiis reiciendis laudantium dolores debitis fugiat ea eaque, quas non repudiandae, iure iusto? Numquam, tenetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus temporibus natus obcaecati ullam aspernatur unde, error accusantium perspiciatis corporis incidunt totam dolores soluta ea, sapiente eaque rem tempora dolor culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vel nobis iste iure, cupiditate, qui voluptate, necessitatibus commodi soluta itaque amet porro vitae delectus voluptatem sapiente hic quasi accusamus unde. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum aliquam facere rerum asperiores natus consectetur perspiciatis eveniet ad. Iure nam doloremque iusto itaque voluptatem quo, excepturi libero accusamus sed magni?
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
