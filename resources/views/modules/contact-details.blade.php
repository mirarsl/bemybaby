<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="contact-page__left">
                    <h2 class="h3 contact-page__title">İletişime Geç!</h2>
                    <form class="contact-page__form" id="contactForm" action="{{route('store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="type" value="İletişim Formu">
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="contact-page__input-box form-group">
                                    <input type="text" name="json[fullname]" placeholder="İsim Soyisim" required>
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input-box form-group">
                                    <input type="email" name="json[email]" placeholder="E-Posta" required>
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input-box form-group">
                                    <input type="text" name="json[phone]" placeholder="Telefon" required>
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="contact-page__input-box form-group">
                                    <textarea id="message" name="json[message]" placeholder="{{__('contact.form.message')}}" required=""></textarea>
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-page__input-box text-message-box form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="json[kvkk]" value="1" id="kvkk" required>
                                        <label class="form-check-label" for="kvkk">
                                            <span>
                                                {!! __('contact.form.kvkk') !!}
                                            </span>
                                        </label>
                                    </div>
                                    <div class="error"></div>
                                </div>
                                <div class="contact-page__btn-box">
                                    <button type="submit" class="thm-btn">
                                        Gönder 
                                        <span class="icon-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="contact-page__right">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <span class="h6 section-title__tagline">İletişime Geç
                        </span>
                        <h2 class="section-title__title title-animation">Bizi Arayın</h2>
                    </div>
                    <p class="contact-page__text">Bizimle çekinmeden iletişime geçebilir, merak ettiğiniz tüm konularda bilgi alabilirsiniz.</p>
                    <ul class="contact-page__contact-list list-unstyled">
                        <li>
                            <div>
                                <div class="icon">
                                    <span class="icon-call"></span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Telefon</h3>
                                @if ($module->data()->first()->getTranslatedAttribute('phone1'))
                                <p><a href="tel:{{$module->data()->first()->getTranslatedAttribute('phone1')}}">{{$module->data()->first()->getTranslatedAttribute('phone1')}}</a></p>
                                @endif
                                @if ($module->data()->first()->getTranslatedAttribute('phone2'))
                                <p><a href="tel:{{$module->data()->first()->getTranslatedAttribute('phone2')}}">{{$module->data()->first()->getTranslatedAttribute('phone2')}}</a></p>
                                @endif
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="icon">
                                    <span class="icon-envolope"></span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>E-Posta</h3>
                                @if ($module->data()->first()->getTranslatedAttribute('email1'))
                                <p><a href="mailto:{{$module->data()->first()->getTranslatedAttribute('email1')}}">{{$module->data()->first()->getTranslatedAttribute('email1')}}</a></p>
                                @endif
                                @if ($module->data()->first()->getTranslatedAttribute('email2'))
                                <p><a href="mailto:{{$module->data()->first()->getTranslatedAttribute('email2')}}">{{$module->data()->first()->getTranslatedAttribute('email2')}}</a></p>
                                @endif
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Adres</h3>
                                @if ($module->data()->first()->getTranslatedAttribute('address1'))
                                @if($module->data()->first()->getTranslatedAttribute('address2'))
                                <p><strong>{{$module->data()->first()->getTranslatedAttribute('contact1')}}</strong>: {{$module->data()->first()->getTranslatedAttribute('address1')}}</p>
                                @else
                                <p>{{$module->data()->first()->getTranslatedAttribute('address1')}}</p>
                                @endif
                                @endif
                                @if ($module->data()->first()->getTranslatedAttribute('address2'))
                                @if($module->data()->first()->getTranslatedAttribute('address1'))
                                <p><strong>{{$module->data()->first()->getTranslatedAttribute('contact2')}}</strong>: {{$module->data()->first()->getTranslatedAttribute('address2')}}</p>
                                @else
                                <p>{{$module->data()->first()->getTranslatedAttribute('address2')}}</p>
                                @endif
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@if ($module->data()->first()->getTranslatedAttribute('iframe_url'))
<section class="contact-page__map">
    <iframe src="{{$module->data()->first()->getTranslatedAttribute('iframe_url')}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endif
@push('styles')
<link rel="stylesheet" href="assets/css/module-css/contact.css" />
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
{!! RecaptchaV3::initJs() !!}
<script>
    $(document).ready(function() {
        $.validator.addMethod("regex", function(value, element, regexp) {
            if (regexp.constructor !== RegExp) {
                regexp = new RegExp(regexp);
            }
            return this.optional(element) || regexp.test(value);
        });
        $("#contactForm").validate({
            rules: {
                "json[fullname]": {
                    required: true,
                    minlength: 3,
                    regex: /^[a-zA-Z]+\s+[a-zA-Z]+$/
                },
                "json[email]": {
                    required: true,
                    email: true
                },
                "json[phone]": {
                    required: true,
                    minlength: 10,
                    regex: /^[0-9]+$/
                },
                "json[message]": {
                    required: true,
                    minlength: 10
                },
                "json[kvkk]": {
                    required: true
                }
            },
            messages: {
                "json[fullname]": {
                    required: "{{__('contact.form.fullname.required')}}",
                    minlength: "{{__('contact.form.fullname.minlength')}}",
                    regex: "{{__('contact.form.fullname.regex')}}"
                },
                "json[email]": {
                    required: "{{__('contact.form.email.required')}}",
                    email: "{{__('contact.form.email.email')}}"
                },
                "json[phone]": {
                    required: "{{__('contact.form.phone.required')}}",
                    minlength: "{{__('contact.form.phone.minlength')}}",
                    regex: "{{__('contact.form.phone.regex')}}"
                },
                "json[message]": {
                    required: "{{__('contact.form.message.required')}}",
                    minlength: "{{__('contact.form.message.minlength')}}"
                },
                "json[kvkk]": {
                    required: "{{__('contact.form.kvkk.required')}}"
                }
            },
            errorElement: "span",
            errorClass: "error-message",
            errorPlacement: function(error, element) {
                console.log(element.closest('.form-group').find('div.error'));
                element.closest('.form-group').find('div.error').html(error);
            },
            submitHandler: function(form) {
                grecaptcha.ready(function() {
                    grecaptcha.execute('{{config('recaptchav3.sitekey')}}', {action: 'form'}).then(function(token) {
                        document.getElementById('g-recaptcha-response').value = token;
                        form.submit();
                    });
                });
            }
        });
    });
</script>
@if (session()->has('dialog'))
<script>
    $(window).scrollTop($('#contactForm').offset().top);
</script>
@endif
@endpush
@push('styles')
<style>
    .grecaptcha-badge { visibility: hidden !important; }
    .error{
        color: var(--bemybaby-base);
        font-size: 10px;
        margin: 0;
    }
</style>
@endpush