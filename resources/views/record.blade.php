<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="justify-content-center">
            <div class="col-lg-4 col-xl-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('record.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Type</label>
                                <select class="form-select" name="type" id="type">
                                    <option>Type</option>
                                    <option value="income">Income</option>
                                    <option value="expense">Expense</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Category</label>
                                <input class="form-control" type="text" name="category">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Amount</label>
                                <input class="form-control" type="number" name="amount" id="amount">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Date</label>
                                <input class="form-control" type="date" name="date" id="date">
                            </div>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>