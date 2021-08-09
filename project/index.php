<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <title>
                    CRUD PHP AJAX
                </title>
                <!--    
    <script src="../libraries/materialize/jquery-3.4.0.min.js"></script>
-->
                <script crossorigin="anonymous" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" src="https://code.jquery.com/jquery-3.6.0.min.js">
                </script>
                <script src="../js/functions.js">
                </script>
                <!-- Compiled and minified CSS -->
                <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
                    <!-- Compiled and minified JavaScript -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
                    </script>
                    <script type="text/javascript">
                        document.addEventListener('DOMContentLoaded', function() {
                                        var elems = document.querySelectorAll('select');
                                        var instances = M.FormSelect.init(elems, options);
                                    });
                    </script>
    </head>



<body>
    <div class="row">
        <h3 class="blue-text">
            Register:
        </h3>
        <div class="col s3">
            <form class="col s12" id="frm_register">
                <div class="row">
                    <div class="input-field">
                        <input class="" id="first_name" name="first_name" type="text">
                            <label for="first_name">
                                First Name
                            </label>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input class="" id="last_name" name="last_name" type="text">
                            <label for="last_name">
                                Last Name
                            </label>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input class="" id="age" name="age" type="text">
                            <label for="age">
                                Age
                            </label>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field" id="options">
                        <select id="genre" name="genre">
                            <option class="left-align" id="genre" name="genree"> Choose your option
                            </option>
                            <option value="Female">
                                Female
                            </option>
                            <option value="Male">
                                Male
                            </option>
                        </select>
                        <label>
                            Genre
                        </label>
                    </div>
                </div>
                <div class="input-field">
                    <button class="btn-small blue" id="btn-save" name="button" type="submit">
                        Save
                    </button>
                </div>
            </form>
        </div>
        <div class="col s9">
            <table class="striped">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Last name
                        </th>
                        <th>
                            Age
                        </th>
                        <th>
                            Genre
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody id="table-body">
                </tbody>
            </table>
        </div>
   </div>

    <!-- Modal Structure -->
    <div class="modal" id="modal1">
        <div class="modal-content">
            <form class="col s12" id="frm_update">
                <div class="row">
                    <div class="input-field">
                        <input class="" id="nid" name="nid" type="text" disabled="true">
                            <label for="nid">
                                Id
                            </label>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input class="" id="mfirst_name" name="mfirst_name" type="text">
                            <label for="first_name">
                                First Name
                            </label>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input class="" id="mlast_name" name="mlast_name" type="text">
                            <label for="last_name">
                                Last Name
                            </label>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input class="" id="mage" name="mage" type="text">
                            <label for="age">
                                Age
                            </label>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field" id="options">
                        <select id="mgenre" name="mgenre">
                            <option class="left-align" id="genre" name="genree">
                                Choose your option
                            </option>
                            <option value="Female">
                                Female
                            </option>
                            <option value="Male">
                                Male
                            </option>
                        </select>
                        <label>
                            Genre
                        </label>
                    </div>
                </div>
                <div class="input-field row">
                    <div class="col s4">
                        <button class="btn-small blue" id="btn-update" name="button" type="submit">
                        Update
                    </button>
                    </div>
                    <div class="col s4 offset-s4">
                        <button class="btn-small red" id="btn-delete" name="delete" type="submit">
                        Delete
                    </button>
                    </div>
                </div>
                <div class="input-field">

                </div>
            </form>
        </div>
    </div>
</body>
</html>