<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/styles/style.css">
</head>

<body>
    <div class="container" id="inner-container">
        <h2>Add Point of Interest</h2>
        <div class="row">
            <div class="col-lg-4">
                <!-- Input X Position -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">X</span>
                    </div>
                    <input type="text" class="form-control" placeholder="-216" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Input Y Position -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Y</span>
                    </div>
                    <input type="text" class="form-control" placeholder="76" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Input Z Position -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Z</span>
                    </div>
                    <input type="text" class="form-control" placeholder="900" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <!-- Droppdown with worlds -->
                <select class="form-control mb-3">
                    <option>Select World</option>
                    <option>------------</option>
                    <option>Overworld</option>
                    <option>Nether</option>
                    <option>End</option>
                </select>
            </div>
            <div class="col-lg-6">
                <!-- Droppdown for locations types -->
                <select class="form-control mb-3">
                    <option>Select Location Type</option>
                    <option>------------</option>
                    <option>Home</option>
                    <option>Biom</option>
                    <option>Spawner</option>
                    <option>Temple</option>
                    <option>Misc</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <!-- Name of Location -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Name of location</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Marqus house" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Image -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                    </div>
                    <input type="file" class="form-control" placeholder="img" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Description -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                    </div>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
            </div>
        </div>
        <!--Button-->
        <div>
            <button class="btn btn-light">Add</button>
        </div>
    </div>

    <script src="scripts/main.js"></script>
</body>

</html>