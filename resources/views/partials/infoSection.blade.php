{{-- Sezione alquanto inutile non si merita i miei commenti, serve solo per la sezione del merchandise --}}
<div class="bg-blue-secondary">

    <div class="container">

        <div class="row">

            @foreach ($data[1] as $info)

            <div class="col-2">

                <div class="img">

                    <img src="{{ asset($info['img']) }}" alt="">

                </div>

                <div class="title">

                    {{ $info['title'] }}

                </div>

            </div>

            @endforeach

        </div>

    </div>

</div>
{{-- /Sezione alquanto inutile non si merita i miei commenti, serve solo per la sezione del merchandise --}}