<section class="mt-5 mb-5 pb-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Kontak Kami</span>
            <h2>Beritahu Kami Rumah Impian Anda</h2>
            </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
            <div class="col-md-6 align-items-stretch d-flex">
                <img src="{{ asset('assets/images/contact.png')}}" class="img-fluid">
            </div>
            <div class="col-md-6 align-items-stretch">
                <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data" class="bg-light p-5 contact-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control @error('sender_name') is-invalid @enderror"
                        name="sender_name" value="{{old('sender_name')}}" placeholder="Nama Anda" required>
                        @error('sender_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{old('email')}}" placeholder="Email Anda (con. yyyy@gmail.com)" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" placeholder="+62" readonly>
                        </div>
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" value="{{old('phone')}}" placeholder="No. HP (WhatsApp) (con. 812345678)" required>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control @error('subject') is-invalid @enderror"
                        name="subject" value="{{old('subject')}}" placeholder="Subjek" required>
                        @error('subject')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="6" class="form-control @error('message') is-invalid @enderror"
                        value="{{old('message')}}" placeholder="Isi Pesan" required></textarea>
                        @error('message')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button id="submitSuccess" type="submit" class="btn btn-primary py-3 px-5"> Kirim Pesan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@if (Session::has('status'))
    @push('script')
        <script>
            Swal.fire({
            icon: 'success',
            title: "{{ Session::get('status') }}",
            showConfirmButton: false,
            timer: 1500
            })
        </script>
    @endpush
@endif
