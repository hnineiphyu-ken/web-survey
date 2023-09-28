<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Survey Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-12 col-sm-12 col-12 p-5">
            <div class="card">
                <h5 class="card-header">Your Information and Your Token</h5>
                <div class="card-body">
                    .<div class="table-responsive">
                        <table class="table table-border">
                                <tr>
                                    <th>Token</th>
                                    <td>
                                        <span id="token">{{ $survey->token ?? '' }}</span>
                                        <a href="javascript:void(0)" onclick="copyToken()" title="copy" id="copyIcon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-copy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"></path>
                                                <path d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2"></path>
                                             </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $survey->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td>{{ $survey->phone ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Company Name</th>
                                    <td>{{ $survey->company_name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Designation</th>
                                    <td>{{ $survey->designation ?? '' }}</td>
                                </tr>
                        </table>
                    </div>

                </div>
                <div class="card-footer bg-white border-light text-end">
                    <a href="/" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script>
        function copyToken() {
            var range = document.createRange();
            range.selectNode(document.getElementById("token"));
            window.getSelection().removeAllRanges(); // clear current selection
            window.getSelection().addRange(range); // to select text
            document.execCommand("copy");
            window.getSelection().removeAllRanges();// to deselect
        }
    </script>
</body>

</html>
