    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Customer" value="{{ old('name') ?? $customer->name }}">
    </div>
    <div class="pb-1 mt-n3"> {{ $errors->first('name') }} </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') ?? $customer->email }}">
    </div>
    <div class="pb-1 mt-n3"> {{ $errors->first('email') }} </div>

    <div class="form-group">
        <label for="active">Status</label>
        <select name="active" id="active" class="form-control">
            <option value="" disabled>Select customer status</option>

            @foreach ($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
                <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : ''}} > {{ $activeOptionValue }} </option>
            @endforeach

        </select>
    </div>
    
    <div class="form-group">
        <label for="company_id">Company</label>
        <select name="company_id" id="company_id" class="form-control">
            @foreach ($companies as $company)
                <option value="{{ $company->id }}" {{ $customer->company_id == $company->id ? 'selected' : ''}} > {{ $company->name }}</option>
            @endforeach
        </select>
    </div>

    @csrf
