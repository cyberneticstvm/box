<form action="{{ route('quote.submit') }}" method="POST" class="contact-form" id="quoteForm1">
    <h5>Request a Quote</h5>
    @csrf
    <input type="hidden" name="first" value="first" />
    @session('success')
    <div class="contact-form-success alert alert-success mt-4">
        {{ session('success') }}
    </div>
    @endsession
    @session('error')
    <div class="contact-form-error alert alert-danger mt-4">
        {{ session('error') }}
    </div>
    @endsession
    <div class="row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control bg-gray" name="firstname" id="firstname" value="{{ old('firstname') }}" placeholder="First Name">
            <i class="fal fa-user"></i>
            @error('firstname')
            <small class="text-danger">{{ $errors->first('firstname') }}</small>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control bg-gray" name="lastname" id="lastname" value="{{ old('lastname') }}" placeholder="Last Name">
            <i class="fal fa-user"></i>
            @error('lastname')
            <small class="text-danger">{{ $errors->first('lastname') }}</small>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <input type="tel" class="form-control bg-gray" name="number" id="number" value="{{ old('number') }}" placeholder="Phone Number">
            <i class="fal fa-phone"></i>
            @error('number')
            <small class="text-danger">{{ $errors->first('number') }}</small>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <input type="email" class="form-control bg-gray" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
            <i class="fal fa-envelope"></i>
            @error('email')
            <small class="text-danger">{{ $errors->first('email') }}</small>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <select class="form-control bg-gray" name="service" id="service">
                <option value="">Select Service</option>
                <option value="pack-and-move">Packers & Movers</option>
                <option value="household-storage">Household Storage</option>
                <option value="box-storage">Box Storage</option>
                <option value="office-storage">Office Storage</option>
                <option value="other">Other</option>
            </select>
            <i class="fal fa-arrow-down"></i>
            @error('service')
            <small class="text-danger">{{ $errors->first('service') }}</small>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <select class="form-control bg-gray" name="location" id="location">
                <option value="">Select Location</option>
                <option value="Dubai">Dubai</option>
                <!--<option value="Sharjah">Sharjah</option>
                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                        <option value="Ajman">Ajman</option>
                                        <option value="Fujairah">Fujairah</option>
                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                        <option value="Umm Al Quwain">Umm Al Quwain</option>-->
            </select>
            <i class="fal fa-arrow-down"></i>
            @error('service')
            <small class="text-danger">{{ $errors->first('service') }}</small>
            @enderror
        </div>

        <div class="form-group col-12">
            <textarea name="message" id="message" cols="30" rows="3" class="form-control bg-gray" placeholder="Your Message">{{ old('message') }}</textarea>
            <i class="fal fa-comment"></i>
            @error('message')
            <small class="text-danger">{{ $errors->first('message') }}</small>
            @enderror
        </div>
        <div class="form-btn text-center col-12">
            <button type="submit" class="th-btn btn-submit">Send<i class="fa-regular fa-arrow-right ms-2"></i></button>
        </div>
    </div>
    <p class="form-messages mb-0 mt-3"></p>
</form>