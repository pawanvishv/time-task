<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .label-color {
            color: white;
        }
        /* Center the container both vertically and horizontally */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f0f0f0; /* Optional background color */
        }

        .container {
            
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px; /* Adjust this width as needed */
            width: 100%;
        }

        /* Add any additional CSS styles for your form elements here */

    </style>
    <div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


        <form method="POST" action="{{ route('participant.create') }}">
        @csrf
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label-color" for="firstName">PARTICIPANT PROFILE DETAILS</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-color" for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-color" for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName">
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-color" for="countryCode">Country Code</label>
                        <select class="form-control" id="countryCode" name="countryCode">
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <!-- Add more countries here -->
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-color" for="mobileNo">Mobile No</label>
                        <input type="text" class="form-control" id="mobileNo" name="mobileNo">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-color" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-color">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="label-color" class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="label-color" class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-color" for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-color" for="country">Country</label>
                        <select class="form-control" id="country" name="country">
                            <option value="US">United States</option>
                            <option value="BH">Bharat</option>
                            <!-- Add more countries here -->
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="col-md-3 tshirt-col">
                <div class="form-group">
                        <label class="label-color">T-shirt</label>
                        <select class="form-control" id="tshirtDropdown" name="tshirt">
                            <option value="1">Yes</option>
                            <option value="0" selected>No</option>
                        </select>
                    </div>
                </div>


                <div class="col-md-3" id="tshirtSizeContainer" style="display: none;">
                    <div class="form-group">
                        <label class="label-color" for="participants">Participants</label>
                        <select class="form-control" id="tshirt_size" name="tshirt_size">
                            <option value="">-- Please Select --</option>
                            <option value="XS">X-Small</option>
                            <option value="S">Small</option>
                            <option value="M">Medium</option>
                            <option value="L">Large</option>
                            <option value="XL">X-LARGE</option>
                            <option value="XXL">XXL</option>
                            <option value="XXXL">XXXL</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-color" for="healthIssues">History of Health Issue</label>
                        <textarea class="form-control" id="healthIssues" name="healthIssues" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-color" for="emergencyContact">Emergency Contact Number</label>
                        <input type="text" class="form-control" id="emergencyContact" name="emergencyContact">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label-color">Donate $5500 for Underprivileged Runner</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="donate" id="donateYes" value="yes">
                            <label class="label-color" class="form-check-label" for="donateYes">Yes</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="donate" id="donateNo" value="no">
                            <label class="label-color" class="form-check-label" for="donateNo">No</label>
                        </div>

                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>