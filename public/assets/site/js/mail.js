let sendMail = ()=>{
    let name = $('#form_name').val()
    let email = $('#form_email').val()
    let subject = $('#form_subject').val()
    let to = 'martinasaid2018@gmail.com'
    let message = $('#form_message').val()
    // console.log({name,email,subject,to,message})
  
    var finalMessage = {
      sender: { name, email},
      replyTo: { name, email},
      to: [{ name: 'We Group', email: to }],
      subject: subject,
      htmlContent: `<p>${message}</p>`,
      textContent: message
    };
  
    console.log(finalMessage);
  
    var key = "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";
    var request = $.ajax({
      url: "https://api.sendinblue.com/v3/smtp/email",
      method: "POST",
      beforeSend: function (xhr) {
        xhr.setRequestHeader('Accept', 'application/json');
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.setRequestHeader('api-key', key);
      },
      data: JSON.stringify(finalMessage),
      dataType: "json"
    });
  
    request.done(function (data) {
    });
  
    request.fail(function (jqXHR, textStatus) {
      console.log(jqXHR);
    });
  }