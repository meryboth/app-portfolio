@extends("layouts.template")

@section("content")

<div class="container mb-5 mt-5">
    <div class="row jusfity-content-center">
        <div class="m-3 form__img col-lg-6 col-md-6 col-ms-12 col-xs-12 m-auto"><img src="{!! asset('images/clip-1709.png')!!}" alt=""></div>
        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 m-auto">
            <div class="well well-sm">
                <form class="form-horizontal m-auto" method="post">
                    <fieldset>
                        <legend class="text-center col-md-10 m-3">Escribinos!</legend>

                        <div class="form-group">
                            <div class="col-md-10 m-3">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 m-3">
                                <input id="lname" name="name" type="text" placeholder="Apellido" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 m-3">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 m-3">
                                <textarea class="form-control" id="message" name="message" placeholder="Hola! Dejanos tu consulta..." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group m-2">
                            <div class="col-md-10 text-center">
                                <button type="submit" class="btn btn-danger btn-lg m-3">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection