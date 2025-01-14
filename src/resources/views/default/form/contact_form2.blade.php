<form id="contactForm" class="form-box form-ajax form-ajax-wp label-visible" method="POST">
    <div class="row">
        <div class="col-md-6">
            <hr class="space xs" />
            <p>Imię</p>
            <input id="Imię" name="Imię" type="text" class="form-control form-value" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <hr class="space xs" />
            <p>Nazwisko</p><input id="Nazwisko" name="Nazwisko" type="text"
                                  class="form-control form-value" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="col-md-3">
            <hr class="space xs" />
            <p>Miasto/Wieś</p><input id="Miasto/Wieś" name="Miasto/Wieś" type="text"
                                     class="form-control form-value" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="col-md-3">
            <hr class="space xs" />
            <p>Województwo</p><input id="Województwo" name="Województwo" type="text"
                                     class="form-control form-value" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="col-md-4">
            <hr class="space xs" />
            <p>Addres</p><input id="Addres" name="Addres" type="text"
                                class="form-control form-value" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="col-md-2">
            <hr class="space xs" />
            <p>Kod pocztowy</p><input id="Kod-pocztowy" name="Kod pocztowy" type="text"
                                      class="form-control form-value" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <hr class="space xs" />
            <p>Telefon</p><input id="Telefon" name="Telefon" type="number"
                                 class="form-control form-value">
            <div class="invalid-feedback"></div>
        </div>
        <div class="col-md-6">
            <hr class="space xs" />
            <p>Email</p><input id="Email" name="Email" type="email"
                               class="form-control form-value" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="col-md-12">
            <hr class="space xs" />
            <p>Jakim stanowiskiem jesteś zainteresowany?</p><textarea
                id="Jakim-stanowiskiem-jesteś zainteresowany?"
                name="Jakim stanowiskiem jesteś zainteresowany?" class="form-control form-value"
                required></textarea>
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <div class="col-md-12 hc_text_block_cnt">
        <div id="XjayW" style="display: flex;column-gap: 15px" class='' style=''><input id="rule" type="checkbox" name="rule" placeholder="Rule" class="form-check-input">
            <label for="rule" style="font-weight: 400">{!! getConstField('contact_form_rule') !!}</label>
            <div class="invalid-feedback"></div></div>
    </div>
    <div class="col-md-12 hc_text_block_cnt">
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="{{$siteKey}}"></div>
            <div class="invalid-feedback"></div>
        </div>
    </div>
    <hr class="space s" /><button class="btn btn-sm mb-3" type="submit">Wyślij formularz</button>
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
