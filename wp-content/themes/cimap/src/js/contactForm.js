// let form = document.getElementById('frmContact')

// form.addEventListener('submit', function(e) {
//     e.preventDefault()

//     let formData = new FormData(form)
//     formData.append('action', 'contact')

//     fetch(, {
//         method: 'POST',
//         body: formData
//     })
//     .then((res) => {
//         console.log('res', res);
//     })
// })

(function($) {
    $('#frmContact').submit(function(event) {
        event.preventDefault()

        const endpoint = window.app_vars.ajax_url
        let form = $('#frmContact').serialize()

        let formData = new FormData()
        formData.append('action', 'contact')
        formData.append('contact', form)

        $.ajax(endpoint, {
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(res) {
                $('#success-message').show()
                $('#frmContact').trigger('reset');
                $('#success-message').fadeOut(5000)
            },
            error: function(error) {
                $('#error-message').show()
                $('#success-message').fadeOut(5000)
            }
        })
    })
})(jQuery)