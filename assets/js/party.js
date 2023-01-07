
$('#form3').submit(function(e) {
    const mob = $('#mob').val()
    const pass = $('#pass').val()
    const add = $('#add').val()
    const age = $('#age').val()
    if (grecaptcha.getResponse() == "" || !mob || !pass || mob=='' || pass==''|| mob.length!=10 || !add || !age || add==''||age=='') {
        e.preventDefault()
        validateForm(mob,pass,add,age)

    }
})



function validateForm(mob,pass,add,age){
    const mobErr = $('.mob-error')
    const passErr = $('.pass-error')
    const addErr = $('.add-error')
    const ageErr = $('.age-error')
    const captachaErr = $('.captacha-error')

    if(!mob || mob==''){
        mobErr.text('Please enter your mobile number')
    }
    
    if(!pass || pass==''){
        passErr.text('Please enter your password')
    }

    if(pass.length<6){
        passErr.text('Password must be of length 6!')
    }

    if(mob.length != 10){
        mobErr.text('Mobile number must be 10 digits')
    }
    if(!add || add==''){
        addErr.text('Please enter your address')
    }


    // Yeslai pachi implement garna sakiyo password ko length chahiye
    // if(pass.length<6){
    //     passErr.text('Password must be length of 6')
    // }

    if(grecaptcha.getResponse() == ""){
        captachaErr.text('Please confirm that you are a human')
    }

}
