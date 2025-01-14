<form id="contactForm" class="form-box form-ajax form-ajax-wp label-visible" method="POST">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <hr class="space xs" />
                <p>Imię i nazwisko</p>
                <input id="name" type="text" name="name" placeholder="Imię i nazwisko *" class="form-control form-value" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <hr class="space xs" />
                <p>Email *</p>
                <input id="email" type="email" name="email" placeholder="Email *" class="form-control form-value" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <hr class="space xs" />
                <p>Numer telefonu *</p>
                <input id="phone" type="text" name="phone" placeholder="Numer telefonu *" class="form-control form-value" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <p>Wiadomość *</p>
                <textarea id="message" name="message" rows="5" placeholder="Wiadomość *" class="form-control" required></textarea>
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
    <hr class="space s" /><button class="btn btn-outline-primary mb-3" type="submit">Wyślij wiadomość</button>
    <div id="alert" class="alert"></div>
</form>



@push('scripts.body.bottom')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', e => {
            e.preventDefault();
            submitForm(e.target);
        })
    </script>
@endpush
