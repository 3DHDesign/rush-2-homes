<div class="col-lg-6">
    <form action="#">
        <div class="card">
            <div class="card-header">
                <h3>{{ __('contact.get_in_touch') }}</h3>
                <p style="margin-top: 20px;">{{ __('contact.tell_us_about_your_property') }}</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="form-group">
                            <label>{{ __('contact.your_name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ __('contact.your_name') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>{{ __('contact.phone_number') }}</label>
                            <input type="text" class="form-control" placeholder="{{ __('contact.enter_number') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>{{ __('contact.email_address') }}</label>
                            <input type="email" class="form-control" placeholder="{{ __('contact.enter_email') }}">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>{{ __('contact.subject') }}</label>
                            <input type="text" class="form-control" placeholder="{{ __('contact.enter_subject') }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>{{ __('contact.description') }}</label>
                            <textarea class="form-control" rows="14" placeholder="{{ __('contact.description') }}"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-primary">{{ __('contact.submit_enquiry') }}</button>
            </div>
        </div>
    </form>
</div>
