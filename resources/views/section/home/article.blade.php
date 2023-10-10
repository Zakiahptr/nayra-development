<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Artikel</span>
          <h2>Artikel Terbaru</h2>
        </div>
      </div>
      <div class="row d-flex">
        @foreach ($articles as $article)
            @if ($loop->iteration <= 3)
            <div class="col-md-3 d-flex ftco-animate">
                <a href="{{ route('article.detail',  $article->slug) }}">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <img class="block-20 img" src="{{ $article->thumbnail()}}">
                        <h3 class="heading">
                                {{ Str::limit($article->article_title, 50)}}
                        </h3>
                        <div class="meta mb-3">
                                {{ $article->created_at->isoFormat('DD-MM-YYYY') }}
                        </div>
                    </div>
                </div>
                </a>
            </div>
            @endif
        @endforeach
      </div>
    </div>
  </section>
