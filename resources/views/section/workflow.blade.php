<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Alur Kerja</span>
          <h2 class="mb-2">Bagaimana cara kerjanya?</h2>
        </div>
      </div>
      <div class="row d-flex">
        <div class="carousel-costum-2 owl-carousel ftco-owl">
            @foreach ($workflows as $workflow)
            <div class="d-flex align-self-stretch ftco-animate">
            <div class="media services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                    <img src="{{ $workflow->flowIcon()}}" width="100px">
                </div>
                <div class="media-body py-md-4">
                <h3>{{$loop->iteration}}. {{ $workflow->flow_title }}</h3>
                <p>{{ $workflow->flow_desc }}</p>
                </div>
            </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
</section>
