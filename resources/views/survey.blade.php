<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Survey Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-12 col-sm-12 col-12 p-5">
            <div class="card">
                <h5 class="card-header">Web Survey Form</h5>
                <form action="{{ route('sendsurvey') }}" method="POST">
                    <div class="card-body">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Name</label> <span class="text-danger">*</span>
                            <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                type="text" name="name" id="name" value="{{ old('name', '') }}"
                                placeholder="Name" required>
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone Number</label> <span class="text-danger">*</span>
                            <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                type="text" name="phone" id="phone" value="{{ old('phone', '') }}"
                                placeholder="Phone Number" required>
                            @if ($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="company_name">Company Name</label> <span class="text-danger">*</span>
                            <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}"
                                type="text" name="company_name" id="company_name" value="{{ old('company_name', '') }}"
                                placeholder="Company Name" required>
                            @if ($errors->has('company_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('company_name') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="designation">Designation</label> <span class="text-danger">*</span>
                            <input class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}"
                                type="text" name="designation" id="designation" value="{{ old('designation', '') }}"
                                placeholder="Designation" required>
                            @if ($errors->has('designation'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('designation') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer bg-white border-light text-end">
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
