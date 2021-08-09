$(document).ready(function() {
    fetchData();
    $('.modal').modal();
    $('#btn-save').on('click', function(event) {
        event.preventDefault();
        add_data();
    });
    $('#btn-update').on('click', function(event){
        if(valideModal()){
            updateData();
        }
        
        event.preventDefault();
    });
    $(document).on('click', '#btn-edit', function(){
        writeModal($(this));
    });
    function add_data() {
        if (valideData()) {
            let fname = $('#first_name').val();
            let lname = $('#last_name').val();
            let age = $('#age').val();
            let genre = $('#genre').val();
            let data = {
                first_name: fname,
                last_name: lname,
                age: parseInt(age),
                genre: genre
            }
            $.ajax({
                method: "POST",
                url: "../project/insert.php",
                data: data,
                success: function(e) {
                    if (e == 1) {
                        alert("Registro exitoso");
                        $('#frm_register').trigger('reset');
                    } else {
                        alert("Error en registro")
                    }
                }
            });
            fetchData();
            return false;
        }
    }

    function valideData() {
        let ok = true;
        if ($('#first_name').val() == "") {
            alert("Name is empty");
            ok = false;
        }
        if ($('#last_name').val() == "") {
            alert("Last name is empty");
            ok = false;
        }
        if ($('#age').val() == "") {
            alert("Age is empty")
            ok = false;
        }
        if ($('#genre').val() !== "Female" && $('#genre').val() !== "Male") {
            alert("Select a correct genre");
            ok = false;
        }
        return ok;
    }
    function fetchData () {
        $.ajax({
            url: 'consultdata.php',
            type: 'GET',
            success: function(response){
                
                let datalist = JSON.parse(response);
                
                let template = '';
                datalist.forEach( data => {
                    template += `
                    <tr>
                    <td> ${data.id} </td>
                    <td> ${data.name} </td>
                    <td> ${data.last_name} </td>
                    <td> ${data.age} </td>
                    <td> ${data.genre} </td>
                    <td> <button class="btn-small modal-trigger" data-target="modal1" personId="${data.id}" id="btn-edit">Edit</button> </td>
                    </tr>`
                });
               
                $('#table-body').html(template);
            }
        });

    }
    function valideModal() {
        let ok = true;
        if ($('#mfirst_name').val() == "") {
            alert("Name is empty");
            ok = false;
        }
        if ($('#mlast_name').val() == "") {
            alert("Last name is empty");
            ok = false;
        }
        if ($('#mage').val() == "") {
            alert("Age is empty")
            ok = false;
        }
        if ($('#mgenre').val() !== "Female" && $('#genre').val() !== "Male") {
            alert("Select a correct genre");
            ok = false;
        }
        return ok;
    }
    function updateData(){

    }
    function writeModal(element){
        searchData(element.attr('personId'));
    }
    function searchData(id){
        $.ajax({
            url: 'search.php',
            data: {id},
            type: 'POST',
            success: function (response){
                const user = JSON.parse(response);
                $('#nid').val(user.id);
                $('#mfirst_name').val(user.name);
                $('#mlast_name').val(user.last_name);
                $('#mage').val(user.age);
                $('#mgenre').val(user.genre);
            }
        });
    }

});