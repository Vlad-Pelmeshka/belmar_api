document.addEventListener("DOMContentLoaded", (event) => {
    let send_data_form = document.getElementById('send_data_form');

    send_data_form.addEventListener('click', (event) => {
        event.preventDefault();

        let firstName   = document.getElementById('firstName').value;
        let lastName    = document.getElementById('lastName').value;
        let phone       = document.getElementById('phone').value;
        let email       = document.getElementById('email').value;

        if( firstName.length != 0 &&
            lastName.length != 0 &&
            phone.length != 0 &&
            email.length != 0
        ){
            $.ajax({
                url: '/server.php',
                type: 'POST',
                data: {
                    'action'        : 'setStatus',
                    'email'         : email,
                    'first_name'    : firstName,
                    'last_name'     : lastName,
                    'phone'         : phone
                },
                success: function( res ) {
                    UIkit.notification({message: res, status: 'primary'});
                }
            }); 
        }else{
            UIkit.notification({message: 'Empty some of fields', status: 'warning'});
        }
    })
});